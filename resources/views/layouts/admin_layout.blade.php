@php
    use App\Models\Privilege;

    $privileges = Privilege::select('id', 'module', 'name', 'route_name', 'unique_id')
        ->whereHas('privilegeRole', function ($query) {
            $query->where('role_id', Auth::user()->role_id)->whereHasReadAccess(1);
        })->with(['privilegeRole' => function ($query) {
            $query->where('role_id', Auth::user()->role_id)->whereHasReadAccess(1);
        }])->groupBy('module')->groupBy(['id', 'module', 'name', 'route_name', 'unique_id'])->orderBy('module', 'ASC')->orderBy('name', 'ASC')
        ->get()->toBase()->groupBy('module');
    $authUser = Auth::user();
@endphp
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Innovates Leisure</title>
    <meta id="csrfToken" name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/images/favicon/favicon-16x16.png') }}" rel="icon">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('cp_assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('cp_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cp_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cp_assets/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cp_assets/plugins/jquery-confirm/jquery-confirm.css') }}">
    @yield('stylesheets')
    <link rel="stylesheet" href="{{ asset('cp_assets/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cp_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cp_assets/dist/css/custom.css') }}">
    @yield('page-css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('cp_assets/dist/img/preloader.png')}}" alt="Innovative Leisure" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" style="padding:0;">
                    @php
                        $displayName = $authUser->name ?? ($authUser->email ?? 'U');
                        $initial = strtoupper(substr(trim($displayName), 0, 1));
                    @endphp
                    <span class="d-inline-flex align-items-center justify-content-center"
                          style="width:36px;height:36px;border-radius:50%;background:#ffffff;border:1px solid rgba(0,0,0,0.08);color:#0f172a;font-weight:700;font-size:14px;">
                        {{ $initial }}
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                    <a href="javascript:void(0)" class="dropdown-item" onclick="logOut()">
                        Logout
                    </a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
        </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{ url('/') }}" class="brand-link text-center">
            <img src="{{ asset('assets/images/logo/logo-plain.png') }}" alt="AdminLTE Logo" class="w-50"
                 style="opacity: .8">
        </a>

        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="{{route('dashboard')}}" class="nav-link">
                            <i class="nav-icon bi bi-palette"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    @if(count($privileges) > 0)
                        @foreach($privileges as $key => $privilege)
                            @if(count($privilege) > 1)
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon"></i>
                                        <p>
                                            {{ucwords($key)}}
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        @foreach($privilege as $page)
                                            <li class="nav-item {{$page->unique_id}}">
                                                <a href="{{route($page->route_name)}}" class="nav-link">
                                                    <i class="nav-icon bi bi-circle"></i>
                                                    <p>{{$page->name}}</p>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item {{$privilege[0]->unique_id}}">
                                    <a href="{{route($privilege[0]->route_name)}}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>{{$privilege[0]->name}}</p>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                </ul>
            </nav>
        </div>
    </aside>
    <div class="content-wrapper">
        @yield('breadcrumb')
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>

<script src="{{ asset('cp_assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('cp_assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('cp_assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('cp_assets/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('cp_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('cp_assets/plugins/jquery-form/jquery-form.js') }}"></script>
<script src="{{ asset('cp_assets/plugins/jquery-validation/jquery.validate.js') }}"></script>
<script src="{{ asset('cp_assets/plugins/jquery-confirm/jquery-confirm.min.js') }}"></script>
@yield('scripts')
<script src="{{ asset('cp_assets/dist/js/adminlte.js') }}"></script>
<script src="{{ asset('cp_assets/dist/js/page-js/custom.js') }}"></script>
@yield('page-scripts')
<script>
function logOut() {
    $.ajax({
        url: '/logout',
        type: 'POST',
        data: {'_token': '{{ csrf_token() }}'},
        success: function (response) {
            window.location.href = '/login';
        },
        error: function (jqXHR, status, err) {
            console.log(status);
        }
    });
}
</script>
</body>
</html>
