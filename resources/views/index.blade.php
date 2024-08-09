@extends('layout')
@section('content')
<form class="mt-5" action="#" method="GET">
    <div class="row">
        <div class="form-group col-md-3">
            <label for="sortBy">ترتیب بر اساس</label>
            <select id="sortBy" class="form-control" name="sortBy">
                <option value="created_at">جدید ترین</option>
                <option value="like">محبوب ترین</option>
                <option value="length">مدت زمان ویدیو</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="inputState">مدت زمان</label>
            <select id="inputState" class="form-control" name="length">
                <option value="">همه</option>
                <option value="1">کمتر از یک دقیقه</option>
                <option value="2">1 تا 5 دقیقه</option>
                <option value="3">بیشتر از 5 دقیقه</option>
            </select>
        </div>
        <input type="hidden" name="q" value="{{ request()->query('q') }}">
        <div class="form-group col-md-3" style="margin-top: 29px;">
            <button type="submit" class="btn btn-primary">فیلتر</button>
        </div>
    </div>
</form>

</form>
    <x-latest-videos></x-latest-videos>
    <h1 class="new-video-title"><i class="fa fa-bolt"></i> پربازدیدترین ویدیوها</h1>
    <div class="row">
        @foreach ($mostViewedVideos as $video)
            <x-video-box :video="$video"></x-video-box>
        @endforeach

    </div>

    <h1 class="new-video-title"><i class="fa fa-bolt"></i> محبوب‌ترین‌ها</h1>
    <div class="row">
        @foreach ($mostPopularVideos as $video)
            <x-video-box :video="$video"></x-video-box>
        @endforeach

    </div>

@endsection
