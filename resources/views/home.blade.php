@extends('layouts.frontend')

@section('content')
    <div id="carousel-home">
        <div class="owl-carousel owl-theme">
            @if (!empty($sliders))
                @foreach ($sliders as $slider)
                <div class="owl-slide cover lazy" data-bg="url({{ asset($slider->thumbnail) }})">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 m-auto static">
                                    <div class="slide-text white text-center">
                                        <h2 class="owl-slide-animated owl-slide-title">{{ $slider->title }}</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            {{ $slider->sub_title }}
                                        </p>
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1 btn_scroll"
                                        href="{{route('menu') }}" role="button">Check Our Product</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               @endforeach
            @endif
        </div>
        <div id="icon_drag_mobile"></div>
    </div>

    <div class="pattern_2">
        <div class="container margin_120_100 home_intro">
            <div class="row justify-content-center d-flex align-items-center">
                <div class="col-lg-5 text-lg-center d-none d-lg-block" data-cue="slideInUp">
                    <figure>
                        <img src="{{ asset('assets/frontend/img/shop.jpg') }}" data-src="{{ asset('assets/frontend/img/shop.jpg') }}" width="354" height="440"
                            alt="" class="img-fluid lazy">
                        <a href="https://youtu.be/Yqcl5v371Ew?si=3wQpp9l65w3bZTbm" class="btn_play" data-cue="zoomIn"
                            data-delay="500"><span class="pulse_bt"><i class="arrow_triangle-right"></i></span></a>
                    </figure>
                </div>
                <div class="col-lg-5 pt-lg-4" data-cue="slideInUp" data-delay="500">
                    <div class="main_title">
                        <span><em></em></span>
                        <h2>About us</h2>
                        <p></p>
                    </div>
                    <p></p>
                    <p><img src="{{ asset('assets/frontend/img/signature.png') }}" width="140" height="50" alt="" class="mt-3"></p>
                </div>
            </div>
        </div>
    </div>


    <section class="container margin_120_100">
        <div class="row">
            <div class="col-xl-4">
                <a href="{{ route('menu') }}" class="img_container">
                    <img src="{{ asset('assets/frontend/img/banner_1.jpg') }}" class="lazy">
                    <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <h3>Our </h3>
                        <p>View Our product</p>
                    </div>
                </a>
            </div>
            <div class="col-xl-4">
                <a href="menu.html" class="img_container">
                    <img src="{{ asset('assets/frontend/img/banner_2.jpg') }}" class="lazy">
                    <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <h3>Our Blogs</h3>
                        <p>Checkout our latest blogs</p>
                    </div>
                </a>
            </div>
            <div class="col-xl-4">
                <a href="menu.html" class="img_container">
                    <img src="{{ asset('assets/frontend/img/banner_3.jpg') }}" class="lazy">
                    <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <h3>Say Something?</h3>
                        <p>Send us a message</p>
                    </div>
                </a>
            </div>
            <div class="col-xl-4">
                <a href="menu.html" class="img_container">
                    <img src="{{ asset('assets/frontend/img/banner_6.jpg') }}" class="lazy">
                    <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <h3>Photo Gallery</h3>
                        <p>See photos from our latest event</p>
                    </div>
                </a>
            </div>
            <div class="col-xl-4">
                <a href="menu.html" class="img_container">
                    <img src="{{ asset('assets/frontend/img/banner_5.jpg') }}" class="lazy">
                    <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <h3>BOOK A TABLE</h3>
                        <p>Reserve a table for you</p>
                    </div>
                </a>
            </div>
            <div class="col-xl-4">
                <a href="menu.html" class="img_container">
                    <img src="{{ asset('assets/frontend/img/banner_6.jpg') }}" class="lazy">
                    <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <h3>Video Gallery</h3>
                        <p>See videos from our latest event</p>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <div class="bg_gray">
        <div class="container margin_120_100" data-cue="slideInUp">
            <div class="main_title center mb-5">
                <span><em></em></span>
                <h2>Our Products</h2>
            </div>
            <div class="row homepage add_bottom_25">
                <div class="col-xl-8">
                    <div class="row">
                        @if (!empty($menus))
                            @foreach ($menus as $menu)
                            <div class="col-lg-6">
                                <div class="menu_item">
                                    <figure class="magnific-gallery" data-cue="slideInUp">
                                        <a href="{{ $menu->thumbnail }}" title="{{ $menu->title }}"
                                            data-effect="mfp-zoom-in">
                                            <img src="{{ $menu->thumbnail }}"
                                            data-src="{{ $menu->thumbnail }}" class="lazy" alt="">
                                        </a>
                                    </figure>
                                    <div class="menu_title">
                                        <h3>{{ $menu->title }}</h3><em>${{ $menu->price }}</em>
                                    </div>
                                    <p>Raspberries, Blackberries</p>
                                    @guest
                                    <a href="javascript:void(0)" class="btn_1" data-bs-toggle="modal" data-bs-target="#exampleModal">add to cart</a>
                                    @else
                                    <a class="btn_1" href="{{ route('cart.add' , [$menu->id, auth()->user()->id])}}">add to cart</a>
                                    @endguest
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
       
            </div>
        </div>
    </div>
@endsection
