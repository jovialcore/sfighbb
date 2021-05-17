<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Searching for God's Heartbeat</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- CSS
    ============================================ -->
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        .footer-mainmenu, .copyright-area {
            display: none;
        }
    </style>

</head>
<body>
    <div class="main-wrapper">

        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <div id="my_switcher" class="my_switcher">
            <ul>
                <li>
                    <a href="javascript: void(0);" data-theme="light" class="setColor light">
                        <span title="Light Mode">Light</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                        <span title="Dark Mode">Dark</span>
                    </a>
                </li>
            </ul>
        </div>

    

        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    
                    <!-- Start Comment Form Area  -->
                    <div class="axil-comment-area">
                        <!-- Login section -->
                        <div class="comment-respond">
                            <h4 class="title text-center">Welcome Back!</h4>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <p class="comment-notes text-center "><span id="email-notes">Kindly login with your details <span
                                        class="required">*</span></p>
                                <div class="row row--10">
                                    
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Your Email</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Your Password</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">
                                           
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <p class="comment-form-cookies-consent">
                                            <input id="wp-comment-cookies-consent" name="remember wp-comment-cookies-consent" id="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                            <label for="wp-comment-cookies-consent"> Remember me </label>
                                        </p>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-submit cerchio">
                                            <input name="submit" type="submit" id="submit" class="axil-button button-rounded" value="Login">
                                        </div>
                                        <div class="flex mt-4">
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link border" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                            <a class="btn btn-link border" href="{{ route('register') }}">
                                               Don't have account? SignUp.
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Comment Respond  -->
                    </div>
                    <!-- End Comment Form Area  -->
                </div>
            </div>
        </div>

    @include('sniffets.footer')

    <!-- Start Back To Top  -->
    <a id="backto-top"></a>
    <!-- End Back To Top  -->
    
</div>
</body>
    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/tweenmax.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.style.switcher.js') }}"></script>


    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</html>
                    