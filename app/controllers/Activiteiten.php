<?php
class Activiteiten extends Controller
{
    public function __construct()
    {
        $this->werknemerModel = $this->model('Werknemer');
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
        $jubilarissen = $this->werknemerModel->getAllJubilarissen();
        $jubilarisArray = [5, 10, 15, 20, 25, 30, 35, 40, 45];

        foreach ($jubilarissen as $jubilaris) {
            $aantalDienstJaren = date('Y') - date('Y', strtotime($jubilaris->dienstjaar));
            $jubilaris->dienstjaar = $aantalDienstJaren;

        };

        $data = [
            'jubilarissen' => $jubilarissen,
            'jaren' => $jubilarisArray
        ];

        $this->view('activiteiten/jubilarisen', $data);
    }
    public function gepensioneerden()
    {
        $gepensioneerden = $this->werknemerModel->getAllgepensioeneerden();
        $data = [
            'gepensioeneerden' => $gepensioneerden,
        ];
        $this->view('activiteiten/gepensioneerden', $data);
    }

}
