<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \App\Models\Stand;

class StandChange extends Model
{
    use HasFactory;

    protected $guarded = [];  



    public function Stand()
    {
        return $this->belongsTo(Stand::class , 'stand_id' );
    }
}
