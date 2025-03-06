@extends('layouts.app')
@section('content')
<style>
    .banner-section .content-box h2 {
    max-width: 100%;
    color: var(--title-color);
    font-size: 38px;
    line-height: 70px;
}
.banner-section .content-box p {
    color: var(--title-color);
}
.odometer-digit{
    padding: 2px!important;
}
</style>

<section class="banner-section p_relative centred">
    {{-- <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div> --}}
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-10.png);"></div>

    <div class="author-box">
        <div class="author author-1"><img src="assets/images/author-1-1.png" alt=""><span>PPC Specialist</span></div>
        <div class="author author-2"><img src="assets/images/author-2-1.png" alt=""><span>Meta Specialist</span></div>
        <div class="author author-3"><img src="assets/images/author-5-1.png" alt=""><span>SEO Expert</span></div>
        <div class="author author-4"><img src="assets/images/author-4-1.png" alt=""><span>Appointment Setter</span></div>
        <div class="author author-5"><img src="assets/images/author-3-1.png" alt=""><span>GHL Expert</span></div>
        <div class="author author-6"><img src="assets/images/author-6-1.png" alt=""><span>Web Developer</span></div>
    </div>
    <div class="auto-container">
        <div class="content-box">
            <h2>Scale with proven global experts—remote-ready <br> and results-driven.</h2>
            <p>Right talent, right tools, and dedicated support for seamless hiring.</p>
            <div class="btn-box">
                <a href="https://calendly.com/sponto-pk" target="_blank" class="theme-btn btn-one mr_20"><span>Hire Talents Now</span></a>
                <a href="#" class="theme-btn banner-btn">Find Works</a>
            </div>
        </div>
    </div>
</section>
{{-- <section class="banner-section banner-style-three p_relative">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-10.png);"></div>
    <div class="shape">
        <div class="shape-1" style="background-image: url(assets/images/shape/shape-11.png);"></div>
        <div class="shape-2" style="background-image: url(assets/images/shape/shape-12.png);"></div>
        <div class="shape-3" style="background-image: url(assets/images/shape/shape-13.png);"></div>
    </div>
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <h2>Finding Solutions to Staffing Challenges <span>Sponto</span></h2>
                    <p>It's all about placing the right talent with the right tools, backed by a dedicated support team that ensures a seamless, efficient, and results-driven hiring process.</p>
                    <div class="btn-box">
                        <a href="https://calendly.com/sponto-pk" class="theme-btn btn-one mr_20"><span>Book a Call</span></a>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-inner">
                    <div class="icon-logo"><img src="assets/images/icons/logo-icon-1.png" alt=""></div>
                    <div class="image-box mr_15">
                        <figure class="image image-1 mb_15"><img src="assets/images/banner/banner-img-1.jpg" alt=""></figure>
                        <figure class="image image-2"><img src="assets/images/banner/banner-img-2.jpg" alt=""></figure>
                    </div>
                    <div class="image-box pt_55">
                        <figure class="image image-3 mb_15"><img src="assets/images/banner/banner-img-3.jpg" alt=""></figure>
                        <figure class="image image-4"><img src="assets/images/banner/banner-img-4.jpg" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<div class="slide-text">
    <div class="text-inner">
        <ul class="text-list">

            <li>Try Before You Hire </li>
            <li>Pre-Screened Experts </li>
            <li>Save Time & Money </li>
            <li>Tailored Staffing Solutions </li>
            <li>Build Your Dream Team</li>
            
        </ul>
    </div>
</div>

<br>
<br>
<br>

<section class="process-section pt_120 pb_90">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-3.png);"></div>
    <div class="auto-container">
        <div class="sec-title light centred pb_60 sec-title-animation animation-style2">
            <span class="sub-title mb_10 title-animation">PROCESS</span>
            <h2 class="title-animation">How It Works?</h2>
        </div>
        <div class="tabs-box">
            <ul class="tab-btns tab-buttons">
                <li class="tab-btn active-btn" data-tab="#tab-1"><i class="far fa-briefcase"></i>For Business</li>
                <li class="tab-btn" data-tab="#tab-2"><i class="far fa-user"></i>For Talents</li>
            </ul>
            <div class="tabs-content">
                <div class="tab active-tab" id="tab-1">
                    
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                            <div class="processing-block-one">
                                <div class="inner-box">
                                    <span class="count-text">1</span>
                                    <h3><a href="#">Discovery & Job Analysis</a></h3>
                                    <p>In a 15-30 minute consultation, we discuss your hiring needs, ideal roles, and budget, ensuring you get the right talent at the best value.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                            <div class="processing-block-one">
                                <div class="inner-box">
                                    <span class="count-text">2</span>
                                    <h3><a href="#">Shortlistng & Interviews</a></h3>
                                    <p>We thoroughly vet candidates from our pre-screened talent pool, ensuring you get the perfect fit for your team.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                            <div class="processing-block-one">
                                <div class="inner-box">
                                    <span class="count-text">3</span>
                                    <h3><a href="#">Job Place & Check</a></h3>
                                    <p>We handpick the top 5 candidates for commitment-free interviews—you sign only when you hire. Plus, we offer time tracking and free replacements for a risk-free hiring experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab" id="tab-2">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                            <div class="processing-block-one">
                                <div class="inner-box">
                                    <span class="count-text">1</span>
                                    <h3><a href="#">Complete Our Talent Form</a></h3>
                                    <p>We represent you, so don’t leave anything out! Submit a detailed resume, Loom video, experience letter, and portfolio to showcase your expertise.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                            <div class="processing-block-one">
                                <div class="inner-box">
                                    <span class="count-text">2</span>
                                    <h3><a href="#">Join Our WhatsApp Community</a></h3>
                                    <p>Get early access to remote jobs and expert guidance. Link available after completing the Talent Form.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                            <div class="processing-block-one">
                                <div class="inner-box">
                                    <span class="count-text">3</span>
                                    <h3><a href="#">Express Interest & Get Shortlisted
                                    </a></h3>
                                    <p>We’ll review your application and move forward if you’re the right fit.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br>
