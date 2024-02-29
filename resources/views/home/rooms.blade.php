@extends('home.base')
@section('content')

    <div class="site-blocks-cover overlay" style="background-image: url({{asset('home/images/homenight4.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade">
                    <span class="caption mb-3">Luxurious Rooms</span>
                    <h1 class="mb-4">{{$pageName}}</h1>
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

@endsection
