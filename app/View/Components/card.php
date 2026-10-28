<?php

namespace App\View\Components;

use App\Models\Reading;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{

      public Reading $card;
    /**
     * Create a new component instance.
     */
    public function __construct(Reading $card)
    {
          $this->card = $card;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
