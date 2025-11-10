@extends('layouts.front_lay')
@section('content')
    <section id="slider" class="slider slide-overlay-dark">
        <div class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider" data-version="5.0">
                <ul>
                       <li data-transition="zoomout"
                        data-slotamount="default"
                        data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut"
                        data-masterspeed="2000">
                        <video autoplay muted loop playsinline preload="auto" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;">
                            <source src="{{ asset('assets/images/home/slider/slider.mp4') }}" type="video/mp4">
                          
                            Your browser does not support the video tag.
                        </video>

                        <div class="video-overlay" style="position:absolute;inset:0;background:rgba(0,0,0,0.8);z-index:1;"></div>
                        <div class="tp-caption"
                             data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-5','-5','-5','10']"
                             data-fontsize="['60', '50', '40', '30']"
                             data-lineheight="['60','60','60','60']"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--headline">Invest. <span class="font-40">Innovate. Inspire.</span>
                            </div>
                        </div>
                        <div class="tp-caption"
                             data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','100']"
                             data-fontsize="['16', '16', '16', '12']"
                             data-lineheight="['25','25','25','25']"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":1250,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--bio" >Invest in world-class leisure and entertainment ventures <br> with a turnkey solutions partner you can trust.
                            </div>
                        </div>
                        <div class="tp-caption"
                             data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['176','176','200','210']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                        >
                        <div class="slide-action">
							<a class="btn btn--white btn--bordered btn--rounded" href="services">Our Services</a>
 						</div>
                        </div>
                    </li>
                  <li data-transition="zoomout"
                        data-slotamount="default"
                        data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut"
                        data-masterspeed="2000">
                        <video autoplay muted loop playsinline preload="auto" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;">
                            <source src="{{ asset('assets/images/home/slider/slider.mp4') }}" type="video/mp4">
                          
                            Your browser does not support the video tag.
                        </video>

                        <div class="video-overlay" style="position:absolute;inset:0;background:rgba(0,0,0,0.8);z-index:1;"></div>
                        <div class="tp-caption"
                             data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-5','-5','-5','10']"
                             data-fontsize="['60', '50', '40', '30']"
                             data-lineheight="['60','60','60','60']"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--headline"><span class="font-40">Invest.</span> Innovate.<span class="font-40"> Inspire.</span>
                            </div>
                        </div>
                        <div class="tp-caption"
                             data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','100']"
                             data-fontsize="['16', '16', '16', '12']"
                             data-lineheight="['25','25','25','25']"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":1250,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--bio" >Innovating immersive attractions through creative design,<br> smart technology, and seamless execution.
                            </div>
                        </div>
                        <div class="tp-caption"
                             data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['176','176','200','210']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                        >
                        <div class="slide-action">
							<!-- <a class="btn btn--white btn--bordered btn--rounded" href="services">Our Services</a> -->
 						</div>
                        </div>
                    </li>
                   <li data-transition="zoomout"
                        data-slotamount="default"
                        data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut"
                        data-masterspeed="2000">
                        <video autoplay muted loop playsinline preload="auto" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;">
                            <source src="{{ asset('assets/images/home/slider/slider.mp4') }}" type="video/mp4">
                          
                            Your browser does not support the video tag.
                        </video>

                        <div class="video-overlay" style="position:absolute;inset:0;background:rgba(0,0,0,0.8);z-index:1;"></div>
                        <div class="tp-caption"
                             data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-5','-5','-5','10']"
                             data-fontsize="['60', '50', '40', '30']"
                             data-lineheight="['60','60','60','60']"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--headline"><span class="font-40">Invest. Innovate. </span> Inspire.
                            </div>
                        </div>
                        <div class="tp-caption"
                             data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','100']"
                             data-fontsize="['16', '16', '16', '12']"
                             data-lineheight="['25','25','25','25']"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":1250,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--bio" >Inspiring growth through strategic partnerships and scalable <br> business models in leisure and entertainment.
                            </div>
                        </div>
                        <div class="tp-caption"
                             data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['176','176','200','210']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                        >
                        <div class="slide-action">
							<a class="btn btn--white btn--bordered btn--rounded" href="services">Business Models</a>
 						</div>
                        </div>
                    </li>


                </ul>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
        <!-- END OF SLIDER WRAPPER -->
    </section>
          <section id="featured4" class="featured featured-4 serviceSections featured-left pt-110 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                         <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="row whatWedoSection">
                                <div class="col-sm-12 col-md-12 col-lg-12 wow fadeInUp" data-wow-delay="100ms">
                                         <img src="assets/images/home/what-we-do.png" alt="banner img"  >
                                    </div>
                                </div>
                       
                            </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="heading">
                                <!--<p class="heading--subtitle">Who Are We?</p>-->
                                <h2 class="heading--title mb-4">What We Do</h2>
                            </div>
                            <p class="feature-card-desc">
                                <p>We provide <b>turnkey solutions for the leisure and entertainment industry</b>, creating spaces that inspire play, adventure, and connection</p>
                                <p>Our expertise includes:</p>
                                <p><b>Soft Play Zones</b> – Safe, themed, and interactive environments for children.</p>
                                <p><b>Trampoline Parks</b> – High-energy spaces that blend fun and fitness.</p>
                                <p><b>Climbing Walls & Ziplines</b> – Adventure-based attractions for all ages.</p>
                                <p><b>Family Entertainment Centers (FECs)</b> – Complete destinations combining play, learning, and excitement.</p>
                                <p><b>Interactive Experiences </b> – Engaging tech-driven activities that keep guests coming back. </p>
                                <p><b>Social Entertainment Venues</b> – Innovative concepts for dining, games, and gatherings.</p>
                                <p><b>Restaurants & Cafes</b> – Curated dining experiences to complement entertainment destinations.</p>

                                <p>From <b>concept design to installation and ongoing support</b>, we handle every detail ensuring safety, creativity, and long-term performance</p>

                        </div>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <section id="featured1" class="featured featured-1 homeService text-center pt-110">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading  mb-50 text--center">
                        
                        <h2 class="heading--title">Our Services</h2>
                        <p class="heading--desc mb-0">End-to-End Solutions for Leisure Ventures</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i> <img src="assets/images/home/advisory_ business_modelling.png" alt="advisory_ business_modelling"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Advisory & Business Modelling</h3>
                            <p class="feature-card-desc">Strategic analysis to determine the optimal business model aligned with market opportunities and your investment criteria.</p>
                        </div>
                    </div>
                </div>
              
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                             <i> <img src="assets/images/home/location_planning.png" alt="location_planning"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Location & ROI Planning</h3>
                            <p class="feature-card-desc">Strategic site selection and detailed financial modelling designed to optimize location performance, reduce risk, and maximize return on investment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i> <img src="assets/images/home/design_consultancy.png" alt="design_consultancy"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Design & Consultancy</h3>
                            <p class="feature-card-desc">Comprehensive creative solutions from concept development to BIM-integrated technical documentation and high-impact visualizations</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                             <i> <img src="assets/images/home/civil_works.png" alt="civil_works"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Civil Works</h3>
                            <p class="feature-card-desc">Expert civil works execution delivering high-quality foundations, concrete structures, and structural elements with precision engineering</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                             <i> <img src="assets/images/home/mep_works.png" alt="mep_works"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">MEP Works</h3>
                            <p class="feature-card-desc">Integrated mechanical, electrical, and plumbing solutions including HVAC systems, designed and installed to international standards for efficiency and reliability.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                             <i> <img src="assets/images/home/fit_out_works.png" alt="fit_out_works"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Fit-out Works</h3>
                            <p class="feature-card-desc">Bespoke interior fit-outs with premium partitions, high-end finishing, and specialized installations that create immersive, brand-focused spaces.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                           <i> <img src="assets/images/home/supply_installation.png" alt="supply_installation"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Supply & Installation</h3>
                            <p class="feature-card-desc">End-to-end supply and installation services ensuring every component meets the highest standards of quality, safety, and performance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i> <img src="assets/images/home/operation_maintenance.png" alt="operation_maintenance"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Operation & Maintenance</h3>
                            <p class="feature-card-desc">Comprehensive operation and maintenance services designed to maximize the longevity, safety, and performance of leisure assets.</p>
                        </div>
                    </div>
                    
                </div>
                 <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                             <i> <img src="assets/images/home/revenue_based_partnership.png" alt="revenue_based_partnership"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Revenue-based Partnership</h3>
                            <p class="feature-card-desc">Optional ongoing collaboration with performance-based incentives designed to align with and drive your venture’s success.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- .row end -->
            <!-- <div class="row ">
                <div class="col-sm-12 col-md-12 col-lg-12 text--center">
                    <a href="{{ url('services') }}" class="btn btn--primary btn--rounded">Get Started</a>
                </div> -->
                <!-- .col-lg-12 end -->
            <!-- </div> -->
            <!-- .row end -->

        </div>
        <!-- .container end -->
    </section>

 

 
    
  
        <section id="infoCards" class="info-cards WhatSetsApart pt-80 ">
        <div class="container">
             <div class="heading">
                <h2 class="heading--title mb-5 text-center">What Sets Us Apart</h2>
            </div>
            
        
            <div class="row">
                
                <!-- .col-lg-4 end -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="info-card">
                        <div class="info-card-step">01.</div>
                        <div class="info-card-content">


                            <h3 class="info-card-title">Your Turnkey Partner</h3>
                            <p class="info-card-desc">We transform leisure business ideas into profitable operations.</p>
                        </div>
                    </div>
                    <!-- .info-card end -->
                </div><div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="info-card">
                        <div class="info-card-step">02.</div>
                        <div class="info-card-content">
                            <h3 class="info-card-title">Stress-Free Experience</h3>
                            <p class="info-card-desc">Our transparent, ROI-focused approach simplifies complex
                                projects</p>
                        </div>
                    </div>
                    <!-- .info-card end -->
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="info-card">
                        <div class="info-card-step">03.</div>
                        <div class="info-card-content">
                            <h3 class="info-card-title">Regional Expertise</h3>
                            <p class="info-card-desc">Specialized in UAE and GCC markets with proven success.</p>
                        </div>
                    </div>
                    <!-- .info-card end -->
                </div>

                <!-- .col-lg-4 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
        <section id="featured3" class="featured featured-2 whyPartner featured-3 featured-left bg-dark3 pt-0 pb-0">
        <div class="container-fluid pr-0 pl-0">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-content">
                    <div class="heading">
                        <h2 class="heading--title color-white">Why Partner With Us</h2>
                        <p class="heading--desc color-white">At Innovative Leisure, our experienced and multidisciplinary team is dedicated to delivering comprehensive 360° turnkey solutions for leisure facilities. We specialize in providing top-notch technical services, facility management, maintenance, and engineering to ensure your projects are executed seamlessly and efficiently. Trusted by clients across UAE and KSA, we pride ourselves on our proven project references and commitment to excellence in every aspect of our service.</p>
                    </div>
                    <div class="feature-card wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-card-icon">
                            <i class="icon-lifesaver"></i>
                        </div>
                        <div class="feature-card-content">
                            <p class="feature-card-title">Access to detailed business plans and financial forecasts</p>
                          
                        </div>
                    </div>
                    <div class="feature-card wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-card-icon">
                            <i class="icon-lifesaver"></i>
                        </div>
                        <div class="feature-card-content">
                            <p class="feature-card-title">Site selection and setup assistance</p>
                            
                        </div>
                    </div>
                    <div class="feature-card wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-card-icon">
                            <i class="icon-lifesaver"></i>
                        </div>
                        <div class="feature-card-content">
                            <p class="feature-card-title">Operational training and ongoing support</p>
                           
                        </div>
                    </div>
                    <div class="feature-card wow fadeInUp" data-wow-delay="400ms">
                        <div class="feature-card-icon">
                            <i class="icon-lifesaver"></i>
                        </div>
                        <div class="feature-card-content">
                               <p class="feature-card-title">Scalable franchise models with multiple revenue streams</p>
                            
                        </div>
                    </div>
                    <div class="feature-card wow fadeInUp" data-wow-delay="500ms">
                        <div class="feature-card-icon">
                            <i class="icon-lifesaver"></i>
                        </div>
                        <div class="feature-card-content">
                              <p class="feature-card-title">Experienced team with proven success stories</p>
                     
                        </div>
                    </div>
                    <!-- feature-card end -->
                </div>
                <!-- .col-lg-6 end -->
                <div class="col-sm-12 col-md-12 col-lg-6 pr-0">
                    <div class="banner--img">
                        <img src="assets/images/home/why-partner-with-us.png" alt="banner img">
                    </div>
                </div>
                <!-- .col-lg-6 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
        <section id="case" class="case case-standard case-3col pt-110 bg-gray">
    <div class="container">
        <div class="row flipInX" data-wow-delay="100ms">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading heading-2 mb-30 text--center">
                    
                    <h2 class="heading--title">Our Projects</h2>
                    <p class="heading--desc mb-0">We monitor the spectrum of available business investment and alert our users to market moving events as and when it happens.</p>
                </div>
            </div>
            <!-- .col-lg-6 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
               <div class="case-carousel-grid">
    <div class="row">
        <!-- Case #1 -->
        <div class="col-sm-12 col-md-6 col-lg-4 case-item filter-customer filter-tips">
            <div class="case-item-container">
                <div class="case--img">
                    <img src="assets/images/home/project-1.png" alt="case Item">
                    <div class="case--hover">
                        <div class="case--action">
                            <a href="#" title="case Item"></a>
                        </div>
                        <!-- .case-action end -->
                    </div>
                    <!-- .case-hover end -->
                </div>
                <!-- .case-img end -->
                <div class="case--content">
                    <!-- <div class="case--cat">
                        <a href="#">Business Tips</a><a href="#">Consulting</a>
                    </div> -->
                    <div class="case--title">
                        <h4><a href="case-study-single.html">Soft Play & Interactives Supply & Installation</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- . case-item end -->
        <!-- Case #2 -->
        <div class="col-sm-12 col-md-6 col-lg-4 case-item filter-Investment">
            <div class="case-item-container">
                <div class="case--img">
                    <img src="assets/images/home/project-2.png" alt="case Item">
                    <div class="case--hover">
                        <div class="case--action">
                            <a href="#" title="case Item"></a>
                        </div>
                        <!-- .case-action end -->
                    </div>
                    <!-- .case-hover end -->
                </div>
                <!-- .case-img end -->
                <div class="case--content">
                    <!-- <div class="case--cat">
                        <a href="#">Investment</a><a href="#">Tips</a>
                    </div> -->
                    <div class="case--title">
                        <h4><a href="case-study-single.html">Family Entertainment Center Concept Development</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- . case-item end -->
        <!-- Case #3 -->
        <div class="col-sm-12 col-md-6 col-lg-4 case-item filter-tips filter-Consulting">
            <div class="case-item-container">
                <div class="case--img">
                    <img src="assets/images/home/project-1.png" alt="case Item">
                    <div class="case--hover">
                        <div class="case--action">
                            <a href="#" title="case Item"></a>
                        </div>
                        <!-- .case-action end -->
                    </div>
                    <!-- .case-hover end -->
                </div>
                <!-- .case-img end -->
                <div class="case--content">
                    <!-- <div class="case--cat">
                        <a href="#">Customer Service</a><a href="#">Consulting</a>
                    </div> -->
                    <div class="case--title">
                        <h4><a href="case-study-single.html">Outdoor Net Trail Rectification & Maintenance</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- . case-item end -->

 
        <!-- . case-item end -->
    </div>
    <!-- .row end -->
     <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                         <a href="" class="btn btn--primary btn--bordered btn-padding btn--rounded">View All Projects </a>
                </div>
