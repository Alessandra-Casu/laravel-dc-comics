<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index(){
        return view('comics.index');
    }

    public function store() {
        //fare un ridirect
    }
}
