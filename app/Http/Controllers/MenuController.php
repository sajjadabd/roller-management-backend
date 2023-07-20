<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use \App\Models\Menu;


class MenuController extends Controller
{
    public function getAll() {
        return Menu::all();
    }


    public function delete(Request $request) {

        $validated = $request->validate([
            'array' => 'required',
        ]);

        error_log(implode( " , " , $validated['array'] ));

        Menu::destroy($validated['array']);

    }


    public function create(Request $request) {

        $validated = $request->validate([
            'parent' => 'required|max:25',
            'title' => 'required|max:255',
            'path' => 'required|max:255',
        ]);

        return Menu::create([
            'parent' => $validated['parent'],
            'title' => $validated['title'],
            'path' => $validated['path']
        ]);

    }
}
