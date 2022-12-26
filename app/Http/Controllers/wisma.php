<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class wisma extends Controller
{
    public function unused() {
        $wisma=DB::table('wisma')->orderby('id','desc')->limit(3)->get();
        $mobil=DB::table('rental_mobil')->orderby('id','desc')->limit(3)->get();
        $pemusik=DB::table('pemusik')->orderby('id','desc')->limit(3)->get();
        $data = array(
            'wisma' => $wisma,
            'mobil' => $mobil,
            'pemusik' => $pemusik
        );
        // dd($data);
        return view('ungd/homepages', $data);
    }
    public function order()
    {
        $pot=DB::table($_GET['t'])->where("id",$_GET['in'])->first();
        $data = array(
            'data' => $pot,
        );
        // dd($data);
        return view('ungd/order', $data);
    }

    public function find()
    {
        $pot=DB::table($_GET['t'])->get();
        $data = array(
            'data' => $pot,
        );
        // dd($data);
        return view('ungd/finder', $data);
    }

    public function unusedone() {
        try {
            $pot=DB::table($_GET['t'])->where("id",$_GET['in'])->first();
            $parse=DB::table($_GET['t'])->orderby('id','desc')->limit(3)->get();
            $data = array(
                'data' => $pot,
                'parse'=>$parse
            );
            // dd();
            switch ($_GET['t']) {
                case 'wisma':
                    return view('ungd/det', $data);
                    break;
                case 'rental_mobil':
                    return view('ungd/det', $data);
                    break;
                case 'pemusik':
                    return view('ungd/det', $data);
                    break;
                default:
                    return back();
                    break;
            }
        } catch (\Throwable $th) {
            //throw $th;
            return back();
        }

    }
}
