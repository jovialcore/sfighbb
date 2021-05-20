<!-- Start Header -->
<header class="header axil-header header-light header-sticky" style="position: fixed; top: 0; width: 100%;">
    <div class="header-wrap">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-12">
                <div class="logo">
                    <a href="/">
                       <!--
                        <img class="dark-logo" src="assets/images/sfighb.png" alt="Blogar logo">
                        <img class="light-logo" src="assets/images/sfighb.png" alt="Blogar logo">
                       -->
                       <div>SFIGHB</div>
                    </a>
                </div>
            </div>

            <div class="col-xl-6 d-none d-xl-block">
                <div class="mainmenu-wrapper">
                    <nav class="mainmenu-nav">
                        <!-- Start Mainmanu Nav -->
                        <ul class="mainmenu">
                            <li><a href="/">Home</a></li>
                            <li><a href="#">Explore</a></li>
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
                                <a class="dropdown-item" href="#">Hello {{ Auth::user()->last_name }}!</a>
                                <a class="dropdown-item" href="#">About</a>
                                <a class="dropdown-item" href="#">Help</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <hr class="solid">
                                <a class="dropdown-item" href="#">Sign Out</a>
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