<?php

namespace App\View\Components\Site;

use App\Models\Site\{Page, Section};
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WordFromCeoComponent extends Component
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
        $section = Section::where('page_id', $page->id)->latest('id')->first();
        return view(
            'components.site.word-from-ceo-component',
            ['section' => $section]
        );
    }
}
