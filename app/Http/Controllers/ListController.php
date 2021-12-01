<?php

namespace App\Http\Controllers;
use App\BeritaPackages;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index(Request $request)
    {
        $items = BeritaPackages::latest()->paginate(6);;

        return view('pages.list', compact('items'));
    }
}
