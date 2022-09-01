<?php

namespace Components;

use Illuminate\Support\Facades\Blade;
use Illuminate\View\Component;

class Content extends Component
{
    public function transform(string $content)
    {
        $content = preg_replace_callback('/<img src="(.+)".*>/sU', function($matches) {
            return Blade::render('<x-content-image :src="$src"></x-content-image>', [
                'src' => $matches[1],
            ]);
        }, $content);
        
        return $content;
    }
    
    public function render()
    {
        return view('_components.content');
    }
}
