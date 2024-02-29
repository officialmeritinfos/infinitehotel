@extends('home.base')
@section('content')

    <div class="site-blocks-cover overlay" style="background-image: url({{asset('home/images/home2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade">
                    <span class="caption mb-3">About</span>
                    <h1 class="mb-4">{{$pageName}}</h1>
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
                    <p class="mb-4">
                        Welcome to {{$siteName}} Hotel, your oasis of tranquility nestled in the heart of Enugu, Nigeria. At {{$siteName}}, we believe that true hospitality is not just about providing a place to stay; it's about creating unforgettable experiences for our guests.
                    </p>
                    <p class="mb-4" >Your oasis of tranquility nestled in the heart of Enugu, Nigeria. At {{$siteName}}, we believe that true hospitality is not just about providing a place to stay; it's about creating unforgettable experiences for our guests.</p>
                    <p class="mb-4">Located amidst the lush greenery of Enugu, our hotel offers a serene escape from the hustle and bustle of everyday life. From the moment you step through our doors, you'll be greeted by our warm and friendly staff, dedicated to ensuring that your stay with us is nothing short of perfect.</p>
                    <p>Our accommodations are designed with your comfort in mind, featuring spacious rooms adorned with modern amenities and tasteful decor. Whether you're here for business or leisure, each of our rooms provides a peaceful retreat where you can unwind and rejuvenate after a long day.</p>
                    <p>Indulge your senses with our delectable culinary offerings at our on-site restaurant, where our talented chefs craft mouthwatering dishes using only the freshest ingredients. From savory local delicacies to international favorites, there's something to tantalize every palate.</p>
                    <p>At {{$siteName}} Hotel, we believe in going above and beyond to exceed your expectations. Whether it's arranging personalized excursions to explore the vibrant culture of Enugu or providing attentive service to ensure your every need is met, we're committed to making your stay with us truly unforgettable.</p>
                    <p>Experience the perfect blend of comfort, luxury, and hospitality at {{$siteName}} Hotel. Your journey to relaxation begins here.</p>

                    <p><a href="{{asset('home/images/home1.mp4')}}" class="popup-vimeo text-uppercase">Watch Video <span class="icon-arrow-right small"></span></a></p>
                </div>
            </div>
        </div>
    </div>

@endsection
