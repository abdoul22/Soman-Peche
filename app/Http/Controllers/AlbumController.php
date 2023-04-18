<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $albums = Album::latest()->get();
        return view('albums.index', compact('albums'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg|max:2048'
        ]);
        $album_image = $request->all();
        if($image = $request->file('image')){
            $image_path = public_path('albums1');
            $image_extnsion = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($image_path, $image_extnsion);
            $album_image['image'] = $image_extnsion;

        }
        Album::create($album_image);
        return redirect()->route('albums.index')
        ->with('success', 'Image has been created Succesfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
