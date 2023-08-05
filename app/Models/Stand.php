<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \App\Models\Roller;

class Stand extends Model
{
    use HasFactory;

    protected $guarded = [];  

    public function TopRoller()
    {
        return $this->hasOne(Roller::class , 'id' , 'top_roller' );
    }

    public function BottomRoller()
    {
        return $this->hasOne(Roller::class , 'id' , 'bottom_roller' );
    }
}
