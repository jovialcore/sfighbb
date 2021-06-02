
<!-- Start Banner Area -->
<div class="banner banner-single-post post-layout-3 post-formate post-standard bg_image bg_image--2 d-flex align-items-end" style="background-image: url('/storage/{{ $posts->thumbnail }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <!-- Start Single Slide  -->
                <div class="content-block">
                    <!-- Start Post Content  -->
                    <div class="post-content">
                        <div class="post-cat">
                            <div class="post-cat-list">
                                <a class="hover-flip-item-wrapper" href="#">
                                    <span class="hover-flip-item">
                                        <span data-text="Blog Post">Blog Post</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <h1 class="title">{{ $posts->title }}</h1>
                        <!-- Post Meta  -->
                        <div class="post-meta-wrapper">
                            <div class="post-meta">
                                <div class="post-author-avatar border-rounded">
                                    <img class="image-fluid" src="{{ asset('assets/images/sfilogo.png') }}" alt="Author Images">
                                </div>
                                <div class="content">
                                    <h6 class="post-author-name">
                                        <a class="hover-flip-item-wrapper" href="/author">
                                            <span class="hover-flip-item">
                                                <span data-text="Rev Mrs Nches Iredu">Rev. Mrs Nches Iredu</span>
                                            </span>
                                        </a>
                                    </h6>
                                    <ul class="post-meta-list">
                                        <li>{{ Carbon\Carbon::parse($posts['created_at'])->toFormattedDateString() }}</li>
                                        <li>{{ $posts->view_count }} Views</li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="social-share-transparent justify-content-end">
                                <li><a target="_blank" href="https://facebook.com/love4sfi"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/SistersFellowshipInternational/"><i class="fab fa-instagram"></i></a></li>
                                <li><a target="_blank" href="https://www.youtube.com/channel/UCeQpaXDTFJ12NJKjpIJAgyg"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Post Content  -->
                </div>
                <!-- End Single Slide  -->
            </div>
        </div>
    </div>
</div>
<!-- End Banner Area -->


<!-- Start Post Single Wrapper  -->
<div class="post-single-wrapper axil-section-gap bg-color-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="axil-post-details">

                    <p style="line-height: 2.5em; text-indent: 30px">{!! $posts->story !!}</p>
                    
                    <div class="social-share-block">
                        <div class="post-like">
                            <a href="#"><i class="fal fa-thumbs-up"></i><span>2.2k Like</span></a>
                        </div>
                        <ul class="social-icon icon-rounded-transparent md-size">
                            <li><a target="_blank" href="https://facebook.com/love4sfi"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/SistersFellowshipInternational/"><i class="fab fa-instagram"></i></a></li>
                            <li><a target="_blank" href="https://www.youtube.com/channel/UCeQpaXDTFJ12NJKjpIJAgyg"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>

                    <!-- Start Author  -->
                    <div class="about-author">
                        <div class="media">
                            <div class="thumbnail">
                                <a href="#">
                                    <img class="image-fluid" src="{{ asset('assets/images/sfilogo.png') }}" alt="Author Images">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="author-info">
                                    <h5 class="title">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="Rev. Mrs Nches Iredu">Rev. Mrs Nches Iredu</span>
                                            </span>
                                        </a>
                                    </h5>
                                    <span class="b3 subtitle">President and Founder of Sisters' Fellowship Int'l</span>
                                </div>
                                <div class="content">
                                    <p class="b1 description">Our heavenly father is a God of Principles and procedures. He is not a disorganised God. He is so organized that when you read through the Bible, you will notice that everything about God follows a certain course..</p>
                                    <ul class="social-share-transparent size-md">       
                                        <li><a target="_blank" href="https://facebook.com/love4sfi"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a target="_blank" href="https://www.instagram.com/SistersFellowshipInternational/"><i class="fab fa-instagram"></i></a></li>
                                        <li><a target="_blank" href="https://www.youtube.com/channel/UCeQpaXDTFJ12NJKjpIJAgyg"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Author  -->

                    @include('sniffets.komments')

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Post Single Wrapper  -->
