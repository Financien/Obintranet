<?php
 class Personeelzaken extends Controller
 {
     public function __construct()
     {
     }

     public function index()
     {
     }

     public function personeelswet()
     {
         $this->view('personeelzaken/personeelswet');
     }

     public function studie()
     {
         $this->view('personeelzaken/studie');
     }

     public function algemeneregels()
     {
         $this->view('personeelzaken/algemeneregels');
     }

    }