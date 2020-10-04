<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Iklan;

class Iklan_controller extends Controller
{
    public function index(){
        $title = "Manage Iklan";
        $iklan1 = Iklan::where('status', '1')->get();
        $iklan2 = Iklan::where('status', '2')->get();
        $iklan3 = Iklan::where('status', '3')->get();

        return view('admin.iklan.iklan_index', compact('title','iklan1', 'iklan2', 'iklan3'));
    }

    public function store(Request $request){
        $this->validate($request,[
    		'banner' => 'required'
        ]);

        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('banner');
		$nama_file = time()."_"."iklan".$request->status."_".$file->getClientOriginalName();
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'uploads/iklan';
		$file->move($tujuan_upload,$nama_file);


        Iklan::create([
    		'banner' => $nama_file,
            'url'    => $request->url,
            'status' => $request->status
    	]);
        return redirect('admin/iklan');
    }

    public function delete($id){

        $hapus = Iklan::find($id);
        $hapus->delete();
        return redirect('admin/iklan');
    }
}
