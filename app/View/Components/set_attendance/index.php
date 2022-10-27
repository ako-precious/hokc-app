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
    Public $setattendance;


    public function __construct($setattendance)
    {
        $this->setattendance = $setattendance;
        

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
