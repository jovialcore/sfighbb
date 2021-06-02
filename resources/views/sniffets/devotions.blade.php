<!-- Start Categories List  -->
<section id="home">
<div class="axil-categories-list axil-section-gap bg-color-grey">
    <div class="container">
        <div class="row align-items-center mb--10">
            <div class="col-lg-6 col-md-8 col-sm-8 col-12">
                <div class="section-title">
                    <h4 class="title">Devotions</h4>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-4 col-12 text-right">
                <span style="font-size: 12px"><i class="fal fa-arrow-left mr-4"></i> <i class="fal fa-arrow-right"></i></span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Start List Wrapper  -->
                <div class="list-categories categories-activation axil-slick-arrow arrow-between-side">

                    <!-- Start Single Category  -->
                    @foreach ($devotions as $devotion)
                    <div class="single-cat" style="width: 185px !important">
                        <div class="inner">
                            <a href="/devotion/{{$devotion->id}}">
                                <div class="thumbnail">
                                    <img src="/storage/{{$devotion->smaller_thumbnail}}" alt="post categories images">
                                </div> 
                                <div class="content">
                                    <h5 class="title">{{ Carbon\Carbon::parse($devotion['release_date'])->toFormattedDateString() }}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    
                    <!-- End Single Category  -->

                </div>
                <!-- Start List Wrapper  -->
            </div>
        </div>
    </div>
</div>
</section>

<!-- Start Categories List  -->