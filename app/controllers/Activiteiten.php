<?php
 class Activiteiten extends Controller
 {
     public function __construct()
     {
     }


     public function index()
     {
     }

     public function huba()
     {
         $this->view('activiteiten/huba');
     }

     public function evenementen()
     {
         $this->view('activiteiten/evenementen');
     }
     public function jubilarisen()
     {
         $this->view('activiteiten/jubilarisen');
     }
 }
