<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Video Post – Video Sharing HTML Template</title>
    <meta name="keywords" content="Blog website templates" />
    <meta name="description" content="Author - Personal Blog Wordpress Template">
    <meta name="author" content="Rabie Elkheir">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Core CSS -->
    <!-- Owl Carousel Assets -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />

    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Raleway:400,500,700|Roboto:300,400,500,700,900|Ubuntu:300,300i,400,400i,500,500i,700"
        rel="stylesheet">
    <!-- Main CSS -->
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>
    <!--======= header =======-->
    <header>
        <div class="container-full">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <a id="main-category-toggler" class="hidden-md hidden-lg hidden-md" href="#">
                        <i class="fa fa-navicon"></i>
                    </a>
                    <a id="main-category-toggler-close" class="hidden-md hidden-lg hidden-md" href="#">
                        <i class="fa fa-close"></i>
                    </a>
                    <div id="logo">
                        <a href="01-home.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div><!-- // col-md-2 -->
                <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs hidden-sm">
                    <div class="search-form">
                        <form id="search" action="#" method="post">
                            <input type="text" placeholder="جستجو ..." />
                            <input type="submit" value="Keywords" />
                        </form>
                    </div>
                </div><!-- // col-md-3 -->
                <div class="col-lg-3 col-md-3 col-sm-5 hidden-xs hidden-sm">
                </div><!-- // col-md-4 -->
                <div class="col-lg-2 col-md-2 col-sm-4 hidden-xs hidden-sm">
                    <!--  -->
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs hidden-sm">
                    <div class="dropdown">
                        <a data-toggle="dropdown" href="#" class="user-area">
                            <div class="thumb"><img
                                    src="https://s.gravatar.com/avatar/dfca86228f1ed5f0554827a8d907172a?s=80" alt="">
                            </div>
                            <h2>مهرداد سامی</h2>
                            <h3>25 اشتراک</h3>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu account-menu">
                            <li><a href="#"><i class="fa fa-edit color-1"></i>ویرایش پروفایل</a></li>
                            <li><a href="#"><i class="fa fa-video-camera color-2"></i>اضافه کردن فیلم</a></li>
                            <li><a href="#"><i class="fa fa-star color-3"></i>برگزیده</a></li>
                            <li><a href="#"><i class="fa fa-sign-out color-4"></i>خروج</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- // row -->
        </div><!-- // container-full -->
    </header><!-- // header -->

    <div id="main-category">
        <div class="container-full">
            <div class="row">
                <div class="col-md-12">
                    <ul class="main-category-menu">
                        <li class="color-1"><a href="02-category.html"><i class="fa fa-music"></i>موسیقی</a></li>
                        <li class="color-2"><a href="02-category.html"><i class="fa fa-soccer-ball-o"></i>ورزشی</a></li>
                        <li class="color-3"><a href="02-category.html"><i class="fa fa-gamepad"></i>بازی</a></li>

                    </ul>
                </div><!-- // col-md-14 -->
            </div><!-- // row -->
        </div><!-- // container-full -->
    </div><!-- // main-category -->

    <div class="site-output">
        <div id="all-output" class="col-md-12">
            <h1 class="new-video-title"><i class="fa fa-bolt"></i> آخرین ویدیو‌ها</h1>
            <div class="row">

                <!-- video-item -->
                @foreach ($videos as $video )
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <small class="time">{{$video->length}}</small>
                            <a href="#"><img src="{{$video->thumbnail}}" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">{{ $video->name }}</a>
                            <a class="channel-name" href="#">مهرداد سامی<span>
                                    <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                            <span class="date"><i class="fa fa-clock-o"></i>{{ $video->created_at}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- // video-item -->
            <h1 class="new-video-title"><i class="fa fa-bolt"></i> پربازدیدترین ویدیوها</h1>
            <div class="row">
                @foreach ($mostPopularVideos as$video)
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <small class="time">{{$video->length}}</small>
                            <a href="#"><img src="{{$video->thumbnail}}" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">{{ $video->name }}</a>
                            <a class="channel-name" href="#">مهرداد سامی<span>
                                    <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                            <span class="date"><i class="fa fa-clock-o"></i>{{ $video->created_at}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

    
            <h1 class="new-video-title"><i class="fa fa-bolt"></i> محبوب‌ترین‌ها</h1>
            <div class="row">
                @foreach ($mostViewedVideos as$video)
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <small class="time">{{$video->length}}</small>
                            <a href="#"><img src="{{$video->thumbnail}}" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">{{ $video->name }}</a>
                            <a class="channel-name" href="#">مهرداد سامی<span>
                                    <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                            <span class="date"><i class="fa fa-clock-o"></i>{{ $video->created_at}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div><!-- // row -->
    </div>


    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
