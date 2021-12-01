<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = About::first();

        return view('about.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $key => $img) {
                $name = rand().$key.'.'.$img->getClientOriginalExtension();
                $img->move(public_path('frontend/img'), $name);
                $data[] = $name;
            }
        }
        $input['image'] = json_encode($data);

        About::create($input);

        return redirect()->route('about.index');
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
        $data = About::find($id);

        return view('about.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about = About::find($id);
        $input = $request->all();

        $old_image = $about->image;
        if($request->hasFile('image')) {
            if($old_image != null) {
                foreach (json_decode($old_image) as $key => $img) {
                    File::delete('frontend/img/'.$img);
                }
            }
            foreach ($request->file('image') as $key => $img) {
                $name = rand().$key.'.'.$img->getClientOriginalExtension();
                $img->move(public_path('frontend/img'), $name);
                $data[] = $name;
            }
            $input['image'] = json_encode($data);
        } else {
            unset($input['image']);
        }

        $about->update($input);

        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about - About::find($id);
        if($about->image != null){
            foreach (json_decode($about->image) as $key => $img) {
                File::delete('frontend/img/'.$img);
            }
        }

        $about->delete();

        return redirect()->route('about.index');
    }
}
