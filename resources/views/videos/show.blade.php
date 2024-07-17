@extends('layout')
@section('content')
    <div class="row">
        <!-- Watch -->
        <div class="col-md-8">
            <div id="watch">

                <!-- Video Player -->
                <h1 class="video-title">{{ $video->name }}</h1>
                <div class="video-code">
                    <video controls style="height: 100%; width: 100%;">
                        <source src="{{ $video->url }}" type="video/mp4">
                    </video>
                </div><!-- // video-code -->

                <div>
                    <p>
                        {{ $video->description }}
                    </p>
                </div>

                <div class="video-share">
                    <ul class="like">
                        <li><a class="deslike" href="#">1250 <i class="fa fa-thumbs-down"></i></a></li>
                        <li><a class="like" href="#">1250 <i class="fa fa-thumbs-up"></i></a></li>
                    </ul>
                    <ul class="social_link">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li><a class="rss" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                    </ul><!-- // Social -->
                </div><!-- // video-share -->
                <!-- // Video Player -->


                <!-- Chanels Item -->
                <div class="chanel-item">
                    <div class="chanel-thumb">
                        <a href="#"><img src="{{ $video->owner_avatar }}" alt=""></a>
                    </div>
                    <div class="chanel-info">
                        <a class="title" href="#">{{ $video->owner_name }} </a>
                        <span class="subscribers">436,414 ویدیو</span>
                    </div>
                    <a href="#" class="subscribe">مشاهده همه ویدیوهای داوود طاهری</a>
                </div>
                <!-- // Chanels Item -->


                <!-- Comments -->
                <div id="comments" class="post-comments">
                    <h3 class="post-box-title"><span>19</span> نظرات</h3>
                    <ul class="comments-list">
                        <li>
                            <div class="post_author">
                                <div class="img_in">
                                    <a href="#"><img src="/demo_img/c1.jpg" alt=""></a>
                                </div>
                                <a href="#" class="author-name">داود طاهری</a>
                                <time datetime="2017-03-24T18:18">مرداد 27, 1397 - 11:00</time>
                            </div>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>


                        </li>
                        <li>
                            <div class="post_author">
                                <div class="img_in">
                                    <a href="#"><img src="/demo_img/c2.jpg" alt=""></a>
                                </div>
                                <a href="#" class="author-name">بهمن نجاتی</a>
                                <time datetime="2017-03-24T18:18">مرداد 27, 1397 - 11:00</time>
                            </div>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </li>

                    </ul>


                    <h3 class="post-box-title">ارسال نظرات</h3>
                    <form>
                        <input type="text" class="form-control" id="Name" placeholder="نام">
                        <input type="email" class="form-control" id="Email" placeholder="ایمیل">
                        <input type="text" class="form-control" placeholder="سایت">
                        <textarea class="form-control" rows="8" id="Message" placeholder="پیام"></textarea>
                        <button type="button" id="contact_submit" class="btn btn-dm">ارسال پیام</button>
                    </form>
                </div>
                <!-- // Comments -->


            </div><!-- // watch -->
        </div><!-- // col-md-8 -->
        <!-- // Watch -->

        <!-- Related Posts-->
        <div class="col-md-4">
            <x-related-videos :video="$video" />
        </div><!-- // col-md-4 -->
        <!-- // Related Posts -->
    </div>

@endsection
