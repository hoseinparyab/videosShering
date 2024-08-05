<?php
namespace App\Models\Traits;
use App\Models\Like;
trait Likeable

{
    public function likes()
    {

        return $this->morphMany(Like::class,'likeable');
    }
}

