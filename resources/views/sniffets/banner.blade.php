 <!-- Start Banner Area -->
 <h1 class="d-none">Home Default Blog</h1>
 <div class="slider-area bg-color-grey">
     <div class="axil-slide slider-style-1">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="slider-activation axil-slick-arrow">

                         <!-- Start Single Slide  -->
                         @foreach ($getTodayDevotion as $output)
                             <div class="content-block">
                             <!-- Start Post Thumbnail  -->
                             <div class="post-thumbnail">
                                 <a href="post-details.html">
                                     <img class="img-fluid" src="/storage/{{$output->thumbnail}}" alt="Post Images">
                                 </a>
                             </div>
                             <!-- End Post Thumbnail  -->

                             <!-- Start Post Content  -->
                             <div class="post-content">
                                 <div class="post-cat">
                                     <div class="post-cat-list">
                                         <a class="hover-flip-item-wrapper" href="#">
                                             <span class="hover-flip-item">
                                                 <span data-text="Today">Today</span>
                                             </span>
                                         </a>
                                     </div>
                                 </div>
                                 <h2 class="title"><a href="post-details.html">{{ $output->title }}</a></h2>
                                 <!-- Post Meta  -->
                                 <div class="post-meta-wrapper with-button">
                                     <div class="post-meta">
                                         <div class="post-author-avatar border-rounded">
                                             <img src="assets/images/post-images/author/author-image-3.png" alt="Author Images">
                                         </div>
                                         <div class="content">
                                             <h6 class="post-author-name">
                                                 <a class="hover-flip-item-wrapper" href="author.html">
                                                     <span class="hover-flip-item">
                                                         <span data-text="Rev. Mrs. Nches Iredu">Rev. Mrs. Nches Iredu</span>
                                                     </span>
                                                 </a>
                                             </h6>
                                             <ul class="post-meta-list">
                                                 <li>{{ $dtoday }}</li>
                                                 <li>300k Views</li>
                                             </ul>
                                         </div>
                                     </div>
                                     <ul class="social-share-transparent justify-content-end">
                                         <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                         <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                         <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                     </ul>
                                     <div class="read-more-button cerchio">
                                         <a class="axil-button button-rounded hover-flip-item-wrapper" href="post-details.html">
                                             <span class="hover-flip-item">
                                                 <span data-text="Read">Read</span>
                                             </span>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Post Content  -->
                         </div>
                         @endforeach
                         
                         <!-- End Single Slide  -->

                         <!-- Start Single Slide  -->
                         @foreach ($getTomorrowDevotion as $output)
                         <div class="content-block">
                            <!-- Start Post Thumbnail  -->
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img class="img-fluid" src="/storage/{{$output->thumbnail}}" alt="Post Images">
                                </a>
                            </div>
                            <!-- End Post Thumbnail  -->
                            <!-- Start Post Content  -->
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="Tomorrow">Tomorrow</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h2 class="title"><a href="post-details.html">{{ $output->title }}</a></h2>

                                <!-- Post Meta  -->
                                <div class="post-meta-wrapper with-button">
                                    <div class="post-meta">
                                        <div class="post-author-avatar border-rounded">
                                            <img src="assets/images/post-images/author/author-image-1.png" alt="Author Images">
                                        </div>
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                    <span class="hover-flip-item">
                                                       <span data-text="Rev. Mrs. Nches Iredu">Rev. Mrs. Nches Iredu</span>
                                                    </span>
                                                </a>

                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>{{ $dtomorrow }}</li>
                                                <li>300k Views</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                    <div class="read-more-button cerchio">
                                        <a class="axil-button button-rounded hover-flip-item-wrapper" href="post-details.html">
                                            <span class="hover-flip-item">
                                                <span data-text="Read">Read</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post Content  -->
                        </div>
                         @endforeach
                         
                         <!-- End Single Slide  -->

                          <!-- Start Single Slide  -->
                          @foreach ($getYesterdayDevotion as $output)
                             <div class="content-block">
                            <!-- Start Post Thumbnail  -->
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img class="img-fluid" src="/storage/{{$output->thumbnail}}" alt="Post Images">
                                </a>
                            </div>
                            <!-- End Post Thumbnail  -->
                            <!-- Start Post Content  -->
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="Yesterday">Yesterday</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h2 class="title"><a href="post-details.html">{{ $output->title }}</a></h2>

                                <!-- Post Meta  -->
                                <div class="post-meta-wrapper with-button">
                                    <div class="post-meta">
                                        <div class="post-author-avatar border-rounded">
                                            <img src="assets/images/post-images/author/author-image-1.png" alt="Author Images">
                                        </div>
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                    <span class="hover-flip-item">
                                                       <span data-text="Rev. Mrs. Nches Iredu">Rev. Mrs. Nches Iredu</span>
                                                    </span>
                                                </a>

                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>{{ $dyesterday }}</li>
                                                <li>300k Views</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                    <div class="read-more-button cerchio">
                                        <a class="axil-button button-rounded hover-flip-item-wrapper" href="post-details.html">
                                            <span class="hover-flip-item">
                                                <span data-text="Read">Read</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post Content  -->
                        </div> 
                          @endforeach
                          
                        <!-- End Single Slide  -->

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- End Banner Area -->