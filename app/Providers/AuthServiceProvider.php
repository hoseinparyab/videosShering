<?php

namespace App\Providers;

use App\Models\Comment;
use App\Models\User;
use App\Models\Video;
use App\Policies\CommentPolicy;
use App\Policies\VideoPolicy;
use Illuminate\Auth\Access\Response;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [

        Video::class => VideoPolicy::class,
        Comment::class =>CommentPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}
