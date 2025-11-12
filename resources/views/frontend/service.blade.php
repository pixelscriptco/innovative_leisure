@extends('layouts.front_lay')
@section('content')
    <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
        <div class="bg-section">
            <img src="assets/images/services/service-banner.jpg" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <div class="title text-center">
                        <div class="title--heading">
                            <h1>Our Services</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb d-flex justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
                        </ol>
                    </div>
                    <!-- .title end -->
                </div>
                <!-- .col-lg-8 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #page-title end -->


<section id="featured4" class="featured featured-4 serviceAbout featured-left pt-110 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="heading">

                                <h2 class="heading--title mb-4">Turnkey Solutions for the Leisure & Entertainment Industry</h2>
                            </div>
                            <p class="feature-card-desc">
        At <b>Innovative Leisure</b>, we deliver <b>end-to-end</b> services for creating immersive, safe,
         and profitable entertainment spaces. From concept development to ongoing operations,
         we provide <b>turnkey solutions</b> tailored to <b>family entertainment centers, adventure play zones,
          trampoline parks, interactive experiences, social leisure venues, and restaurants.</b>
                            </p>
                            <a class="btn btn-sm btn--rounded" href="https://drive.google.com/file/d/1_G4fsG8aol2n43tpH_lehxW17Xrkq5xC/view?pli=1">Download Our Company Profile</a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 wow fadeInUp" data-wow-delay="100ms">
                                         <img src="assets/images/about/about.png" alt="banner img">
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Featured #1
    ============================================= -->
    <section id="featured1" class="featured featured-1 pb-60 text-center">
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
                            <h3 class="feature-card-title">Advisory & Investment Modeling</h3>
                            <p class="feature-card-desc">We provide <b>strategic advisory and business modelling</b> to determine
                                 the optimal business structure for your project. By analyzing <b>market opportunities, audience insights,
                                 and investment criteria</b>, we help you build <b>profitable, sustainable, and future-ready leisure ventures</b></p>
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
                            <p class="feature-card-desc">Choosing the right location is critical. Our team conducts <b>strategic site selection,
                                 feasibility studies, and detailed ROI modelling to maximize visitor traffic, reduce operational risk,
                                  and ensure optimal returns </b></p>
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
                            <p class="feature-card-desc">From <b>concept design to technical documentation</b>, we provide <b>creative, practical, and immersive solutions </b>.
                            We ensure your leisure space is <b>visually stunning,
                                safe, and operationally efficient </b></p>
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
                            <p class="feature-card-desc">Our expert team executes <b>civil works with precision</b>, including <b>foundations, concrete structures, and structural elements.</b>
                                 We prioritize <b>high-quality construction and durability</b>, providing a <b>solid base for all attractions and installations.</b></p>
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
                            <p class="feature-card-desc">We provide <b>integrated mechanical, electrical, and plumbing solutions </b>, covering <b>HVAC systems, energy optimization, and regulatory compliance.</b>
                                 Every system is <b>designed and installed to international standards</b>, ensuring <b>efficiency, safety, and reliability.</b></p>
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
                            <p class="feature-card-desc">We deliver <b>bespoke interior fit-outs</b> that bring your vision to life. Our services include <b>premium partitions, high-end finishes,
                                 specialized installations, and themed décor</b>, creating <b>immersive brand-focused environments </b>that delight visitors.</p>
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
                            <p class="feature-card-desc">Our <b>turnkey supply and installation services</b> cover <b>play equipment, interactive systems, trampolines, climbing walls, ziplines, and café installations.</b>
                                 We ensure <b>all components meet the highest quality, safety, and performance standards.</b></p>
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
                            <p class="feature-card-desc">We provide <b>comprehensive operational support and maintenance</b> to maximize the <b>lifespan, safety, and performance</b> of your leisure assets. </p>
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
                            <p class="feature-card-desc">For clients seeking <b>long-term collaboration</b>, we offer <b>performance-based partnership models</b> that <b>align incentives with the success of your venture. </b>
                                This ensures <b>shared goals, sustained growth, and measurable ROI </b></p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #featured1 end -->

       <section id="cta1" class="cta cta-1 bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h3 class="text-center">Ready to Bring Your Leisure Project to Life?</h3>
                    <!--<p class="text-center">Discover investor-ready business models with validated ROI metrics, designed for Dubai’s thriving leisure market.</p>-->

                </div>
                <!-- .col-lg-9 -->
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                         <a href="{{ url('contact-us') }}" class="btn btn--white btn--bordered btn--rounded">Contact Us to Discuss Your Project </a>
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
        $('.service-li').addClass('active');
    </script>
@endsection
