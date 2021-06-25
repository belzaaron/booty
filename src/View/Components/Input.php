<?php

namespace Belzaaron\Booty\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * The name of the input.
     *
     * @var string
     */
    public string $name;

    /**
     * The type of the input.
     *
     * @var string
     */
    public string $type;

    /**
     * The invalid state of the input.
     *
     * @var bool
     */
    public bool $invalid;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string  $type = 'text'
     * @param  bool    $invalid = false
     * @return void
     */
    public function __construct(string $name, string $type = 'text', bool $invalid = false)
    {
        $this->name = $name;
        $this->type = $type;
        $this->invalid = $invalid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $class = 'form-control';

        if ($this->invalid) {
            $class .= ' is-invalid';
        }

        return view('booty::components.input', compact('class'));
    }
}
