<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Tag;


class Pos_controller extends Controller
{
    public function index(){
        $title = "Semua Pos";
        return view('admin.pos.pos_index', compact('title'));
    }

    public function add(){
        $title = "Tambah Pos";
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('admin.pos.pos_add', compact('title','kategori','tag'));
    }

    public function store(Request $request){

        return redirect('admin/pos');
    }

    public function edit(){
        $title = "Edit Berita";
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('admin.pos.pos_edit', compact('title','kategori','tag'));
    }

    public function update(Request $request, $id){


        return redirect('admin/pos');
    }
    public function delete($id){


        return redirect('admin/pos');
    }
}
