<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \App\Models\Calibr;

class CalibrTarash extends Model
{
    use HasFactory;

    protected $guarded = [];  

    public function Calibre() {
        return $this->belongsTo(Calibr::class, 'calibre_id');
    }
}
