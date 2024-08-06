<?php

namespace App\Observers;

use App\Models\Like;
use App\Notifications\ResourceWasLiked;

class LikeObserver
{
    /**
     * Handle the Like "created" event.
     *
     * @param  \App\Models\Like  $like
     * @return void
     */
    public function created(Like $like)
    {
        $like->likeable->user->notify(new ResourceWasLiked($like->likeable));
    }

    /**
     * Handle the Like "updated" event.
     *
     * @param  \App\Models\Like  $like
     * @return void
     */
    public function updated(Like $like)
    {
        //
    }

    /**
     * Handle the Like "deleted" event.
     *
     * @param  \App\Models\Like  $like
     * @return void
     */
    public function deleted(Like $like)
    {
        //
    }

    /**
     * Handle the Like "restored" event.
     *
     * @param  \App\Models\Like  $like
     * @return void
     */
    public function restored(Like $like)
    {
        //
    }

    /**
     * Handle the Like "force deleted" event.
     *
     * @param  \App\Models\Like  $like
     * @return void
     */
    public function forceDeleted(Like $like)
    {
        //
    }
}
