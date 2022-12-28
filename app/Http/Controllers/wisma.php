<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class wisma extends Controller
{
    public function unused() {
        $wisma=DB::table('layanan')->where('Layanan','Wisma')->orderby('id','desc')->limit(3)->get();
        $mobil=DB::table('layanan')->where('Layanan','Rental Mobil')->orderby('id','desc')->limit(3)->get();
        $pemusik=DB::table('layanan')->where('Layanan','Pemusik')->orderby('id','desc')->limit(3)->get();
        $data = array(
            'wisma' => $wisma,
            'mobil' => $mobil,
            'pemusik' => $pemusik
        );
        // dd($data);
        return view('ungd/homepages', $data);
    }

    public function saveorder(Request $request)
    {

        $pat=DB::table('layanan')->where('id', $request->in)->first();

        if ($request->trxname!=null) {
            $pot=[
                'nama' => $request->nama,
                'id_user' => Auth::user()->id,
                'harga' => $pat->harga,
                'panjar' => $request->panjar,
                'email' => $request->email,
                'whatapps' => $request->kontak,
                'status' => "Verifikasi Pembayaran",
                'tanggal' => $request->hari_pesan,
                'Atasnama' => $request->trxname,
                'TRX' => $request->TRX,
                'Bukti' => 'https://www.gitbook.com/cdn-cgi/image/width=40,height=40,fit=contain,dpr=1.25,format=auto/https%3A%2F%2F956308700-files.gitbook.io%2F~%2Ffiles%2Fv0%2Fb%2Fgitbook-legacy-files%2Fo%2Fspaces%252F-LOZ_fG1zbRQxFD0p8uB%252Favatar.png%3Fgeneration%3D1539285893179271%26alt%3Dmedia',
                'paycount' => $request->panjar,
                'table'=> $request->t,
                'id_in'=> $request->in,
            ];
        }elseif ($request->tmxvalue!=null) {
            $pot=[
                'nama' => $request->nama,
                'id_user' => Auth::user()->id,
                'harga' => $pat->harga,
                'panjar' => $request->panjar,
                'email' => $request->email,
                'whatapps' => $request->kontak,
                'status' => "Verifikasi Pembayaran",
                'tanggal' => $request->hari_pesan,
                'KodePembayaran' => $request->idtmx,
                'paycount' => $request->tmxvalue,
                'table'=> $request->t,
                'id_in'=> $request->in,
            ];
        }

        $pw=DB::table('sewa')->insert($pot);
        // dd($pw);
        return back();
    }
    public function order()
    {
        if (!AUTH::check()) {
          return redirect(url("/login"));
        }
        $pot=DB::table('layanan')->where('Layanan',$_GET['t'])->where("id",$_GET['in'])->first();
        $data = array(
            'data' => $pot,
        );
        // dd($data);
        return view('ungd/order', $data);
    }

    public function find()
    {
        $pot=DB::table('layanan')->where('Layanan',$_GET['t'])->get();
        $data = array(
            'data' => $pot,
        );
        // dd($data);
        return view('ungd/finder', $data);
    }

    public function unusedone() {
        try {
            $pot=DB::table('layanan')->where('Layanan',$_GET['t'])->where("id",$_GET['in'])->first();
            $parse=DB::table('layanan')->where('Layanan',$_GET['t'])->orderby('id','desc')->limit(3)->get();
            $data = array(
                'data' => $pot,
                'parse'=>$parse
            );
            // dd($data);
            return view('ungd/det', $data);
        } catch (\Throwable $th) {
            //throw $th;
            return back();
        }

    }
}