</div>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<section id="pricing1" class="pricing pricing-1 bg-overlay bg-overlay-dark2 pt-110 pb-0">
  <div class="bg-section">
    <img src="assets/images/background/2.jpg" alt="background">
  </div>
  <div class="container">
    <div class="row clearfix">
      <div class="col-sm-12 col-md-12 col-lg-6 offset-md-3">
        <div class="heading heading-1 text--center mb-40">
          <h2 class="heading--title text-white">Our Pricing Plans</h2>
          <p class="heading--desc heading--light mb-0 color-white">
            Get started now with us to earn every day and forever in your business. We accept Investment from all over the world.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container pt-40">
    <div class="row">

      <!-- Pricing Package #1 -->
      <div class="col-sm-12 col-md-4 col-lg-4 price-table">
        <div class="pricing-panel">
            <div class="pricing--icon mb-3">
              <img src="assets/images/home/quick-service-restaurant.png" alt="Starter Plan Icon" class="img-fluid w-100 rounded-3">
            </div>
          <div class="pricing--heading text--center">
            
            <h4>Family Entertainment Center (FEC)</h4>
            <p><span class="currency">AED</span> 1.25M</p>
            <div class="pricing--desc">
              A complete entertainment destination with soft play, trampolines, adventure zones, interactive attractions, dining and more..
            </div>
            <a class="btn btn--primary btn-padding btn--bordered btn--rounded mt-2" href="#">Explore Business Models </a>
          </div>
        </div>
      </div>

      <!-- Pricing Package #2 -->
      <div class="col-sm-12 col-md-4 col-lg-4 price-table ">
        <div class="pricing-panel">
              <div class="pricing--icon mb-3">
              <img src="assets/images/home/outdoor-waterPlay.png" alt="Basic Plan Icon" class="img-fluid w-100 rounded-3">
            </div>
          <div class="pricing--heading text--center">
          
            <h4>Outdoor Water Play</h4>
            <p><span class="currency">AED</span> 1.8M</p>
            <div class="pricing--desc">
              Exciting water slides, splash zones, and interactive fountains for resorts, parks, and family-friendly outdoor attractions.
            </div>
            <a class="btn btn--primary btn-padding btn--bordered btn--rounded mt-2" href="#">Explore Business Models </a>
          </div>
        </div>
      </div>

      <!-- Pricing Package #3 -->
    <div class="col-sm-12 col-md-4 col-lg-4 price-table">
        <div class="pricing-panel">
            <div class="pricing--icon mb-3">
              <img src="assets/images/home/quick-service-restaurant.png" alt="Starter Plan Icon" class="img-fluid w-100 rounded-3">
            </div>
          <div class="pricing--heading text--center">
            
            <h4>Quick Service Restaurant (QSR)</h4>
            <p><span class="currency">AED</span> 250,000</p>
            <div class="pricing--desc">
                Modern, efficient, and engaging dining solutions for leisure destinations, malls, and entertainment centers.
            </div>
            <a class="btn btn--primary btn-padding btn--bordered btn--rounded mt-2" href="#">Explore Business Models </a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="section-divider"></div>
