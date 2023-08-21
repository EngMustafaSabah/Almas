<?php

namespace App\Services\Admin;

use App\Models\Admin\Category;
use Illuminate\Support\Str;

class CategoryService
{

    public function store(array|object $request, Category $category): Category
    {
        $this->setTrans($category, $request);
        $this->setSomeOfAtt($category, ['is_active', 'status', 'parent_id', 'slug'], $request);
        $category->slug = Str::slug($request['category_name_en']);
        $category->save();

        return $category;
    }

    public function update(array|object $request, Category $category): Category
    {
        $this->setTrans($category, $request);
        $this->setSomeOfAtt($category, ['is_active', 'status'], $request);
        $category->parent_id = $request['parent_id'];
        $category->save();

        return $category;
    }

    private function setTrans($category, $request)
    {
        foreach (['category_name_en', 'description_en', 'short_description_en'] as $item) {
            $category->setTranslation(str_replace('_en', '', $item), 'en', $request[$item]);
        }

        foreach (['category_name_ar', 'description_ar', 'short_description_ar'] as $item) {
            $category->setTranslation(str_replace('_ar', '', $item), 'ar', $request[$item]);
        }
    }

    private function setSomeOfAtt($category, array $arr, $request)
    {
        foreach ($arr as $item) {
            if (!empty($request[$item])) {
                $category->$item = $request[$item];
            }
        }
    }
}
