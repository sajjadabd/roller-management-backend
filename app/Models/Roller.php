<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \App\Models\Calibr;
use \App\Models\CalibrChange;

class Roller extends Model
{
    use HasFactory;

    protected $guarded = [];  

    public function CalibreChange() {
        return $this->hasMany(CalibrChange::class , 'roller_id' , 'id' );
    }

    public function Calibres() {
        return $this->hasMany(Calibr::class , 'roller_id' , 'id' );
    }
}
