<?php

namespace App\Http\Controllers;
use App\QuotesPackages;
use Illuminate\Http\Request;

class DetailQuotesController extends Controller
{
    public function index(QuotesPackages $quotes_package)
    {
        $item = $quotes_package;
        // dd($item);
        return view('pages.detailquotes', compact('item'));
    }
}
