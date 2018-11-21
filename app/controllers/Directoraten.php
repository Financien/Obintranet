<?php
class Directoraten extends Controller
{
    public function __construct()
    {
        $this->directoraatModel = $this->model('Directoraat');
        $this->werknemerModel = $this->model('Werknemer');
    }


    public function directoraat($id)
    {
        $directoraat = $this->directoraatModel->getDirectoraatById($id);
        $werknemers = $this->werknemerModel->getWerknemersByDirectoraatId($id);
        $data = [
            'directoraat' => $directoraat,
            'werknemers' => $werknemers
        ];
        $this->view('directoraten/index', $data);
    }
}
