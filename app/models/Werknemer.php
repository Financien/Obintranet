
<?php
use \Illuminate\Database\Eloquent\Model;


class Werknemer extends Model
{
    protected $table = 'ob_werknemers';
    protected $fillable = ['naam', 'voornaam', 'leeftijd', 'telefoon', 'email', 'directoraat', 'afdeling_id', 'functie', 'dienstjaar', 'gepensioneerd', 'pensiondatum', 'profielfoto', 'gender_id'];

    public function getAllWerknemers()
    {
        $directoraten = Werknemer::all();

        return $directoraten;
    }

    public function getWerknemersByDirectoraatId($id)
    {
        $werknemers = Werknemer::where('directoraat', $id)
            ->get();

        return $werknemers;
    }
}