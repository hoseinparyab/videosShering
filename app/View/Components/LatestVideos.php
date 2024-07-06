<?php

namespace App\View\Components;

use App\Models\Video;
use Illuminate\View\Component;

class LatestVideos extends Component
{
    public $videos;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->videos = Video::latest()->take(6)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.latest-videos');
    }
}
