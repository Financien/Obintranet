<?php
class Pages extends Controller
{
    public function __construct()
    {

    }


    public function index()
    {

        $this->view('pages/index');
    }

    public function about()
    {
        $data = ['title' => 'About us'];
        $this->view('pages/about', $data);
    }

    public function contact()
    {
        $this->view('pages/contact');
    }
}
