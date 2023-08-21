<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTagRequest;
use App\Http\Requests\Admin\UpdateTagRequest;
use App\Models\Admin\Tag;
use App\Services\Admin\TagService;
use Illuminate\Support\Str;
use Validator;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.frontend.tags.index', ['data' => Tag::with('parent')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.frontend.tags.create', ['data' => Tag::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTagRequest $request, Tag $tag, TagService $tagS)
    {
        $tagS->store($request->validated(), $tag);
        return redirect()->back()->with('message', 'Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('admin.frontend.tags.edit', ['tag' => $tag, 'data' => Tag::whereNot('id', $tag->id)->get()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagRequest $request, Tag $tag, TagService $tagS)
    {
        $tagS->update($request->validated(), $tag);
        return redirect()->back()->with('message', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->back()->with('message', 'Deleted');
    }
}
