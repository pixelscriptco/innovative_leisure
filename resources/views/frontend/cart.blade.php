@extends('layouts.front_lay')
@section('content')
    <section id="page-title" class="page-title bg-overlay  bg-overlay-dark bg-parallax">
        <div class="bg-section">
            <img src="{{ asset('assets/images/business-model/business-model-banner.png') }}"
                 alt="Business Model Banner"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <div class="title text-center">
                        <div class="title--heading">
                            <h1>Products</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb d-flex justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="case-study-single" class="case-study case-study-single">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <h6>Your Cart Items</h6>
                    <div class="widget widget-categories">
                        <div class="widget-content">
                            <ul class="list-unstyled" id="items-cart"></ul>
                        </div>
                        <div class="cart-subtotal-box d-flex justify-content-between mt-2">
                            <div class="subtotal-label color-primary font-16">Subtotal:</div>
                            <div class="subtotal-value font-weight-bold font-18" id="cart-subtotal-display">AED 0.00</div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <div class="text-center mb-3">
                        <h4>Submit Your Booking Request</h4>
                        <p>Please complete the form below. Our team will prepare a formal quotation/invoice with
                            detailed pricing, shipping, and project options.</p>
                    </div>

                    <div class="row border p-2">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <form id="inquiry-form" method="POST" action="#">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="full_name">Full Name <span class="text-danger">*</span></label>
                                            <input type="text" name="full_name" id="full_name"
                                                   class="form-control" value="" placeholder="Enter Full Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="company_name">Company Name</label>
                                            <input type="text" name="company_name" id="company_name"
                                                   class="form-control" value="" placeholder="Enter Company Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email <span class="text-danger">*</span></label>
                                            <input type="text" name="email" id="email"
                                                   class="form-control" value="" placeholder="Enter Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone_number">Phone Number <span class="text-danger">*</span></label>
                                            <input type="text" name="phone_number" id="phone_number"
                                                   class="form-control" value="" placeholder="Enter Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="project_type">Project Type</label>
                                            <input type="text" name="project_type" id="project_type"
                                                   class="form-control" value="" placeholder="Mall, Resort, School, Play Center, etc.">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="billing_address">Trade / Billing Address <span class="text-danger">*</span></label>
                                            <textarea name="billing_address" class="form-control" id="billing_address" rows="2" placeholder="Enter Trade / Billing Address" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="shipping_address">Project Location / Shipping Address</label>
                                            <textarea name="shipping_address" class="form-control" id="shipping_address" rows="2" placeholder="Enter Project Location / Shipping Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="additional_comments">Additional Comments</label>
                                            <textarea name="additional_comments" class="form-control" id="additional_comments" rows="2" placeholder="Additional Comments"></textarea>
                                        </div>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('page-script')
<script>
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    let html = '';
    let subtotal = 0;

    cart.forEach(item => {

        let itemTotal = item.price * item.qty;
        subtotal += itemTotal;

        html += `
<li class="mb-3">
    <input type="hidden" name="product_id[]" value="${item.id}">
    <div class="d-flex align-items-start gap-3">

        <img class="cart-img" src="${item.imgUrl}" alt="product"/>

        <div class="product-meta">
            <h5 class="product-title mb-1">${item.name}</h5>

            <div class="product-price color-gold d-flex align-items-baseline gap-3">
                <input type="number" name="product-quantity[${item.id}]"
                       value="${item.qty}" min="1"
                       class="form-control form-control-sm cart-qty-input" required>

                <span class="pl-2 font-20">x AED ${item.price}</span>
            </div>
        </div>

    </div>
</li>
`;

    });

    $(document).find('#items-cart').html(html);
</script>
@endsection
