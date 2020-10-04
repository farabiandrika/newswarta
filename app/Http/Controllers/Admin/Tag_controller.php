<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class Tag_controller extends Controller
{
    public function index(){
        $title = "Manage Tag";
        $tag = Tag::all();
        return view('admin.tag.tag_index', compact('title','tag'));
    }

    public function store(Request $request){

        $this->validate($request,[
            'nama' => 'required',
         ]);

        $user = Auth::user();
        $tag = Tag::create([
            'nama'     => $request->nama,
            'slug_url' => Str::slug($request->nama),
            'status'   => "1",
            'user_id'  => $user->id
        ]);
        return redirect('admin/tag');
    }

    public function edit($id){
        $title = "Edit Tag";
        $tag = Tag::all();
        $edit = Tag::where('id_tag', $id)->get();
        return view('admin.tag.tag_edit', compact('title','tag','edit'));
    }

    public function update(Request $request, $id){

        $tag = Tag::find($id);
        $user = Auth::user()->id;

        $tag->nama = $request->nama;
        $tag->slug_url = Str::slug($request->nama);
        $tag->status = "1";
        $tag->user_id = $user;
        $tag->save();

        return redirect('admin/tag');
    }


    public function delete($id){

        $hapus = Tag::find($id);
        $hapus->delete();
        return redirect('admin/tag');
    }
}
