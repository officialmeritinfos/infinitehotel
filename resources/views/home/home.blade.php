@extends('home.base')
@section('content')

    <div class="slide-one-item home-slider owl-carousel">
        <div class="site-blocks-cover overlay" style="background-image: url({{asset('home/images/home1.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 text-center" data-aos="fade">
                        <h1 class="mb-2">Welcome To {{$siteName}}</h1>
                        <h2 class="caption">Hotel &amp; Resort</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-blocks-cover overlay" style="background-image: url({{asset('home/images/home2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 text-center" data-aos="fade">
                        <h1 class="mb-2">Unique Experience</h1>
                        <h2 class="caption">Enjoy With Us</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-blocks-cover overlay" style="background-image: url({{asset('home/images/room4.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 text-center" data-aos="fade">
                        <h1 class="mb-2">Relaxing Room</h1>
                        <h2 class="caption">Your Room, Your Stay</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-5 mb-md-0">
                    <div class="img-border">
                        <a href="{{asset('home/images/pool.mp4')}}" class="popup-vimeo image-play">
<span class="icon-wrap">
<span class="icon icon-play"></span>
</span>
                            <img src="{{asset('home/images/homenight.jpg')}}" alt class="img-fluid">
                        </a>
                    </div>
                    <img src="{{asset('home/images/room7.jpg')}}" alt="Image" class="img-fluid image-absolute">
                </div>
                <div class="col-md-5 ml-auto">
                    <div class="section-heading text-left">
                        <h2 class="mb-5">About Us</h2>
                    </div>
                    <p class="mb-4" >Your oasis of tranquility nestled in the heart of Enugu, Nigeria. At {{$siteName}}, we believe that true hospitality is not just about providing a place to stay; it's about creating unforgettable experiences for our guests.</p>
                    <p class="mb-4">Located amidst the lush greenery of Enugu, our hotel offers a serene escape from the hustle and bustle of everyday life. From the moment you step through our doors, you'll be greeted by our warm and friendly staff, dedicated to ensuring that your stay with us is nothing short of perfect.</p>

                    <p><a href="{{asset('home/images/home1.mp4')}}" class="popup-vimeo text-uppercase">Watch Video <span class="icon-arrow-right small"></span></a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                    <h2 class="mb-5">Hotel Features</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="text-center p-4 item">
                        <span class="flaticon-pool display-3 mb-3 d-block text-primary"></span>
                        <h2 class="h5">Swimming Pool</h2>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="text-center p-4 item">
                        <span class="flaticon-desk display-3 mb-3 d-block text-primary"></span>
                        <h2 class="h5">Hotel Teller</h2>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="text-center p-4 item">
                        <span class="flaticon-exit display-3 mb-3 d-block text-primary"></span>
                        <h2 class="h5">Fire Exit</h2>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="text-center p-4 item">
                        <span class="flaticon-parking display-3 mb-3 d-block text-primary"></span>
                        <h2 class="h5">Car Parking</h2>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="text-center p-4 item">
                        <span class="flaticon-hair-dryer display-3 mb-3 d-block text-primary"></span>
                        <h2 class="h5">Salon</h2>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="text-center p-4 item">
                        <span class="flaticon-minibar display-3 mb-3 d-block text-primary"></span>
                        <h2 class="h5">Bar</h2>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="text-center p-4 item">
                        <span class="flaticon-drink display-3 mb-3 d-block text-primary"></span>
                        <h2 class="h5">Reception Hall</h2>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="text-center p-4 item">
                        <span class="flaticon-cab display-3 mb-3 d-block text-primary"></span>
                        <h2 class="h5">Relaxation Hall</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5 upcoming-events" style="background-image: url('{{asset('home/images/hero_1.jpg')}}'); background-attachment: fixed;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="text-white">Summer Promo 50% Off</h2>
                    <a href="#" class="text-white btn btn-outline-warning rounded-0 text-uppercase">Avail Now</a>
                </div>
                <div class="col-md-6">
                    <span class="caption">The Promo will start in</span>
                    <div id="date-countdown"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                    <h2 class="mb-5">Our Gallery</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($photos as $photo)
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="hotel-room text-center">
                            <a href="{{asset('home/images/gallery/'.$photo->photo)}}" class="d-block mb-0 thumbnail image-popup img-opacity">
                                <img src="{{asset('home/images/gallery/'.$photo->photo)}}" alt="Image" class="img-fluid">
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="site-section block-14 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                    <h2>What People Say</h2>
                </div>
            </div>
            <div class="nonloop-block-14 owl-carousel">
                <div class="p-4">
                    <div class="d-flex block-testimony">
                        <div class="person mr-3">
                            <img src="{{asset('home/images/person_1.jpg')}}" alt="Image" class="img-fluid rounded">
                        </div>
                        <div>
                            <h2 class="h5">Katie Johnson</h2>
                            <blockquote>&ldquo;
                                My stay at {{$siteName}} Hotel exceeded all expectations. From the moment I arrived, I was greeted with warmth and hospitality. The comfortable rooms and delicious cuisine made me feel right at home. Highly recommended!
                                &rdquo;</blockquote>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="d-flex block-testimony">
                        <div class="person mr-3">
                            <img src="{{asset('home/images/person_2.jpg')}}" alt="Image" class="img-fluid rounded">
                        </div>
                        <div>
                            <h2 class="h5">Jane Mars</h2>
                            <blockquote>&ldquo;"I had the most amazing experience at {{$siteName}} Hotel. The attention to detail and personalized service made me feel like a VIP. Thank you for making my stay in Enugu truly memorable!"&rdquo;</blockquote>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
