<?php

namespace Components;

use Code16\JockoClient\Image;
use Illuminate\View\Component;

class ContentImage extends Component
{
    public Image $image;
    
    public function __construct(
        public string $src,
        public ?string $alt
    ) {
        $this->image = new Image($src);
    }
    
    public function render()
    {
        return view('_components.content-image');
    }
}
