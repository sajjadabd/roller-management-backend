<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \App\Models\Stand;

class RollerChange extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Roller() {
        return $this->belongsTo(Stand::class, 'stand_id');
    }  
}
