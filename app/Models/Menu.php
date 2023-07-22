<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    //protected $fillable = ['title'];

    protected $guarded = [];  


    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent');
    }

    public function children()
    {
        return $this->hasMany(Menu::class , 'parent' , 'id');
    }
}
