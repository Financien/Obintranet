<?php
use \Illuminate\Database\Eloquent\Model;

class Sliders extends Model {
    protected $table = 'ob_post';
    protected $fillable = ['post_name', 'post_content', 'post_categorie','post_img'];

    public function getAllSliders() 
    {
        return Sliders::all();
    }

}



?>