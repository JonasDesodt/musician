<?php
    class HomeController
    {
        //GET
        public function index()
        {
            $view_path = 'views/home/index.php';

            $data = 'Data from home controller';
        
            $title = 'Home';

            return compact('view_path', 'data', 'title');
        }     
    }
?>