<?php

namespace App\View\Components\agroamigable\text-structures;

use Illuminate\View\Component;

class Article extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.agroamigable.text-structures.article');
    }
}
