<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ShowcaseCard extends Component
{
    public $src;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($src, $title)
    {
        $this->src = $src;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.showcase-card');
    }
}
