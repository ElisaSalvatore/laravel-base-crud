<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function comics() {
        $comics = Comic::all();
    
        return view("comics");
      }
}
