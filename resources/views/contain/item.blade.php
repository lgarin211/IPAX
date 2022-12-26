<div class="container">
    <div class="row mb-4 mt-3 d-flex justify-content-between align-items-center">
        <div class="col-md-8">
            <h5 class="mb-0">Wisma</h5>
        </div>
        <div class="col-md-4"> <a href="#" class="btn btn-link float-right">Explore all <i class="las la-long-arrow-alt-right"></i> </a> </div>
    </div>
    <div class="row">
        @foreach ($wisma as $key=>$item)
        <div class="col-md-4 col-6">
            <div class="card item-card h-100 border-0">
                <div class="item-card__image rounded">
                    <a href="single-product.html" class="swap-link">
                        <img src="{{url('/storage/'.$item->poster)}}" class="img-fluid rounded" alt="">
                    </a>
                    <div class="hover-icons">
                        <ul class="list-unstyled">
                            <li><a href="single-product.html"><i class="las la-eye"></i></a></li>
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
        <!-- end: col -->
    </div>
    <hr class="divider divider-fade">
    <div class="row mb-4 mt-3 d-flex justify-content-between align-items-center">
        <div class="col-md-8">
            <h5 class="mb-0">Pemusik</h5>
        </div>
        <div class="col-md-4"> <a href="#" class="btn btn-link float-right">Explore all <i class="las la-long-arrow-alt-right"></i> </a> </div>
    </div>
    <div class="row">
        @foreach ($pemusik as $key=>$item)
        <div class="col-md-4 col-6">
            <div class="card item-card h-100 border-0">
                <div class="item-card__image rounded">
                    <a href="single-product.html" class="swap-link">
                        <img src="{{url('/storage/'.$item->poster)}}" class="img-fluid rounded" alt="">
                    </a>
                    <div class="hover-icons">
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0)"><i class="las la-desktop"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lar la-bookmark"></i></a></li>
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
                            <p class="mb-0 extension-text">
                                {{-- pos --}}
                            </p>
                        </div>
                    </div>
                    <!-- end: Card meta -->
                </div>
                <!-- edn:Card body -->
            </div>
            <!-- end: Card -->
        </div>
        <!-- end: col -->
        @endforeach
    </div>

    <hr class="divider divider-fade">

    <div class="row mb-4 mt-3 d-flex justify-content-between align-items-center">
        <div class="col-md-8">
            <h5 class="mb-0">Rental Mobil</h5>
        </div>
        <div class="col-md-4"> <a href="#" class="btn btn-link float-right">Explore all <i class="las la-long-arrow-alt-right"></i> </a> </div>
    </div>
    <div class="row">
        @foreach ($mobil as $item)
        <div class="col-md-4 col-6">
            <div class="card item-card h-100 border-0">
                <div class="item-card__image rounded">
                    <a href="single-product.html" class="swap-link">
                        <img src="{{url('/storage/'.$item->Poster)}}" class="img-fluid rounded" alt="">
                    </a>
                    <div class="hover-icons">
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0)"><i class="las la-desktop"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lar la-bookmark"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end: Item card image -->
                <div class="card-body px-0 pt-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="item-title">
                            <a href="#">
                                <h3 class="h5 mb-0 text-truncate">{{$item->Merek.",".$item->Jenis}}</h3>
                            </a>
                        </div>
                        <div class="item-price">
                            {{-- <span>$14</span> --}}
                        </div>
                    </div>
                    <!-- end: Card info -->
                    <div class="d-flex justify-content-start align-items-center item-meta">
                        <div class="short-description mb-0">
                            {{-- <p class="mb-0 extension-text"><a href="#">WordPress</a><span class="ml-1">in</span> <a href="#">Creative</a> </p> --}}
                        </div>
                    </div>
                    <!-- end: Card meta -->
                </div>
                <!-- edn:Card body -->
            </div>
            <!-- end: Card -->
        </div>
        <!-- end: col -->
        @endforeach
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-7 text-center mt-3"> <a href="#" class="btn btn-white "><i class="las la-redo-alt mr-2"></i>Load more...</a> </div>
    </div>
</div>
