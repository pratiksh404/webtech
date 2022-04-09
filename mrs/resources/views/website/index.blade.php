@extends('website.layouts.app')

@section('content')
<!-- owl-carousel Banner Start -->
@include('website.layouts.pages.home.sliders')
<!-- owl-carousel Banner End -->

<!-- owl-carousel Videos Section-1 Start -->
@include('website.layouts.pages.home.latest_movies')
<!-- owl-carousel Videos Section-1 End -->

<!-- owl-carousel Videos Section-2 Start -->
@include('website.layouts.pages.home.most_watched_movies')
<!-- owl-carousel Videos Section-2 End -->

<!-- Slick Slider start -->
<section class="gen-section-padding-2 pt-0 pb-0">
    <div class="container">
        <div class="home-singal-silder">
            <div class="gen-nav-movies gen-banner-movies">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider slider-for">
                            <!-- Slider Items -->
                            <div class="slider-item" style="background: url('images/background/asset-4.jpeg')">
                                <div class="gen-slick-slider h-100">
                                    <div class="gen-movie-contain h-100">
                                        <div class="container h-100">
                                            <div class="row align-items-center h-100">
                                                <div class="col-lg-6">
                                                    <div class="gen-movie-info">
                                                        <h3>thieve the bank</h3>
                                                        <p>Streamlab is a long established fact that a reader will be
                                                            distracted by
                                                            the readable content of a page when Streamlab at its layout
                                                            Streamlab.
                                                        </p>

                                                    </div>
                                                    <div class="gen-movie-action">
                                                        <div class="gen-btn-container button-1">
                                                            <a class="gen-button" href="#" tabindex="0">
                                                                <i aria-hidden="true" class="ion ion-play"></i>
                                                                <span class="text">Play Now</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item" style="background: url('images/background/asset-23.jpeg')">
                                <div class="gen-slick-slider h-100">
                                    <div class="gen-movie-contain h-100">
                                        <div class="container h-100">
                                            <div class="row align-items-center h-100">
                                                <div class="col-lg-6">
                                                    <div class="gen-movie-info">
                                                        <h3>Love your life</h3>
                                                        <p>Streamlab is a long established fact that a reader will be
                                                            distracted by
                                                            the readable content of a page when Streamlab at its layout
                                                            Streamlab.
                                                        </p>

                                                    </div>
                                                    <div class="gen-movie-action">
                                                        <div class="gen-btn-container button-1">
                                                            <a class="gen-button" href="#" tabindex="0">
                                                                <i aria-hidden="true" class="ion ion-play"></i>
                                                                <span class="text">Play Now</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item" style="background: url('images/background/asset-24.jpeg')">
                                <div class="gen-slick-slider h-100">
                                    <div class="gen-movie-contain h-100">
                                        <div class="container h-100">
                                            <div class="row align-items-center h-100">
                                                <div class="col-lg-6">
                                                    <div class="gen-movie-info">
                                                        <h3>The Last Witness</h3>
                                                        <p>Streamlab is a long established fact that a reader will be
                                                            distracted by
                                                            the readable content of a page when Streamlab at its layout
                                                            Streamlab.
                                                        </p>

                                                    </div>
                                                    <div class="gen-movie-action">
                                                        <div class="gen-btn-container button-1">
                                                            <a class="gen-button" href="#" tabindex="0">
                                                                <i aria-hidden="true" class="ion ion-play"></i>
                                                                <span class="text">Play Now</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item" style="background: url('images/background/asset-25.jpeg')">
                                <div class="gen-slick-slider h-100">
                                    <div class="gen-movie-contain h-100">
                                        <div class="container h-100">
                                            <div class="row align-items-center h-100">
                                                <div class="col-lg-6">
                                                    <div class="gen-movie-info">
                                                        <h3>Fight For Life</h3>
                                                        <p>Streamlab is a long established fact that a reader will be
                                                            distracted by
                                                            the readable content of a page when Streamlab at its layout
                                                            Streamlab.
                                                        </p>

                                                    </div>
                                                    <div class="gen-movie-action">
                                                        <div class="gen-btn-container button-1">
                                                            <a class="gen-button" href="#" tabindex="0">
                                                                <i aria-hidden="true" class="ion ion-play"></i>
                                                                <span class="text">Play Now</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider Items -->
                        </div>
                        <div class="slider slider-nav">
                            <div class="slider-nav-contain">
                                <div class="gen-nav-img">
                                    <img src="{{asset('images/background/asset-4.jpeg')}}" alt=" steamlab-image">
                                </div>
                                <div class="movie-info">
                                    <h3>thieve the bank</h3>
                                    <div class="gen-movie-meta-holder">
                                        <ul>
                                            <li>30mins</li>
                                            <li>
                                                <a href="action.html">
                                                    Action </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-nav-contain">
                                <div class="gen-nav-img">
                                    <img src="{{asset('images/background/asset-23.jpeg')}}" alt="
                                        streamlab-image">
                                </div>
                                <div class="movie-info">
                                    <h3>Love your life</h3>
                                    <div class="gen-movie-meta-holder">
                                        <ul>
                                            <li>1hr 46mins</li>
                                            <li>
                                                <a href="action.html">
                                                    Action </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-nav-contain">
                                <div class="gen-nav-img">
                                    <img src="{{asset('images/background/asset-24.jpeg')}}" alt="
                                        streamlab-image">
                                </div>
                                <div class="movie-info">
                                    <h3>The Last Witness</h3>
                                    <div class="gen-movie-meta-holder">
                                        <ul>
                                            <li>1hr 37 mins</li>
                                            <li>
                                                <a href="action.html">
                                                    Action </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-nav-contain">
                                <div class="gen-nav-img">
                                    <img src="{{asset('images/background/asset-25.jpeg')}}" alt="
                                        streamlab-image">
                                </div>
                                <div class="movie-info">
                                    <h3>Fight For Life</h3>
                                    <div class="gen-movie-meta-holder">
                                        <ul>
                                            <li>2hr 25 mins</li>
                                            <li>
                                                <a href="action.html">
                                                    Action </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Slick Slider End -->

