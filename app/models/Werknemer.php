
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
        $werknemers = Werknemer::join('ob_afdelingen', 'ob_werknemers.afdeling_id', '=', 'ob_afdelingen.id')
            ->join('ob_gender', 'ob_werknemers.gender_id', '=', 'ob_gender.id')
            ->select(
                'ob_werknemers.naam',
                'ob_werknemers.voornaam',
                'ob_werknemers.leeftijd',
                'ob_werknemers.telefoon',
                'ob_werknemers.email',
                'ob_werknemers.functie',
                'ob_afdelingen.naam_afdeling',
                'ob_gender.gender'
            )
            ->where('ob_werknemers.directoraat_id', $id)
            ->get();
        return $werknemers;
    }

    public function getAllgepensioeneerden()
    {
        $gepensioeneerden = Werknemer::join('ob_afdelingen', 'ob_werknemers.afdeling_id', '=', 'ob_afdelingen.id')
            ->join('ob_gender', 'ob_werknemers.gender_id', '=', 'ob_gender.id')
            ->select(
                'ob_afdelingen.naam_afdeling',
                'ob_werknemers.functie',
                'ob_werknemers.naam',
                'ob_werknemers.voornaam',
                'ob_gender.gender',
                'ob_werknemers.functie',
                'ob_werknemers.email',
                // 'ob_werknemers.telefoon',
                // 'ob_werknemers.leeftijd',
                'ob_werknemers.pensiondatum'
            )
            ->where('ob_werknemers.gepensioneerd', 1)
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
