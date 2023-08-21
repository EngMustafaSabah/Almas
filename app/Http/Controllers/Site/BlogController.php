<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\Site\StoreBlogRequest;
use App\Http\Requests\Site\UpdateBlogRequest;
use App\Models\Site\Blog;
use App\Models\Admin\Blog as ABlog;
use App\Http\Controllers\Controller;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'site.pages.blog',
            ['blogs' => ABlog::with(['categories'])->paginate(12)]
        );
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
    public function store(StoreBlogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ABlog $blog)
    {
        return view(
            'site.pages.single-blog',
            [
                'blog' => $blog->load('categories')->load('tags'),
                'recent' => ABlog::orderBy('created_at', 'desc')->take(3)->get()
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
