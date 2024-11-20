<?php
    class CurlService
    {
        public function get(string $endpoint)
        {
            $apiKey = 'NQGWMiK9/kGzUp9Qf9TagM2d0uyUEPT6RY5Qx0Eq0zY=';
            $url = 'https://localhost:7023/public' . $endpoint;

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disable SSL verification, dev only!
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // Disable hostname verification, dev only!
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Accept-Language: en',
                'Application-Name: Laravel',
                'Api-Key: ' . $apiKey // Or other header format like 'x-api-key'
            ]);

            // 'Accept-Language' => app()->getLocale(),
            // 'Application-Name' => 'Laravel',
            // 'Api-Key' => 'NQGWMiK9/kGzUp9Qf9TagM2d0uyUEPT6RY5Qx0Eq0zY='


            $response = curl_exec($ch);
            curl_close($ch);
            
            return $response;
        }
    }
?>