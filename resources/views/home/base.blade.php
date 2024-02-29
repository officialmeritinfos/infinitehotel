
<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$pageName}} || {{$siteName}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('home/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/animate.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    <link rel="stylesheet" href="{{asset('home/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
</head>
<body>
<div class="site-wrap">
    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <div class="site-navbar-wrap js-site-navbar bg-white">
        <div class="container">
            <div class="site-navbar bg-light">
                <div class="py-1">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <h2 class="mb-0 site-logo">
                                <a href="{{route('home.index')}}">
                                    <img src="{{asset('home/'.$web->logo)}}" style="width: 100px;">
                                </a>
                            </h2>
                        </div>
                        <div class="col-10">
                            <nav class="site-navigation text-right" role="navigation">
                                <div class="container">
                                    <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                                        <li class="active">
                                            <a href="{{route('home.index')}}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{route('home.about')}}">About</a>
                                        </li>
                                        <li>
                                            <a href="{{route('home.rooms')}}">Gallery</a>
                                        </li>
                                        <li><a href="{{route('home.contact')}}">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="footer-heading mb-4 text-white">About</h3>
                    <p>
                        Our accommodations are designed with your comfort in mind, featuring spacious rooms adorned with modern amenities and tasteful decor. Whether you're here for business or leisure, each of our rooms provides a peaceful retreat where you can unwind and rejuvenate after a long day.
                    </p>
                    <p><a href="{{route('home.about')}}" class="btn btn-primary pill text-white px-4">Read More</a></p>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="footer-heading mb-4 text-white">Quick Menu</h3>
                            <ul class="list-unstyled">
                                <li><a href="{{route('home.about')}}">About</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h3 class="footer-heading mb-4 text-white">Gallery</h3>
                            <ul class="list-unstyled">
                                <li><a href="{{route('home.rooms')}}">Gallery</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Icons</h3></div>
                    <div class="col-md-12">
                        <p>
                            <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                            <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                            <a href="#" class="p-2"><span class="icon-vimeo"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <p>

                        Copyright &copy; <script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="icon-heart text-primary" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>

                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="{{asset('home/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('home/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('home/js/jquery-ui.js')}}"></script>
<script src="{{asset('home/js/popper.min.js')}}"></script>
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<script src="{{asset('home/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('home/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('home/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('home/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('home/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('home/js/aos.js')}}"></script>
<script src="{{asset('home/js/mediaelement-and-player.min.js')}}"></script>
<script src="{{asset('home/js/main.js')}}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

        for (var i = 0; i < total; i++) {
            new MediaElementPlayer(mediaElements[i], {
                pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                shimScriptAccess: 'always',
                success: function () {
                    var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                    for (var j = 0; j < targetTotal; j++) {
                        target[j].style.visibility = 'visible';
                    }
                }
            });
        }
    });
</script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"8598ffddfb64d373","b":1,"version":"2024.2.1","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>