<!-- owl-carousel Videos Section-3 Start -->
<section class="gen-section-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <h4 class="gen-heading-title">Watch For Free: Movie Mania</h4>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-inline-block">
                <div class="gen-movie-action">
                    <div class="gen-btn-container text-right">
                        <a href="tv-shows-pagination.html" class="gen-button gen-button-flat">
                            <span class="text">More Videos</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="gen-style-2">
                    <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true" data-desk_num="4"
                        data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="false"
                        data-loop="false" data-margin="30">


                        <div class="item">
                            <div
                                class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-adventure movie_genre-drama">
                                <div class="gen-carousel-movies-style-2 movie-grid style-2">
                                    <div class="gen-movie-contain">
                                        <div class="gen-movie-img">
                                            <img src="{{asset('images/background/asset-1.jpeg')}}" alt="
                                                owl-carousel-video-images">
                                            <div class="gen-movie-add">
                                                <div class="wpulike wpulike-heart">
                                                    <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button
                                                            type="button"
                                                            class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                                </div>
                                                <ul class="menu bottomRight">
                                                    <li class="share top">
                                                        <i class="fa fa-share-alt"></i>
                                                        <ul class="submenu">
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-instagram"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="movie-actions--link_add-to-playlist dropdown">
                                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                                            class="fa fa-plus"></i></a>
                                                    <div class="dropdown-menu mCustomScrollbar">
                                                        <div class="mCustomScrollBox">
                                                            <div class="mCSB_container">
                                                                <a class="login-link" href="register.html">Sign in to
                                                                    add this movie
                                                                    to a
                                                                    playlist.</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gen-movie-action">
                                                <a href="single-movie.html" class="gen-button">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="gen-info-contain">
                                            <div class="gen-movie-info">
                                                <h3><a href="single-movie.html">King of Skull</a></h3>
                                            </div>
                                            <div class="gen-movie-meta-holder">
                                                <ul>
                                                    <li>2hr 13mins</li>
                                                    <li>
                                                        <a href="action.html"><span>Action</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #post-## -->
                        </div>


                        <div class="item">
                            <div class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action">
                                <div class="gen-carousel-movies-style-2 movie-grid style-2">
                                    <div class="gen-movie-contain">
                                        <div class="gen-movie-img">
                                            <img src="{{asset('images/background/asset-26.jpeg')}}" alt="
                                                owl-carousel-video-images">
                                            <div class="gen-movie-add">
                                                <div class="wpulike wpulike-heart">
                                                    <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button
                                                            type="button"
                                                            class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                                </div>
                                                <ul class="menu bottomRight">
                                                    <li class="share top">
                                                        <i class="fa fa-share-alt"></i>
                                                        <ul class="submenu">
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-instagram"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="movie-actions--link_add-to-playlist dropdown">
                                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                                            class="fa fa-plus"></i></a>
                                                    <div class="dropdown-menu mCustomScrollbar">
                                                        <div class="mCustomScrollBox">
                                                            <div class="mCSB_container">
                                                                <a class="login-link" href="register.html">Sign in to
                                                                    add this movie
                                                                    to a
                                                                    playlist.</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gen-movie-action">
                                                <a href="single-movie.html" class="gen-button">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="gen-info-contain">
                                            <div class="gen-movie-info">
                                                <h3><a href="single-movie.html">Spaceman The Voyager</a></h3>
                                            </div>
                                            <div class="gen-movie-meta-holder">
                                                <ul>
                                                    <li>1h 32mins</li>
                                                    <li>
                                                        <a href="action.html"><span>Action</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #post-## -->
                        </div>


                        <div class="item">
                            <div
                                class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-drama movie_tag-4k-ultra movie_tag-brother movie_tag-king movie_tag-premieres">
                                <div class="gen-carousel-movies-style-2 movie-grid style-2">
                                    <div class="gen-movie-contain">
                                        <div class="gen-movie-img">
                                            <img src="{{asset('images/background/asset-27.jpeg')}}" alt="
                                                owl-carousel-video-images">
                                            <div class="gen-movie-add">
                                                <div class="wpulike wpulike-heart">
                                                    <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button
                                                            type="button"
                                                            class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                                </div>
                                                <ul class="menu bottomRight">
                                                    <li class="share top">
                                                        <i class="fa fa-share-alt"></i>
                                                        <ul class="submenu">
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-instagram"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="movie-actions--link_add-to-playlist dropdown">
                                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                                            class="fa fa-plus"></i></a>
                                                    <div class="dropdown-menu mCustomScrollbar">
                                                        <div class="mCustomScrollBox">
                                                            <div class="mCSB_container">
                                                                <a class="login-link" href="register.html">Sign in to
                                                                    add this movie
                                                                    to a
                                                                    playlist.</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gen-movie-action">
                                                <a href="single-movie.html" class="gen-button">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="gen-info-contain">
                                            <div class="gen-movie-info">
                                                <h3><a href="single-movie.html">I Can Only Imagine</a></h3>
                                            </div>
                                            <div class="gen-movie-meta-holder">
                                                <ul>
                                                    <li>1hr 50mins</li>
                                                    <li>
                                                        <a href="drama.html"><span>Drama</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #post-## -->
                        </div>


                        <div class="item">
                            <div
                                class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-comedy movie_tag-4k-ultra movie_tag-brother movie_tag-premieres movie_tag-viking">
                                <div class="gen-carousel-movies-style-2 movie-grid style-2">
                                    <div class="gen-movie-contain">
                                        <div class="gen-movie-img">
                                            <img src="{{asset('images/background/asset-3.jpeg')}}" alt="
                                                owl-carousel-video-images">
                                            <div class="gen-movie-add">
                                                <div class="wpulike wpulike-heart">
                                                    <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button
                                                            type="button"
                                                            class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                                </div>
                                                <ul class="menu bottomRight">
                                                    <li class="share top">
                                                        <i class="fa fa-share-alt"></i>
                                                        <ul class="submenu">
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-instagram"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="movie-actions--link_add-to-playlist dropdown">
                                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                                            class="fa fa-plus"></i></a>
                                                    <div class="dropdown-menu mCustomScrollbar">
                                                        <div class="mCustomScrollBox">
                                                            <div class="mCSB_container">
                                                                <a class="login-link" href="register.html">Sign in to
                                                                    add this movie
                                                                    to a
                                                                    playlist.</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gen-movie-action">
                                                <a href="single-movie.html" class="gen-button">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="gen-info-contain">
                                            <div class="gen-movie-info">
                                                <h3><a href="single-movie.html">The Express</a></h3>
                                            </div>
                                            <div class="gen-movie-meta-holder">
                                                <ul>
                                                    <li>2hr 00mins</li>
                                                    <li>
                                                        <a href="action.html"><span>Action</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #post-## -->
                        </div>


                        <div class="item">
                            <div
                                class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-adventure movie_tag-brother movie_tag-king movie_tag-premieres movie_tag-viking">
                                <div class="gen-carousel-movies-style-2 movie-grid style-2">
                                    <div class="gen-movie-contain">
                                        <div class="gen-movie-img">
                                            <img src="{{asset('images/background/asset-28.jpeg')}}" alt="
                                                owl-carousel-video-images">
                                            <div class="gen-movie-add">
                                                <div class="movie-actions--link_add-to-playlist dropdown">
                                                    <a class="dropdown-toggle" href="#"><i class="fa fa-plus"></i></a>
                                                    <div class="dropdown-menu">
                                                        <a class="login-link" href="register.html">Sign
                                                            in to add this movie to a playlist.</a>
                                                    </div>
                                                </div>
                                                <div class="wpulike wpulike-heart">
                                                    <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button
                                                            type="button" aria-label="Like Button"
                                                            class="wp_ulike_btn wp_ulike_put_image">
                                                        </button>
                                                    </div>
                                                </div>
                                                <ul class="menu bottomRight">
                                                    <li class="share top">
                                                        <i class="fa fa-share-alt"></i>
                                                        <ul class="submenu">
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-instagram"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="gen-movie-action">
                                                <a href="single-movie.html" class="gen-button">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="gen-info-contain">
                                            <div class="gen-movie-info">
                                                <h3><a href="single-movie.html">Chapter & Verse</a></h3>
                                            </div>
                                            <div class="gen-movie-meta-holder">
                                                <ul>
                                                    <li>1hr 37 mins</li>
                                                    <li>
                                                        <a href="action.html"><span>Action</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #post-## -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- owl-carousel Videos Section-3 End -->

