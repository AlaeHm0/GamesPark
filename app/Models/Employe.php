<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $primaryKey = 'codeEmp';
    protected $table = 'employes';
    public $incrementing = false;
    protected $fillable = ['codeEmp', 'nomEmp', 'prenomEmp', 'dateEmbauche', 'dateNaissance', 'poste', 'codeDep'];
    protected $casts = ['dateEmbauche' => 'datetime', 'dateNaissance' => 'datetime'];

    public function departement(){
        return $this->belongsTo(Departement::class, 'codeDep');
    }
    public function materiels(){
        return $this->belongsToMany(Materiel::class, 'affectations', 'codeEmp', 'codeMat')->withPivot('dateDebutAffectation', 'dateFinAffectation');
    }
    public function interventions(){
        return $this->hasMany(Intervention::class, 'codeInter');
    }
}
