<!-- Start Mobile Menu Area  -->
<div class="popup-mobilemenu-area">
    <div class="inner">
        <div class="mobile-menu-top">
            <div class="logo">
                <a href="/">
                    <img class="dark-logo" src="{{ asset('assets/images/ghb.png') }}" alt="Logo Images">
                    <img class="light-logo" src="{{ asset('assets/images/ghb.png') }}" alt="Logo Images">
                    <span>SFIGHB</span>
                </a>
            </div>
            <div class="mobile-close">
                <div class="icon">
                    <i class="fal fa-times"></i>
                </div>
            </div>
        </div>
        <ul class="mainmenu">
            <li><a href="/"><span><i class="far fa-user-circle sidebar-icon"></i></span> Hello {{ Auth::user()->last_name }}</a></li>
            <li><a href="/about"><span><i class="fas fa-info-circle dropdown-icon"></i></span> About</a></li>
            <li><a href="/policy"><span><i class="far fa-file-alt dropdown-icon"></i></span> Privacy-Policy</a></li>
            <li><a href="/contact"><span><i class="fas fa-route dropdown-icon"></i></span> Contact Us</a></li>
            <li><a href="/setting"><span><i class="fas fa-cogs dropdown-icon"></i></span> Settings</a></li>
            <li><a href="#"><span><i class="fab fa-android dropdown-icon"></i></span> Android Version</a></li>

            <li><a  href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
               <span><i class="fas fa-sign-out-alt dropdown-icon"></i></span> Sign Out 
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form></li>
        </ul>
        <!--
        <div class="buy-now-btn">
            <a href="#">Buy Now <span class="badge">$15</span></a>
        </div>
    -->
    </div>
</div>
<!-- End Mobile Menu Area  -->