</section>




       <section id="featured4" class="featured featured-4 featured-left pt-110 pb-100 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="heading">
                                <!-- <p class="heading--subtitle">Who Are We?</p> -->
                                <h2 class="heading--title mb-4">About Innovative Leisure </h2>
                            </div>
                            <p class="feature-card-desc">
                                <p><b>Innovative Leisure is a specialist leisure development company</b> dedicated to building <b>immersive, profitable, and future-ready entertainment spaces.</b></p>
                                <p>We combine <b>creative design, engineering expertise</b>, and <b>operational insight</b> to bring ideas to life from <b>soft play centers and trampolines</b> to <b>adventure parks and social entertainment hubs.</b></p>


                                <h6>Our mission is simple:</h6>
                                <p><b>To transform ordinary spaces into extraordinary experiences that entertain, engage, and endure.</b>  </p>

                                <a class="btn btn--secondary btn--bordered btn--rounded mt-2 btn-padding" href="#">Read More</a>
                            </p>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 wow fadeInUp" data-wow-delay="100ms">
                                         <img src="assets/images/home/about-us.png" alt="banner img">
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
       <section id="cta1" class="cta cta-1 bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h3 class="text-center">Innovation Starts Here — Explore Our Concepts</h3>
                    <!--<p class="text-center">Discover investor-ready business models with validated ROI metrics, designed for Dubai’s thriving leisure market.</p>-->
                   
                </div>
                <!-- .col-lg-9 -->
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                         <a href="{{ url('services') }}" class="btn btn--white btn--bordered btn--rounded">Look Through Our Business Models</a>
                </div>
                <!-- .col-lg-3 -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>
    <section id="featured4" class="featured featured-4 featured-left pt-110 pb-100">
        <div class="container">
            <div class="heading">
                <h2 class="heading--title mb-5">Our Core Values</h2>
            </div>
            <div class="row">
                 
              
                <div class="col-sm-12 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                             <i> <img src="assets/images/home/transparency.png" alt="transparency"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Transparency</h3>
                            <p class="feature-card-desc">Transparent investor access to comprehensive performance data for informed decision-making and portfolio oversight.</p>
                        </div>
                    </div>
                    .
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i> <img src="assets/images/home/integrity.png" alt="integrity"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Integrity</h3>
                            <p class="feature-card-desc">Ensuring reliable, accountable delivery of promised returns for maximum investor confidence.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i> <img src="assets/images/home/innovation.png" alt="innovation"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Innovation</h3>
                            <p class="feature-card-desc">Innovative, market-driven concepts tailored to evolving industry trends and customer needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                           <i> <img src="assets/images/home/partnership.png" alt="partnership"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Partnership</h3>
                            <p class="feature-card-desc">Driving shared success through strategic, long-term collaboration and partnership.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 


@endsection
@section('page-script')
    <script>
        $('.home-li').addClass('active');
    </script>
@endsection
