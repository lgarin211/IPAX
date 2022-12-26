@extends('tml/master')
@section('cpart1')
            @include('contain/baner2')
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-9">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- edit in partials -->
                                <header class="mb-3">
                                    <div class="form-inline">
                                        <strong class="mr-md-auto">32 Items found </strong>
                                        <select class="mr-2 form-control">
                                            <option>Latest items</option>
                                            <option>Trending</option>
                                            <option>Most Popular</option>
                                            <option>Cheapest</option>
                                        </select>
                                        <div class="btn-group">
                                            {{-- <a href="search-page-list.html" class="btn btn-white" data-toggle="tooltip" title="" data-original-title="List view">
                                                <i class="las la-list"></i></a>
                                            <a href="search-page.html" class="btn btn-white" data-toggle="tooltip" title="" data-original-title="Grid view">
                                                <i class="las la-border-all"></i></a>
                                            <a href="#" class="btn btn-white" data-toggle="tooltip" title="" data-original-title="Price Down">
                                                <i class="las la-sort-amount-down"></i></a> --}}
                                        </div>
                                    </div>
                                </header>
                            </div>
                        </div>
                        <div class="row">

                            @foreach ($data as $key=>$item)
                            <div class="col-md-4 col-6">
                                <div class="card item-card h-100 border-0">
                                    <div class="item-card__image rounded">
                                        <a href="{{url('/det?t=wisma&in='.$item->id)}}" class="swap-link">
                                            <img src="{{url('/storage/'.$item->poster)}}" class="img-fluid rounded" alt="">
                                        </a>
                                        <div class="hover-icons">
                                            <ul class="list-unstyled">
                                                <li><a href="{{url('/det?t=wisma&in='.$item->id)}}"><i class="las la-eye"></i></a></li>
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
                        <hr class="divider divider-fade" />
                        <!-- edit in partials -->
                        <nav aria-label="pagin">
                            <ul class="pagination pagination-sm">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        <!-- edit in partials -->
                        <div class="sidebar-widget">
                            <div class="row">
                                <div class="col-12">
                                    <span class="sidebar-widget-title--sm">Keyword</span>
                                    <div class="input-group mb-4">
                                        <input type="text" placeholder="Search ..." class="form-control" name="">
                                        <span class="input-group-append"> <button class="btn btn-primary"> <i class="las la-search"></i></button></span>
                                    </div>
                                    {{--<hr>
                                     <span class="sidebar-widget-title--sm">Category</span>
                                    <!-- Category -->
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck10">
                                        <label class="custom-control-label w-100" for="customCheck10">HTML<span class="badge badge-light float-right">875</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck11">
                                        <label class="custom-control-label w-100" for="customCheck11">WordPress<span class="badge badge-light float-right">1485</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck12">
                                        <label class="custom-control-label w-100" for="customCheck12">eCommerce<span class="badge badge-light float-right">626</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck13">
                                        <label class="custom-control-label w-100" for="customCheck13">Magento <span class="badge badge-light float-right">58</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck14">
                                        <label class="custom-control-label w-100" for="customCheck14">UI kits <span class="badge badge-light float-right">114</span></label>
                                    </div> --}}
                                    {{-- <hr>
                                    <span class="sidebar-widget-title--sm">File types</span>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label w-100" for="customCheck1">PSD<span class="badge badge-light float-right">9</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label w-100" for="customCheck2">HTML <span class="badge badge-light float-right">49</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label w-100" for="customCheck3">JS <span class="badge badge-light float-right">142</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                                        <label class="custom-control-label w-100" for="customCheck4">CSS <span class="badge badge-light float-right">457</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                        <label class="custom-control-label w-100" for="customCheck5">Vector <span class="badge badge-light float-right">27</span></label>
                                    </div> --}}
                                    <hr> <span class="sidebar-widget-title--sm">Harga</span>
                                    <div class="price-range d-flex justify-content-between align-items-center">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Rp.</div>
                                            </div>
                                            <input type="text" id="price-min-input" name="price-min" data-toggle="dropdown" class="form-control rounded-right" placeholder="Min" value="">
                                            <ul id="price-min" class="dropdown-menu">
                                                <li><a href="#" data-value="5" data-toggle="dropdown">100</a></li>
                                                <li><a href="#" data-value="10" data-toggle="dropdown">200</a></li>
                                                <li><a href="#" data-value="50" data-toggle="dropdown">500</a></li>
                                            </ul>
                                        </div>
                                        <div class="mx-1">
                                            <p class="mt-3"> - </p>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Rp.</div>
                                            </div>
                                            <input type="text" id="price-max-input" name="price-max" data-toggle="dropdown" class="form-control rounded-right" placeholder="Max" value="">
                                            <ul id="price-max" class="dropdown-menu">
                                                <li><a href="#" data-value="500" data-toggle="dropdown">Termahal</a></li>
                                                <li><a href="#" data-value="50" data-toggle="dropdown">50</a></li>
                                                <li><a href="#" data-value="100" data-toggle="dropdown">100</a></li>
                                            </ul>
                                        </div>
                                        <div class="ml-1">
                                            <button class="btn btn-primary px-2" type="button"><i class="las la-search"></i></button>
                                        </div>
                                    </div>
                                    {{-- <hr>
                                    <span class="sidebar-widget-title--sm">Tags</span>
                                    <div class="tags"> <a href="#" class="badge badge-soft-success text-success mb-1">CSS</a> <a href="#" class="badge badge-soft-success text-success mb-1">Bootstrap</a> <a href="#" class="badge badge-soft-success text-success mb-1">WordPress</a> <a href="#" class="badge badge-soft-success text-success mb-1">Digital</a> </div> --}}
                                    <hr>
                                    <span class="sidebar-widget-title--sm">Rating</span>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <div class="custom-control-label text-primary">
                                            <i class="las la-star"></i> <i class="las la-star"></i> <i class="las la-star"></i>
                                            <i class="las la-star"></i> <i class="las la-star"></i>
                                        </div>
                                    </label>

                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <div class="custom-control-label text-primary">
                                            <i class="las la-star"></i> <i class="las la-star"></i> <i class="las la-star"></i>
                                            <i class="las la-star"></i>
                                        </div>
                                    </label>

                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <div class="custom-control-label text-primary">
                                            <i class="las la-star"></i> <i class="las la-star"></i> <i class="las la-star"></i>

                                        </div>
                                    </label>

                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <div class="custom-control-label text-primary">
                                            <i class="las la-star"></i> <i class="las la-star"></i>
                                        </div>
                                    </label>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
