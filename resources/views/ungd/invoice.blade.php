<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INVOICE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    @php
        $pax=DB::table('sewa')->where('id_user', Auth::user()->id)->where('layanan.id', $_GET['cos'])->join('layanan', 'sewa.id_in', '=', 'layanan.id')->first();
        // dump($pax);
    @endphp
    <style>
        body{
            background:#eee;
            margin-top:20px;
            }
        .text-danger strong {
        	color: #9f181c;
		}
		.receipt-main {
			background: #ffffff none repeat scroll 0 0;
			border-bottom: 12px solid #333333;
			border-top: 12px solid #9f181c;
			margin-top: 50px;
			margin-bottom: 50px;
			padding: 40px 30px !important;
			position: relative;
			box-shadow: 0 1px 21px #acacac;
			color: #333333;
			font-family: open sans;
		}
		.receipt-main p {
			color: #333333;
			font-family: open sans;
			line-height: 1.42857;
		}
		.receipt-footer h1 {
			font-size: 15px;
			font-weight: 400 !important;
			margin: 0 !important;
		}
		.receipt-main::after {
			background: #414143 none repeat scroll 0 0;
			content: "";
			height: 5px;
			left: 0;
			position: absolute;
			right: 0;
			top: -13px;
		}
		.receipt-main thead {
			background: #414143 none repeat scroll 0 0;
		}
		.receipt-main thead th {
			color:#fff;
		}
		.receipt-right h5 {
			font-size: 16px;
			font-weight: bold;
			margin: 0 0 7px 0;
		}
		.receipt-right p {
			font-size: 12px;
			margin: 0px;
		}
		.receipt-right p i {
			text-align: center;
			width: 18px;
		}
		.receipt-main td {
			padding: 9px 20px !important;
		}
		.receipt-main th {
			padding: 13px 20px !important;
		}
		.receipt-main td {
			font-size: 13px;
			font-weight: initial !important;
		}
		.receipt-main td p:last-child {
			margin: 0;
			padding: 0;
		}
		.receipt-main td h2 {
			font-size: 20px;
			font-weight: 900;
			margin: 0;
			text-transform: uppercase;
		}
		.receipt-header-mid .receipt-left h1 {
			font-weight: 100;
			margin: 34px 0 0;
			text-align: right;
			text-transform: uppercase;
		}
		.receipt-header-mid {
			margin: 24px 0;
			overflow: hidden;
		}

		#container {
			background-color: #dcdcdc;
		}
    </style>

    <div class="col-md-12">
        <div class="row">
               <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                   <div class="row">
                       <div class="receipt-header">
                           <div class="col-xs-6 col-sm-6 col-md-6">
                               <div class="receipt-left">
                                   <img class="img-responsive" alt="iamgurdeeposahan" src="{{url('/storage/'.setting('site.logo'))}}" style="width: 71px; border-radius: 43px;">
                               </div>
                           </div>
                           <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                               <div class="receipt-right">
                                   <h5>{{setting('site.pt')}}</h5>
                                   {{-- <p>+1 3649-6589 <i class="fa fa-phone"></i></p> --}}
                                   <p>company@gmail.com <i class="fa fa-envelope-o"></i></p>
                                   <p>Medan, Indonesia <i class="fa fa-location-arrow"></i></p>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="row">
                       <div class="receipt-header receipt-header-mid">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right">
                                {{-- @dd(Auth::user()) --}}
                                   <h5>{{Auth::user()->name}} </h5>
                                   <p><b>Mobile :</b> {{$pax->whatapps}}</p>
                                   <p><b>Email :</b> {{$pax->email}}</p>
                                   {{-- <p><b>Address :</b> New York, USA</p> --}}
                               </div>
                           </div>
                           <div class="col-xs-4 col-sm-4 col-md-4">
                               <div class="receipt-left">
                                   <h4>INVOICE # {{"UINDB#".$pax->id}}</h4>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div>
                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <th>Layanan</th>
                                   <th>Harga</th>
                               </tr>
                           </thead>
                           <tbody>
                                {{-- @dump($pax) --}}
                               <tr>
                                   <td class="col-md-9">Penyewaan {{$pax->nama}} Untuk Tanggal {{$pax->tanggal}}</td>
                                   <td class="col-md-3"><i class="fa fa-inr"></i> Rp {{$pax->harga}}/-</td>
                               </tr>

                               <tr>
                                   <td class="text-right">
                                   <p>
                                       <strong>Total Tagihan: </strong>
                                   </p>
                                   <p>
                                       <strong>Telah Di Bayarkan: </strong>
                                   </p>
                                   <p>
                                       <strong>Perlu Dibayarkan: </strong>
                                   </p>

                                   </td>
                                   <td>
                                   <p>
                                       <strong><i class="fa fa-inr"></i> Rp {{$pax->harga}}/-</strong>
                                   </p>
                                   <p>
                                       <strong><i class="fa fa-inr"></i> Rp {{$pax->paycount}}/-</strong>
                                   </p>
                                   <p>
                                       <strong><i class="fa fa-inr"></i> Rp {{$pax->paycount-$pax->harga}}/-</strong>
                                   </p>
                                   </td>
                               </tr>
                               <tr>

                                   <td class="text-right"><h2><strong>Total: </strong></h2></td>
                                   @if ($pax->paycount-$pax->harga<0)
                                        <td class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i> Rp {{$pax->paycount-$pax->harga}}</strong></h2></td>
                                   @else
                                        <td class="text-left text-succes"><h2><strong><i class="fa fa-inr"></i> Rp {{$pax->paycount-$pax->harga}}</strong></h2></td>
                                   @endif

                               </tr>
                           </tbody>
                       </table>
                   </div>

                   <div class="row">
                       <div class="receipt-header receipt-header-mid receipt-footer">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right">
                                   <p><b>Date :</b> {{date('Y M d')}}</p>
                                   @if ($pax->paycount-$pax->harga<0)
                                    <h3 class="text-danger">HARAP SEGERA LUNASI PEMBAYARAN</h3>
                                    @else
                                    <h5 style="color: rgb(140, 140, 140);">Terimakasih Telah Memesan.!</h5>
                                    @endif

                               </div>
                           </div>
                           <div class="col-xs-4 col-sm-4 col-md-4">
                               <div class="receipt-left">
                                   <h1>PT indonesia Berkarya Selalu - Layanan Pesta</h1>
                               </div>
                           </div>
                       </div>
                   </div>

               </div>
           </div>
       </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        window.print();
    </script>
  </body>
</html>
