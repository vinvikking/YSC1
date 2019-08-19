<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/coreui/css/coreui.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/coreui/fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flag-icon-css/css/flag-icon.css') }}">
    <!-- Custom CSS -->
    @stack('css')
    {{-- Toastr --}}
    @toastr_css

    <title>@yield('title', config('coreui.title', __('coreui::coreui.default_title')))</title>
</head>
<body class="app header-fixed sidebar-fixed sidebar-lg-show">
<header class="app-header navbar">

    <div class="container-fluid">

        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">
            <span class="navbar-brand-full">{!! config('coreui.logo') !!}</span>
            <span class="navbar-brand-minimized">{!! config('coreui.logo_mini') !!}</span>
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>
           

        <ul class="nav ml-auto">
            @php $locale = session()->get('locale'); @endphp
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">  {{ trans('profile.language')}}
                @switch($locale)
                                @case('de')
                                <span class="flag-icon flag-icon-de"></span>
                                @break
                                @case('nl')
                                <span class="flag-icon flag-icon-nl"></span>
                                @break
                                @case('be')
                                <span class="flag-icon flag-icon-be"></span>
                                @break
                                @default
                                <span class="flag-icon flag-icon-gb"></span>
                            @endswitch
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/lang/nl"><span class="flag-icon flag-icon-nl"></span> NL</a>
                    <a class="dropdown-item" href="/lang/en"><span class="flag-icon flag-icon-gb"></span> EN</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                @if (\Illuminate\Support\Facades\Auth::user() !== null)
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <i class="fa fa-user-cog"></i> {{ \Illuminate\Support\Facades\Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header text-center">
                            <strong>{{ __('coreui::coreui.settings') }}</strong>
                        </div>


                        <a class="dropdown-item" href="{{ route('user.edit', Auth::user()->id) }}"
                        >
                            <i class="fas fa-sign-out-alt"></i>{{ __('coreui::coreui.url_profilepage') }}
                        </a>


                        <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                            @csrf
                        </form>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>{{ __('coreui::coreui.log_out') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @endif
            </li>


        </ul>
    </div>
</header>
<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                @each('coreui::menu-item', $coreUI->menu(), 'item')
            </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <main class="main">
        <div aria-label="breadcrumb">
            @yield('breadcrumb', config('coreui.title', __('coreui::coreui.default_title')))
        </div>
        <div class="container-fluid">
            @yield('body')
        </div>
    </main>
</div>
<footer class="app-footer">
    <div>
        <span>&copy; {{ \Carbon\Carbon::now()->year }} Your Social Connect</span>
    </div>
<!--     <div class="ml-auto">
        <span>Powered by </span><a target="_blank" href="https://coreui.io">CoreUI</a>,
        <span>inspired by </span><a target="_blank" href="https://github.com/jeroennoten/Laravel-AdminLTE">Laravel-AdminLTE</a>
    </div> -->
</footer>

@if(Session::has('success'));
    
    toastr.success("{{Session::get('success')}}");

@endif

<!-- jQuery first, then Popper.js, Bootstrap, then CoreUI  -->
<script src="{{ asset('vendor/coreui/js/jquery.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/popper.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/bootstrap.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/coreui.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/coreui-utilities.js') }}"></script>

<!-- Custom JS -->
@stack('js')
{{-- Toastr --}}

@toastr_js
@toastr_render
</body>
</html>
