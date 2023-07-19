<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use \App\Models\Menu;


class MenuController extends Controller
{
    public function getAll() {
        return Menu::all();
    }


    public function create(Request $request) {

        return $request;

        return Menu::create([
            'title' => 'sample title',
            'path' => 'sample path'
        ]);

    }
}
