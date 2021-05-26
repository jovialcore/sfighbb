@extends('layouts.app')

@section('content')
<div class="post-single-wrapper axil-section-gap bg-color-white">
   <div class="container">
    <div class="row">
        <div class="col-md-3 mt-5">
            <p class="mt-5 mb-2">Add New:</p>
            <div class="tagcloud">
                <a href="/api_7834y3rgdschfdu34er34fccge743c">Devotion</a>
                <a href="/api_7834y3rghsdfshc536vf98ccge743c">Post</a>
                <a href="/api_7834y3rgdschfnvfdvjngvccge743c">Youtube Video</a>
                <a href="/api_7834y3rgdsch854qtgr34fccge743c">About</a>
                <a href="/api_7834y98iuhjvwdsr4er34fccge743c">Faq/Help</a>
            </div>

            @if (session('status_upload'))
                <div>
                   <p>{{ session('status_upload') }}</p> 
                </div>
            @endif

        </div>
        <div class="col-md-9">
            <!-- Start Comment Form Area  -->
            <div class="axil-comment-area">
                

                <!-- Start Comment Respond  -->
                <div class="comment-respond devotion-form">
                    <h4 class="title">New Post</h4>
                    <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                        @csrf
                        <p class="comment-notes"><span id="email-notes">Kindly publish new post<span
                                class="required">*</span></p>
                        <div class="row row--10">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input id="title" name="title" placeholder="Title of Post" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="publish">Publish?</label>
                                    <select id="publish" name="publish">
                                        <option disabled>Select option</option>
                                        <option value="1" selected>Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group override-from-group-css">
                                    <label for="thumbnail">Thumbnail</label>
                                    <input id="thumbnail" name="thumbnail" type="file" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Story</label>
                                    <textarea id="story" name="story" placeholder="Past or write story here..." required></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-submit cerchio">
                                    <input name="submit" type="submit" id="submit" class="axil-button button-rounded" value="Publish">
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
</div>
@endsection