@extends('layouts.front_lay')
@section('content')
    <section id="page-title" class="page-title bg-overlay  bg-overlay-dark bg-parallax">
        <div class="bg-section">
            <img src="{{ asset('assets/images/background/bg_banner.jpg') }}" alt="Background"  style="width:100%;height:100%;object-fit:cover;object-position:center;"/>
        </div>
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100 align-items-center">
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
    </section>
    <section class="py-5 bg-light" id="business-models">
        <div class="container">
            @if(count($projects) > 0)
                @foreach($projects as $key => $project)
                    <div class="row align-items-center mt-5 mb-5">
                        <div class="col-md-5">
                            <div class="project-media shadow-sm" style="border-radius:12px; overflow:hidden;">
                                <img src="{{getFromDisk($project->attachment_url)}}" alt="{{$project->title}}"
                                     class="img-fluid w-100" style="height:320px; object-fit:cover; display:block;">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="project-card"
                                 style="padding:26px; border-radius:12px; background:white; box-shadow: 0 6px 18px rgba(15,23,42,0.06); border-left:6px solid #0a1f44;">
                                <h3 style="margin-bottom:10px; color:#0f172a; font-weight:700;">{{$project->title}}</h3>
                                <div class="d-flex flex-wrap align-items-center mb-3 gap-3">
                                    @if($project->location)
                                        <div class="text-muted" style="font-size:14px;"><i
                                                class="fa fa-location-arrow color-primary"></i>&nbsp; {{$project->location}}
                                        </div>
                                    @endif
                                    @if($project->completion_date)
                                        <div class="text-muted pl-2" style="font-size:14px;"><i
                                                class="fa fa-calendar color-primary"></i>&nbsp; {{date('M, Y', strtotime($project->completion_date))}}
                                        </div>
                                    @endif
                                </div>
                                @if($project->capacity)
                                    <div class="mb-3"><strong style="color:#0f172a">Capacity:</strong> <span
                                            class="text-muted">{{$project->capacity}}</span></div>
                                @endif
                                @if($project->service_provided)
                                    <div class="mb-3"><strong style="color:#0f172a">Services provided:</strong> <span
                                            class="text-muted">{{$project->service_provided}}</span></div>
                                @endif
                                <div style="color:#334155; line-height:1.6;">{!! $project->description !!}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </section>
    <section id="cta1" class="cta serviceCta cta-1 bg-theme mb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <a href="{{ url('contact-us') }}" class="btn btn--white btn--bordered btn--rounded">Contact
                        Us to Discuss Your Project </a>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('page-script')

@endsection
