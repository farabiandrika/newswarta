<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class User_controller extends Controller
{
    public function index(){
        $title = "Semua User";
        return view('admin.user.user_index', compact('title'));
    }

    public function store(Request $request){

        return redirect('admin/user');
    }

    public function edit(){
        $title = "Edit User";
        return view('admin.user.user_edit', compact('title'));
    }

    public function update(Request $request, $id){

        return redirect('admin/user');
    }


    public function delete($id){


        return redirect('admin/user');
    }

    public function profil(){
        $user = User::find(Auth::user()->id);
        $title = "Manage Profil";
        dd($user);
        return view('admin.user.profil.user_profil', compact('title','user'));
    }

    public function updateProfil(Request $request, $id){

        return redirect('admin/profil/profil');
    }

    public function updatePswd(Request $request, $id){

        return redirect('admin/profil/profil');
    }
}
