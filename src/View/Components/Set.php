<?php

namespace Belzaaron\Booty\View\Components;

use Illuminate\View\Component;

class Set extends Component
{
    /**
     * The name of the set.
     *
     * @var string
     */
    public string $name;

    /**
     * The label of the set.
     *
     * @var string
     */
    public string $label;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string  $label
     * @return void
     */
    public function __construct(string $name, string $label)
    {
        $this->name = $name;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('booty::components.set');
    }
}
