<?php
namespace App\Models\Traits;

use App\Models\Like;
use App\Models\User;

trait Likeable
{
    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function getLikesCountAttribute()
    {
        return $this->likes()
            ->where('vote', 1)
            ->count();
    }

    public function getDislikesCountAttribute()
    {
        return $this->likes()
            ->where('vote', -1)
            ->count();
    }
    public function likedBy(User $user)
    {
        if($this->isLikedBy($user))return;
        return $this->likes()->create([

            'vote'=> 1,
            'user_id' => $user->id
        ]);
    }
    public function dislikedBy(User $user)
    {
        if($this->isDisLikedBy($user)) return;
        return $this->likes()->create([

            'vote'=> -1,
            'user_id' => $user->id
        ]);
    }
    public function isLikedBy(User $user)
    {
        return $this->likes()
        ->where('vote',1)
        ->where('user_id',$user->id )
        ->exists();
    }
    public function isDisLikedBy(User $user)
    {
        return $this->likes()
        ->where('vote',-1)
        ->where('user_id',$user->id )
        ->exists();
    }

}
