<div class="col-lg-2 col-md-4 col-sm-6">
    <div class="video-item">
        <div class="thumb">
            <div class="hover-efect"></div>
            <small class="time">{{ $video->LengthInHuman }}</small>
            <a href="{{ route('videos.show', $video->slug) }}"><img src="{{ $video->thumbnail }}" alt=""></a>
        </div>
        <div class="video-info">
            <a href="{{ route('videos.show', $video->slug) }}" class="title">{{ $video->name }}</a>
            <a href="{{ route('video.edit', $video->slug) }}">
                <i class="fa fa-pencil" aria-hidden="true"></i>
            </a>
            <a class="channel-name" href="#">حسین پاریاب <span>
                    <i class="fa fa-check-circle"></i></span></a>
            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
            <span class="date"><i class="fa fa-clock-o"></i>{{ $video->created_at }}</span>
            @if ($video->category_name)
                <span class="date"><i class="fa fa-tag"></i>{{ $video->category_name }}</span>
            @endif
        </div>
    </div>
</div>
