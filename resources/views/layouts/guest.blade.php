<!DOCTYPE html>
<html
    lang="id"
    data-layout="vertical"
    data-topbar="light"
    data-sidebar="light"
    data-sidebar-size="lg"
    data-sidebar-image="none"
>
<head>
    <meta charset="utf-8"/>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- custom Css-->
    <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css"/>

    <script src="https://cdn.tiny.cloud/1/3kubek8r1p1mz4kvit7hc1z2mxd8wgg551cbeu82qkmenprf/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example">
<!-- Begin page -->
<div id="layout-wrapper landing">
    <nav class="navbar navbar-expand-lg navbar-landing fixed-top bg-white" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="index-2.html">
                <img src="{{asset('assets/images/logo-dark.png')}}" class="card-logo card-logo-dark" alt="logo dark" height="17">
                <img src="{{asset('assets/images/logo-light.png')}}" class="card-logo card-logo-light" alt="logo light" height="17">
            </a>
            <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-0 mt-2 mt-lg-0" id="navbar-example">
                    <li class="nav-item">
                        <a class="nav-link active" href="#hero">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Bantuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <!-- end navbar -->

    <!-- start hero section -->
    {{$slot}}
    <!-- end hero section -->

</div>
<!-- END layout-wrapper -->
<!-- JAVASCRIPT -->
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<!-- App js -->
<script src="{{asset('assets/js/pages/landing.init.js')}}"></script>
@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />
@stack('scripts')
</body>
</html>
