<?php
use \Illuminate\Database\Eloquent\Model;

class Post extends Model {
    protected $table = 'ob_post';
    protected $fillable = ['post_name', 'post_content', 'post_categorie','post_img'];

    public function getAllPosts() 
    {
        return Post::all();
    }

    public function getPostById($id) {
        return Post::where('id', $id)->first();
    }

}



?>