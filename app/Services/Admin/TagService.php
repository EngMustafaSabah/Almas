<?php

namespace App\Services\Admin;

use App\Models\Admin\Tag;
use Illuminate\Support\Str;

class TagService
{

    public function store(array|object $request, Tag $tag): Tag
    {
        $this->setTrans($tag, $request);
        $this->setSomeOfAtt($tag, ['is_active', 'status', 'parent_id', 'slug'], $request);
        $tag->slug = Str::slug($request['tag_name_en']);
        $tag->save();

        return $tag;
    }

    public function update(array|object $request, Tag $tag): Tag
    {
        $this->setTrans($tag, $request);
        $this->setSomeOfAtt($tag, ['is_active', 'status'], $request);
        $tag->parent_id = $request['parent_id'];
        $tag->save();

        return $tag;
    }

    private function setTrans($tag, $request)
    {
        foreach (['tag_name_en', 'description_en', 'short_description_en'] as $item) {
            $tag->setTranslation(str_replace('_en', '', $item), 'en', $request[$item]);
        }

        foreach (['tag_name_ar', 'description_ar', 'short_description_ar'] as $item) {
            $tag->setTranslation(str_replace('_ar', '', $item), 'ar', $request[$item]);
        }
    }

    private function setSomeOfAtt($tag, array $arr, $request)
    {
        foreach ($arr as $item) {
            if (!empty($request[$item])) {
                $tag->$item = $request[$item];
            }
        }
    }
}
