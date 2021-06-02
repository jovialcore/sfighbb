<!-- Start Comment Form Area  -->
<div class="axil-comment-area">
   

    <!-- Start Comment Respond  -->
    <div class="comment-respond">
        <h4 class="title">Post a comment</h4>
        <form class="devotion-form" method="POST" action="{{ route('komment.add') }}">
            @csrf
            <p class="comment-notes"><span id="email-notes">Please be polite in your comments because allot of people will be viewing them.<span
                    class="required">*</span></p>
            <div class="row row--10">
                
                <div class="col-12">
                    <div class="form-group">
                        <label>Leave a comment</label>
                        <input type="hidden" name="post_id" value="{{ $posts->id }}">
                        <textarea name="comment" placeholder="Write here..."></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-submit cerchio">
                        <input name="submit" type="submit" id="submit" class="axil-button button-rounded" value="Comment">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- End Comment Respond  -->

    <!-- Start Comment Area  -->
    <div class="axil-comment-area">
        <h4 class="title">{{ $comment_count }} comments</h4>
        <ul class="comment-list">

        
            <!-- Start Single Comment  -->
            @foreach ($comments as $comment)
                <li class="comment">
                <div class="comment-body">
                    <div class="single-comment">
                        <div class="comment-img">
                            <span><i class="fas fa-user"></i></span>
                        </div>
                        <div class="comment-inner">
                            <h6 class="commenter">
                                <a class="hover-flip-item-wrapper" href="#">
                                    <span class="hover-flip-item">
                                        <span data-text="{{ $comment->user->first_name }}">{{ $comment->user->first_name }}</span>
                                    </span>
                                </a>
                            </h6>
                            <div class="comment-meta">
                                <div class="time-spent">{{ Carbon\Carbon::parse($comment['created_at'])->toFormattedDateString() }}</div>
                                <div class="reply-edit">
                                    <div class="reply">
                                        <a class="comment-reply-link hover-flip-item-wrapper" href="#">
                                            <!--Reply-->
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-text">
                                <p class="b2">{{ $comment->comment }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
            {{-- Pagination --}}
            <div class="d-flex justify-content-center">
                {{ $comments->links('pagination::bootstrap-4') }}
            </div>
            <!-- End Single Comment  -->

        </ul>
    </div>
    <!-- End Comment Area  -->

</div>
<!-- End Comment Form Area  -->