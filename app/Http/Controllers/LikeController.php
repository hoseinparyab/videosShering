<?php

namespace App\Http\Controllers;

use App\Models\Traits\Likeable;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Model\Comment;

class LikeController extends Controller
{
    public function store(Request $request, string $likeable_type, $likeable_id)
    {
    $likeable_id ->likedBy(auth()->user());
        return back();
    }
}
