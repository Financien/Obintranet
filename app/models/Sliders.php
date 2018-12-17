<?php
use \Illuminate\Database\Eloquent\Model;

class Sliders extends models{
    protected $table = 'ob_post';
    protected $fillable = ['post_name', 'post_discription', 'post_content', 'post_categorie','post_img'];

    public function getAllSliders() 
    {
        $sliders = Sliders :: All();
        return $sliders;
    }

}



?>