<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BeritaPackagesRequest;
use App\BeritaPackages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = BeritaPackages::latest()->paginate(4);
        

        return view ('pages.admin.berita-packages.index',[
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
        return view('pages.admin.berita-packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BeritaPackagesRequest $request)
    {
        $data = $request->all();
        $data['slug'] = str::slug($request->title);
        
        if ($request->hasFile('thumbnails')) {
            $data['thumbnails'] = time().'.'.request()->thumbnails->getClientOriginalExtension();
            
            request()->thumbnails->move(public_path('frontend/img/'), $data['thumbnails']);
        }

        BeritaPackages::create($data);
        return redirect()->route('berita-packages.index');
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
        $item = BeritaPackages::findOrFail($id);
        

        return view('pages.admin.berita-packages.edit',[
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
    public function update(BeritaPackagesRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = str::slug($request->title);
        
        if ($request->hasFile('thumbnails')) {
            $data['thumbnails'] = time().'.'.request()->thumbnails->getClientOriginalExtension();
            
            request()->thumbnails->move(public_path('frontend/img/'), $data['thumbnails']);
        }
        $item = BeritaPackages::findOrFail($id);

        $item->update($data);
        return redirect()->route('berita-packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = BeritaPackages::findOrFail($id);
        $item->delete();

        return redirect()->route('berita-packages.index');
    }
}
