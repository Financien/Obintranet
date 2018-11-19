<?php
class ICT extends Controller
{
    public function __construct()
    {
        $this->regelModel = $this->model('Regel');
    }

    public function index()
    {
    }


    public function ictregels()
    {
        $ictRegels = $this->regelModel->getAllIctRegels();
        $data = [
            'regels' => $ictRegels,
        ];
        $this->view('ICT/ictregels', $data);
    }
}
