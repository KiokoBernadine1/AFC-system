<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        return view('pages.index');
    }

    public function accounts()
    {
        return view('pages.history');
    }

}
