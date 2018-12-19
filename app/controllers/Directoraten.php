<?php
class Directoraten extends Controller
{   
    public function __construct()
    {
        $this->directoraatModel = $this->model('Directoraat');
        $this->werknemerModel = $this->model('Werknemer');
        $this->contactenModel = $this->model('Contact');
    }


    public function directoraat($id)
    {
        $directoraat = $this->directoraatModel->getDirectoraatById($id);
        $werknemers = $this->werknemerModel->getWerknemersByDirectoraatId($id);
        $contacten = $this->contactenModel->getAllContactsById($id);
        $data = [
            'directoraat' => $directoraat,
            'werknemers' => $werknemers,
            'contacten' => $contacten
        ];
        $this->view('directoraten/index', $data);
    }
}
