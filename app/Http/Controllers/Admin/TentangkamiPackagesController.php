<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TentangkamiPackagesRequest;
use App\TentangkamiPackages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TentangkamiPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = TentangkamiPackages::all();

        return view ('pages.admin.tentang-packages.index',[
        'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.tentang-packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TentangkamiPackagesRequest $request)
    {
        $data = $request->all();
        
        if ($request->hasFile('thumbnailstentang')) {
            $data['thumbnailstentang'] = time().'.'.request()->thumbnailstentang->getClientOriginalExtension();
            
            request()->thumbnailstentang->move(public_path('frontend/img/'), $data['thumbnailstentang']);
        }

        TentangkamiPackages::create($data);
        return redirect()->route('tentang-packages.index');
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
        $item = TentangkamiPackages::findOrFail($id);
        

        return view('pages.admin.tentang-packages.edit',[
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
    public function update(TentangkamiPackagesRequest $request, $id)
    {
        $data = $request->all();
        
        if ($request->hasFile('thumbnailstentang')) {
            $data['thumbnailstentang'] = time().'.'.request()->thumbnailstentang->getClientOriginalExtension();
            
            request()->thumbnailstentang->move(public_path('frontend/img/'), $data['thumbnailstentang']);
        }
        $item = TentangkamiPackages::findOrFail($id);

        $item->update($data);
        return redirect()->route('tentang-packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TentangkamiPackages::findOrFail($id);
        $item->delete();

        return redirect()->route('tentang-packages.index');
    }
}
