<?php

namespace Belzaaron\Booty\View\Components;

use Illuminate\View\Component;

class Error extends Component
{
    /**
     * The message for the error.
     *
     * @var string
     */
    public string $message;

    /**
     * Create a new component instance.
     *
     * @param  string  $message = ''
     * @return void
     */
    public function __construct(string $message = '')
    {
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('booty::components.error', [
            'class' => 'invalid-feedback',
        ]);
    }
}
