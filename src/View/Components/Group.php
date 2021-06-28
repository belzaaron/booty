<?php

namespace Belzaaron\Booty\View\Components;

use Illuminate\View\Component;

class Group extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('booty::components.group', [
            'class' => 'form-group',
        ]);
    }
}
