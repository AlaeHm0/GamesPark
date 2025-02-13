<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technicien extends Model
{
    use HasFactory;
    protected $primaryKey = 'codeTech';
    protected $table = 'techniciens';
    public $incrementing = false;
    protected $fillable = ['codeTech', 'nomTech', 'tel'];

    public function interventions(){
        return $this->hasMany(Intervention::class, 'codeInter');
    }
}