<br>
<br>
<br>
<br>

<section class="chooseus-section  pb_90">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="sec-title centred pb_60 sec-title-animation animation-style2">
            <span class="sub-title mb_10 title-animation">With Us</span>
            <h2 class="title-animation">Trusted by next-gen industry leaders</h2>
        </div>
      
    </div>
</section>
<!-- clients-section -->
        <section class="clients-section">
            <div class="auto-container">
                    <h2 class="title-animation">Trusted by next-gen industry leaders</h2>
                <div class="inner-container">
                    <div class="clients-box">
                        <figure class="clients-logo"><a href="#"><img src="{{asset('assets/images/testomonial/1.png')}}" alt=""></a></figure>
                        <figure class="overlay-logo"><a href="#"><img src="{{asset('assets/images/testomonial/1.png')}}" alt=""></a></figure>
                    </div>
                    <div class="clients-box">
                        <figure class="clients-logo"><a href="#"><img src="{{asset('assets/images/testomonial/2.png')}}" alt=""></a></figure>
                        <figure class="overlay-logo"><a href="#"><img src="{{asset('assets/images/testomonial/2.png')}}" alt=""></a></figure>
                    </div>
                    <div class="clients-box">
                        <figure class="clients-logo"><a href="#"><img src="{{asset('assets/images/testomonial/3.png')}}" alt=""></a></figure>
                        <figure class="overlay-logo"><a href="#"><img src="{{asset('assets/images/testomonial/3.png')}}" alt=""></a></figure>
                    </div>
                    <div class="clients-box">
                        <figure class="clients-logo"><a href="#"><img src="{{asset('assets/images/testomonial/4.png')}}" alt=""></a></figure>
                        <figure class="overlay-logo"><a href="#"><img src="{{asset('assets/images/testomonial/4.png')}}" alt=""></a></figure>
                    </div>
                    <div class="clients-box">
                        <figure class="clients-logo"><a href="#"><img src="{{asset('assets/images/testomonial/5.png')}}" alt=""></a></figure>
                        <figure class="overlay-logo"><a href="#"><img src="{{asset('assets/images/testomonial/5.png')}}" alt=""></a></figure>
                    </div>
                </div>
            </div>
        </section>
        <!-- clients-section end -->

<!-- chooseus-section -->
<section class="chooseus-section pt_200 pb_90">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="sec-title centred pb_60 sec-title-animation animation-style2">
            <span class="sub-title mb_10 title-animation">With Us</span>
            <h2 class="title-animation">Why Sponto?</h2>
        </div>
        <div class="inner-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-4"></i></div>
                            <h3><a href="#">Access to Top Remote Talent</a></h3>
                            <p>Hire skilled professionals from a global talent pool, ready to drive your business forward.</p>
                            <div class="link"><a href="#">Learn More<i class="icon-7"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-5"></i></div>
                            <h3><a href="#">Free 90 days replacement</a></h3>
                            <p>Your peace of mind is our priority—get a free replacement if the hire isn’t the right fit.</p>
                            <div class="link"><a href="#">Learn More<i class="icon-7"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-6"></i></div>
                            <h3><a href="#">Industry-Specific Experts</a></h3>
                                <p>Work with professionals who understand your industry, ensuring expertise from day one.</p>
                            <div class="link"><a href="#">Learn More<i class="icon-7"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- chooseus-section end -->

