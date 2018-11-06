<?php

/*
 * App core class
 * Creates URL and loads controllers
 * URL FORMAT = /controller/method/params
 */


 class Core {
     protected $currentController = 'Pages';
     protected $currentMethod = 'index';
     protected $params = [];

     public function __construct(){
         //print_r($this->getUrl());

         $urlArray = $this->getUrl();

         //check in controllers for first value
         if(file_exists('../app/controllers/' . ucwords($urlArray[0] . '.php'))){
             //if existis set as currentController
             $this->currentController = ucwords($urlArray[0]);

             //unset 0 index
             unset($urlArray[0]);
         }

         //require controller Class
         require_once '../app/controllers/' . $this->currentController . '.php';


         //instantiate controller class 
        $this->currentController = new $this->currentController; //bv Pages = new Pages


        //check for second part of url bv pages/about
        if(isset($urlArray[1])){
            //check to see if method exists in controller
            if(method_exists($this->currentController, $urlArray[1])){
                $this->currentMethod = $urlArray[1];

                //unset 1 index
             unset($urlArray[1]);
            }
        }


        //get Paramaters
        $this->params = $urlArray ? array_values($urlArray) : [];

        //call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
     }


     public function getUrl(){
          if (isset($_GET['url'])) {
              $url = rtrim($_GET['url'], '/');
              $url = filter_var($url, FILTER_SANITIZE_URL);
              $url = explode('/', $url);

              return $url;
          }
     }
 }
 
 
 ?>