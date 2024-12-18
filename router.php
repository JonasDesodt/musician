<?php
    class Router
    {
        public function handle(string $uri)
        {
            $segments = explode('/', trim($uri, '/'));
        
            $route = !empty($segments[0]) ? $segments[0] : 'home';

            switch ($route) {            
                case 'home':
                    return $this->handle_home($uri);

                case 'agenda':
                    return $this->handle_agenda($uri);
       
                default:
                    return $this->handle_404();
            }
        }

        private function handle_home(string $uri)
        {
            require 'controllers/home_controller.php';
            require 'services/curl_service.php';

            switch (true) {
                case $uri === '':
                case $uri === '/': 
                case $uri === '/home':
                    return (new HomeController(new CurlService))->index();   

                default:
                    return $this->handle_404();   
            }  
        }

        private function handle_agenda(string $uri)
        {
            require 'controllers/concert_controller.php';

            switch (true) {
                case $uri === '/agenda':
                    return (new ConcertController)->index();  

                case preg_match('#^/agenda/(\d+)$#', $uri, $matches): 
                    $id = $matches[1];

                    return (new ConcertController)->detail($id);

                default: 
                    return $this->handle_404();       
            }                 
        }

        private function handle_404(){
            $view_path = 'views/error/404.php';

            $title = 'Page not found';

            return compact('view_path', 'title');
        }
    }
?>