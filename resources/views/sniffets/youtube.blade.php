<!-- Start Video Area  -->
<section id="youtube">
<div class="axil-video-post-area axil-section-gap bg-color-black">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 class="title">Featured Video</h2>
                </div>
            </div>
        </div>
        <div class="row">

            @if ($videos != null)
               <div class="col-xl-6 col-lg-6 col-md-12 col-md-6 col-12">
                <!-- Start Post List  -->
                <div class="content-block post-default image-rounded mt--30">
                    <div class="post-thumbnail">
                        <a href="post-details.html">
                            <img src="/storage/{{ $videos->thumbnail }}" alt="Post Images">
                        </a>
                        <a class="video-popup position-top-center" target="_blank" href="{{ $videos->url }}"><span
                                class="play-icon"></span></a>
                    </div>
                    <div class="post-content">
                        <div class="post-cat">
                            <div class="post-cat-list">
                                <a class="hover-flip-item-wrapper" target="_blank" href="{{ $videos->url }}">
                                    <span class="hover-flip-item">
                                        <span data-text="Live">Live</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <h3 class="title"><a target="_blank" href="{{ $videos->url }}">{{ $videos->title }}</a></h3>
                        <div class="post-meta-wrapper">
                            <div class="post-meta">
                                <div class="content">
                                    <h6 class="post-author-name">
                                        <a class="hover-flip-item-wrapper" target="_blank" href="{{ $videos->url }}">
                                            <span class="hover-flip-item">
                                                <span data-text="Rev. Mrs. Nches Iredu">Rev. Mrs. Nches Iredu</span>
                                            </span>
                                        </a>
                                    </h6>
                                    <ul class="post-meta-list">
                                        <li>{{ Carbon\Carbon::parse($videos['created_at'])->toFormattedDateString() }}</li>
                                        <li>1 Hour watch</li>
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
                </div>
                <!-- End Post List  -->
            </div> 
            @endif
            





            <div class="col-xl-6 col-lg-6 col-md-12 col-md-6 col-12">
                <div class="row">
                    <!-- Start Post List  -->
                    @foreach ($fourVideos as $video)
                      <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="content-block post-default image-rounded mt--30">
                            <div class="post-thumbnail">
                                <a target="_blank" href="{{ $video->url }}">
                                    <img src="/storage/{{ $video->thumbnail }}" alt="Post Images">
                                </a>
                                <a class="video-popup size-medium position-top-center" target="_blank" href="{{ $video->url }}"><span class="play-icon"></span></a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" target="_blank" href="{{ $video->url }}">
                                            <span class="hover-flip-item">
                                                <span data-text="{{ $video->tag }}">{{ $video->tag }}</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h5 class="title"><a target="_blank" href="{{ $video->url }}">{{ $video->title }}</a></h5>
                            </div>
                        </div>
                    </div>  
                    @endforeach
                    
                    <!-- End Post List  -->
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- End Video Area  -->