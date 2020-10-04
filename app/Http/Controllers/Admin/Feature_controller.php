<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Feature_controller extends Controller
{
    public function index(){
        $title = "Tambah Feature";
        return view('admin.feature.feature_index', compact('title'));
    }

    public function store(Request $request){

        return redirect('admin/feature');
    }

    public function delete($id){


        return redirect('admin/feature');
    }
}
