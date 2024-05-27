<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;
    protected $primaryKey = 'codeDep';
    protected $table = 'departements';
    protected $keyType = 'string';
    protected $fillable = ['codeDep', 'nomDep'];
    public $incrementing = false;

    public function employes(){
        return $this->hasMany(Employe::class, 'codeDep', 'codeDep');
    }
}
