<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckVerifyEmail;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function __construct()
    {
        $this ->middleware(CheckVerifyEmail::class);
    }
    public function index()
    {
        $videos = Video::all();

        return $videos;
    }

    public function create()
    {
        $categories = Category::all();
        return view('videos.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $path = Storage::putFile('', $request->file);
        $request->merge([
            'path' => $path
        ]);
        $request->user()->videos()->create($request->all());
        return redirect()->route('index')->with('alert', __('messages.success'));
    }

    public function show(Request $request, Video $video)
    {
        $video ->load('comments.user');
        return view('videos.show', compact('video'));
    }

    public function edit(Video $video)
    {
        $categories = Category::all();
        return view('videos.edit', compact('video', 'categories'));
    }

    public function update(Request $request, Video $video)
    {

        $path = Storage::putFile('', $request->file);
        if($request ->hasFile('file')){
            $request->merge([
                'path' => $path
            ]);
        }

        $video->update($request->all());

        return redirect()->route('videos.show', $video->slug)->with('alert', __('messages.video_edited'));
    }
}