<div class="slide-text">
    <div class="text-inner">
        <ul class="text-list">
            <li>Hire in 4 Days or Less </li>
            <li>Pre-Vetted Professionals </li>
            <li>Fast & Reliable Staffing </li>
            <li>No Hiring Risks </li>
            <li> Scale Your Team Quickly</li>
        </ul>
    </div>
</div>

<br>
<br>
<br>

<!-- industries-section -->
<section class="industries-section pt_20 pb_120">
    <div class="auto-container">
        <div class="sec-title centred pb_60 sec-title-animation animation-style2">
            <span class="sub-title mb_10 title-animation">Industries</span>
            <h2 class="title-animation">Industries Served</h2>
        </div>
        <div class="inner-container clearfix">
            <div class="industries-block-one">
                <div class="inner-box">
                    <div class="icon-box"><img src="{{asset('assets\images\icons\E Commerce.png')}}" alt=""></div>
                    <h3><a href="#">Ecommerce firms</a></h3>
                </div>
            </div>
            <div class="industries-block-one">
                <div class="inner-box">
                    <div class="icon-box"><img src="{{asset('assets\images\icons\Marketing Agency.png')}}" alt=""></div>
                    <h3><a href="#">Marketing Agency</a></h3>
                </div>
            </div>
            <div class="industries-block-one">
                <div class="inner-box">
                    <div class="icon-box"><img src="{{asset('assets\images\icons\SaaS.png')}}" alt=""></div>
                    <h3><a href="#">SaaS Firms</a></h3>
                </div>
            </div>
            <div class="industries-block-one">
                <div class="inner-box">
                    <div class="icon-box"><img src="{{asset('assets\images\icons\Finance & Accounting firm.png')}}" alt=""></div>
                    <h3><a href="#">Accounting & Finance</a></h3>
                </div>
            </div>
            <div class="industries-block-one">
                <div class="inner-box">
                    <div class="icon-box"><img src="{{asset('assets\images\icons\Pharmaceutical.png')}}" alt=""></div>
                    <h3><a href="#">Pharmaceutical</a></h3>
                </div>
            </div>
            <div class="industries-block-one">
                <div class="inner-box">
                    <div class="icon-box"><img src="{{asset('assets\images\icons\Home Services_.png')}}" alt=""></div>
                    <h3><a href="#">Home Services</a></h3>
                </div>
            </div>
            <div class="industries-block-one">
                <div class="inner-box">
                    <div class="icon-box"><img src="{{asset('assets\images\icons\Logistics Firm.png')}}" alt=""></div>
                    <h3><a href="#">Logsitics Firm</a></h3>
                </div>
            </div>
            <div class="industries-block-one">
                <div class="inner-box">
                    <div class="icon-box"><img src="{{asset('assets\images\icons\Real Estate.png')}}" alt=""></div>
                    <h3><a href="#">Real Estate</a></h3>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- industries-section end -->
<section class="funfact-section alternat-2 centred pb_90">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                <div class="funfact-block-one">
                    <div class="inner-box">
                        <div class="count-outer">
                            <span class="odometer" data-count="70">00</span><span class="symble">+</span>
                        </div>
                        <p>Employee hired in last year</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                <div class="funfact-block-one">
                    <div class="inner-box">
                        <div class="count-outer">
                            <span class="odometer" data-count="97">00</span><span class="symble">%</span>
                        </div>
                        <p>Job Fulfillment Rate</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                <div class="funfact-block-one">
                    <div class="inner-box">
                        <div class="count-outer">
                            <span class="odometer" data-count="30">00</span><span class="symble">k+</span>
                        </div>
                        <p>Vetted talent pool</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                <div class="funfact-block-one">
                    <div class="inner-box">
                        <div class="count-outer">
                            <span class="odometer" data-count="14">00</span><span class="symble">+</span>
                        </div>
                        <p>Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="industries-style-three centred pt_120 pb_120">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-15.png);"></div>
    <div class="auto-container">
        <div class="sec-title light pb_60 sec-title-animation animation-style2">
            <span class="sub-title mb_10 title-animation">TALENT POOL</span>
            <h2 class="title-animation">Talent Roster</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                <div class="industries-block-three">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{asset('assets\images\icons\Sales Development Representative.png')}}" alt=""></div>
                        <h3><a href="#">SDR/Appointment Setter</a></h3>
                        <p>2853 Experts available</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                <div class="industries-block-three">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{asset('assets\images\icons\SEO.png')}}" alt=""></div>
                        <h3><a href="#">SEO Specialist</a></h3>
                        <p>2256 Experts available</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                <div class="industries-block-three">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{asset('assets\images\icons\Meta Ads Specialist.png')}}" alt=""></div>
                        <h3><a href="#">Meta Ads Specialist</a></h3>
                        <p>1408 Experts available</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                <div class="industries-block-three">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{asset('assets\images\icons\Automation Specialist.png')}}" alt=""></div>
                        <h3><a href="#">Automation Specialist </a></h3>
                        <p>1740 Experts available</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                <div class="industries-block-three">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{asset('assets\images\icons\Executive Assistant (2).png')}}" alt=""></div>
                        <h3><a href="#">Executive Assistant</a></h3>
                        <p>3948 Experts available</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                <div class="industries-block-three">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{asset('assets\images\icons\Developer.png')}}" alt=""></div>
                        <h3><a href="#">Developers</a></h3>
                        <p>2984 Experts available</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                <div class="industries-block-three">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{asset('assets\images\icons\Social Media Specialist.png')}}" alt=""></div>
                        <h3><a href="#">Social Media Specialist</a></h3>
                        <p>4509 Experts available</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                <div class="industries-block-three">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{asset('assets\images\icons\Google Ads Specialist.png')}}" alt=""></div>
                        <h3><a href="#">Google Ads Specialsit</a></h3>
                        <p>1039 Experts available</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="more-btn"><a href="https://calendly.com/sponto-pk" class="theme-btn btn-one">Book a call now</a></div>
    </div>
