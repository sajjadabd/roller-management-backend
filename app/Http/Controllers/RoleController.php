<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use \App\Models\Role;

class RoleController extends Controller
{
    //

    public function getAll() {
        return Role::all();
    }


    public function delete(Request $request) {

        $validated = $request->validate([
            'array' => 'required',
        ]);

        error_log(implode( " , " , $validated['array'] ));

        Role::destroy($validated['array']);

    }


    public function create(Request $request) {

        $validated = $request->validate([
            'title' => 'required|max:255',
        ]);


        $role = Role::create([
            'title' => $validated['title'],
        ]);

        $role->key = $role->id;
        $role->save();

        return $role;

    }


}
