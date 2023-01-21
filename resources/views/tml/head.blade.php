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
                <a class="navbar-brand mr-3 swap-link" href="{{url('/')}}"><img src="{{url('/storage/'.setting('site.logo'))}}" alt="" style="width: 50px">{{setting('site.title')}}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    @php
                        $menu=[
                            ["name"=>"HOME","link"=>"/"],
                            ["name"=>"WISMA","link"=>"/fi?t=wisma"],
                            ["name"=>"Pemusik","link"=>"/fi?t=Pemusik"],
                            ["name"=>"Rental Mobil","link"=>"/fi?t=Rental Mobil"],
                        ]
                    @endphp
                    <ul class="navbar-nav">
                        @foreach ($menu as $item)
                        <li class="nav-item swap-link"> <a href="{{$item["link"]}}" class="nav-link">{{$item["name"]}}</a></li>
                        @endforeach
                    </ul>
                    <ul class="navbar-nav">
                        @if (Auth::check())
                        <li class="nav-item dropdown megamenu">
                            <a class="nav-link dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><i class="las la-user mr-2" style="font-size:22px;"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <a class="dropdown-item font-weight-bold swap-link" href="{{url('user/profile')}}"><i class="las la-user bg-info-alt p-1 rounded text-info"></i> Profile</a>
                                <form method="POST" action="{{url('/logout')}}">
                                    <input type="hidden" name="_token" value="RTcabhGu5SJ7Bfa3YnREN55M5psq95lZFjzWCmNc">
                                    <button class="dropdown-item font-weight-bold swap-link" href="{{url('/logout')}}"><i class="las la-user bg-info-alt p-1 rounded text-info"></i> Keluar</button>
                                </form>
                            </div>
                        </li>
                        @else
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link dropdown-toggle no-arrow btn btn-primary swap-link text-white mr-1" href="{{url('/login')}}" aria-expanded="false">Masuk </a>
                            <a class="nav-link dropdown-toggle no-arrow btn btn-primary swap-link text-white ml-1" href="{{url('/register')}}" aria-expanded="false">Daftar</a>
                        </li>
                        @endif

                    </ul>
                </div>
            </nav>
        </div>
    </header>
