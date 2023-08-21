<?php

namespace App\View\Components\Site;

use App\Models\Site\Section;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CounterAreaHomeComponent extends Component
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
        $section = Section::where('name', 'statistics')->with('childSections')->first();
        return view(
            'components.site.counter-area-home-component',
            ['section' => $section]
        );
    }
}
