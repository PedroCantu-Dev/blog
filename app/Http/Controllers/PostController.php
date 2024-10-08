<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::where('status', 'published')->latest('id')->paginate(8);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        $similars = Post::where('category_id', $post->category_id)
            ->where('status', 'published')
            ->where('id', '!=', $post->id)
            ->latest('id')
            ->take(4)
            ->get();


        return view('posts.show', compact('post', 'similars'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

    public function category(Category $category){
        $posts = Post::where('category_id', $category->id)
            ->where('status', 'published')
            ->latest('id')
            ->paginate(6);
        return view('posts.category', compact('posts', 'category'));
    }


    public function tag(Category $tag){
        $posts = $tag->posts()->where('status', 'published')->latest('id')->paginate(6);
        return view('posts.tag', compact('posts', 'tag'));
    }

}
