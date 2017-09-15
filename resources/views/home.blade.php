<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BOOK</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--头部导航-->
<header class="gnome-header ">
    <nav class="navbar  navbar-default affix-top">
        <div class="container" style="margin-top: 15px;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-wrapper" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
                <a id="home-link" class="gnome-navbar-brand" title="Go to home page" href="#">
                    <img src="https://www.gnome.org/wp-content/themes/gnome-grass/images/gnome-logo.svg"
                         alt="GNOME: The Free Software Desktop Project">
                </a>
            </div>
            <div class="navbar-collapse collapse" id="navbar-wrapper">
                <ul id="menu-primary" class="nav navbar-nav">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7474">
                        <a title="GNOME 3" href="#">GNOME 3</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7475">
                        <a title="Technologies" href="#">Technologies</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7473">
                        <a title="Get Involved" href="#">Get Involved</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-7490 dropdown">
                        <a title="Foundation" href="#" class="dropdown-toggle"
                           aria-haspopup="true">Foundation

                        </a>
                        <ul role="menu" class=" dropdown-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7477">
                                <a title="The GNOME Foundation" href="#">
                                    The GNOME Foundation
                                </a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7479">
                                <a title="Governance" href="#">
                                    Governance
                                </a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7480">
                                <a title="Legal and Trademarks" href="#">
                                    Legal and Trademarks
                                </a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7482">
                                <a title="Reports" href="#">
                                    Reports
                                </a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7481">
                                <a title="Membership" href="#">
                                    Membership
                                </a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7478">
                                <a title="Contact Us" href="#">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7472">
                        <a title="About Us" href="#">
                            About Us
                        </a>
                    </li>
                </ul>
                <form id="searchform" method="get" class="navbar-form navbar-right" action=""
                      role="search">
                    <label for="navbar-search" class="sr-only">Search:</label>
                    <div class="form-group has-feedback has-feedback-left">
                        <span class="form-control-feedback">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control" name="s" id="navbar-search" value=""
                               placeholder="Search">
                    </div>
                </form>
            </div>
        </div>
    </nav>
</header>
<!--主体-->

