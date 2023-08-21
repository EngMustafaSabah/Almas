<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreBlogRequest;
use App\Http\Requests\Admin\UpdateBlogRequest;
use App\Models\Admin\Blog;
use App\Services\Admin\BlogService;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Tag;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.frontend.blog.index', ['data' => Blog::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.frontend.blog.create', [
            'categories' => Category::get(),
            'tags' => Tag::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request, Blog $blog, BlogService $blogS)
    {
        $blogS->store($request->validated(), $blog);
        return redirect()->back()->with('message', 'Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.frontend.blog.edit', [
            'blog' => $blog,
            'categories' => Category::get(),
            'tags' => Tag::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog, BlogService $blogS)
    {
        $blogS->update($request->validated(), $blog);
        return redirect()->back()->with('message', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->back()->with('message', 'Deleted');
    }
}
