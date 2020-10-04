<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaturan\Logo;
use App\Models\Pengaturan\Tentang;
use App\Models\Pengaturan\Struktur;
use App\Models\Pengaturan\Headline;
use App\Models\Pengaturan\Mediasosial;


class Pengaturan_controller extends Controller
{
    public function index(){
        $title   = "Pengaturan";
        $logo    = Logo::where('status', '1')->get();
        $struktur= Logo::where('status', '1')->get();
        $tentang = Tentang::all();
        $headline = Headline::all();
        $mediasosial = Mediasosial::all();

        return view('admin.pengaturan.pengaturan_index', compact('title','logo','tentang','struktur','headline','mediasosial'));
    }




    // pengaturan logo
    public function store_logo(Request $request){

        $this->validate($request,[
    		'logo' => 'required'
        ]);

        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('logo');
		$nama_file = time()."_"."logo"."_".$file->getClientOriginalName();
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'uploads/pengaturan/logo';
		$file->move($tujuan_upload,$nama_file);


        Logo::create([
    		'logo' => $nama_file,
            'status' => $request->status
    	]);
        return redirect('admin/pengaturan');
    }

    public function delete_logo($id){

        $hapus = Logo::find($id);
        $hapus->delete();
        return redirect('admin/pengaturan');
    }



    // pengaturan tentang
    public function ubah_tentang(Request $request, $id){

        $this->validate($request,[
    		'tentang' => 'required'
        ]);

        $tg = Tentang::find($id);
        $tg->tentang = $request->tentang;
        $tg->save();
        return redirect('admin/pengaturan');
    }



    // pengaturan struktur organisasi
    public function store_struktur(Request $request){

        $this->validate($request,[
    		'struktur' => 'required'
        ]);

        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('struktur');
		$nama_file = time()."_"."struktur"."_".$file->getClientOriginalName();
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'uploads/pengaturan/struktur';
		$file->move($tujuan_upload,$nama_file);


        Struktur::create([
    		'struktur' => $nama_file,
            'status' => $request->status
    	]);
        return redirect('admin/pengaturan');
    }

    public function delete_struktur($id){

        $hapus =Struktur::find($id);
        $hapus->delete();
        return redirect('admin/pengaturan');
    }



    // pengaturan headline
    public function store_headline(Request $request){

        $this->validate($request,[
            'headline' => 'required'
        ]);

        Headline::create([
            'headline' => $request->headline
        ]);
        return redirect('admin/pengaturan');
    }

    public function delete_headline($id){

        $hapus =Headline::find($id);
        $hapus->delete();
        return redirect('admin/pengaturan');
    }



    // pengaturan mediasosial
    public function ubah_mediasosial(Request $request, $id){

        $this->validate($request,[
            'nama_fb' => 'required',
            'url_fb' => 'required'
        ]);

        $md = Mediasosial::find($id);
        $md->nama_fb  = $request->nama_fb;
        $md->url_fb   = $request->url_fb;
        $md->nama_tw  = $request->nama_tw;
        $md->url_tw   = $request->url_tw;
        $md->nama_yt  = $request->nama_yt;
        $md->url_yt   = $request->url_yt;
        $md->nama_ig  = $request->nama_ig;
        $md->url_ig   = $request->url_ig;
        $md->save();
        return redirect('admin/pengaturan');
    }
}
