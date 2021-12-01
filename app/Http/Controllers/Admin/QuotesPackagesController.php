<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\QuotesPackagesRequest;
use App\QuotesPackages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class QuotesPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = QuotesPackages::latest()->paginate(4);
        // $items = QuotesPackages::all();

        return view ('pages.admin.quotes-packages.index',[
        'items' => $items
        ]);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.quotes-packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuotesPackagesRequest $request)
    {
        $data = $request->all();
        $data['slugquotes'] = str::slug($request->titlequotes);
        
        if ($request->hasFile('thumbnailsquotes')) {
            $data['thumbnailsquotes'] = time().'.'.request()->thumbnailsquotes->getClientOriginalExtension();
            
            request()->thumbnailsquotes->move(public_path('frontend/img/'), $data['thumbnailsquotes']);
        }

        QuotesPackages::create($data);
        return redirect()->route('quotes-packages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = QuotesPackages::findOrFail($id);
        

        return view('pages.admin.quotes-packages.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuotesPackagesRequest $request, $id)
    {
        $data = $request->all();
        $data['slugquotes'] = str::slug($request->titlequotes);
        
        if ($request->hasFile('thumbnailsquotes')) {
            $data['thumbnailsquotes'] = time().'.'.request()->thumbnailsquotes->getClientOriginalExtension();
            
            request()->thumbnailsquotes->move(public_path('frontend/img/'), $data['thumbnailsquotes']);
        }
        $item = QuotesPackages::findOrFail($id);

        $item->update($data);
        return redirect()->route('quotes-packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = QuotesPackages::findOrFail($id);
        $item->delete();

        return redirect()->route('quotes-packages.index');
    }
}
