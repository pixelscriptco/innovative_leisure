@extends('layouts.front_lay')
@section('content')
<section id="page-title" class="page-title bg-overlay  bg-overlay-dark bg-parallax">
	<div class="bg-section">
		<img src="assets/images/business-model/business-model-banner.png" alt="Business Model Banner"/>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
				<div class="title text-center">
                    <div class="title--heading">
                        <h1>Business Models</h1>
                    </div>
					<div class="clearfix"></div>
					<ol class="breadcrumb d-flex justify-content-center">
						<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Business Models</li>
					</ol>
				</div><!-- .title end -->
			</div><!-- .col-lg-8 end -->
		</div><!-- .row end -->
	</div><!-- .container end -->
</section>
<section id="featured4" class="featured featured-4 serviceAbout featured-left pt-110 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="heading">

                                <h2 class="heading--title mb-4">Turnkey Business Models for Profitable Ventures</h2>
                            </div>
                            <p class="feature-card-desc">
                                Explore our <b>turnkey business models with guaranteed ROI partnership</b> designed to create <b>profitable, 
                                engaging, and scalable ventures</b> across entertainment, hospitality, and leisure sectors. Each model includes <b>high-level ROI projections,
                                investment ranges, operational highlights, and key features</b>, helping you make informed decisions. 

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
<section class="py-5 bg-light" id="business-models">
  <div class="container">


    <!-- Model 1 -->
    <div class="row align-items-center mt-5 mb-5">
      <div class="col-md-5">
        <img src="assets/images/business-model/fec-large-scale.svg" alt="Model 1" class="img-fluid rounded-4 shadow-sm">
      </div>
      <div class="col-md-7 business-model-details">
            <h4 class="fw-bold">Family Entertainment Center Large Scale (FEC) </h4>
          <p> <b>Brief Description</b>: A complete entertainment destination combining soft play,
             trampolines, adventure courses, interactive attractions, and dining for all age groups. </p>

        <p>	<b>Price Starting From</b>: AED 10M</p>
        <p>	<b>Breakeven Period</b>: 18 Months</p>
        <p>	<b>Estimated Net Profit</b>: 20-25%</p>
        <p>	<b>Duration to Launch</b>: 8-10 months</p>
        <h6>Features / Highlights:</h6>
        <ul>
          <li>Soft play zones & toddler areas</li>
          <li>	Trampolines & obstacle courses</li>
          <li>	Adventure & interactive experiences</li>
          <li>	Social Redemption games</li>
          <li>	Cafe, dining, and party rooms</li>
        </ul>


        <!-- <p class="text-muted">Operate through strategic franchise partnerships ensuring brand consistency and local growth.</p> -->
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdoJRigtSx5Y-ZJh44MrvThu59iAmBe4AOpTiX9F3zOh_tDGQ/viewform" class="btn btn--secondary  btn--bordered btn--roundedrounded-3 mt-2 px-4">
          Submit Virtual NDA for Details
        </a>
      </div>
    </div>

    <!-- Model 2 (reverse layout) -->
    <div class="row align-items-center mb-5 flex-md-row-reverse">
      <div class="col-md-5">
        <img src="assets/images/business-model/fec-small-scale.svg" alt="Model 2" class="img-fluid rounded-4 shadow-sm">
      </div>
      <div class="col-md-7 business-model-details">
        <h4 class="fw-bold">Family Entertainment Center Small Scale (FEC)</h4>
          <p> <b>Brief Description</b>: A compact family entertainment center offering
           engaging soft play and interactive experiences in a smaller footprint — ideal for malls, community hubs, and boutique venues.  </p>

        <p>	<b>Price Starting From</b>: AED 1.25M</p>
        <p>	<b>Breakeven Period</b>: 8-10 Months</p>
        <p>	<b>Estimated Net Profit</b>: 25-35%</p>
        <p>	<b>Duration to Launch</b>: 5-7 months</p>
        <h6>Features / Highlights:</h6>
        <ul>
          <li>	Baby & Toddler areas</li>
          <li>		Kids Soft Play & Role Play Zones</li>
          <li>		Interactive & Edutainment experiences</li>
          <li>	Social Redemption games</li>
          <li>		Cafe and party rooms</li>
        </ul>

        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdoJRigtSx5Y-ZJh44MrvThu59iAmBe4AOpTiX9F3zOh_tDGQ/viewform" class="btn btn--secondary  btn--bordered btn--roundedrounded-3 mt-2 px-4">
          Submit Virtual NDA for Details
        </a>
      </div>
    </div>

    <!-- Model 3 -->
    <div class="row align-items-center mb-5">
      <div class="col-md-5">
        <img src="assets/images/business-model/pop-up-kids-play.svg" alt="Model 3" class="img-fluid rounded-4 shadow-sm">
      </div>
      <div class="col-md-7 business-model-details">
            <h4 class="fw-bold">PopUp Kids Play</h4>
          <p> <b>Brief Description</b>: Temporary or modular play solutions for events,
           malls, or promotional activations — safe, themed, and fun for children of all ages.  </p>

        <p>	<b>Price Starting From</b>: AED 225,000 </p>
        <p>	<b>Breakeven Period</b>: 4-6 Months</p>
        <p>	<b>Estimated Net Profit</b>: 30-40%</p>
        <p>	<b>Duration to Launch</b>: 2–4 months</p>
        <h6>Features / Highlights:</h6>
        <ul>
          <li>	Toddler & Kids Soft play zones</li>
          <li>	Kids Soft Play & Role Play Zones</li>
          <li>	Interactive experiences</li>
          <li>	Social Redemption games</li>
          <li>	Cafe, and open events area</li>
        </ul>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdoJRigtSx5Y-ZJh44MrvThu59iAmBe4AOpTiX9F3zOh_tDGQ/viewform" class="btn btn--secondary  btn--bordered btn--roundedrounded-3 mt-2 px-4">
          Submit Virtual NDA for Details
        </a>
      </div>
    </div>
    <!-- Model 4 (reverse layout) -->
    <div class="row align-items-center mb-5 flex-md-row-reverse">
      <div class="col-md-5">
        <img src="assets/images/business-model/water-play-villa.svg" alt="Model 2" class="img-fluid rounded-4 shadow-sm">
      </div>
      <div class="col-md-7 business-model-details">
              <h4 class="fw-bold">Waterplay Villa</h4>
          <p> <b>Brief Description</b>: Custom outdoor waterplay attractions including splash pads, slides, and interactive pools — 
          perfect for villas, resorts, or private family setups.  </p>

        <p>	<b>Price Starting From</b>: AED 1.8M </p>
        <p>	<b>Breakeven Period</b>: 16 Months</p>
        <p>	<b>Estimated Net Profit</b>: 30-40%</p>
        <p>	<b>Duration to Launch</b>: 6-8 months</p>
        <h6>Features / Highlights:</h6>
        <ul>
          <li>	Interactive splash zones & slides</li>
          <li>	Pool leisure zones</li>
          <li>	Indoor Baby & Toddler Soft Play zone</li>
          <li>	Cafe, events area</li>

        </ul>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdoJRigtSx5Y-ZJh44MrvThu59iAmBe4AOpTiX9F3zOh_tDGQ/viewform" class="btn btn--secondary  btn--bordered btn--roundedrounded-3 mt-2 px-4">
          Submit Virtual NDA for Details
        </a>
      </div>
    </div>

    <!-- Model 5 -->
    <div class="row align-items-center mb-5">
      <div class="col-md-5">
        <img src="assets/images/business-model/restaurant.svg" alt="Model 3" class="img-fluid rounded-4 shadow-sm">
      </div>
      <div class="col-md-7 business-model-details">
            <h4 class="fw-bold">Quick Service/Small Scale Restaurant (QSR)</h4>
          <p> <b>Brief Description</b>: Efficient, scalable dining solution offering tasty meals with fast service
           — ideal for malls, entertainment zones, or high-traffic locations.</p>

        <p>	<b>Price Starting From</b>: AED 250,000 </p>
        <p>	<b>Breakeven Period</b>: 12-18 Months</p>
        <p>	<b>Estimated Net Profit</b>: 15-25%</p>
        <p>	<b>Duration to Launch</b>: 3–6 months</p>
        <h6>Features / Highlights:</h6>
        <ul>
          <li>		Modern kitchen and service layout</li>
          <li>		Themed interiors & branding</li>
          <li>		Food safety certifications</li>
      

        </ul>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdoJRigtSx5Y-ZJh44MrvThu59iAmBe4AOpTiX9F3zOh_tDGQ/viewform" class="btn btn--secondary  btn--bordered btn--roundedrounded-3 mt-2 px-4">
          Submit Virtual NDA for Details
        </a>
      </div>
    </div>
