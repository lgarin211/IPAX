<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Free minimal portfolio web site template,minmal portfolio,porfolio,bootstrap template,html template,photography " />
    <title>Layanan Pesta - Pt. Indonesia Berkarya Selalu.</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,400,600,700,800,900&display=swap" rel="stylesheet">
    <!-- build:css -->
    <link rel="stylesheet" href="{{url('/')}}/assets/vendor/css/line-awesome.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/vendor/css/swiper.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap-custom.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/theme.css">
    <!-- endbuild -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/custom.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/rtl.css">
</head>

<body>
    <header class="nav-wrap bg-dark fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark px-lg-0">
                <a class="navbar-brand mr-3 swap-link" href="index.html">Layanan<span class="text-light font-weight-bold">Pesta</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    @php
                        $menu=[
                            ["name"=>"HOME","link"=>"/"],
                            ["name"=>"WISMA","link"=>"/fi?t=wisma"],
                        ]
                    @endphp
                    <ul class="navbar-nav">
                        @foreach ($menu as $item)
                        <li class="nav-item swap-link"> <a href="{{$item["link"]}}" class="nav-link">{{$item["name"]}}</a></li>
                        @endforeach
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown megamenu">
                            <a class="nav-link dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><i class="las la-user mr-2" style="font-size:22px;"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <a class="dropdown-item font-weight-bold swap-link" href="#"><i class="las la-user bg-info-alt p-1 rounded text-info"></i> Profile</a>
                                <a class="dropdown-item swap-link" href="#"><i class="dropdown-icon"></i> My Service</a>
                                <a class="dropdown-item swap-link" href="#"><i class="las la-sign-out-alt bg-danger-alt text-danger p-1 rounded"></i> Logout</a>
                            </div>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle no-arrow btn btn-primary swap-link text-white" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Sign up</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item swap-link" href="#">Signup</a>
                                <a class="dropdown-item swap-link" href="#">Author signup</a>
                            </div>
                        </li>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
