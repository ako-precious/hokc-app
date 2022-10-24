<?php

namespace App\View\Components\set_attendance;

use Illuminate\View\Component;

class index extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $set_attendance;


    public function __construct($set_attendance)
    {
        $this->set_attendance = $set_attendance;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.set_attendance.index');
    }
}
