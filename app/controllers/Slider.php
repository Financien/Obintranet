<?php

class Slider extends Controller
{
public function __contruct()
{
    $this->SlidersModel->getAllSliders();

}
    public function index()
        {
             }

    public function sliders()
    {
        $sliders = $this->SlidersModel->getAllSliders();
        $data = [
            'sliders' => $sliders,
        ];
        $this->view('pages/slider', $data);
    }         

}




?>