<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \App\Models\Roller;
use \App\Models\StandChange;

class Stand extends Model
{
    use HasFactory;

    protected $guarded = [];  

    public function StandChange() {
        return $this->hasMany(StandChange::class , 'stand_id' , 'id');
    }

    public function TopRoller()
    {
        return $this->hasOne(Roller::class , 'id' , 'top_roller' );
    }

    public function BottomRoller()
    {
        return $this->hasOne(Roller::class , 'id' , 'bottom_roller' );
    }
}
