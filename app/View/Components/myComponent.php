<?php

namespace App\View\Components;

use Illuminate\View\Component;

class myComponent extends Component
{
    public $title;
    public $img;
    public $paragraphe;
    public $url;
    public function __construct($title, $img, $paragraphe, $url)
    {
        $this->title = $title;
        $this->img = $img;
        $this->paragraphe = $paragraphe;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.my-component');
    } 
}
