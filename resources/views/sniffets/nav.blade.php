<!-- Start Header -->
<header class="header axil-header header-light header-sticky shadow" style="position: fixed; top: 0; width: 100%;">
    <div class="header-wrap">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-12">
                <div class="logo">
                    <a href="/">
                        <img class="dark-logo" src="assets/images/sfighblogo.png" alt="Blogar logo">
                        <img class="light-logo" src="assets/images/sfighblogo.png" alt="Blogar logo">
    
                    </a>
                </div>
            </div>

            <div class="col-xl-6 d-none d-xl-block">
                <div class="mainmenu-wrapper">
                    <nav class="mainmenu-nav">
                        <!-- Start Mainmanu Nav -->
                        <ul class="mainmenu">
                            <li><a href="/">Home</a></li>
                            <li><a href="#">Podcast</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                        <!-- End Mainmanu Nav -->
                    </nav>
                </div>
            </div>

            <div class="col-xl-3 col-lg-8 col-md-8 col-sm-9 col-12">
                <div class="header-search text-right d-flex align-items-center">
                    <form class="header-search-form">
                        <div class="axil-search form-group">
                            <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                    <ul class="metabar-block">
                        <li class="icon"><a href="#"><i class="fas fa-bookmark"></i></a></li>
                        <li class="icon"><a href="#"><i class="fas fa-bell"></i></a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><img src="assets/images/others/author.png" alt="Author Images"></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="/"><span><i class="far fa-user-circle dropdown-icon"></i></span> Hello {{ Auth::user()->last_name }}</a>
                                <a class="dropdown-item" href="/about"><span><i class="fas fa-info-circle dropdown-icon"></i></span> About</a>
                                <a class="dropdown-item" href="/policy"><span><i class="far fa-file-alt dropdown-icon"></i></span> Privacy-Policy</a>
                                <a class="dropdown-item" href="/contact"><span><i class="fas fa-route dropdown-icon"></i></span> Contact Us</a>
                                <a class="dropdown-item" href="/settings"><span><i class="fas fa-cogs dropdown-icon"></i></span> Settings</a>
                                <a class="dropdown-item" href="#"><span><i class="fab fa-android dropdown-icon"></i></span> Android version</a>
                                <hr class="solid">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <span><i class="fas fa-sign-out-alt dropdown-icon"></i></span> Sign Out 
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                              </div>
                        </li>
                    </ul>
                    <!-- Start Hamburger Menu  -->
                    <div class="hamburger-menu d-block d-xl-none">
                        <div class="hamburger-inner">
                            <div class="icon"><i class="fal fa-bars"></i></div>
                        </div>
                    </div>
                    <!-- End Hamburger Menu  -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Start Header -->