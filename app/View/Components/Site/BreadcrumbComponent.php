<?php

namespace App\View\Components\Site;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BreadcrumbComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $img)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.site.breadcrumb-component', ['img' => $this->img ?? null]);
    }
}
