<?php
    class ConcertController
    {
        //GET
        public function index()
        {
            $view_path = 'views/concert/index.php';

            $data = [1, 2, 3, 4, 5];
        
            $title = 'Agenda';

            return compact('view_path', 'data', 'title');
        }
        
        //GET
        public function detail(int $id)
        {
            $view_path = 'views/concert/detail.php';

            $data = $id;
        
            $title = $id;

            return compact('view_path', 'data', 'title');
        }
    }
?>