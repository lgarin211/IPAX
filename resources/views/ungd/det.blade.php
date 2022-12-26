@extends('tml/master')
@section('cpart1')
    <section class="mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-9">
                    <div class="product-info">

                        <!-- Item Img Slider -->
                        <div class="swiper-container rounded border">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{url('/storage/'.$data->poster)}}" alt="">
                                </div>
                                @if (!empty($data->moreimg))
                                    @foreach (json_decode($data->moreimg) as $key=>$item)
                                    <div class="swiper-slide">
                                        <img src="{{url('/storage/'.$item)}}" alt="">
                                    </div>
                                    @endforeach
                                @endif

                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    {{-- <div class="demo-bar card rounded mt-3 card px-3 text-sm-center">
                        <div class="row d-flex justify-content-between justify-content-md-center align-items-center my-3">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                <a href="#" class="btn btn-success-alt btn-block">Live Preview<i class="las la-desktop ml-2"></i></a>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <p class="m-0 text-lg-right text-md-right text-md-center">Spread the word and earn !</p>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Send link to somene" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                    <div class="input-group-append">
                                        <button class="btn btn-success-alt text-success" type="button">Send <i class="las la-envelope"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="product-description-text pr-lg-2">
                        <h1 class="mt-4 mb-4">
                            {{$data->nama}}
                        </h1>
                        <p class="lead">
                            {!! $data->deskripsi !!}
                        </p>
                        <br>
                        @if (!empty($data->moreimg))
                            @foreach (json_decode($data->moreimg) as $key=>$item)
                            <img src="{{url('/storage/'.$item)}}" alt="" class="img-fluid mt-5 rounded" />
                            @endforeach
                        @endif

                    </div>
                    <hr />
                    <section class="my-5">
                        <div class="row mb-4 d-flex justify-content-between">
                            <div class="col-md-8">
                                <h6 class="mb-2">Lihat Tempat Sejenis</h6>
                            </div>
                            <div class="col-md-4">
                                <a href="{{url('/fi?t=wisma')}}" class="btn btn-link float-right">Explore all → </a>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($parse as $item)
                            <div class="col-md-4 col-6">
                                <div class="card item-card h-100 border-0">
                                    <div class="item-card__image rounded">
                                        <a href="{{url('/det?t='.$_GET['t'].'&in='.$item->id)}}" class="swap-link">
                                            <img src="{{url('/storage/'.$item->poster)}}" class="img-fluid rounded" alt="">
                                        </a>
                                        <div class="hover-icons">
                                            <ul class="list-unstyled">
                                                <li><a href="{{url('/det?t='.$_GET['t'].'&in='.$item->id)}}"><i class="las la-eye"></i></a></li>
                                                <li><a href="#"><i class="las la-truck-loading"></i></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end: Item card image -->
                                    <div class="card-body px-0 pt-3">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="item-title">
                                                <a href="#">
                                                    <h3 class="h5 mb-0 text-truncate">{{$item->nama}}</h3>
                                                </a>
                                            </div>
                                            <div class="item-price">
                                                {{-- <span>$14</span> --}}
                                            </div>
                                        </div>
                                        <!-- end: Card info -->
                                        <div class="d-flex justify-content-start align-items-center item-meta">
                                            <div class="short-description mb-0">
                                                <p class="mb-0 extension-text">{{$item->alamat}}</p>
                                            </div>
                                        </div>
                                        <!-- end: Card meta -->
                                    </div>
                                    <!-- edn:Card body -->
                                </div>
                                <!-- end: Card -->
                            </div>
                            @endforeach

                        </div>
                    </section>
                </div>
                <!-- edn: Col 9 -->
                {{-- @dump($data) --}}
                <div class="col-md-5 col-lg-3">
                    <div class="sidebar sticky-lg-top sticky-md-top">
                        <div class="sidebar-widget">
                            <h3 class="mb-4">Sewa {{$data->nama}}</h3>
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-3">
                                    {{-- <div class="form-group">
                                        <select id="inputState" class="form-control">
                                            <option>Extended licence</option>
                                        </select>
                                    </div> --}}
                                </div>

                                <div class="col-md-9">
                                    <div class="form-group text-md-right text-sm-center">
                                        <h2 class="item-widget-price">{{$data->harga}}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-between align-items-center">
                                {{-- <div class="col-12">
                                    <div class="custom-control custom-radio mt-3 mb-2 d-flex justify-content-between align-items-center">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" />
                                        <label class="custom-control-label" for="customRadio1">Install Theme</label>
                                        <div class="label-price">$15</div>

                                    </div>
                                    <div class="custom-control custom-radio mb-4 d-flex justify-content-between align-items-center">
                                        <input type="radio" checked="" id="customRadio2" name="customRadio" class="custom-control-input" />
                                        <label class="custom-control-label" for="customRadio2">+1 year Support</label>
                                        <div class="label-price">$49</div>
                                    </div>
                                </div> --}}
                            </div>
                            <a href="{{url('/order?t='.$_GET['t'].'&in='.$_GET['in'])}}" style="color: white" class="btn btn-primary btn-block" type="button">
                                {{--  order --}}
                                {{-- icon order --}}
                                <i class="las la-shopping-cart"></i>
                                Sewa
                            </a>
                        </div>

                        {{-- <div class="sidebar-widget">
                            <div class="row">
                                <div class="col-12">
                                    <span class="sidebar-widget-title--sm">Compatible with</span>
                                    <!-- FULL COMPATIBILITY -->
                                    <div class="compatibility d-flex">
                                        <div class="col-2 p-0 text-center">
                                            <img src="assets/img/icons/photoshop.svg" alt="PS" width="#" title="Adobe After Effects" height="22px" />
                                        </div>
                                        <div class="col-2 p-0 text-center">
                                            <img src="assets/img/icons/ae-icon.svg" alt="Ae" width="#" title="Adobe After Effects" height="25px" />
                                        </div>
                                        <div class="col-2 p-0 text-center">
                                            <img src="assets/img/icons/xd-icon.svg" alt="Xd" title="#" width="25px" height="25px" />
                                        </div>
                                        <div class="col-2 p-0 text-center">
                                            <img src="assets/img/icons/sketch-icon.svg" alt="Sketch" title="#" width="25px" height="25px" />
                                        </div>
                                        <div class="col-2 p-0 text-center">
                                            <img src="assets/img/icons/figma-icon.svg" alt="#" title="Figma" width="25px" height="25px" />
                                        </div>
                                        <div class="col-2 p-0 text-center">
                                            <img src="assets/img/icons/ai-icon.svg" alt="Ai" title="#" width="25px" height="25px" />
                                        </div>
                                    </div>
                                    <hr />
                                    <span class="sidebar-widget-title--sm">Features</span>
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="las la-check mr-2 text-success"></i>25 Illustrations
                                        </li>
                                        <li>
                                            <i class="las la-check mr-2 text-success"></i>Bright & Modern Style
                                        </li>
                                        <li>
                                            <i class="las la-check mr-2 text-success"></i>AI, SVG, PNG Sources
                                        </li>
                                    </ul>
                                    <hr />

                                    <span class="sidebar-widget-title--sm">Compatible Browsers</span>
                                    <ul class="list-unstyled">
                                        <li><i class="las la-check mr-2 text-success"></i>Chrome</li>
                                        <li><i class="las la-check mr-2 text-success"></i>Firefox</li>
                                        <li><i class="las la-check mr-2 text-success"></i>Edge</li>
                                    </ul>
                                    <hr />

                                    <span class="sidebar-widget-title--sm">Tags</span>
                                    <div class="tags">
                                        <a href="#" class="badge badge-soft-success text-success mb-1">CSS</a>
                                        <a href="#" class="badge badge-soft-success text-success mb-1">Bootstrap</a>
                                        <a href="#" class="badge badge-soft-success text-success mb-1">WordPress</a>
                                        <a href="#" class="badge badge-soft-success text-success mb-1">Digital</a>
                                    </div>
                                    <hr />

                                    <div class="col-12 p-0">
                                        <div class="d-flex flex-row justify-content-between">
                                            <span class="small">File size</span>
                                            <strong class="small text-dark">1 GB</strong>
                                        </div>
                                        <div class="d-flex flex-row justify-content-between">
                                            <span class="small">Update</span>
                                            <strong class="small text-dark">Januar 03, 2020</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
