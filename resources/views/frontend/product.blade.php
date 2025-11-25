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
    <section class="py-5 bg-light" id="business-models">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="case-carousel-grid">
                        <div class="row">
                            @foreach($products as $pRow)
                                <div class="col-sm-12 col-md-6 col-lg-3" data-product-id="{{$pRow->id}}">
                                    <div class="product-item">
                                        <div class="product--img" >
                                            <img src="{{ getFromDisk($pRow->attachment_url) }}" class="product-img-{{$pRow->id}}"
                                                 alt="{{$pRow->product_name}}"/>
                                        </div>
                                        <div class="product--content mb-2">
                                            <div class="product--title">
                                                <h3>
                                                    <a href="javascript:void(0)" class="product-name-{{$pRow->id}}">{{$pRow->product_name}}</a>
                                                </h3>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="product--price color-primary">
                                                    <span>AED <span class="product-price-{{$pRow->id}}">{{number_format($pRow->unit_price)}}</span></span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0)" class="add-cart" data-id="{{$pRow->id}}">
                                                        <i class="fa fa-cart-plus fa-2x"></i>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('page-script')

@endsection
