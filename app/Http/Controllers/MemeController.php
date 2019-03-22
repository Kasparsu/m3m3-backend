<?php

namespace App\Http\Controllers;

use App\Image;
use App\Meme;
use App\User;
use Illuminate\Http\Request;

class MemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Meme::with(['image', 'user', 'tags'])->orderBy('created_at', 'desc')->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find(1);
        $meme = new Meme(['title' => $request->post('title')]);
        $meme->user()->associate($user);
        $meme->save();
        $path = $request->file('image')->store('public/images');
        $image = new Image(['path' => $path, 'source' => 'upload', 'hash' => '']);
        $meme->image()->save($image);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Meme::find($id)->with('image')->get();
    }

}
