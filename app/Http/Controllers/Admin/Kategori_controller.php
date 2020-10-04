<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;


class Kategori_controller extends Controller
{
    public function index(){
        $title = "Manage Kategori";
        $kategori = Kategori::all();
        return view('admin.kategori.kategori_index', compact('title','kategori'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama' => 'required',
         ]);

        $user = Auth::user();
        $kategori = Kategori::create([
            'nama'     => $request->nama,
            'slug_url' => Str::slug($request->nama),
            'status'   => "1",
            'user_id'  => $user->id
        ]);
        return redirect('admin/kategori');
    }

    public function edit($id){
        $title = "Edit Kategori";
        $kategori = Kategori::all();
        $edit = Kategori::where('id_kategori', $id)->get();
        return view('admin.kategori.kategori_edit', compact('title','edit','kategori'));
    }

    public function update(Request $request, $id){

        $this->validate($request,[
            'nama' => 'required',
         ]);

        $kategori = Kategori::find($id);
        $user = Auth::user()->id;

        $kategori->nama = $request->nama;
        $kategori->slug_url = Str::slug($request->nama);
        $kategori->status = "1";
        $kategori->user_id = $user;
        $kategori->save();

        return redirect('admin/kategori');
    }


    public function delete($id){

        $hapus = Kategori::find($id);
        $hapus->delete();
        return redirect('admin/kategori');
    }
}
