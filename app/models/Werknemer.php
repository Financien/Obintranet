
<?php
use \Illuminate\Database\Eloquent\Model;


class Werknemer extends Model
{
    protected $table = 'ob_werknemers';
    protected $fillable = ['naam', 'voornaam', 'leeftijd', 'telefoon', 'email', 'directoraat', 'afdeling_id', 'functie', 'dienstjaar', 'gepensioneerd', 'pensiondatum', 'profielfoto', 'gender_id'];

    public function getAllWerknemers()
    {
        $werknemers = Werknemer::all();

        return $werknemers;
    }

    public function getWerknemersByDirectoraatId($id)
    {
        $werknemers = Werknemer::where('directoraat', $id)
            ->get();
        return $werknemers;
    }

    public function getAllgepensioeneerden()
    {
        $gepensioeneerden = Werknemer::where('gepensioneerd', 1)
            ->get();
        return $gepensioeneerden;
    }
    public function getAllJubilarissen()
    {
        $jubilarissen = Werknemer::where('gepensioneerd', 0)
            ->get();
        return $jubilarissen;
    }

}
