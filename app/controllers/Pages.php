<?php
class Pages extends Controller
{
    public function __construct()
    {
        $this->DocumentModel = $this->model('Document');
        $this->PostModel = $this->model('Post');
    }


    public function index()
    {
        $posts = $this->PostModel->getAllPosts();
        $data = [
            'posts' => $posts
        ];
        $this->view('pages/index', $data);
    }

   
    public function about()
    {
        
        $this->view('pages/about');
    }

    public function contact()
    {
        
        $this->view('pages/contact');
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

    public function post($id = null) {
        if(empty($id)) header('Location: '.URLROOT);
        $post = $this->PostModel->getPostById($id);
        
        $data = [
            'post' => $post
        ];
        if(@count($data['post']) != 1) header('Location: '.URLROOT);
        $this->view('pages/post', $data['post']);
    }
}
