<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

class Adminlayout extends Component
{
    public $lead;

    /**
     * Create a new component instance.
     */
    public function __construct($lead = null)
    {
        $this->lead = $lead ?? collect();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.adminlayout');
    }
}
