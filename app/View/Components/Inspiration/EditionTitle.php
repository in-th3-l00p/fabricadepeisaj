<?php

namespace App\View\Components\Inspiration;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EditionTitle extends Component
{
    public function __construct(
        public string $title,
        public string $duration,
    ) { }

    public function render(): View|Closure|string {
        return view('components.inspiration.edition-title');
    }
}
