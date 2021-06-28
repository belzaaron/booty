<?php

namespace Belzaaron\Booty\View\Components;

use Illuminate\View\Component;

class Label extends Component
{
    /**
     * The value of the label.
     *
     * @var string
     */
    public string $value;

    /**
     * The invalid state of the input.
     *
     * @var bool
     */
    public bool $invalid;

    /**
     * Create a new component instance.
     *
     * @param  string  $value = ''
     * @param  bool    $invalid = false
     * @return void
     */
    public function __construct(string $value = '', bool $invalid = false)
    {
        $this->value = $value;
        $this->invalid = $invalid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $class = 'form-label';

        if ($this->invalid) {
            $class .= ' text-danger';
        }

        return view('booty::components.label', compact('class'));
    }
}