</section>

<br>
<!-- dueal-section -->
<section class="dueal-section alternat-3 p_relative pl_100 pr_100">
    <div class="outer-container p_relative pt_120 pb_120">
        <div class="bg-color"></div>
        <div class="shape">
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="shape-3"></div>
            <div class="shape-4"></div>
        </div>
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_three">
                        <div class="content-box">
                            <div class="sec-title pb_30 sec-title-animation animation-style2">
                                <span class="sub-title mb_10 title-animation">General Faqs</span>
                                <h2 class="title-animation">Frequently Asked Questions</h2>
                            </div>
                            <ul class="accordion-box">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="icon-box"><i class="icon-21"></i></div>
                                        <h4>1. How does the candidate selection process work?</h4>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <p>We shortlist the top candidates from a pool of 10,000+ professionals, and you interview the best 5-10 to make the final decision</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-box"><i class="icon-21"></i></div>
                                        <h4>What if the hire isn’t the right fit?</h4>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>We offer a free 90-day replacement to ensure you get the best match for your business.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-box"><i class="icon-21"></i></div>
                                        <h4>How often will I be charged ? </h4>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>You will be sent an invoice every two weeks</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-box"><i class="icon-21"></i></div>
                                        <h4>How does Sponto ensure candidate quality?</h4>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p>Our candidates are pre-vetted for fluent English, relevant experience, and strong remote work skills before being presented to you.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="testimonial-content ml_130">
                        <div class="single-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                            <div class="testimonial-block-three">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-36"></i></div>
                                    <h2 style="color: #fff">The entire team was impressed with Saud, Salma, and Rimsha's work ethic. We're thrilled to have them on board! Adding Rebekah to our operations team has been a game-changer in streamlining on-field activities.
                                    </h2>
                                    <div class="author-box">
                                        <figure class="author-thumb"><img src="assets/images/resource/01ss.png" alt=""></figure>
                                        <h3  style="color: #fff">Johanahan Ruiz</h3>
                                        <span class="designation">Director of Operation, Apex Services Partner</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-block-three">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-36"></i></div>
                                    <h2  style="color: #fff">We love Maheen, Hareem, and Zahra’s commitment and efficiency. Their contributions have added immense value to our team, and we’re grateful to have them on board!</h2>
                                    <div class="author-box">
                                        <figure class="author-thumb"><img src="assets/images/resource/02ss.png" alt=""></figure>
                                        <h3  style="color: #fff">Kenton Gray</h3>
                                        <span class="designation">CEO, Veracor Group</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-block-three">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-36"></i></div>
                                    <h2  style="color: #fff">With Sam and Sofia on board, our SEO and web development have reached a whole new level of quality. Their expertise and dedication have made a significant impact, and we couldn’t be more pleased with the results!
                                    </h2>
                                    <div class="author-box">
                                        <figure class="author-thumb"><img src="assets/images/resource/03ss.png" alt=""></figure>
                                        <h3  style="color: #fff">Kelly Joseph
                                        </h3>
                                        <span class="designation">Co-Founder, Scaled AI</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- dueal-section end -->

@endsection