<?php

namespace App\Http\Controllers;
use App\TentangkamiPackages;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function  index()
    {
        $items= TentangkamiPackages::all();
        return view('pages.about', compact('items')); 
    }
}
