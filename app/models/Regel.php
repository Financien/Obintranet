
<?php
use \Illuminate\Database\Eloquent\Model;


class Regel extends Model
{
    protected $table = 'ob_regels';
    protected $fillable = ['type', 'naam', 'beschrijving'];

    public function getAllRegels()
    {
        $regels = Regel::all();

        return $regels;
    }

    public function getAllIctRegels()
    {
        $regels = Regel::where('type', 1)
            ->get();

        return $regels;
    }
    public function getAllAlgemeneRegels()
    {
        $regels = Regel::where('type', 0)
            ->get();

        return $regels;
    }
}