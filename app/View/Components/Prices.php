<?php

namespace App\View\Components;

use Closure;
use App\Models\Price;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class Prices extends Component
{
    public $prices;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->prices = Cache::rememberForever('prices_all', function () {
            return Price::all()->groupBy('section');

        });

        // dd($this->prices);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.prices');
    }
}
