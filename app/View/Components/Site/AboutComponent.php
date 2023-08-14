<?php

namespace App\View\Components\Site;

use App\Models\Site\Page;
use App\Models\Site\Section;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AboutComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $page = Page::where('slug', 'about')->first();
        $sections = Section::where('page_id', $page->id)
            ->orWhereIn('id', [2, 3, 4, 5])
            ->get();
        return view(
            'components.site.about-component',
            ['about' => $page, 'sections' => $sections]
        );
    }
}
