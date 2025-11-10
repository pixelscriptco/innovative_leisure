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
<section class="py-5 bg-light" id="business-models">
  <div class="container">


    <!-- Model 1 -->
    <div class="row align-items-center mt-5 mb-5">
      <div class="col-md-5">
        <img src="assets/images/about/about.png" alt="Model 1" class="img-fluid rounded-4 shadow-sm">
      </div>
      <div class="col-md-7">
        <span class="color-green">Pop-Up Kids Play</span>
        <h4 class="fw-bold">Flexible family entertainment zones for malls and events.</h4>
        <p class="text-muted">Operate through strategic franchise partnerships ensuring brand consistency and local growth.</p>
        <a href="#" class="btn btn--secondary  btn--bordered btn--roundedrounded-3 mt-2 px-4">
          Submit Virtual NDA for Details
        </a>
      </div>
    </div>

    <!-- Model 2 (reverse layout) -->
    <div class="row align-items-center mb-5 flex-md-row-reverse">
      <div class="col-md-5">
        <img src="assets/images/about/about.png" alt="Model 2" class="img-fluid rounded-4 shadow-sm">
      </div>
      <div class="col-md-7">
        <span class="color-green">Indoor Entertainment Center (FEC)</span>
        <h4 class="fw-bold">High-traffic indoor attractions for malls and community hubs.</h4>
        <p class="text-muted">ROI: 8–10 months | CAPEX: AED 800k–4.5M</p>
        <a href="#" class="btn btn--secondary  btn--bordered btn--roundedrounded-3 mt-2 px-4">
          Submit Virtual NDA for Details
        </a>
      </div>
    </div>

    <!-- Model 3 -->
    <div class="row align-items-center mb-5">
      <div class="col-md-5">
        <img src="assets/images/about/about.png" alt="Model 3" class="img-fluid rounded-4 shadow-sm">
      </div>
      <div class="col-md-7">
        <span class="color-green">Print & Gift Services Kiosk (Print Nest)</span>
        <h4 class="fw-bold">Compact kiosks for instant printing and gifting solutions.</h4>
        <p class="text-muted">ROI: 16–20 months | CAPEX: AED 50k–60k</p>
        <a href="#" class="btn btn--secondary  btn--bordered btn--roundedrounded-3 mt-2 px-4">
          Submit Virtual NDA for Details
        </a>
      </div>
    </div>
    <!-- Model 4 (reverse layout) -->
    <div class="row align-items-center mb-5 flex-md-row-reverse">
      <div class="col-md-5">
        <img src="assets/images/about/about.png" alt="Model 2" class="img-fluid rounded-4 shadow-sm">
      </div>
      <div class="col-md-7">
        <span class="color-green">E-Scooter Franchise</span>
        <h4 class="fw-bold">Urban mobility franchise offering eco-friendly solutions.</h4>
        <p class="text-muted">ROI: 12–14 months | CAPEX: AED 330k–350k</p>
        <a href="#" class="btn btn--secondary  btn--bordered btn--roundedrounded-3 mt-2 px-4">
          Submit Virtual NDA for Details
        </a>
      </div>
    </div>

    <!-- Model 5 -->
    <div class="row align-items-center mb-5">
      <div class="col-md-5">
        <img src="assets/images/about/about.png" alt="Model 3" class="img-fluid rounded-4 shadow-sm">
      </div>
      <div class="col-md-7">
        <span class="color-green">Men’s Grooming Lounge</span>
        <h4 class="fw-bold">Premium barbershop and grooming services in high-demand areas.</h4>
        <p class="text-muted">ROI: 12–18 months | CAPEX: AED 85k–100k</p>
        <a href="#" class="btn btn--secondary  btn--bordered btn--roundedrounded-3 mt-2 px-4">
          Submit Virtual NDA for Details
        </a>
      </div>
    </div>
<!-- Model 6 (reverse layout) -->
    <div class="row align-items-center mb-5 flex-md-row-reverse">
      <div class="col-md-5">
        <img src="assets/images/about/about.png" alt="Model 2" class="img-fluid rounded-4 shadow-sm">
      </div>
      <div class="col-md-7">
        <span class="color-green">Water Splash Play</span>
        <h4 class="fw-bold">Compact splash play zones for malls and outdoor leisure spaces.</h4>
        <p class="text-muted">ROI: Custom based on location and scale</p>
        <a href="#" class="btn btn--secondary  btn--bordered btn--roundedrounded-3 mt-2 px-4">
          Submit Virtual NDA for Details
        </a>
      </div>
    </div>

    <!-- Model 7 -->
    <div class="row align-items-center mb-5">
      <div class="col-md-5">
        <img src="assets/images/about/about.png" alt="Model 3" class="img-fluid rounded-4 shadow-sm">
      </div>
      <div class="col-md-7">
        <span class="color-green">Fine Dining & Bar Concept</span>
        <h4 class="fw-bold">Upscale dining and entertainment venues for prime Dubai locations</h4>
        <p class="text-muted">ROI: 2.5–3.5 years | CAPEX: AED 25M–35M</p>
        <a href="#" class="btn btn--secondary  btn--bordered btn--roundedrounded-3 mt-2 px-4">
          Submit Virtual NDA for Details
        </a>
      </div>
    </div>

      <div class="row align-items-center mb-5 flex-md-row-reverse">
      <div class="col-md-5">
        <img src="assets/images/about/about.png" alt="Model 2" class="img-fluid rounded-4 shadow-sm">
      </div>
      <div class="col-md-7">
        <span class="color-green">Technical Services & Maintenance</span>
        <h4 class="fw-bold">Facility upkeep, AMC services, and technical support for leisure projects.</h4>
      
        <a href="#" class="btn btn--secondary  btn--bordered btn--roundedrounded-3 mt-2 px-4">
          Submit Virtual NDA for Details
        </a>
      </div>
    </div>


    <!-- Repeat for all 9 models -->
    <!-- Alternate using 'flex-md-row-reverse' every other row -->
  </div>
</section>


@endsection
@section('page-script')
    <script>
        $('.business-li').addClass('active');
    </script>
@endsection
