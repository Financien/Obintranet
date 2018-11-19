<?php
class Personeelzaken extends Controller
{
    public function __construct()
    {
        $this->regelModel = $this->model('Regel');
        $this->DocumentModel = $this->model('Document');
    }

    public function index()
    {
    }

    public function personeelswet()
    {
        $this->view('personeelzaken/personeelswet');
    }

    public function Document($type)
    {
        $document = $this->DocumentModel->getDocumentByType($type);
        $data = [
            'document' => $document,
        ];
        $this->view('personeelzaken/document', $data);
    }

    public function algemeneregels()
    {
        $algemeneRegels = $this->regelModel->getAllAlgemeneRegels();
        $data = [
            'regels' => $algemeneRegels,
        ];
        $this->view('personeelzaken/algemeneregels', $data);
    }

}