<!-- owl-carousel images Start -->
<section class="pt-0 gen-section-padding-2 home-singal-silder">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="gen-banner-movies">
                    <div class="owl-carousel owl-loaded owl-drag" data-dots="true" data-nav="false" data-desk_num="1"
                        data-lap_num="1" data-tab_num="1" data-mob_num="1" data-mob_sm="1" data-autoplay="true"
                        data-loop="true" data-margin="30">
                        <div class="item" style="background: url('images/background/asset-20.jpeg')">
                            <div class="gen-movie-contain h-100">
                                <div class="container h-100">
                                    <div class="row align-items-center h-100">
                                        <div class="col-xl-6">
                                            <div class="gen-movie-info">
                                                <h3>Command in your hand</h3>
                                            </div>
                                            <div class="gen-movie-meta-holder">
                                                <ul>
                                                    <li>1 Season</li>
                                                    <li>3 Episode</li>
                                                    <li>2013</li>
                                                    <li>
                                                        <a href="#"><span>Comedy</span></a>
                                                    </li>
                                                </ul>
                                                <p>Streamlab is a long established fact that a reader will be distracted
                                                    by the
                                                    readable content of a page when Streamlab at its layout Streamlab.
                                                </p>
                                            </div>
                                            <div class="gen-movie-action">
                                                <div class="gen-btn-container">
                                                    <a href="single-episode.html" class="gen-button gen-button-dark">
                                                        <span class="text">Play now</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item" style="background: url('images/background/asset-21.jpeg')">
                            <div class="gen-movie-contain h-100">
                                <div class="container  h-100">
                                    <div class="row align-items-center h-100">
                                        <div class="col-xl-6">
                                            <div class="gen-movie-info">
                                                <h3>stories of the dark</h3>
                                            </div>
                                            <div class="gen-movie-meta-holder">
                                                <ul>
                                                    <li>1 Season</li>
                                                    <li>5 Episode</li>
                                                    <li>2015 to 2016</li>
                                                    <li>
                                                        <a href="#"><span>Biography</span></a>
                                                    </li>
                                                </ul>
                                                <p>Streamlab is a long established fact that a reader will be distracted
                                                    by the
                                                    readable content of a page when Streamlab at its layout Streamlab.
                                                </p>
                                            </div>
                                            <div class="gen-movie-action">
                                                <div class="gen-btn-container button-1">
                                                    <a href="single-episode.html" class="gen-button gen-button-dark">
                                                        <span class="text">Play now</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item" style="background: url('images/background/asset-37.jpeg')">
                            <div class="gen-movie-contain h-100">
                                <div class="container  h-100">
                                    <div class="row align-items-center h-100">
                                        <div class="col-xl-6">
                                            <div class="gen-movie-info">
                                                <h3>Against Beast</h3>
                                            </div>
                                            <div class="gen-movie-meta-holder">
                                                <ul>
                                                    <li>1 Season</li>
                                                    <li>1 Episode</li>
                                                    <li>2017 to 2018</li>
                                                    <li>
                                                        <a href="#"><span>Drama</span></a>
                                                    </li>
                                                </ul>
                                                <p>Streamlab is a long established fact that a reader will be distracted
                                                    by the
                                                    readable content of a page when Streamlab at its layout Streamlab.
                                                </p>
                                            </div>
                                            <div class="gen-movie-action">
                                                <div class="gen-btn-container button-1">
                                                    <a href="single-episode.html" class="gen-button gen-button-dark">
                                                        <span class="text">Play now</span>
                                                    </a>
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
        </div>
    </div>
