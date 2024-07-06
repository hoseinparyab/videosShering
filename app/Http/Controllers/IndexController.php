<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $mostPopularVideos = Video::all()->random(6);
        $mostViewedVideos = Video::all()->random(6);
        return view('index', compact('mostPopularVideos', 'mostViewedVideos'));
    }
}
