<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>zVintauge - Free Html5 Templates</title>
    <meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
    <meta name="author" content="https://www.zerotheme.com">

    <!-- Mobile Specific Metas
	================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
	================================================== -->
    <link rel="stylesheet" href="{{  asset('css/zerogrid.css') }}">
    <link rel="stylesheet" href="{{  asset('css/style.css') }}">

    <!-- Custom Fonts -->
    <link href="{{  asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="{{  asset('css/menu.css') }}">
    <script src="{{  asset('js/jquery1111.min.js') }}" type="text/javascript"></script>
    <script src="{{  asset('js/script.js') }}"></script>

    <!-- Owl Carousel Assets -->
    <link href="{{  asset('owl-carousel/owl.carousel.css') }}" rel="stylesheet">

    <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="{{  asset('http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode') }}">
           <img src="{{  asset('http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg') }}" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="{{  asset('js/html5.js') }}"></script>
		<script src="{{  asset('js/css3-mediaqueries.js') }}"></script>
	<![endif]-->

</head>
<body class="home-page">
<div class="wrap-body">
<header class="">
    <div class="logo">
        <a href="#">KYRGYZSTAN</a>
        <span>Красивых Землях & Красывые Люди</span>
    </div>
    <div id="cssmenu" class="align-center">
        <ul>
            <li class="/active"><a href="/"><span>Главная</span></a></li>
            <li><a href="/gallery"><span>Галлерия</span></a></li>
            <li class="has-sub"><a href="/archive"><span>Блог</span></a>
                <ul>
                    <li class="has-sub"><a href="message"><span>Сообщение</span></a>
                        <ul>
                            <li><a href="toto"><span>Тото</span></a></li>
                            <li class="last"><a href="foto"><span>Фото</span></a></li>
                            <li class="last"><a href="#"><span>as</span></a></li>
                            <li class="last"><a href="#"><span>as</span></a></li>
                            <li class="last"><a href="#"><span>as</span></a></li>
                            <li class="last"><a href="#"><span>as</span></a></li>

                        </ul>
                    </li>
                    <li class="has-sub"><a href="#"><span>Item 2</span></a>
                        <ul>
                            <li><a href="#"><span>Sub Item</span></a></li>
                            <li class="last"><a href="#"><span>Sub Item</span></a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="svaze"><span>связь</span></a></li>
                    <li class="has-sub"><a href="exemple"><span>exemple</span></a></li>
                    <li class="has-sub"><a href="#"><span>ccc</span></a></li>
                    <li class="has-sub"><a href="#"><span>ccc</span></a></li>
                    <li class="has-sub"><a href="#"><span>ccc</span></a></li>
                    <li class="has-sub"><a href="#"><span>ccc</span></a></li>

                </ul>
            </li>
            <li><a href="/about"><span>About</span></a></li>
            <li class="last"><a href="/contact"><span>Контакты</span></a></li>
        </ul>
    </div>
    @yield('carusel')
</header>

@yield('content')

<footer>
    <div class="zerogrid wrap-footer">
        <div class="row">
            <div class="col-1-4 col-footer-1">
                <div class="wrap-col">
                    <h3 class="widget-title">About Us</h3>
                    <p>Ut volutpat consectetur aliquam. Curabitur auctor in nis ulum ornare. Metus elit vehicula dui. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium</p>
                </div>
            </div>
            <div class="col-1-4 col-footer-2">
                <div class="wrap-col">
                    <h3 class="widget-title">Recent Post</h3>
                    <ul>
                        <li><a href="#">MOST VISITED COUNTRIES</a></li>
                        <li><a href="#">5 PLACES THAT MAKE A GREAT HOLIDAY</a></li>
                        <li><a href="#">PEBBLE TIME STEEL IS ON TRACK TO SHIP IN JULY</a></li>
                        <li><a href="#">STARTUP COMPANY???S CO-FOUNDER TALKS ON HIS NEW PRODUCT</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-1-4 col-footer-3">
                <div class="wrap-col">
                    <h3 class="widget-title">Tag Cloud</h3>
                    <a href="/">Главная</a>
                    <a href="gallery">Галлерия</a>
                    <a href="archive">Блог</a>
                    <a href="about">about</a>
                    <a href="contact">Контакты</a>
                    <a href="#">home</a>
                    <a href="#">likes</a>
                    <a href="#">photo</a>
                    <a href="#">link</a>
                    <a href="#">law</a>
                    <a href="#">shopping</a>
                    <a href="#">skate</a>
                    <a href="#">scholl</a>
                    <a href="#">video</a>
                    <a href="#">travel</a>
                    <a href="#">images</a>
                    <a href="#">love</a>
                    <a href="#">lists</a>
                    <a href="#">makeup</a>
                    <a href="#">media</a>
                    <a href="#">password</a>
                    <a href="#">pagination</a>
                    <a href="#">wildlife</a>
                </div>
            </div>
            <div class="col-1-4 col-footer-4">
                <div class="wrap-col">
                    <h3 class="widget-title">Gallery</h3>
                    <div class="row">
                        <div class="col-1-3">
                            <div class="wrap-col">
                                <a href="#"><img src="images/carysel/1.jpg"></a>
                                <a href="#"><img src="images/carysel/2.jpg"></a>
                                <a href="#"><img src="images/carysel/3.jpg"></a>
                            </div>
                        </div>
                        <div class="col-1-3">
                            <div class="wrap-col">
                                <a href="#"><img src="images/carysel/4.jpg"></a>
                                <a href="#"><img src="images/carysel/5.jpg"></a>
                                <a href="#"><img src="images/carysel/6.jpg"></a>
                            </div>
                        </div>
                        <div class="col-1-3">
                            <div class="wrap-col">
                                <a href="#"><img src="images/7oblast/15.jpeg"></a>
                                <a href="#"><img src="images/7oblast/22.jpeg"></a>
                                <a href="#"><img src="images/7oblast/33.jpeg"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="zerogrid bottom-footer">
        <div class="row">
            <div class="bottom-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
                <a href="#"><i class="fa fa-vimeo"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
        <div class="copyright">
            Copyright @ - Designed by <a href="https://www.zerotheme.com">ZEROTHEME</a>
        </div>
    </div>
</footer>
    <!-- carousel -->
    <script src="{{  asset('owl-carousel/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#owl-slide").owlCarousel({
                autoPlay: 3000,
                items : 1,
                itemsDesktop : [1199,1],
                itemsDesktopSmall : [979,1],
                itemsTablet : [768, 1],
                itemsMobile : [479, 1],
                navigation: true,
                navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
                pagination: false
            });
        });
    </script>
</div>
</body>
</html>
