@extends('layout')
@section('content')


<form class="mt-5" action="#" method="GET">
    <div class="row">
        <div class="form-group col-md-3">
            <label for="sortBy">ترتیب بر اساس</label>
            <select id="sortBy" class="form-control" name="sortBy">
                <option {{ request()->query('sortBy')=='created_at' ?'selected':'' }}  value="created_at">جدیدترین</option>
                <option {{ request()->query('sortBy')=='like' ?'selected':'' }}  value="like">محبوب ترین</option>
                <option {{ request()->query('sortBy')=='length' ?'selected':'' }}  value="length">مدت زمان ویدیو</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="inputState">مدت زمان</label>
            <select id="inputState" class="form-control" name="length">
                <option {{ request()->query('length')==null ?'selected':'' }} value="">همه</option>
                <option {{ request()->query('length')==1 ?'selected':'' }} value="1">کمتر از یک دقیقه</option>
                <option {{ request()->query('length')==2 ?'selected':'' }} value="2">1 تا 5 دقیقه</option>
                <option {{ request()->query('length')==3 ?'selected':'' }} value="3">بیشتر از 5 دقیقه</option>
            </select>
        </div>
        <div class="form-group col-md-3" style="margin-top: 29px;">
            <button type="submit" class="btn btn-primary">فیلتر</button>
        </div>
    </div>
</form>

    <h1 class="new-video-title"><i class="fa fa-bolt"></i>{{ $title }}</h1>
    <div class="row">
        @foreach ($videos as $video)
            <x-video-box :video="$video"></x-video-box>
        @endforeach

    </div>

    <div class="text-center" dir="ltr">
        {{ $videos->links() }}
    </div>
@endsection
