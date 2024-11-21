<?php
    class HomeController
    {  
        private $curlService;

        function __construct(CurlService $curlService) 
        {
            $this->curlService = $curlService;
        }
          
        function __destruct() {
            //pass
        }        

        //GET
        public function index()
        {
            $result = $this->curlService->get('/Agenda?Page=1&PageSize=12');

            var_dump($result);

            $view_path = 'views/home/index.php';

            $data = 'Data from home controller';
        
            $title = 'Home';

            return compact('view_path', 'data', 'title');
        }     
    }
?>