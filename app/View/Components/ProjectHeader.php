<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProjectHeader extends Component
{
    public $title;
    public $github;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $github = null)
    {
        $this->title = $title;
        $this->github = $github;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.project-header');
    }
}
