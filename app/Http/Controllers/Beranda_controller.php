<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iklan;
use App\Models\Pengaturan\Logo;
use App\Models\Pengaturan\Tentang;
use App\Models\Pengaturan\Struktur;
use App\Models\Pengaturan\Headline;
use App\Models\Pengaturan\Mediasosial;

class Beranda_controller extends Controller
{
    public function index(){
        $iklan1  = Iklan::where('status', '1')->get();
        $iklan2  = Iklan::where('status', '2')->get();
        $iklan3  = Iklan::where('status', '3')->get();
        $logo    = Logo::where('status', '1')->get();
        $tentang = Tentang::all();
        $headline = Headline::all();
        $mediasosial = Mediasosial::all();

        return view('welcomes', compact('iklan1', 'iklan2', 'iklan3','logo','tentang','headline','mediasosial'));
    }

    public function detail(){
        $iklan1  = Iklan::where('status', '1')->get();
        $iklan2  = Iklan::where('status', '2')->get();
        $iklan3  = Iklan::where('status', '3')->get();
        $logo    = Logo::where('status', '1')->get();
        $tentang = Tentang::all();
        $mediasosial = Mediasosial::all();

        return view('layouts.detail', compact('iklan1', 'iklan2', 'iklan3','logo','tentang','mediasosial'));
    }


    public function kategori(){
        $iklan1  = Iklan::where('status', '1')->get();
        $iklan2  = Iklan::where('status', '2')->get();
        $iklan3  = Iklan::where('status', '3')->get();
        $logo    = Logo::where('status', '1')->get();
        $tentang = Tentang::all();
        $mediasosial = Mediasosial::all();

        return view('layouts.kategori', compact('iklan1', 'iklan2', 'iklan3','logo','tentang','mediasosial'));
    }

    public function direksi(){
        $iklan1  = Iklan::where('status', '1')->get();
        $iklan2  = Iklan::where('status', '2')->get();
        $iklan3  = Iklan::where('status', '3')->get();
        $logo    = Logo::where('status', '1')->get();
        $struktur= Struktur::where('status', '1')->get();
        $tentang = Tentang::all();
        $mediasosial = Mediasosial::all();

        return view('layouts.direksi', compact('iklan1', 'iklan2', 'iklan3','logo','tentang','struktur','mediasosial'));
    }
}
