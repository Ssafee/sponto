@extends('layouts.app')
@section('content')

<!-- page-title -->
<section class="page-title centred pt_110">
    <div class="auto-container">
        <div class="content-box">
            <h1>Contact us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                        <li>-</li>
                <li>Contact us</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->


<!-- contact-section -->
<section class="contact-section pt_110 pb_30">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                    <div class="info-box">
                        <h3>Contact Information</h3>
                        <div class="single-item">
                            <div class="icon-box"><img src="assets/images/icons/icon-27.png" alt=""></div>
                            <h4>Office</h4>
                            <p>312 W 2nd St Unit#A4579, Casper, WY 82601</p>
                        </div>
                        <!-- <div class="single-item">
                                    <div class="icon-box"><img src="assets/images/icons/icon-27.png" alt=""></div>
                                    <h4>Main Warehouse</h4>
                                    <p>10445 Brisbane Cir. Shiloh, Australia 81063</p>
                                </div> -->
                        <div class="single-item">
                            <div class="icon-box"><img src="assets/images/icons/icon-28.png" alt=""></div>
                            <h4>Email Address</h4>
                            <p><a href="mailto:support@example.com">info@sponto.co
                                </a><br /><a href="mailto:contact@example.com">sales@sponto.co</a></p>
                        </div>
                        <div class="single-item">
                            <div class="icon-box"><img src="assets/images/icons/icon-29.png" alt=""></div>
                            <h4>Phone Number</h4>
                            <p><a href="tel:2085440141">+1 (813) 957 9908</a><br /></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="form-inner">
                        <form method="POST" action="{{ route('contact.submit') }}" id="contact-form">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Name <span>*</span></label>
                                    <input type="text" name="username" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Phone <span>*</span></label>
                                    <input type="text" name="phone" >
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label>Email Address <span>*</span></label>
                                    <input type="email" name="email" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label>Subject <span>*</span></label>
                                    <input type="text" name="subject" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label>Write Message <span>*</span></label>
                                    <textarea name="message" required></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button type="submit" class="theme-btn btn-one">Send Message</button>
                                </div>
                                <p>By providing a telephone number and submitting the form, you are consenting to be contacted by SMS text message and agreeing to our <a href="{{ route('privacy-policy') }}">Privacy Policy</a>. Message frequency may vary. Message and data rates may apply. Reply STOP to opt out of further messaging. Reply HELP for more information.</p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-section end -->


<!-- google-map -->
<section class="google-map pb_80">
    <div class="auto-container">
        <div class="inner-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24468.286438543508!2d-106.33584407431637!3d42.85090783910578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876059fd9608efdb%3A0xd1b9e1b88bb5d4c3!2s312%20W%202nd%20St%20Unit%23A4579%2C%20Casper%2C%20WY%2082601%2C%20USA!5e0!3m2!1sen!2sus!4v1710680000000" 
                width="100%" 
                height="500" 
                frameborder="0" 
                style="border:0; width: 100%" 
                allowfullscreen="" 
                aria-hidden="false" 
                tabindex="0">
            </iframe>
        </div>
    </div>
</section>

<!-- google-map end -->

@endsection