<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    use HasFactory;
    protected $primaryKey = 'codeInter';
    protected $table = 'interventions';
    public $incrementing = false;
    protected $fillable = ['codeInter', 'dateInter', 'codeEmp', 'detailsInter', 'codeTech', 'syntheseReparation', 'dateFinIntervention'];
    protected $casts = ['dateInter' => 'datetime', 'dateFinIntervention' => 'datetime'];

    public function employe(){
        return $this->belongsTo(Employe::class, 'codeEmp');
    }
    public function technicien(){
        return $this->belongsTo(Technicien::class, 'codeTech');
    }

}
