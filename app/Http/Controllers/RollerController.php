<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Roller;

class RollerController extends Controller
{
    //

    public function getAll() {
        return Roller::all();
    }


    public function delete(Request $request) {

        $validated = $request->validate([
            'array' => 'required',
        ]);

        error_log(implode( " , " , $validated['array'] ));

        Roller::destroy($validated['array']);

    }


    public function create(Request $request) {

        // rollType ,
        // rollModel ,
        // rollCode ,
        // rollPosition ,
        // rollGender ,
        // rollDiameter ,
        // rollWidth ,
        // numberOfCalibres ,
        // calibreWidth ,

        $validated = $request->validate([
            
            'rollType' => 'required|max:225',
            'rollModel' => 'required|max:225',
            'rollCode' => 'required|max:225',
            'rollPosition' => 'required|max:225',
            'rollGender' => 'required|max:225',
            'rollDiameter' => 'required|max:225',
            'rollWidth' => 'required|max:225',

            'numberOfCalibres' => 'required|max:225',
            'calibreWidth' => 'required|max:225',

        ]);

        if(array_key_exists('parent',$validated)) {
            if($validated['parent'] == 0) {
                $validated['parent'] = null ;
            }
        } 

        $roller = Menu::create([
            'roller_code' => $validated['rollCode'] ?? null ,
            'gender' => $validated['rollGender'] ?? null ,
            'type' => $validated['rollType'] ,
            'position' => $validated['rollPosition'] ,
            'diameter' => $validated['rollDiameter'] ,
            'width' => $validated['rollWidth'] ,
        ]);

        $roller->key = $roller->id;
        $roller->save();

        return $roller;

    }
}
