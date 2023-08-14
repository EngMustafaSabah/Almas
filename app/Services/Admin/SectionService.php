<?php

namespace App\Services\Admin;

use App\Models\Admin\Section;

class SectionService
{

    public function update(array|object $request, Section $section): Section
    {
        foreach (['title_en', 'second_title_en', 'section_content_en'] as $item) {
            if (!empty($request[$item])) {
                $section->setTranslation(str_replace('_en', '', $item), 'en', $request[$item]);
            }
        }

        foreach (['title_ar', 'second_title_ar', 'section_content_ar'] as $item) {
            if (!empty($request[$item])) {
                $section->setTranslation(str_replace('_ar', '', $item), 'ar', $request[$item]);
            }
        }

        $section->save();
        return $section;
    }
}
