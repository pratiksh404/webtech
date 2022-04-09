<header id="gen-header" class="gen-header-style-1 gen-has-sticky">
    <div class="gen-bottom-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="#">
                            <img class="img-fluid logo" src="{{asset('images/logo.ico')}}" alt="streamlab-image">
                        </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div id="gen-menu-contain" class="gen-menu-contain">
                                <ul id="gen-main-menu" class="navbar-nav ml-auto">
                                    <li class="menu-item active">
                                        <a href="{{route('home')}}" aria-current="page">Home</a>
                                    </li>
                                    @isset($categories)
                                    @if ($categories->count() > 0)
                                    <li class="menu-item">
                                        <a href="#">Genre</a>
                                        <i class="fa fa-chevron-down gen-submenu-icon"></i>
                                        <ul class="sub-menu">
                                            @foreach ($categories as $category)
                                            <li class="menu-item">
                                                <a
                                                    href="{{route('category',['category' => $category->slug])}}">{{$category->name}}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endif
                                    @endisset
                                </ul>
                            </div>
                        </div>
                        <div class="gen-header-info-box">
                            <div class="gen-menu-search-block">
                                <a href="javascript:void(0)" id="gen-seacrh-btn"><i class="fa fa-search"></i></a>
                                <div class="gen-search-form">
                                    <form role="search" method="POST" class="search-form" action="{{route('search')}}">
                                        @csrf
                                        <label>
                                            <span class="screen-reader-text"></span>
                                            <input type="search" name="search" class="search-field"
                                                placeholder="Search …" value="" name="s">
                                        </label>
                                        <button type="submit" class="search-submit"><span
                                                class="screen-reader-text"></span></button>
                                    </form>
                                </div>
                            </div>
                            <div class="gen-account-holder">
                                <a href="javascript:void(0)" id="gen-user-btn"><i class="fa fa-user"></i></a>
                                <div class="gen-account-menu">
                                    <ul class="gen-account-menu">
                                        <!-- Pms Menu -->
                                        <li>
                                            <a href="log-in.html"><i class="fas fa-sign-in-alt"></i>
                                                login </a>
                                        </li>
                                        <li>
                                            <a href="register.html"><i class="fa fa-user"></i>
                                                Register </a>
                                        </li>
                                        <!-- Library Menu -->
                                        <li>
                                            <a href="library.html">
                                                <i class="fa fa-indent"></i>
                                                Library </a>
                                        </li>
                                        <li>
                                            <a href="library.html"><i class="fa fa-list"></i>
                                                Movie Playlist </a>
                                        </li>
                                        <li>
                                            <a href="library.html"><i class="fa fa-list"></i>
                                                Tv Show Playlist </a>
                                        </li>
                                        <li>
                                            <a href="library.html"><i class="fa fa-list"></i>
                                                Video Playlist </a>
                                        </li>
                                        <li>
                                            <a href="upload-video.html"> <i class="fa fa-upload"></i>
                                                Upload Video </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="gen-btn-container">
                                <a href="register.html" class="gen-button">
                                    <div class="gen-button-block">
                                        <span class="gen-button-line-left"></span>
                                        <span class="gen-button-text">Subscribe</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>