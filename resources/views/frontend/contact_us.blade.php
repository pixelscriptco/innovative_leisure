@extends('layouts.front_lay')
@section('content')
    <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
        <div class="bg-section">
            <img src="assets/images/contact/contact-us-banner.png" alt=" Contact Us Banner" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <div class="title title-6 text-center">
                        <div class="title--heading">
                            <h1>Contact Us</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb d-flex justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
    <section id="contact1" class="contact contact-1 pt-110 pb-110 text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-2 mb-50 text--center">
                        <p class="heading--subtitle">Have A Question?</p>
                        <h2 class="heading--title">Get in touch</h2>
                        <p class="heading--desc mb-0">Your trusted partner for integrated leisure & entertainment solutions - from concept to completion and beyond.</p>
                    </div>
                </div>
                <!-- .col-lg-6 end -->
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                    <form class="mb-0" id="contact-form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <input type="text" class="form-control" name="contact-name" id="contact-name" placeholder="Full Name" required="">
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <input type="email" class="form-control" name="contact-email" id="contact-email" placeholder="Email">
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <input type="text" class="form-control" name="contact-phone" id="contact-phone" placeholder="WhatsApp">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <textarea class="form-control" name="contact-message" id="contact-message" rows="2" placeholder="Write Message:"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <textarea class="form-control" name="contact-message1" id="contact-message1" rows="2" placeholder="What Are You Looking For?"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <textarea class="form-control" name="contact-message2" id="contact-message2" rows="2" placeholder="Which Concept Are You Interested In?"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <textarea class="form-control" name="contact-message3" id="contact-message3" rows="2" placeholder="When Do You Plan To Invest Or Start A Project?"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" value="Submit Request" name="submit" class="btn btn--primary submit-contact">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="contact-result"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <p>We look forward to partnering with you and delivering solutions that exceed expectations.</p>
                            </div>
                        </div>
                    </form>
                    <!-- form end -->
                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <section class="google-maps pb-0 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xs-12  col-sm-12  col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3614.8218848442034!2d55.21662!3d25.040118!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6d76ed35fc95%3A0xd70ba7ea6188ddd1!2sVista%20by%20Prestige%20One!5e0!3m2!1sen!2sus!4v1761794178028!5m2!1sen!2sus" width="1100" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section id="contactInfo" class="contact contact-info bg-white text--center pt-90 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="contact--info">
                        <h3>Our Address</h3>
                        <p>Innovative Leisure</p>
                        <p>Investments and Venture Solutions</p>
                        <p>Dubai Sports City, Dubai</p>
                        <p>United Arab Emirates</p>
                    </div>
                </div>
                <!-- .col-lg-4 end -->
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="contact--info">
                        <h3>Our Email</h3>
                        <p>info@innovative-leisure.com</p>

                    </div>
                </div>
                <!-- .col-lg-4 end -->
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="contact--info">
                        <h3>WhatsApp</h3>
                        <p>+971525662703</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="contact--info">
                        <h3>Hotlines</h3>
                        <p>+971525662703</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="contact--info">
                        <h3>Landline</h3>
                        <p>+97144206775</p>
                    </div>
                </div>
                <!-- .col-lg-4 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
@endsection
@section('page-script')
    <script>
        $('.contact-li').addClass('active');

        $('.submit-contact').on('click', function(e) {
            e.preventDefault();

            let formData = new FormData($('#contact-form')[0]);

            $.ajax({
                url: 'post-contact',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    alert('Your inquiry send successfully');
                    location.reload();
                },
                error: function(status, jqXHR, error) {
                    alert('Something went wrong');
                }
            })
        });
    </script>
@endsection
