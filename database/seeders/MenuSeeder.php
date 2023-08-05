<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    /*
    $table->id();
    $table->integer('key')->nullable();
    $table->unsignedBigInteger('parent')->nullable();
    $table->foreign('parent')->references('id')->on('menus')->onDelete('cascade');
    $table->string('title');
    $table->string('path')->nullable();
    $table->timestamps();
    */

    public function run(): void
    {
        //
        Menu::create([
            'key' => 1 ,
            'parent' => null ,
            'title' => 'ایجاد غلطک' ,
            'path' => ''
        ]);

        Menu::create([
            'key' => 2 ,
            'parent' => 1 ,
            'title' => 'سکشن' ,
            'path' => '/createroll/section'
        ]);

        Menu::create([
            'key' => 3 ,
            'parent' => 1 ,
            'title' => 'بارمیل' ,
            'path' => '/createroll/barmill'
        ]);



        Menu::create([
          'key' => 4 ,
          'parent' => null ,
          'title' => 'ایجاد استند' ,
          'path' => ''
      ]);

      Menu::create([
          'key' => 5 ,
          'parent' => 4 ,
          'title' => 'سکشن' ,
          'path' => '/createstand/section'
      ]);

      Menu::create([
          'key' => 6 ,
          'parent' => 4 ,
          'title' => 'بارمیل' ,
          'path' => '/createstand/barmill'
      ]);
    }
}
