<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\music;
use DB;
use Auth;
use Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validation;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class musicController extends Controller
{
    //
    public function myMusic(){
        $musics = music::all();
        return view('index')->with(compact('musics'));
    }
}
