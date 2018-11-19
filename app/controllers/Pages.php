<?php
class Pages extends Controller
{
    public function __construct()
    {
        $this->DocumentModel = $this->model('Document');
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

    public function vacatures()
    {
        $vacatures = $this->DocumentModel->getAllVacatures();
        $data = [
            'vacatures' => $vacatures
        ];
        $this->view('pages/vacatures', $data);
    }

    public function personeelbond()
    {

        $this->view('pages/personeelbond');
    }

    public function wetten()
    {
        $wetten = $this->DocumentModel->getAllWetten();
        $data = [
            'wetten' => $wetten
        ];
        $this->view('pages/wetten', $data);
    }
}
