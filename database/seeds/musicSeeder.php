<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class musicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('musics')->insert([[
           'nama'=>'Reggae',
           'link'=>'audio/regg.mp3'
       ],[
        'nama'=>'Pop',
        'link'=>'audio/tanpatresnomu.mp3'
    ]]); //
    }
}
