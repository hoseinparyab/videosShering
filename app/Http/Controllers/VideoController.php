<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideoRequest;
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
        return view('videos.create');
    }
    public function store(StoreVideoRequest $request)
    {
        Video::create($request ->all());
        return redirect()->route('index')->with('alert',__('messages.success'));

    }

}
