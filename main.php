<?php 
    class main     
    {
        public function run($layout_path)    
        {
            // https://www.php.net/manual/en/book.curl.php

            require('router.php');

            $context = (new Router)->delegate($_SERVER['REQUEST_URI']);           

            $this->renderLayout($layout_path, $context);
        }

        private function renderLayout(string $layout_path, array $context)
        {
            extract($context);

            require($layout_path); 
        }
    }
?>