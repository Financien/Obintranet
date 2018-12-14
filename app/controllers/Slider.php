<?php

class Slider extends Controller
{
public function __contruct()
{
    $data = $this->SlidersModel->getAllSliders();

}
    public function index()
        {
             }

    public function sliders()
    {
        $sliders = $this->slidersModel->getAllSliders();
        $data = [
            'sliders' => $sliders,
        ];
        $this->view('slider/slider_content', $data);
    }         

}




?>