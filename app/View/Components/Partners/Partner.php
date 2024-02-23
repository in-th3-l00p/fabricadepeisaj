<?php

namespace App\View\Components\Partners;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Partner extends Component
{
    public function __construct(
        public string $title,
        public string $image,
        public string $alt,
        public string $href
    ) { }

    public function render(): View|Closure|string {
        return view('components.partners.partner');
    }
}
