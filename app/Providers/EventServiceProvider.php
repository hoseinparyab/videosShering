<?php

namespace App\Providers;

use App\Models\Like;
use App\Models\Video;
use App\Events\VideoCreated;
use App\Listeners\SendEmail;
use App\Listeners\ProcessVideo;
use App\Observers\LikeObserver;
use App\Observers\VideoObserver;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [ ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Like::observe(LikeObserver::class);
        Video::observe(VideoObserver::class);
    }
    public function shouldDiscoverEvents()
{
    return true;
}

}
