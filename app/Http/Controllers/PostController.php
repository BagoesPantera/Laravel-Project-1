<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = \App\Post::all();
        return  view('post.index', compact('posts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts = new \App\Post;
        $this->validate($request,[
            'title' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        $posts->title = $request->title;
        $posts->description = $request->description;
        $posts->save();
        return redirect('/viewpost')->with('alert', 'Data has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = \App\Post::find($id);
        return view('post.detail', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = \App\Post::find($id);
        return view('post.edit', compact('posts'));
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
        $posts = \App\Post::find($id);
        $this->validate($request,[
            'title' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        $posts->title = $request->title;
        $posts->description = $request->description;
        $posts->save();
        return redirect('/viewpost')->with('alert', 'Data has been edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = \App\Post::find($id);
        $post->delete();
        return redirect('/viewpost')->with('alert', 'Data has been successfully deleted');
    }
}
