<?php

namespace App\View\Components\Inspiration;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DocumentPreview extends Component
{
    public function __construct(
        public string $title,
        public string $href
    ) { }

    public function render(): View|Closure|string
    {
        return view('components.inspiration.document-preview');
    }
}
