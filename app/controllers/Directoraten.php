<?php
 class Directoraten extends Controller
 {
     public function __construct()
     {
     }


     public function index()
     {
     }

     public function belasting()
     {
         $this->view('directoraten/belasting');
     }

     public function financien()
     {
         $this->view('directoraten/financien');
     }

     public function plof()
     {
         $this->view('directoraten/plof');
     }
 }
