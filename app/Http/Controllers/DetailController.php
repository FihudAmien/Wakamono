<?php

namespace App\Http\Controllers;
use App\BeritaPackages;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(BeritaPackages $berita_package)
    {
        $item = $berita_package;

        return view('pages.detail', compact('item'));
    }
}
