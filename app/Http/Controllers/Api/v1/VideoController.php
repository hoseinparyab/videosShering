<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\VideoResource;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function show(Video $video)
    {
        return new VideoResource($video);
    }
    public function index()
    {
        $videos = Video::paginate();
        return VideoResource::collection($videos);
    }
}