</section>
<!-- owl-carousel images End -->

<!-- owl-carousel Videos Section-4 Start -->
<section class="pt-0 gen-section-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <h4 class="gen-heading-title">All Time Hits</h4>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-inline-block">
                <div class="gen-movie-action">
                    <div class="gen-btn-container text-right">
                        <a href="tv-shows-pagination.html" class="gen-button gen-button-flat">
                            <span class="text">More Videos</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="gen-style-2">
                    <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true" data-desk_num="4"
                        data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="false"
                        data-loop="false" data-margin="30">
                        <div class="item">
                            <div
                                class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-adventure movie_genre-drama">
                                <div class="gen-carousel-movies-style-2 movie-grid style-2">
                                    <div class="gen-movie-contain">
                                        <div class="gen-movie-img">
                                            <img src="{{asset('images/background/asset-10.jpeg')}}" alt="
                                                owl-carousel-video-image">
                                            <div class="gen-movie-add">
                                                <div class="wpulike wpulike-heart">
                                                    <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button
                                                            type="button"
                                                            class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                                </div>
                                                <ul class="menu bottomRight">
                                                    <li class="share top">
                                                        <i class="fa fa-share-alt"></i>
                                                        <ul class="submenu">
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-instagram"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="movie-actions--link_add-to-playlist dropdown">
                                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                                            class="fa fa-plus"></i></a>
                                                    <div class="dropdown-menu mCustomScrollbar">
                                                        <div class="mCustomScrollBox">
                                                            <div class="mCSB_container">
                                                                <a class="login-link" href="register.html">Sign in to
                                                                    add this movie
                                                                    to a
                                                                    playlist.</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gen-movie-action">
                                                <a href="single-movie.html" class="gen-button">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="gen-info-contain">
                                            <div class="gen-movie-info">
                                                <h3><a href="single-movie.html">skull of myths</a>
                                                </h3>
                                            </div>
                                            <div class="gen-movie-meta-holder">
                                                <ul>
                                                    <li>1hr 24mins</li>
                                                    <li>
                                                        <a href="action.html"><span>Action</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #post-## -->
                        </div>

                        <div class="item">
                            <div class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action">
                                <div class="gen-carousel-movies-style-2 movie-grid style-2">
                                    <div class="gen-movie-contain">
                                        <div class="gen-movie-img">
                                            <img src="{{asset('images/background/asset-12.jpeg')}}" alt="
                                                owl-carousel-video-image">
                                            <div class="gen-movie-add">
                                                <div class="wpulike wpulike-heart">
                                                    <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button
                                                            type="button"
                                                            class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                                </div>
                                                <ul class="menu bottomRight">
                                                    <li class="share top">
                                                        <i class="fa fa-share-alt"></i>
                                                        <ul class="submenu">
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-instagram"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="movie-actions--link_add-to-playlist dropdown">
                                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                                            class="fa fa-plus"></i></a>
                                                    <div class="dropdown-menu mCustomScrollbar">
                                                        <div class="mCustomScrollBox">
                                                            <div class="mCSB_container">
                                                                <a class="login-link" href="register.html">Sign in to
                                                                    add this movie
                                                                    to a
                                                                    playlist.</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gen-movie-action">
                                                <a href="single-movie.html" class="gen-button">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="gen-info-contain">
                                            <div class="gen-movie-info">
                                                <h3><a href="single-movie.html">common man's idea</a>
                                                </h3>
                                            </div>
                                            <div class="gen-movie-meta-holder">
                                                <ul>
                                                    <li>1hr 51mins</li>
                                                    <li>
                                                        <a href="action.html"><span>Action</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #post-## -->
                        </div>


                        <div class="item">
                            <div
                                class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-drama movie_tag-4k-ultra movie_tag-brother movie_tag-king movie_tag-premieres">
                                <div class="gen-carousel-movies-style-2 movie-grid style-2">
                                    <div class="gen-movie-contain">
                                        <div class="gen-movie-img">
                                            <img src="{{asset('images/background/asset-29.jpeg')}}" alt="
                                                owl-carousel-video-image">
                                            <div class="gen-movie-add">
                                                <div class="wpulike wpulike-heart">
                                                    <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button
                                                            type="button"
                                                            class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                                </div>
                                                <ul class="menu bottomRight">
                                                    <li class="share top">
                                                        <i class="fa fa-share-alt"></i>
                                                        <ul class="submenu">
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-instagram"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="movie-actions--link_add-to-playlist dropdown">
                                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                                            class="fa fa-plus"></i></a>
                                                    <div class="dropdown-menu mCustomScrollbar">
                                                        <div class="mCustomScrollBox">
                                                            <div class="mCSB_container">
                                                                <a class="login-link" href="register.html">Sign in to
                                                                    add this movie
                                                                    to a
                                                                    playlist.</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gen-movie-action">
                                                <a href="single-movie.html" class="gen-button">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="gen-info-contain">
                                            <div class="gen-movie-info">
                                                <h3><a href="single-movie.html">shimu the elephant</a>
                                                </h3>
                                            </div>
                                            <div class="gen-movie-meta-holder">
                                                <ul>
                                                    <li>1hr 54mins</li>
                                                    <li>
                                                        <a href="drama.html"><span>Drama</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #post-## -->
                        </div>


                        <div class="item">
                            <div
                                class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-comedy movie_tag-4k-ultra movie_tag-brother movie_tag-premieres movie_tag-viking">
                                <div class="gen-carousel-movies-style-2 movie-grid style-2">
                                    <div class="gen-movie-contain">
                                        <div class="gen-movie-img">
                                            <img src="{{asset('images/background/asset-30.jpeg')}}" alt="
                                                owl-carousel-video-image">
                                            <div class="gen-movie-add">
                                                <div class="wpulike wpulike-heart">
                                                    <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button
                                                            type="button"
                                                            class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                                </div>
                                                <ul class="menu bottomRight">
                                                    <li class="share top">
                                                        <i class="fa fa-share-alt"></i>
                                                        <ul class="submenu">
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-instagram"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="movie-actions--link_add-to-playlist dropdown">
                                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                                            class="fa fa-plus"></i></a>
                                                    <div class="dropdown-menu mCustomScrollbar">
                                                        <div class="mCustomScrollBox">
                                                            <div class="mCSB_container">
                                                                <a class="login-link" href="register.html">Sign in to
                                                                    add this movie
                                                                    to a
                                                                    playlist.</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gen-movie-action">
                                                <a href="single-movie.html" class="gen-button">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="gen-info-contain">
                                            <div class="gen-movie-info">
                                                <h3><a href="single-movie.html">war of rejonse</a>
                                                </h3>
                                            </div>
                                            <div class="gen-movie-meta-holder">
                                                <ul>
                                                    <li>2hr 20mins</li>
                                                    <li>
                                                        <a href="action.html"><span>Action</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #post-## -->
                        </div>


                        <div class="item">
                            <div
                                class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-adventure movie_tag-brother movie_tag-king movie_tag-premieres movie_tag-viking">
                                <div class="gen-carousel-movies-style-2 movie-grid style-2">
                                    <div class="gen-movie-contain">
                                        <div class="gen-movie-img">
                                            <img src="{{asset('images/background/asset-31.jpeg')}}" alt="
                                                owl-carousel-video-image">
                                            <div class="gen-movie-add">
                                                <div class="wpulike wpulike-heart">
                                                    <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button
                                                            type="button"
                                                            class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                                </div>
                                                <ul class="menu bottomRight">
                                                    <li class="share top">
                                                        <i class="fa fa-share-alt"></i>
                                                        <ul class="submenu">
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-instagram"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="movie-actions--link_add-to-playlist dropdown">
                                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                                            class="fa fa-plus"></i></a>
                                                    <div class="dropdown-menu mCustomScrollbar">
                                                        <div class="mCustomScrollBox">
                                                            <div class="mCSB_container">
                                                                <a class="login-link" href="register.html">Sign in to
                                                                    add this movie
                                                                    to a
                                                                    playlist.</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gen-movie-action">
                                                <a href="single-movie.html" class="gen-button">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="gen-info-contain">
                                            <div class="gen-movie-info">
                                                <h3><a href="single-movie.html">the big sick</a>
                                                </h3>
                                            </div>
                                            <div class="gen-movie-meta-holder">
                                                <ul>
                                                    <li>2hr 00mins</li>
                                                    <li>
                                                        <a href="horror.html"><span>Horror</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #post-## -->
                        </div>


                        <div class="item">
                            <div
                                class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-mystery movie_tag-brother movie_tag-hero movie_tag-premieres movie_tag-viking">
                                <div class="gen-carousel-movies-style-2 movie-grid style-2">
                                    <div class="gen-movie-contain">
                                        <div class="gen-movie-img">
                                            <img src="{{asset('images/background/asset-24.jpeg')}}" alt="
                                                owl-carousel-video-image">
                                            <div class="gen-movie-add">
                                                <div class="wpulike wpulike-heart">
                                                    <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button
                                                            type="button"
                                                            class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                                </div>
                                                <ul class="menu bottomRight">
                                                    <li class="share top">
                                                        <i class="fa fa-share-alt"></i>
                                                        <ul class="submenu">
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-instagram"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="movie-actions--link_add-to-playlist dropdown">
                                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                                            class="fa fa-plus"></i></a>
                                                    <div class="dropdown-menu mCustomScrollbar">
                                                        <div class="mCustomScrollBox">
                                                            <div class="mCSB_container">
                                                                <a class="login-link" href="register.html">Sign in to
                                                                    add this movie
                                                                    to a
                                                                    playlist.</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gen-movie-action">
                                                <a href="single-movie.html" class="gen-button">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="gen-info-contain">
                                            <div class="gen-movie-info">
                                                <h3><a href="single-movie.html">the last witness</a>
                                                </h3>
                                            </div>
                                            <div class="gen-movie-meta-holder">
                                                <ul>
                                                    <li>1hr 37mins</li>
                                                    <li>
                                                        <a href="action.html"><span>Action</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #post-## -->
                        </div>


                        <div class="item">
                            <div
                                class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-adventure movie_genre-romance movie_tag-4k-ultra movie_tag-king movie_tag-premieres movie_tag-viking">
                                <div class="gen-carousel-movies-style-2 movie-grid style-2">
                                    <div class="gen-movie-contain">
                                        <div class="gen-movie-img">
                                            <img src="{{asset('images/background/asset-32.jpeg')}}" alt="
                                                owl-carousel-video-image">
                                            <div class="gen-movie-add">
                                                <div class="wpulike wpulike-heart">
                                                    <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button
                                                            type="button"
                                                            class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                                </div>
                                                <ul class="menu bottomRight">
                                                    <li class="share top">
                                                        <i class="fa fa-share-alt"></i>
                                                        <ul class="submenu">
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-instagram"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="movie-actions--link_add-to-playlist dropdown">
                                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                                            class="fa fa-plus"></i></a>
                                                    <div class="dropdown-menu mCustomScrollbar">
                                                        <div class="mCustomScrollBox">
                                                            <div class="mCSB_container">
                                                                <a class="login-link" href="register.html">Sign in to
                                                                    add this movie
                                                                    to a
                                                                    playlist.</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gen-movie-action">
                                                <a href="single-movie.html" class="gen-button">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="gen-info-contain">
                                            <div class="gen-movie-info">
                                                <h3><a href="single-movie.html">love, simon</a>
                                                </h3>
                                            </div>
                                            <div class="gen-movie-meta-holder">
                                                <ul>
                                                    <li>1hr 50mins</li>
                                                    <li>
                                                        <a href="action.html"><span>Action</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #post-## -->
                        </div>


                        <div class="item">
                            <div
                                class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-adventure movie_genre-romance movie_tag-4k-ultra movie_tag-king movie_tag-premieres movie_tag-viking">
                                <div class="gen-carousel-movies-style-2 movie-grid style-2">
                                    <div class="gen-movie-contain">
                                        <div class="gen-movie-img">
                                            <img src="{{asset('images/background/asset-33.jpeg')}}" alt="
                                                owl-carousel-video-image">
                                            <div class="gen-movie-add">
                                                <div class="wpulike wpulike-heart">
                                                    <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button
                                                            type="button"
                                                            class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                                </div>
                                                <ul class="menu bottomRight">
                                                    <li class="share top">
                                                        <i class="fa fa-share-alt"></i>
                                                        <ul class="submenu">
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-instagram"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="movie-actions--link_add-to-playlist dropdown">
                                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                                            class="fa fa-plus"></i></a>
                                                    <div class="dropdown-menu mCustomScrollbar">
                                                        <div class="mCustomScrollBox">
                                                            <div class="mCSB_container">
                                                                <a class="login-link" href="register.html">Sign in to
                                                                    add this movie
                                                                    to a
                                                                    playlist.</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gen-movie-action">
                                                <a href="single-movie.html" class="gen-button">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="gen-info-contain">
                                            <div class="gen-movie-info">
                                                <h3><a href="single-movie.html">black water</a>
                                                </h3>
                                            </div>
                                            <div class="gen-movie-meta-holder">
                                                <ul>
                                                    <li>1h 44mins</li>
                                                    <li>
                                                        <a href="action.html"><span>Action</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #post-## -->
                        </div>


                        <div class="item">
                            <div
                                class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-sci-fi movie_tag-brother movie_tag-king movie_tag-premieres movie_tag-viking">
                                <div class="gen-carousel-movies-style-2 movie-grid style-2">
                                    <div class="gen-movie-contain">
                                        <div class="gen-movie-img">
                                            <img src="{{asset('images/background/asset-34.jpeg')}}" alt="
                                                owl-carousel-video-image">
                                            <div class="gen-movie-add">
                                                <div class="wpulike wpulike-heart">
                                                    <div class="wp_ulike_general_class wp_ulike_is_not_liked"><button
                                                            type="button"
                                                            class="wp_ulike_btn wp_ulike_put_image"></button></div>
                                                </div>
                                                <ul class="menu bottomRight">
                                                    <li class="share top">
                                                        <i class="fa fa-share-alt"></i>
                                                        <ul class="submenu">
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-instagram"></i></a>
                                                            </li>
                                                            <li><a href="#" class="facebook"><i
                                                                        class="fab fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="movie-actions--link_add-to-playlist dropdown">
                                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                                            class="fa fa-plus"></i></a>
                                                    <div class="dropdown-menu mCustomScrollbar">
                                                        <div class="mCustomScrollBox">
                                                            <div class="mCSB_container">
                                                                <a class="login-link" href="register.html">Sign in to
                                                                    add this movie
                                                                    to a
                                                                    playlist.</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gen-movie-action">
                                                <a href="single-movie.html" class="gen-button">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="gen-info-contain">
                                            <div class="gen-movie-info">
                                                <h3><a href="single-movie.html">bad genius</a>
                                                </h3>
                                            </div>
                                            <div class="gen-movie-meta-holder">
                                                <ul>
                                                    <li>2hr 10mins</li>
                                                    <li>
                                                        <a href="action.html"><span>Action</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #post-## -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- owl-carousel Videos Section-4 End -->
@endsection