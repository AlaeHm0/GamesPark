<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;
    protected $primaryKey = 'codeMat';
    protected $table = 'materiels';
    public $incrementing = false;
    protected $fillable = ['codeMat', 'marque', 'categorie', 'dateDebutUtilisation'];
    protected $casts = ['dateDebutUtilisation' => 'datetime'];

    public function employes(){
        return $this->belongsToMany(Employe::class, 'affectations', 'codeEmp', 'codeMat')->withPivot('dateDebutAffectation', 'dateFinAffectation');
    }

}
