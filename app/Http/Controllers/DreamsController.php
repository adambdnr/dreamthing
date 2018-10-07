<?php

namespace App\Http\Controllers;

use App\Dream;
use Illuminate\Http\Request;

class DreamsController extends Controller
{
    public function getDreams() {
        $dreams = Dream::all();
        return view('home')->with('dreams', $dreams);
    }
}
