@extends('tml/master')
@section('cpart1')
<br>
<div class="container">
    <div class="row">
        @php
            $pax=DB::table('sewa')->where('id_user', Auth::user()->id)->join('layanan', 'sewa.id_in', '=', 'layanan.id');
        @endphp
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span>Pesananmu</span>
                <span class="badge bg-primary text-white rounded-pill">{{$pax->count()}}</span>
            </h4>
            <ul class="list-group mb-3">

                @foreach($pax->get() as $paxli)
                {{-- @dump($paxli) --}}
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">{{$paxli->nama}}</h6>
                        <small class="text-muted">Penggunaan : {{$paxli->tanggal}}</small><br>
                        <small class="text-muted">Kekurangan : {{$paxli->harga-$paxli->paycount}}</small>
                    </div>
                    <span class="text-muted font-weight-bold border-outline-success">{{$paxli->status}}</span>
                    <span class="text-muted font-weight-bold border-outline-success">
                        <a href="{{url('/invoice?cos='.$paxli->id)}}">
                            <i class="las la-eye"></i>
                        </a>
                    </span>
                </li>
                @endforeach
                <li class="list-group-item d-flex justify-content-between btn-success-soft">
                    {{-- icon contak --}}
                    <a href="https://wa.me/6281221723861" target="_blank">
                        info lebih lanjut
                        <i class="lab la-whatsapp"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Informasi Pemesanan</h4>
            <div class="card mb-5">
                <div class="card-body py-3 border-bottom">
                    <div class="d-flex align-items-center">
                        <div>
                            <h4 class="card-title mb-1">Informasi Pembayaran</h4>
                            <p class="text-center mb-0">
                                <span class="text-primary">{{$data->nama}}</span> dalam Pemesananmu
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form role="form" class="form-width" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{$_GET['in']}}" name="id_produk">
                        <input type="hidden" value="{{$_GET['t']}}" name="t">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="{{Auth::user()->name}}">
                                <i class="fa fa-user iconalign"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="number" class="form-control" name="kontak" placeholder="Nomor Kontak Whatapp">
                                <i class="fa fa-phone iconalign"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" placeholder="E-Mail" name="email" value="{{Auth::user()->email}}">
                                <i class="fa fa-envelope iconalign"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <select name="panjar" id="panjar" class="form-control">
                                    <option value="0" >Pilih Panjar Wisma</option>
                                    <option value="500000">Rp 500.000,00</option>
                                    <option value="1000000">Rp 1.000.000,00</option>
                                    <option value="1500000">Rp 1.500.000,00</option>
                                </select>
                                <i class="fa fa-user iconalign"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <h3>Tanggal Pemesanan</h3>
                                <input type="date" id="hari_pesan" class="form-control" name="hari_pesan" placeholder="Tanggal Pemesanan">
                                <i class="fa fa-user iconalign"></i>
                            </div>
                        </div>
                        <div class="form-group text-left mt-4">
                            <h5 class="text-dark">Metode Pembayaran</h5>
                            <hr>
                        </div>
                        <div class="row ml-0 my-3">
                            <div class="col">
                                <ul class="nav nav-tabs nav-justified border-0" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="visa-tab" data-toggle="tab" href="#visa" role="tab" aria-controls="visa" aria-selected="true">
                                            <img src="https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/1200px-BNI_logo.svg.png" class="img-fluid pb-2" width="100px">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="profile" aria-selected="false">
                                            Langsung
                                        </a>
                                    </li>
                                </ul>

                                <div class="form-group text-left mt-5">
                                    <h5 class="text-dark">Bukti Pembayaran</h5>
                                </div>

                                <div class="tab-content mt-5" id="myTabContent">
                                    <div class="tab-pane fade show active" id="visa" role="tabpanel" aria-labelledby="visa-tab">
                                        <p>
                                            harap di perhatikan bahwa anda dapat melakukan pembayaran ke rekening kami dengan cara transfer ke rekening <br>
                                            BNI <strong>036 000 000 000 000</strong> atas nama Pt. <strong>Indonesia Berkarya Selalu</strong>
                                        </p>
                                        <div id="div1" style="display: inline;">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="trxname" placeholder="Pembayaran Atas Nama">
                                                <input type="number" class="form-control" name="trxnumber" placeholder="Nomor Transaksi">
                                                <input type="file" class="form-control" name="bukti" placeholder="Bukti Pembayaran">
                                                <i class="fa fa-user iconalign"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab">
                                        <div id="div2">
                                            <div class="form-group">
                                                <input type="number" class="form-control" name="tmxvalue" placeholder="Nominal Pembayaran">
                                                <i class="fa fa-envelope iconalign"></i>
                                            </div>
                                        </div>
                                        <div id="div2">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="idtmx" placeholder="Kode Pembayaran">
                                                <i class="fa fa-envelope iconalign"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary col-md-4" type="submit">
                                            Bayar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // if panjar value == 0 reset value
    $('#panjar').change(function(){
        if($(this).val() == 0){
            $(this).val('');
        }
        if($(this).val() == 0){
            $(this).attr('required', 'required');
        }
    });

    // make event listener for hari_pesan
    $('#hari_pesan').change(function(){
        var a=document.getElementById("hari_pesan");
        console.log($(this).val());
        if(a.value=="12-26-2022"){
            a.value="mm/dd/yyyy";
        }
    });

</script>
@endsection
