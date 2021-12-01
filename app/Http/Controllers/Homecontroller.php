<?php

namespace App\Http\Controllers;

use App\BeritaPackages;
use App\QuotesPackages;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $berita = BeritaPackages::latest()->take(5)->get();
        $last1_berita = BeritaPackages::find($berita[0]->id);
        $last4_berita = collect([$berita[1],$berita[2],$berita[3],$berita[4]]);

        $quotes = QuotesPackages::latest()->take(7)->get();
        $first_quote = QuotesPackages::find($quotes[0]->id);
        $second_quote = QuotesPackages::find($quotes[1]->id);
        $third_quote = QuotesPackages::find($quotes[2]->id);
        $last4_quote = collect([$quotes[3],$quotes[4], $quotes[5], $quotes[6]]);
        // dd($quotes);
        return view('pages.home', compact('last1_berita', 'last4_berita', 'first_quote', 'second_quote', 'third_quote', 'last4_quote'));
    }
}
