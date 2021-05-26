@extends('layouts.app')

@section('content')
<div class="axil-banner banner-style-1 bg_image bg_image--3">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="inner">
                    <h1 class="title">Contact Us</h1>
                    <p class="description">Wherever &#38; whenever you need us. We are here for you – contact us for all your support needs.<br /> be it technical, general queries or information support.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner Area  -->

<!-- Start Post List Wrapper  -->
<div class="axil-post-list-area axil-section-gap bg-color-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <!-- Start About Area  -->
                <div class="axil-about-us">
                    <div class="inner">
                        <h2>Say Hello! </h2>
                        <p>Donec cursus dolor vitae congue consectetur. Morbi mattis viverra felis. Etiam dapibus id turpis at sagittis. Cras mollis mi vel ante ultricies, id ullamcorper mi pulvinar. Proin bibendum ornare risus, lacinia cursus quam condimentum id. Curabitur auctor massa eget porttitor molestie. Aliquam imperdiet dolor nec metus pulvinar sollicitudin. </p>
                        <p><strong>Aliquam iaculis at odio ut tempus</strong>. Suspendisse blandit luctus dui, a consequat mauris mollis id. Sed in ante at tortor malesuada imperdiet. Vestibulum sed gravida nibh. Nulla suscipit congue lorem, id tempor ipsum molestie sit amet. Nulla ultricies vitae erat in tincidunt. Maecenas tempus quam et ipsum elementum, a efficitur lectus tincidunt. Praesent diam elit, tincidunt ac tempus vulputate, aliquet viverra mauris. Etiam eu nunc efficitur, sagittis est ut, fringilla neque. Ut interdum eget lorem eget congue. Ut nec arcu placerat, mattis urna vel, consequat diam. Sed in leo in dolor suscipit molestie. </p>
                        <p class="primary-color">Email: <a href="#">mepress@gmail.com</a></p>
                    </div>
                    <!-- Start Contact Form  -->
                    <div class="axil-section-gapTop axil-contact-form-area">
                        <h4 class="title mb--10">Send Us a Message</h4>
                        <p class="b3 mb--30">Your email address will not be published. All the fields are required.</p>
                        <form id="contact-form" method="POST" action="mail.php" class="axil-contact-form contact-form--1 row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label for="contact-name">Your Name</label>
                                    <input name="contact-name" id="contact-name" type="text">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label for="contact-phone">Phone</label>
                                    <input type="text" name="contact-phone" id="contact-phone">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label>Your Email</label>
                                    <input for="contact-email" name="contact-email" id="contact-email" type="email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contact-message">Your Message</label>
                                    <textarea name="contact-message" id="contact-message"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-submit">
                                    <button name="submit" type="submit" id="submit" class="axil-button button-rounded btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Contact Form  -->
                </div>
                <!-- End About Area  -->
            </div>
        </div>
    </div>
</div>
@endsection