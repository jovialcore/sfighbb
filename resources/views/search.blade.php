@extends('layouts.app')

@section('content')
<div class="axil-post-list-area axil-section-gap bg-color-white">
    <div class="container">
        <div class="row">
            
<!-- Start Post List  -->
@foreach ($devotions as $devotion)
<div class="col-md-6 mt-4">
    <div class="content-block post-list-view format-quote mt--30">
    <div class="post-content">
        <div class="post-cat">
            <div class="post-cat-list">
                <a class="hover-flip-item-wrapper" href="#">
                    <span class="hover-flip-item">
                        <span data-text="GHB">GHB</span>
                    </span>
                </a>
            </div>
        </div>
        <blockquote>
            <h4 class="title"><a href="/devotion/{{ $devotion->id }}">{{ $devotion->title }}</a></h4>
        </blockquote>
        <p>
            <a href="/devotion/{{ $devotion->id }}" style="color: #333">
                {!! $devotion->bible_reading !!}</p>
            </a>
        <div class="post-meta-wrapper">
            <div class="post-meta">
                <div class="content">
                    <h6 class="post-author-name">
                        <a class="hover-flip-item-wrapper" href="/author">
                            <span class="hover-flip-item">
                                <span data-text="Rev. Mrs Nches Iredu">Rev. Mrs Nches Iredu</span>
                            </span>
                        </a>
                    </h6>
                    <ul class="post-meta-list">
                        <li>{{ Carbon\Carbon::parse($devotion['created_at'])->toFormattedDateString() }}</li>
                        <li>{{ $devotion->view_count }} Views</li>
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
</div>
@endforeach


@foreach ($posts as $post)
<div class="col-md-6 mt-4">
    <div class="content-block post-list-view format-quote mt--30">
    <div class="post-content">
        <div class="post-cat">
            <div class="post-cat-list">
                <a class="hover-flip-item-wrapper" href="/post/{{ $post->id }}">
                    <span class="hover-flip-item">
                        <span data-text="POST">POST</span>
                    </span>
                </a>
            </div>
        </div>
        <blockquote>
            <h4 class="title"><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h4>
        </blockquote>
        <p>{!! $post->bible_reading !!}</p>
        <div class="post-meta-wrapper">
            <div class="post-meta">
                <div class="content">
                    <h6 class="post-author-name">
                        <a class="hover-flip-item-wrapper" href="/author">
                            <span class="hover-flip-item">
                                <span data-text="Rev. Mrs Nches Iredu">Rev. Mrs Nches Iredu</span>
                            </span>
                        </a>
                    </h6>
                    <ul class="post-meta-list">
                        <li>{{ Carbon\Carbon::parse($post['created_at'])->toFormattedDateString() }}</li>
                        <li>3 min read</li>
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
</div>
@endforeach
 
<!-- End Post List  -->
        </div>
    </div>
</div>
@endsection