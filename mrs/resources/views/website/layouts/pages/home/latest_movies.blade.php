@isset($latest_movies)
@if ($latest_movies->count() > 0)
<section class="gen-section-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <h4 class="gen-heading-title">Latest Movies</h4>
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
                        @foreach ($latest_movies as $movie)
                        <div class="item">
                            <div
                                class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-adventure movie_genre-drama">
                                <div class="gen-carousel-movies-style-2 movie-grid style-2">
                                    <div class="gen-movie-contain">
                                        <div class="gen-movie-img">
                                            <img src="{{$movie->image}}" alt="
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
                                                <h3><a href="single-movie.html">{{$movie->name ?? "N/A"}}</a>
                                                </h3>
                                            </div>
                                            <div class="gen-movie-meta-holder">
                                                <ul>
                                                    <li>{{$movie->duration ?? "N/A"}} mins</li>
                                                    @isset($movie->categories)
                                                    @foreach ($movie->categories as $category)
                                                    <li>
                                                        <a href="action.html"><span>{{$category->name ??
                                                                "N/A"}}</span></a>
                                                    </li>
                                                    @endforeach
                                                    @endisset
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #post-## -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endisset