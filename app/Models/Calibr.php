<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \App\Models\Roller;

use \App\Models\CalibrTarash;

class Calibr extends Model
{
    use HasFactory;

    protected $guarded = [];  

    public function CalibrTarash() {
        return $this->hasMany(CalibrTarash::class , 'calibre_id' , 'id' );
    }


    public function Roller() {
        return $this->belongsTo(Roller::class, 'roller_id');
    }
}
