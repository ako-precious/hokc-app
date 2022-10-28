<?php

namespace App\View\Components\attendances\index;

use Illuminate\View\Component;

class table extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    Public $attendance;


    public function __construct($attendance)
    {
        $this->attendance = $attendance;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.attendances.index.table');
    }
}