<div class="container">
    <!--广告图-->

    <div class="picture">
        <a href="{{ $ad['link_address'] }}" target="_blank">
            <img width="100%"  src="{{ $ad['image'] }}" alt="">
        </a>

    </div>
    <div class="episode-next">
        <div class="row episode-list">
            <div class="col-sm-9">
                <div id="myad4" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <div class="carousel-inner">
                        <?php $index = 0 ?>
                        @foreach($ad_carousel as $re)
                            @if($index == 0)
                                    <div class="item active">
                                        <?php $index = 1 ?>
                            @else
                                                <div class="item ">
                                @endif
                                <img src= "{{ config('admin.upload.host').$re['image']}}" alt=""/>
                            </div>
                        @endforeach

                    </div>


                    <!--序号指示器不随着广告而滚动，不放在carousel-inner中-->
                    <ul class="carousel-indicators">
                        <li data-slide-to="0" data-target="#myad4" class="active"></li>
                        <li data-slide-to="1" data-target="#myad4"></li>
                        <li data-slide-to="2" data-target="#myad4"></li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="aticle">
                    <img src="img/center.jpg" style="width: 100%" alt="">
                </div>
                <div class="aticle">
                    <img src="img/center2.jpg" style="width: 100%" alt="">
                </div>
                <div class="aticle">
                    <img src="img/center3jpg.jpg" style="width: 100%" alt="">
                </div>

            </div>
        </div>
    </div>
    <!--文章内容-->
    <div class="row section">

        <div class="col-sm-3">
            <div class="title">
                <b>Top Rank</b>
                <a href="#" style="text-decoration: none;color: #5BC0DE;margin-left: 0.5rem">+More</a>
            </div>
            <div class="shadow scale">
                <div class="infobox vote" style="min-height: 93px;border: none">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <figure class="col-xs-3 img-circle">
                                    <img class="img-responsive" src="img/1.jpg"
                                         alt="Small x2 league of legends world championship expected to sell out entire stadium 457273 2">
                                    <h3>NO.1</h3>
                                </figure>
                                <div class="col-xs-9 info">
                                    <p style="margin-top: 2px">Competitive gaming updates, videos!</p>
                                    <p style="text-align: center;">
                                        <button class="btn btn-success btn-sm">Here Type</button>
                                        <button class="btn btn-info btn-sm">Genre</button>
                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="scale">
                <div class="infobox vote">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <figure class="col-xs-3 img-circle">
                                    <img class="img-responsive" src="img/2.jpg"
                                         alt="Small x2 league of legends world championship expected to sell out entire stadium 457273 2">
                                    <h3>NO.1</h3>
                                </figure>
                                <div class="col-xs-9 info">
                                    <p style="margin-top: 2px">Competitive gaming updates, videos!</p>
                                    <p style="text-align: center;">
                                        <button class="btn btn-success btn-sm">Here Type</button>
                                        <button class="btn btn-info btn-sm">Genre</button>
                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="scale">
                <div class="infobox vote">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <figure class="col-xs-3 img-circle">
                                    <img class="img-responsive" src="img/3.jpg"
                                         alt="Small x2 league of legends world championship expected to sell out entire stadium 457273 2">
                                    <h3>NO.1</h3>
                                </figure>
                                <div class="col-xs-9 info">
                                    <p style="margin-top: 2px">Competitive gaming updates, videos!</p>
                                    <p style="text-align: center;">
                                        <button class="btn btn-success btn-sm">Here Type</button>
                                        <button class="btn btn-info btn-sm">Genre</button>
                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="scale">
                <div class="infobox vote">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <figure class="col-xs-3 img-circle">
                                    <img class="img-responsive" src="img/4.jpg"
                                         alt="Small x2 league of legends world championship expected to sell out entire stadium 457273 2">
                                    <h3>NO.1</h3>
                                </figure>
                                <div class="col-xs-9 info">
                                    <p style="margin-top: 2px">Competitive gaming updates, videos!</p>
                                    <p style="text-align: center;">
                                        <button class="btn btn-success btn-sm">Here Type</button>
                                        <button class="btn btn-info btn-sm">Genre</button>
                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="scale">
                <div class="infobox vote">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <figure class="col-xs-3 img-circle">
                                    <img class="img-responsive" src="img/5.jpg"
                                         alt="Small x2 league of legends world championship expected to sell out entire stadium 457273 2">
                                    <h3>NO.1</h3>
                                </figure>
                                <div class="col-xs-9 info">
                                    <p style="margin-top: 2px">Competitive gaming updates, videos!</p>
                                    <p style="text-align: center;">
                                        <button class="btn btn-success btn-sm">Here Type</button>
                                        <button class="btn btn-info btn-sm">Genre</button>
                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--小说中间内容-->
        <div class="col-sm-6">
            <div class="title" style="margin-left: 10px">
                <b>Today's Pick</b>
                <a href="#" style="text-decoration: none;color: #5BC0DE;margin-left: 0.5rem">+More</a>
            </div>
            <div class="col-sm-4 col-xs-12 ">
                <div class="centerBook">
                    <img src="img/6.jpg" class="img-responsive">
                    <h5>
                        <b>Translated</b>
                        <b>Completed</b>
                    </h5>
                    <div class="content">
                        <span>Spare Zeit und Geld Name<br></span>
                        <p>
                            <button class="btn btn-info btn-sm">Genre</button>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12 ">
                <div class="centerBook">
                    <img src="img/180.jpg" class="img-responsive">
                    <h5>
                        <b>Translated</b>
                        <b>Completed</b>
                    </h5>
                    <div class="content">
                        <span>Spare Zeit und Geld Name<br></span>
                        <p>
                            <button class="btn btn-info btn-sm">Genre</button>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12 ">
                <div class="centerBook">
                    <img src="img/181.jpg" class="img-responsive">
                    <h5>
                        <b>Translated</b>
                        <b>Completed</b>
                    </h5>
                    <div class="content">
                        <span>Spare Zeit und Geld Name<br></span>
                        <p>
                            <button class="btn btn-info btn-sm">Genre</button>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12 ">
                <div class="centerBook">
                    <img src="img/182.jpg" class="img-responsive">
                    <h5>
                        <b>Translated</b>
                        <b>Completed</b>
                    </h5>
                    <div class="content">
                        <span>Spare Zeit und Geld Name<br></span>
                        <p>
                            <button class="btn btn-info btn-sm">Genre</button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 ">
                <div class="centerBook">
                    <img src="img/183.jpg" class="img-responsive">
                    <h5>
                        <b>Translated</b>
                        <b>Completed</b>
                    </h5>
                    <div class="content">
                        <span>Spare Zeit und Geld Name<br></span>
                        <p>
                            <button class="btn btn-info btn-sm">Genre</button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 ">
                <div class="centerBook">
                    <img src="img/184.jpg" class="img-responsive">
                    <h5>
                        <b>Translated</b>
                        <b>Completed</b>
                    </h5>
                    <div class="content">
                        <span>Spare Zeit und Geld Name<br></span>
                        <p>
                            <button class="btn btn-info btn-sm">Genre</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 " style="padding-left: 0">
            <div class="title" style="margin-left: 10px">
                <b>Talking Right Now</b>

            </div>
            <div class="rightBook">
                <div class="col-sm-12 col-xs-12">
                    <div style="border: 1px solid #d6d6e4;border-bottom: none;    padding: 8px;">
                        <div class="col-sm-7 col-xs-7 text-left" style="font-weight: 900;padding: 0">
                            User Nickname
                        </div>
                        <div class="col-sm-5 col-xs-5 text-right" style="font-weight: 900">
                            13 hr ago
                        </div>
                        We have been pretty busy and quiet over the last several months months v last several months
                        months
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <div class="">
                        <div class="infobox vote">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <figure class="col-xs-3 img-circle">
                                            <img class="img-responsive" src="img/1.jpg"
                                                 alt="Small x2 league of legends world championship expected to sell out entire stadium 457273 2">
                                        </figure>
                                        <div class="col-xs-9 info">
                                            <p style="margin-top: 2px">Competitive gaming updates, videos!</p>
                                            <p style="text-align: center;">
                                                <i class="fa  fa-star" style="color: #FFCC03"></i>
                                                <i class="fa  fa-star" style="color: #FFCC03"> </i>
                                                <i class="fa  fa-star" style="color: #FFCC03"></i>
                                                <i class="fa  fa-star" style="color: #FFCC03"></i>
                                                <i class="fa  fa-star"></i>
                                            </p>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="rightBook">
                <div class="col-sm-12 col-xs-12">
                    <div style="border: 1px solid #d6d6e4;border-bottom: none;    padding: 8px;">
                        <div class="col-sm-7 col-xs-7 text-left" style="font-weight: 900;padding: 0">
                            User Nickname
                        </div>
                        <div class="col-sm-5 col-xs-5 text-right" style="font-weight: 900">
                            13 hr ago
                        </div>
                        We have been pretty busy and quiet over the last several months
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <div class="">
                        <div class="infobox vote">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <figure class="col-xs-3 img-circle">
                                            <img class="img-responsive" src="img/2.jpg"
                                                 alt="Small x2 league of legends world championship expected to sell out entire stadium 457273 2">
                                        </figure>
                                        <div class="col-xs-9 info">
                                            <p style="margin-top: 2px">Competitive gaming updates, videos!</p>
                                            <p style="text-align: center;">
                                                <i class="fa  fa-star" style="color: #FFCC03"></i>
                                                <i class="fa  fa-star" style="color: #FFCC03"> </i>
                                                <i class="fa  fa-star" style="color: #FFCC03"></i>
                                                <i class="fa  fa-star" style="color: #FFCC03"></i>
                                                <i class="fa  fa-star" style="color: #FFCC03"></i>
                                            </p>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="rightBook">
                <div class="col-sm-12 col-xs-12">
                    <div style="border: 1px solid #d6d6e4;border-bottom: none;    padding: 8px;">
                        <div class="col-sm-7 col-xs-7 text-left" style="font-weight: 900;padding: 0">
                            User Nickname
                        </div>
                        <div class="col-sm-5 col-xs-5 text-right" style="font-weight: 900">
                            13 hr ago
                        </div>
                        We have been pretty busy and quiet over the last several months
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <div class="">
                        <div class="infobox vote">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <figure class="col-xs-3 img-circle">
                                            <img class="img-responsive" src="img/3.jpg"
                                                 alt="Small x2 league of legends world championship expected to sell out entire stadium 457273 2">
                                        </figure>
                                        <div class="col-xs-9 info">
                                            <p style="margin-top: 2px">Competitive gaming updates, videos!</p>
                                            <p style="text-align: center;">
                                                <i class="fa  fa-star" style="color: #FFCC03"></i>
                                                <i class="fa  fa-star" style="color: #FFCC03"> </i>
                                                <i class="fa  fa-star" style="color: #FFCC03"></i>
                                                <i class="fa  fa-star"></i>
                                                <i class="fa  fa-star"></i>
                                            </p>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--主体2-->
    <div class="row">
        <div class="col-sm-12 col-xs-12 " >
            <div class="title">
                <b>Today's Pick</b>
                <a href="#" style="text-decoration: none;color: #5BC0DE;margin-left: 0.5rem">+More</a>
            </div>
            <div class="col-sm-3 col-xs-3 artiles2" style="padding: 0">
                <div class="aticle ">
                    <img src="img/113.jpg" style="width: 100%" alt="">
                </div>
                <div class="aticle">
                    <img src="img/111.jpg" style="width: 100%" alt="">
                </div>
                <div class="aticle">
                    <img src="img/car.jpg" style="width: 100%" alt="">
                </div>
                <div class="aticle">
                    <img src="img/112.png" style="width: 100%" alt="">
                </div>

            </div>
            <div class="col-sm-6 col-xs-6" style="padding-right: 0">
                <div class="col-sm-4 col-xs-4">
                    <div class="centerBook">
                        <img src="img/185.jpg" class="img-responsive">
                        <h5>
                            <b>Translated</b>
                            <b>Completed</b>
                        </h5>
                        <div class="content">
                            <span>Spare Zeit und Geld Name<br></span>
                            <p>
                                <button class="btn btn-info btn-sm">Genre</button>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-4">
                    <div class="centerBook">
                        <img src="img/186.jpg" class="img-responsive">
                        <h5>
                            <b>Translated</b>
                            <b>Completed</b>
                        </h5>
                        <div class="content">
                            <span>Spare Zeit und Geld Name<br></span>
                            <p>
                                <button class="btn btn-info btn-sm">Genre</button>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-4">
                    <div class="centerBook">
                        <img src="img/187.jpg" class="img-responsive">
                        <h5>
                            <b>Translated</b>
                            <b>Completed</b>
                        </h5>
                        <div class="content">
                            <span>Spare Zeit und Geld Name<br></span>
                            <p>
                                <button class="btn btn-info btn-sm">Genre</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-xs-3" style="padding-right: 0">

                <div class="picture2">
                    <a target="_blank" href="//www.googleadservices.com/pagead/aclk?sa=L&ai=CVDW2SuGwWaH_C82h9AWe9ZOABKmV9cVJ9oPy-6EFtbWfz5sJEAEgy6jHKWCd8dyB0AWgAZSkgdIDyAECqQIjjO82UJOEPqgDAcgDyQSqBIQBT9DHSfNjzhf5LdkQV29BufPWhwpNN0sbhZ2Z7IFv3GlUzyIT9cscg2bw80DyQJIa7SjD43pF4HpRGRYbifTjDv0_9dE_ckvEINy6KEDhgs988QmB-09Nrc6m72t3KIoXoXPSQqzA12oiFbSyPjg-fnv6-Z57L7JTSbti9NNGO8OFvjI4oAYCgAfU2_4tqAemvhvYBwHSCAcIgGEQARgCsQlk1p5QbwIsztgTAg&num=1&cid=CAASEuRoVJvPpiMEB3ZFXEdD-AErCg&sig=AOD64_0Open2_mcoIElZJHTXFkeXixXBIA&client=ca-pub-2935286260943234&adurl=http://click.aliyun.com/se/657081/">
                        <img src="img/imgad.jpg" alt="">
                    </a>
                </div>

            </div>

        </div>
    </div>

    <!--广告大图-->
    <div class="col-sm-9 col-xs-9" style="padding: 0">
        <div class="col-sm-12 col-xs-12" style="padding: 0;text-align: center">
            <div class="picture3" style="background: transparent;display: inline-block">
                <a href="http://googleads.g.doubleclick.net/aclk?sa=L&ai=CIp5SVOWwWYLfGNH29QXPxI-4DdfC6ZFMppOM-d4FrQIQASDg2-QeYJ3x3IHQBcgBAqkC98EX5YOThD6oAwHIA8kEqgS2AU_QCQDCz38CZLycfCnrLvMPhG0Al_2man90qrn-N6B4TUWOxZBrRBB8XjLN2enm0hkXbPabkWaeFU_rcUh98mYFtx-QZhH2vzVa7bmkIwiEpil1RB_29Tj0HSdpyvnhYMGbEbShJr_dQOlTFCDppyShemlg_yTrOboRzkH2Og_whRGaPGqM8FdUdCKGW0QR_tsQaXbx7XJp5300IeSryLJcF4I8l6xF4lzIrNBxTddfilWMC5vGoAYCgAeo2OhfqAemvhvYBwHSCAcIgGEQARgCsQmAaKwd_zvI59gTAg&num=1&sig=AOD64_0cnMw9oBzm_9JRTtD7F8A78wGIug&client=ca-pub-5910210021015564&adurl=http://ad.doubleclick.net/ddm/trackclk/N5751.276639GOOGLEADWORDS/B20225324.204006841%3Bdc_trk_aid%3D403743895%3Bdc_trk_cid%3D92289160%3Fhttps://union-click.jd.com/jdc%3Fd%3DGXqeiK" target="_blank">
                    <img width="100%" src="http://mpb2.iteye.com/ety/media/v1/0f000ZtVOyA0P6dcKBdl1s.jpg" alt="">
                </a>
            </div>


            <div class="picture3 " style="background: transparent;display: inline-block">
                <a href="http://www.baidu.com/cb.php?c=IgF_pyfqnHRvPHRdPHT0IZ0qnfK9ujYzn1mdrHfv0Aw-5HcdPjn3PjR0TAq15Hc1rH6LrjD0T1dBPW7-uWPbnvfLPAubnWR40AwY5HDdnjfLPWfLn1n0IgF_5y9YIZ0lQzqLILT8mh7GXh9EUhI1ULR8mvqVQ1q_TLn0ThfqnH60mhYqnfKsTWYs0ZNGujYzPW6zPWb40AqGujY1rHfLn0KWpyfqPWDLnWD0ULI85H00TZbqPfKWThnqPHfvP6" target="_blank">
                    <img width="100%" src="http://ubmcmm.baidustatic.com/media/v1/0f000ji9GcB5a1D4KlS1c0.gif" alt="">
                </a>
            </div>
        </div>

        <div class="col-sm-12 col-xs-12" style="padding: 0;margin-top: 10px">
            <div class="title">
                <b style="font-size: 16px">Recently Updated</b>

            </div>
            <div class="row" style="border: 1px solid #000;margin-bottom: 10px  ;  border: 1px solid #000;border-radius: 4px; padding: 10px 0;">
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book Name BOOk
                </div>
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book NameBOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    BOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    Nmae
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    10 Hrous
                </div>

            </div>

            <div class="row" style="border: 1px solid #000; margin-bottom: 10px ;  border: 1px solid #000;border-radius: 4px; padding: 10px 0;">
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book Name BOOk
                </div>
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book NameBOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    BOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    Nmae
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    10 Hrous
                </div>

            </div>

            <div class="row" style="border: 1px solid #000;margin-bottom: 10px  ;  border: 1px solid #000;border-radius: 4px; padding: 10px 0;">
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book Name BOOk
                </div>
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book NameBOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    BOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    Nmae
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    10 Hrous
                </div>

            </div>

            <div class="row" style="border: 1px solid #000;margin-bottom: 10px  ;  border: 1px solid #000;border-radius: 4px; padding: 10px 0;">
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book Name BOOk
                </div>
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book NameBOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    BOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    Nmae
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    10 Hrous
                </div>

            </div>

            <div class="row" style="border: 1px solid #000;margin-bottom: 10px  ;  border: 1px solid #000;border-radius: 4px; padding: 10px 0;">
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book Name BOOk
                </div>
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book NameBOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    BOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    Nmae
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    10 Hrous
                </div>

            </div>

            <div class="row" style="border: 1px solid #000;margin-bottom: 10px  ;  border: 1px solid #000;border-radius: 4px; padding: 10px 0;">
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book Name BOOk
                </div>
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book NameBOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    BOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    Nmae
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    10 Hrous
                </div>

            </div>

            <div class="row" style="border: 1px solid #000;margin-bottom: 10px  ;  border: 1px solid #000;border-radius: 4px; padding: 10px 0;">
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book Name BOOk
                </div>
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book NameBOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    BOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    Nmae
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    10 Hrous
                </div>

            </div>

            <div class="row" style="border: 1px solid #000;margin-bottom: 10px  ;  border: 1px solid #000;border-radius: 4px; padding: 10px 0;">
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book Name BOOk
                </div>
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book NameBOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    BOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    Nmae
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    10 Hrous
                </div>

            </div>

            <div class="row" style="border: 1px solid #000;margin-bottom: 10px  ;  border: 1px solid #000;border-radius: 4px; padding: 10px 0;">
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book Name BOOk
                </div>
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book NameBOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    BOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    Nmae
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    10 Hrous
                </div>

            </div>

            <div class="row" style="border: 1px solid #000;margin-bottom: 10px  ;  border: 1px solid #000;border-radius: 4px; padding: 10px 0;">
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book Name BOOk
                </div>
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book NameBOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    BOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    Nmae
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    10 Hrous
                </div>

            </div>

            <div class="row" style="border: 1px solid #000;margin-bottom: 10px  ;  border: 1px solid #000;border-radius: 4px; padding: 10px 0;">
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book Name BOOk
                </div>
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book NameBOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    BOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    Nmae
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    10 Hrous
                </div>

            </div>
            <div class="row" style="border: 1px solid #000;margin-bottom: 10px  ;  border: 1px solid #000;border-radius: 4px; padding: 10px 0;">
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book Name BOOk
                </div>
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book NameBOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    BOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    Nmae
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    10 Hrous
                </div>

            </div>
            <div class="row" style="border: 1px solid #000;margin-bottom: 10px  ;  border: 1px solid #000;border-radius: 4px; padding: 10px 0;">
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book Name BOOk
                </div>
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book NameBOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    BOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    Nmae
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    10 Hrous
                </div>

            </div>
            <div class="row" style="border: 1px solid #000;margin-bottom: 10px  ;  border: 1px solid #000;border-radius: 4px; padding: 10px 0;">
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book Name BOOk
                </div>
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book NameBOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    BOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    Nmae
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    10 Hrous
                </div>

            </div>
            <div class="row" style="border: 1px solid #000;margin-bottom: 10px  ;  border: 1px solid #000;border-radius: 4px; padding: 10px 0;">
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book Name BOOk
                </div>
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book NameBOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    BOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    Nmae
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    10 Hrous
                </div>

            </div>

            <div class="row" style="border: 1px solid #000;margin-bottom: 10px  ;  border: 1px solid #000;border-radius: 4px; padding: 10px 0;">
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book Name BOOk
                </div>
                <div class="col-sm-3 col-xs-3 rightLine">
                    BOOk book NameBOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    BOOk
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    Nmae
                </div>
                <div class="col-sm-2 col-xs-2 rightLine">
                    10 Hrous
                </div>

            </div>

            <div class="row" style="border: 1px solid #000;margin-bottom: 10px  ;  border: 1px solid #000;border-radius: 4px; padding: 10px 0;">
                <a href="#"> <div class="col-sm-12 col-xs-12 text-center">
                        +More Updates
                    </div>
                </a>

            </div>
        </div>

    </div>

    <div class="col-sm-3 col-xs-3" style="padding-right: 0">

        <div class="rightBook" >
            <div class="col-sm-12 col-xs-12" style="padding-right: 0">
                <div style="border: 1px solid #d6d6e4;border-bottom: none;    padding: 8px;">
                    <div class="col-sm-7 col-xs-7 text-left" style="font-weight: 900;padding: 0">
                        User Nickname
                    </div>
                    <div class="col-sm-5 col-xs-5 text-right" style="font-weight: 900">
                        13 hr ago
                    </div>
                    We have been pretty busy and quiet over the last several months
                </div>
            </div>
            <div class="col-sm-12 col-xs-12" style="padding-right: 0">
                <div class="">
                    <div class="infobox vote" style="min-height: 86px">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <figure class="col-xs-3 img-circle">
                                        <img class="img-responsive" src="img/5.jpg" alt="Small x2 league of legends world championship expected to sell out entire stadium 457273 2">
                                    </figure>
                                    <div class="col-xs-9 info">
                                        <p style="margin-top: 2px">Competitive gaming updates, videos!</p>
                                        <p style="text-align: center;">
                                            <i class="fa  fa-star" style="color: #FFCC03"></i>
                                            <i class="fa  fa-star" style="color: #FFCC03"> </i>
                                            <i class="fa  fa-star" style="color: #FFCC03"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                        </p>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="rightBook" >
            <div class="col-sm-12 col-xs-12" style="padding-right: 0">
                <div style="border: 1px solid #d6d6e4;border-bottom: none;    padding: 8px;">
                    <div class="col-sm-7 col-xs-7 text-left" style="font-weight: 900;padding: 0">
                        User Nickname
                    </div>
                    <div class="col-sm-5 col-xs-5 text-right" style="font-weight: 900">
                        13 hr ago
                    </div>
                    We have been pretty busy and quiet over the last several months
                </div>
            </div>
            <div class="col-sm-12 col-xs-12" style="padding-right: 0">
                <div class="">
                    <div class="infobox vote" style="min-height: 86px">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <figure class="col-xs-3 img-circle">
                                        <img class="img-responsive" src="img/4.jpg" alt="Small x2 league of legends world championship expected to sell out entire stadium 457273 2">
                                    </figure>
                                    <div class="col-xs-9 info">
                                        <p style="margin-top: 2px">Competitive gaming updates, videos!</p>
                                        <p style="text-align: center;">
                                            <i class="fa  fa-star" style="color: #FFCC03"></i>
                                            <i class="fa  fa-star" style="color: #FFCC03"> </i>
                                            <i class="fa  fa-star" style="color: #FFCC03"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                        </p>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="rightBook" >
            <div class="col-sm-12 col-xs-12" style="padding-right: 0">
                <div style="border: 1px solid #d6d6e4;border-bottom: none;    padding: 8px;">
                    <div class="col-sm-7 col-xs-7 text-left" style="font-weight: 900;padding: 0">
                        User Nickname
                    </div>
                    <div class="col-sm-5 col-xs-5 text-right" style="font-weight: 900">
                        13 hr ago
                    </div>
                    We have been pretty busy and quiet over the last several months
                </div>
            </div>
            <div class="col-sm-12 col-xs-12" style="padding-right: 0">
                <div class="">
                    <div class="infobox vote" style="min-height: 86px">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <figure class="col-xs-3 img-circle">
                                        <img class="img-responsive" src="img/3.jpg" alt="Small x2 league of legends world championship expected to sell out entire stadium 457273 2">
                                    </figure>
                                    <div class="col-xs-9 info">
                                        <p style="margin-top: 2px">Competitive gaming updates, videos!</p>
                                        <p style="text-align: center;">
                                            <i class="fa  fa-star" style="color: #FFCC03"></i>
                                            <i class="fa  fa-star" style="color: #FFCC03"> </i>
                                            <i class="fa  fa-star" style="color: #FFCC03"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                        </p>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-xs-12" style="padding-right: 0">
            <div class="picture4" style="background: transparent;overflow:hidden;">
                <a href="http://hotels.ctrip.com/events/jingbaochanpin.html#ctm_ref=ssc_hp_htl_sni_txt_5" target="_blank" >
                    <img width="100%" src="img/jb220x330.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</div>


<!--页面底部-->
<div class="site-footer fixed-sidebar-bottom-border" id="site-footer" style="padding-bottom: 40px">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 from-the-blog">
                <h3>Latest from the blog</h3>
                <h4><a href="#">Mid-year update for 2017</a></h4>
                <p class="post-excerpt">We have been pretty busy and quiet over the last several months, so we decided
                    to write a small status update and describe what we are working on.</p>
                <p class="link"><a href="#">Continue reading →</a></p>
            </div>

            <div class="col-md-4 col-md-offset-2 col-sm-6">
                <div class="social">
                    <div class="icons">
                        <a href="#" target="_blank"><i class="fa fa-envelope"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-share-alt-square"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-facebook-square"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>

                <form class="subscribe" id="subscribe-form" data-request="campaignSignup::onSignup"
                      data-request-update="'site/footer-signup-result': '#subscribe-form'">
                    <div class="input-group">
                        <input type="text" name="email" class="form-control no-auto-focus"
                               placeholder="Newsletter subscription">
                        <span class="input-group-btn">
                            <input type="submit" class="btn btn-primary" value="Subscribe">
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>


</body>
</html>