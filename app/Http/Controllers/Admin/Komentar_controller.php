<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Komentar_controller extends Controller
{
    public function index(){
        $title = "Semua Komentar";
        return view('admin.komentar.komentar_index', compact('title'));
    }

    public function balas(){
        $title = "Balas Komentar";
        return view('admin.komentar.komentar_balas', compact('title'));
    }

    public function store(Request $request){

        return redirect('admin/komentar');
    }

    public function delete($id){


        return redirect('admin/komentar');
    }
}
