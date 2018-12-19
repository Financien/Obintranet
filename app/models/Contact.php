<?php
use \Illuminate\Database\Eloquent\Model;

class Contact extends Model {
    protected $table = 'ob_contacten';
    protected $fillable = [
        'ob_directoraat_id', 'adress', 'telefoon', 'email'
    ];

    public function getAllContacts() {
        return Contact::all();
    }

    public function getAllContactsById($id) {
        return Contact::where('ob_directoraat_id', $id)->get();
    }
}