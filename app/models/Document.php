
<?php
use \Illuminate\Database\Eloquent\Model;


class Document extends Model
{
    protected $table = 'ob_document';
    protected $fillable = ['naam', 'beschrijving', 'type', 'path', 'image'];

    public function getAllDocumenten()
    {
        $documenten = Document::all();

        return $documenten;
    }

    public function getDocumentByType($type)
    {
        $directoraat = Document::where('type', $type)
            ->first();

        return $directoraat;
    }

    public function getAllVacatures()
    {
        $vacatures = Document::where('type', 7)->get();
        return $vacatures;
    }
    public function getAllWetten()
    {
        $wetten = Document::where('type', 9)->get();
        return $wetten;
    }

}