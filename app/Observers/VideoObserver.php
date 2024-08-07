<?php

namespace App\Observers;

use App\Models\Video;
use Illuminate\Support\Facades\Storage;

class VideoObserver
{
    /**
     * Handle the Video "created" event.
     *
     * @param  \App\Models\Video  $video
     * @return void
     */
    public function created(Video $video)
    {
        //
    }

    /**
     * Handle the Video "updated" event.
     *
     * @param  \App\Models\Video  $video
     * @return void
     */
    public function updated(Video $video)
    {
        if($video->wasChanged('path')){

            Storage::delete($video->getOriginal('path'));
        }

    }

    /**
     * Handle the Video "deleted" event.
     *
     * @param  \App\Models\Video  $video
     * @return void
     */
    public function deleted(Video $video)
    {
        //
    }

    /**
     * Handle the Video "restored" event.
     *
     * @param  \App\Models\Video  $video
     * @return void
     */
    public function restored(Video $video)
    {
        //
    }

    /**
     * Handle the Video "force deleted" event.
     *
     * @param  \App\Models\Video  $video
     * @return void
     */
    public function forceDeleted(Video $video)
    {
        //
    }
}
