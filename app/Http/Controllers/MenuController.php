<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use \App\Models\Menu;


class MenuController extends Controller
{
    public function getAll() {
        return Menu::with('children')->get();
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

        if($validated['parent'] == 0) {
            $validated['parent'] = null ;
        }

        $menu = Menu::create([
            'parent' => $validated['parent'],
            'title' => $validated['title'],
            'path' => $validated['path']
        ]);

        $menu->key = $menu->id;
        $menu->save();

        return $menu;

    }
}
