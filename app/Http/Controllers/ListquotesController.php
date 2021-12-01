<?php

namespace App\Http\Controllers;
use App\QuotesPackages;
use Illuminate\Http\Request;

class ListquotesController extends Controller
{
    public function index(Request $request)
    {
        $items = QuotesPackages::latest()->paginate(6);;

        return view('pages.listquotes', compact('items'));
    }
}
