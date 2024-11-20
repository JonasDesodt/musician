<?php
    class HomeController
    {
        //GET
        public function index()
        {
            $apiKey = 'NQGWMiK9/kGzUp9Qf9TagM2d0uyUEPT6RY5Qx0Eq0zY=';
            $url = 'https://localhost:7023/public/Agenda?Page=1&PageSize=12';

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disable SSL verification, dev only!
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // Disable hostname verification, dev only!
            
            $response = curl_exec($ch);
            curl_close($ch);
            
            echo $response;




            $view_path = 'views/home/index.php';

            $data = 'Data from home controller';
        
            $title = 'Home';

            return compact('view_path', 'data', 'title');
        }     
    }
?>