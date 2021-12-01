<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailAboutController extends Controller
{
    public function index()
    {
        $about = About::first();

        return view('detail.about', compact('about'));
    }
}
