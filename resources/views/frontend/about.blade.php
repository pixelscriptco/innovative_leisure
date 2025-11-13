@extends('layouts.front_lay')
@section('content')
    <section id="page-title" class="page-title bg-overlay  bg-overlay-dark bg-parallax">
        <div class="bg-section">
            <img src="assets/images/about/about-banner.svg" alt="Background"  style="width:100%;height:100%;object-fit:cover;object-position:center;"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <div class="title text-center">
                        <div class="title--heading">
                            <h1>About Us</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb d-flex justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </div><!-- .title end -->
                </div><!-- .col-lg-8 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </section>

    <section id="featured4" class="featured featured-4 serviceSections featured-left pt-110 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="row whatWedoSection">
                                <div class="col-sm-12 col-md-12 col-lg-12 wow fadeInUp" data-wow-delay="100ms">
                                    <img src="assets/images/home/about-us.png" alt="banner img">
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="heading">
                                <!--<p class="heading--subtitle">Who Are We?</p>-->
                                <h2 class="heading--title mb-4">Who We Are</h2>
                            </div>
                            <p class="feature-card-desc">
                            <p>Innovative Leisure is a leading turnkey solutions provider for the leisure and
                                entertainment industry,
                                creating spaces that inspire play, adventure, and connection. We specialize in
                                designing, building,
                                and operating immersive entertainment environments for all ages, from children’s soft
                                play zones to
                                full-fledged family entertainment centers (FECs), and from adventure play areas to
                                complete adventure
                                courses and installations.</p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="featured3" class="featured featured-2 whyPartner featured-3 featured-left bg-dark3 pt-0 pb-0">
        <div class="container-fluid pr-0 pl-0">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-content">
                    <div class="about-heading heading">
                        <h2 class="heading--title color-white">Our Expertise</h2>
                        <p class="heading--desc color-white">Our team combines creative vision, technical expertise, and
                            operational insight to bring ideas to life. We provide end-to-end solutions covering:</p>

                    </div>
                    <div class="about-expetise">
                        <ul>
                            <li><b>Concept Development & Design </b> – Custom themes, layouts, and guest experiences
                            </li>
                            <li><b>Project Management & Fit-Out </b> – End-to-end execution with quality assurance</li>
                            <li><b>Equipment Supply & Installation </b> – Certified, safe, and durable play systems</li>
                            <li><b>Operations & Maintenance Support </b> – Ensuring long-term performance and ROI</li>
                        </ul>
                    </div>
                    <p class="color-white">We have extensive experience across <b>soft play zones, trampoline parks,
                            climbing walls, ziplines, adventure play areas,
                            social entertainment venues, family entertainment centers (FECs)</b>, and <b>interactive
                            attractions </b>. Every project is crafted to deliver
                        <b>immersive experiences that attract visitors, boost engagement, and maximize
                            returns</b></p>

                    <!-- feature-card end -->
                </div>
                <!-- .col-lg-6 end -->
                <div class="col-sm-12 col-md-12 col-lg-6 pr-0">
                    <div class="banner--img">
                        <img src="assets/images/about/our-expertise.jpg" alt="banner img">
                    </div>
                </div>
                <!-- .col-lg-6 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>


    <section id="featured4" class="featured featured-4 serviceSections featured-left pt-110 pb-100 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="row whatWedoSection">
                                <div class="col-sm-12 col-md-12 col-lg-12 wow fadeInUp" data-wow-delay="100ms">
                                    <img src="assets/images/about/why-choose-us.svg" alt="banner img">
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="heading">
                                <!--<p class="heading--subtitle">Who Are We?</p>-->
                                <h2 class="heading--title mb-4">Why Choose Us</h2>
                            </div>
                            <p class="feature-card-desc">
                            <p>At Innovative Leisure, we transform ordinary spaces into extraordinary destinations.
                                Our projects combine safety, creativity, and operational excellence, providing memorable
                                experiences,
                                smooth operations, and long-term value. We don’t just build attractions, we create
                                destinations that
                                entertain, inspire, and endure.</p>

                            <a class="btn btn--secondary btn--bordered btn--rounded mt-2 btn-padding" href="#">Read
                                More</a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
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
                            <p class="feature-card-desc">Transparent investor access to comprehensive performance data
                                for informed decision-making and portfolio oversight.</p>
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
                            <p class="feature-card-desc">Ensuring reliable, accountable delivery of promised returns for
                                maximum investor confidence.</p>
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
                            <p class="feature-card-desc">Innovative, market-driven concepts tailored to evolving
                                industry trends and customer needs.</p>
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
                            <p class="feature-card-desc">Driving shared success through strategic, long-term
                                collaboration and partnership.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <a href="{{ url('services') }}" class="btn btn--primary btn-padding btn--bordered btn--rounded">Explore
                        Our Services </a>
                </div>
            </div>
        </div>
    </section>

    <section id="featured4" class="featured featured-4 featured-left pt-110 pb-100 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="heading">
                                <!-- <p class="heading--subtitle">Who Are We?</p> -->
                                <h2 class="heading--title mb-4">Our Vision & Commitment </h2>
                            </div>
                            <p class="feature-card-desc">
                            <p>At <b>Innovative Leisure</b>, our vision is to be the <b>most trusted and innovative
                                    partner</b> for the leisure and
                                entertainment industry. We are committed to delivering <b>turnkey solutions that combine
                                    creativity, safety,
                                    and profitability</b>, ensuring every project becomes a <b>memorable destination
                                    that engages guests and drives
                                    long-term success.</b></p>


                            </p>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 wow fadeInUp" data-wow-delay="100ms">
                                    <img src="assets/images/about/vision.svg" alt="banner img">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
@section('page-script')
    <script>
        $('.about-li').addClass('active');
    </script>
@endsection
