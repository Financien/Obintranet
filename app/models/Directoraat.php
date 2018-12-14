
<?php
use \Illuminate\Database\Eloquent\Model;


class Directoraat extends Model
{
    protected $table = 'ob_directoraten';
    protected $fillable = ['directoraat', 'adress', 'type', 'beschrijving', 'foto', 'email'];

    public function getAllDirectoraten()
    {
        $directoraten = Directoraat::all();

        return $directoraten;
    }

    public function getDirectoraatById($id)
    {
        $directoraat = Directoraat::where('id', $id)
            ->first();

        return $directoraat;
    }
}