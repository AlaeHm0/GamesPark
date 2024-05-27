<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    use HasFactory;
    protected $primaryKey = ['codeEmp', 'codeMat', 'dateDebutAffectation'];
    protected $table = 'affectations';
    public $incrementing = false;
    protected $fillable = ['codeEmp', 'codeMat', 'dateDebutAffectation', 'dateFinAffectation'];
    protected $casts = ['dateDebutAffectation' => 'datetime', 'dateFinAffectation' => 'datetime'];

    public function employe(){
        return $this->belongsTo(Employe::class, 'codeEmp', 'codeEmp');
    }
    public function materiel(){
        return $this->belongsTo(Materiel::class, 'codeMat', 'codeMat');
    }
}
