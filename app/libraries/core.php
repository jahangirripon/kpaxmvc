<?php
    /*
    *   app core class
    *   creates url and loads core controller
    *   url format => /controller/method/params
    */

    class Core {
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct()
        {
           // print_r($this->getUrl());

           $url = $this->getUrl();

           // look in controllers for first value
           if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {

           }
        }

        public function getUrl()
        {
            if(isset($_GET['url'])) {
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
            }
        }
    }