<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideoRequest;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class VideoController extends Controller
{
    public function index(){
        $videos =Video::all();
        return $videos;
    }
    public function create(){
        $categories = Category::all();
        return view('videos.create',compact('categories'));
    }
    public function store(StoreVideoRequest $request)
    {
        Video::create($request ->all());
        return redirect()->route('index')->with('alert',__('messages.success'));

    }
    public function show(Request $request,Video $video){
       return view('videos.show',compact('video'));
       
    }
    public function edit(Video $video){
        return view('videos.edit',compact('video'));
    }
    public function update(Request $request ,Video $video){

        $video -> update($request ->all());
        return redirect()->route('videos.show',$video->slug)->with('alert', __('messages.video_edited'));
    }
}
