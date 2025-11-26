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
                            <h1>Projects</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb d-flex justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Projects</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light" id="business-models">
        <div class="container">

            @if(count($projects) > 0)
                @foreach($projects as $key => $project)
                    <div class="row align-items-center mt-5 mb-5 @if($key%2 == 0) flex-md-row-reverse @endif">
                        <div class="col-md-5">
                            <img src="{{getFromDisk($project->attachment_url)}}" alt="Model 1" class="img-fluid rounded-4 shadow-sm">
                        </div>
                        <div class="col-md-7 business-model-details">
                            <h4 class="fw-bold">{{$project->title}}</h4>
                            <p class="text-muted"><i class="fa fa-location-arrow"></i> Location: {{$project->location}}</p>
                            <p class="text-muted"><i class="fa fa-calendar"></i> Completion Date: {{date('d M,Y', strtotime($project->completion_date))}}</p>
                            <p><b>Services provided</b>: <i>{{$project->service_provided}}</i></p>
                            <p> <b>Brief Description</b>: {!! $project->description !!} </p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
@endsection
@section('page-script')

@endsection
