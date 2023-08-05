<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \App\Models\Line;

class Position extends Model
{
    use HasFactory;

    protected $guarded = [];  

    public function line() {
        return $this->belongsTo(Line::class, 'line_id');
    }
}