<!-- Model 6 (reverse layout) -->
    <div class="row align-items-center mb-5 flex-md-row-reverse">
      <div class="col-md-5">
        <img src="assets/images/business-model/premium-restaurant.svg" alt="Model 2" class="img-fluid rounded-4 shadow-sm">
      </div>
      <div class="col-md-7 business-model-details">
        <h4 class="fw-bold">Fine Dining/Premium Restaurant</h4>
          <p> <b>Brief Description</b>: Luxury culinary experiences with themed interiors, curated menus, and personalized service, 
          designed to deliver unforgettable culinary experiences</p>

        <p>	<b>Price Starting From</b>: AED 1.2M </p>
        <p>	<b>Breakeven Period</b>: 18-24 Months</p>
        <p>	<b>Estimated Net Profit</b>: 30-35%</p>
        <p>	<b>Duration to Launch</b>: 6-8 months</p>
        <h6>Features / Highlights:</h6>
        <ul>
          <li>		Immersive thematic interiors</li>
          <li>		Efficient kitchen and workflow design</li>
          <li>	Food safety certifications</li>
      

        </ul>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdoJRigtSx5Y-ZJh44MrvThu59iAmBe4AOpTiX9F3zOh_tDGQ/viewform" class="btn btn--secondary  btn--bordered btn--roundedrounded-3 mt-2 px-4">
          Submit Virtual NDA for Details
        </a>
      </div>
    </div>

    <!-- Model 7 -->
    <div class="row align-items-center mb-5">
      <div class="col-md-5">
        <img src="assets/images/business-model/bar-venue.svg" alt="Model 3" class="img-fluid rounded-4 shadow-sm">
      </div>
      <div class="col-md-7 business-model-details">
        <h4 class="fw-bold">Upscale Dining & Bar Venue</h4>
          <p> <b>Brief Description</b>: Premium dining and social entertainment with gourmet cuisine,
           craft cocktails, interactive bar experiences, and live entertainment for an upscale lifestyle audience.</p>

        <p>	<b>Price Starting From</b>: AED 25M</p>
        <p>	<b>Breakeven Period</b>: 30-36 Months</p>
        <p>	<b>Estimated Net Profit</b>: 30-35%</p>
        <p>	<b>Duration to Launch</b>: 8-10 months</p>
        <h6>Features / Highlights:</h6>
        <ul>
          <li>	Luxury interior design, brand identity </li>
          <li>	Mood lighting, soundscapes </li>
          <li>	Interactive game zones and social hubs</li>
          <li>Culinary & Beverage Excellence</li>
          <li>Food safety certifications & licenses</li>
      

        </ul>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdoJRigtSx5Y-ZJh44MrvThu59iAmBe4AOpTiX9F3zOh_tDGQ/viewform" class="btn btn--secondary  btn--bordered btn--roundedrounded-3 mt-2 px-4">
          Submit Virtual NDA for Details
        </a>
      </div>
    </div>
 <!-- Model  8 -->
      <div class="row align-items-center mb-5 flex-md-row-reverse">
      <div class="col-md-5">
        <img src="assets/images/business-model/print.svg" alt="Model 2" class="img-fluid rounded-4 shadow-sm">
      </div>
      <div class="col-md-7 business-model-details">
      <h4 class="fw-bold">Prints & Gifts Kiosk</h4>
          <p> <b>Brief Description</b>:Turnkey kiosk solutions offering personalized prints, gifts,
           and merchandise — compact, high-traffic-ready, and designed for instant customer </p>

        <p>	<b>Price Starting From</b>: AED 75,000</p>
        <p>	<b>Breakeven Period</b>: 18-20 Months</p>
        <p>	<b>Estimated Net Profit</b>: 15-20%</p>
        <p>	<b>Duration to Launch</b>: 2-4 months</p>
        <h6>Features / Highlights:</h6>
        <ul>
          <li>		Printing & Personalization </li>
          <li>		Gifting & Merchandise </li>
          <li>		Corporate gifting modules</li>
   
      

        </ul>

        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdoJRigtSx5Y-ZJh44MrvThu59iAmBe4AOpTiX9F3zOh_tDGQ/viewform" class="btn btn--secondary  btn--bordered btn--roundedrounded-3 mt-2 px-4">
          Submit Virtual NDA for Details
        </a>
      </div>
    </div>
 <!-- Model  9-->
    <div class="row align-items-center mb-5">
      <div class="col-md-5">
        <img src="assets/images/business-model/scooters.svg" alt="Model 3" class="img-fluid rounded-4 shadow-sm">
      </div>
      <div class="col-md-7 business-model-details">
        <h4 class="fw-bold">Urban Mobility with E-Scooters</h4>
          <p> <b>Brief Description</b>: Smart electric scooter rental solutions with app-based bookings,
           real-time tracking, and flexible pricing — ideal for urban mobility and eco-friendly transport.</p>

        <p>	<b>Price Starting From</b>: AED 350,000</p>
        <p>	<b>Breakeven Period</b>: 14-18 Months</p>
        <p>	<b>Estimated Net Profit</b>: 30-35%</p>
        <p>	<b>Duration to Launch</b>: 4-6 months</p>
        <h6>Features / Highlights:</h6>
        <ul>
          <li>	Eco-mobility </li>
          <li>	App enabled convenience</li>
          <li>	Strategic Location</li>
      

        </ul>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdoJRigtSx5Y-ZJh44MrvThu59iAmBe4AOpTiX9F3zOh_tDGQ/viewform" class="btn btn--secondary  btn--bordered btn--roundedrounded-3 mt-2 px-4">
          Submit Virtual NDA for Details
        </a>
      </div>
    </div>
    
    <!-- Model  10-->
    
     <div class="row align-items-center mb-5 flex-md-row-reverse">
      <div class="col-md-5">
        <img src="assets/images/business-model/saloon.svg" alt="Model 2" class="img-fluid rounded-4 shadow-sm">
      </div>
      <div class="col-md-7 business-model-details">
          <h4 class="fw-bold">Premium Grooming Salon</h4>
          <p> <b>Brief Description</b>: Luxury grooming and wellness services for men/women,
           featuring haircare, skincare, beard care, and personalized treatments in a premium environment.</p>

        <p>	<b>Price Starting From</b>: AED 125,000</p>
        <p>	<b>Breakeven Period</b>: 18-20 Months</p>
        <p>	<b>Estimated Net Profit</b>: 30-35%</p>
        <p>	<b>Duration to Launch</b>: 4-6 months</p>
        <h6>Features / Highlights:</h6>
        <ul>
          <li>		Luxury Ambiance & Design  </li>
          <li>		High-end Technology & Equipment</li>
          <li>		Premium salon branding and theming</li>
      

        </ul>

        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdoJRigtSx5Y-ZJh44MrvThu59iAmBe4AOpTiX9F3zOh_tDGQ/viewform" class="btn btn--secondary  btn--bordered btn--roundedrounded-3 mt-2 px-4">
          Submit Virtual NDA for Details
        </a>
      </div>
    </div>


   
    <!-- Alternate using 'flex-md-row-reverse' every other row -->
  </div>
</section>




@endsection
@section('page-script')
    <script>
        $('.business-li').addClass('active');
    </script>
@endsection
