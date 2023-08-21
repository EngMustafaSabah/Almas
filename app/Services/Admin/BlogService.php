<?php

namespace App\Services\Admin;

use App\Models\Admin\Blog;
use Illuminate\Support\Str;

class BlogService
{

    public function store(array|object $request, Blog $blog): Blog
    {
        $this->setTrans($blog, $request);
        foreach (['is_active', 'status', 'slug'] as $item) {
            if (!empty($request[$item])) {
                $blog->$item = $request[$item];
            }
        }

        $blog->slug = Str::slug($request['title_en']);
        $blog->created_by = auth()->user()->id ?? 1;
        $blog->save();
        $blog->categories()->attach([$request['category']]);
        $blog->tags()->attach($request['tags']);
        $blog->addImage($request['image']);

        return $blog;
    }

    public function update(array|object $request, Blog $blog): Blog
    {
        $this->setTrans($blog, $request);
        $this->setSomeOfAtt($blog, ['is_active', 'status'], $request);
        $blog->save();
        $blog->categories()->detach(); // This will remove all existing relationships
        $blog->tags()->detach(); // This will remove all existing relationships

        $blog->categories()->attach([$request['category']]);
        $blog->tags()->attach($request['tags']);
        if (isset($request['image']) && $request['image']) {
            $blog->addImage($request['image']);
        }

        return $blog;
    }

    private function setTrans($blog, $request)
    {
        foreach (['title_en', 'short_content_en', 'content_en'] as $item) {
            $blog->setTranslation(str_replace('_en', '', $item), 'en', $request[$item]);
        }

        foreach (['title_ar', 'content_ar', 'short_content_ar'] as $item) {
            $blog->setTranslation(str_replace('_ar', '', $item), 'ar', $request[$item]);
        }
    }

    private function setSomeOfAtt($blog, array $arr, $request)
    {
        foreach ($arr as $item) {
            if (!empty($request[$item])) {
                $blog->$item = $request[$item];
            }
        }
    }
}
