<?php

namespace App\View\Components\students\index;

use Illuminate\View\Component;

class table extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    Public $student;


    public function __construct($student)
    {
        $this->student = $student;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.students.index.table');
    }
}
