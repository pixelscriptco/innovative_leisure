@extends('layouts.front_lay')
@section('content')
    <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
        <div class="bg-section">
            <img src="{{ asset('assets/images/background/bg_banner.jpg') }}" alt="Background"  style="width:100%;height:100%;object-fit:cover;object-position:center;"/>
        </div>
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100 align-items-center">
                <div class="title text-center">
                    <div class="title--heading">
                        <h1>Cart</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section id="case-study-single" class="case-study case-study-single">
        <div class="container">
            <div class="row">

                <!-- ===================== CART SECTION ===================== -->
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

                <!-- ===================== INQUIRY FORM ===================== -->
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <div class="text-center mb-3">
                        <h4>Submit Your Booking Request</h4>
                        <p>Please complete the form below. Our team will prepare a formal quotation with full details.</p>
                    </div>

                    <div class="row border p-2">
                        <div class="col-12">
                            <form id="inquiry-form" method="POST">
                                @csrf
                                <input type="hidden" name="cart_items" id="cart_items">
                                <div id="form-errors" class="text-danger mb-2"></div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Full Name <span class="text-danger">*</span></label>
                                            <input type="text" name="full_name" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" name="company_name" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <input type="text" name="email" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone Number <span class="text-danger">*</span></label>
                                            <input type="text" name="phone_number" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Project Type</label>
                                            <input type="text" name="project_type" class="form-control" placeholder="Mall, Resort, School, etc.">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Trade / Billing Address <span class="text-danger">*</span></label>
                                            <textarea name="billing_address" class="form-control" rows="2" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Project Location / Shipping Address</label>
                                            <textarea name="shipping_address" class="form-control" rows="2"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Additional Comments</label>
                                            <textarea name="additional_comments" class="form-control" rows="2"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="button" id="submit-booking"
                                                class="btn btn--primary btn--rounded px-3">
                                            Submit
                                        </button>
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

        /* ======================================
            INITIAL CART LOAD
        ====================================== */
        function loadCart() {
            updateCartUI(); // call UI refresh directly
        }

        /* ======================================
            UPDATE CART UI + SUBTOTAL
        ====================================== */
        function updateCartUI() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let html = "";
            let subtotal = 0;

            if (cart.length > 0) {
                cart.forEach(item => {
                    let itemTotal = item.price * item.qty;
                    subtotal += itemTotal;

                    html += `
                <li class="mb-3">
                    <div class="d-flex align-items-start gap-3">
                        <img class="cart-img" src="${item.imgUrl}" alt="product">

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
            } else {
                html = `<p class="text-muted">No items found in cart!</p>`;
            }

            $("#items-cart").html(html);
            $("#cart-subtotal-display").html(`AED ${subtotal.toFixed(2)}`);
        }

        /* ======================================
           HANDLE QUANTITY CHANGE
        ====================================== */
        $(document).on('input', '.cart-qty-input', function () {

            let productId = $(this).attr("name").match(/\[(.*?)\]/)[1];
            let newQty = parseInt($(this).val());

            if (newQty < 1 || isNaN(newQty)) {
                newQty = 1;
                $(this).val(1);
            }

            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart = cart.map(item => {
                if (item.id == productId) item.qty = newQty;
                return item;
            });

            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartUI();
        });

        /* ======================================
           SUBMIT BOOKING (AJAX)
        ====================================== */
        $("#submit-booking").click(function(e) {
            e.preventDefault();

            $("#form-errors").html("");
            $(".is-invalid").removeClass("is-invalid");

            // Required fields validation
            let valid = true;
            $("#inquiry-form [required]").each(function() {
                if (!$(this).val().trim()) {
                    $(this).addClass("is-invalid");
                    valid = false;
                }
            });

            if (!valid) {
                $("#form-errors").html("Please fill all required fields.");
                return;
            }

            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            if (cart.length === 0) {
                $("#form-errors").html("Cart is empty! Add items before submitting.");
                return;
            }

            $("#cart_items").val(JSON.stringify(cart));
            let formData = new FormData($("#inquiry-form")[0]);

            $.ajax({
                url: '/post-inquiry',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,

                beforeSend: function() {
                    $("#submit-booking").prop("disabled", true).text("Submitting...");
                },

                success: function(response) {
                    alert("Inquiry submitted successfully!");
                    localStorage.removeItem("cart");
                    $("#inquiry-form")[0].reset();
                    updateCartUI();
                    $("#submit-booking").prop("disabled", false).text("Submit");
                },

                error: function(xhr) {
                    $("#submit-booking").prop("disabled", false).text("Submit");

                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        let messages = "";

                        Object.keys(errors).forEach(key => {
                            messages += errors[key][0] + "<br>";
                            $(`[name="${key}"]`).addClass("is-invalid");
                        });

                        $("#form-errors").html(messages);
                    } else {
                        $("#form-errors").html("Something went wrong!");
                    }
                }
            });
        });

        /* Load cart at page start */
        loadCart();

    </script>

@endsection
