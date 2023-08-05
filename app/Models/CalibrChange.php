<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \App\Models\Roller;

class CalibrChange extends Model
{
    use HasFactory;

    protected $guarded = [];  

    public function Roller() {
        return $this->belongsTo(Roller::class, 'roller_id');
    }
}
