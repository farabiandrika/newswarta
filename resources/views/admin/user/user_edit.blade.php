@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>{{ $title }}</h2>
    </div>
</div>
<ol class="breadcrumb">
    <li>
        <a href="{{ url('/admin') }}">
            <i class="material-icons">home</i> Home
        </a>
    </li>
    <li>
        <a href="{{ url('/admin/user') }}">
            <i class="material-icons">supervisor_account</i> User
        </a>
    </li>
    <li class="active">
        <i class="material-icons">edit</i> {{  $title }}
    </li>
</ol>

<!-- Inline Layout -->
<div class="col-4">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h4>
                    Edit User
                </h4>
            </div>
            <div class="body">

                <div class="row clearfix">
               {{-- menampilkan error validasi --}}
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                    <form enctype="multipart/form-data"
                    method="POST" action="{{ url('admin/user/1') }}">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-control">
                                <select>
                                    <option selected>Role</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Editor</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama" value="Muhammad Rodhian Syabri"/>
                                <label class="form-label">Nama</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="username" value="rodhian"/>
                                <label class="form-label">username</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="email" class="form-control" name="email" value="m.rodhian@gmail.com"/>
                                <label class="form-label">email</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" name="no_hp" value="0823764846"/>
                                <label class="form-label">No HP</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="alamat" value="Jl. Tengku Bey Simpang Tiga"/>
                                <label class="form-label">Alamat</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="switch">
                                <label>Non-Aktif<input type="checkbox" checked><span class="lever"></span>Aktif</label>
                            </div>
                        </div>
                            <input type="hidden" class="form-control" name="password" value="empat4lima514"/>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Inline Layout -->

<div class="col-8">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h4>
                    List Semua User
                </h4>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Tambah</a></li>
                            <li><a href="javascript:void(0);">Sampah</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Aksi</th>
                                <th>#</th>
                                <th>Role</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        {{-- <tfoot>
                            <tr>
                                <th>Aksi</th>
                                <th>#</th>
                                <th>Foto</th>
                                <th>Role</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                            </tr>
                        </tfoot> --}}
                        <tbody>
                            <tr>
                                <td>
                                    <a href="{{ url('/admin/user/1') }}" class="text-success"><i class="material-icons">edit</i>
                                    </a>
                                    <a href="{{ url('/admin/user/1') }}" class="text-danger"><i class="material-icons">delete</i>
                                    </a>
                                </td>
                                <td>1</td>
                                <td>Editor</td>
                                <td>Rodhian</td>
                                <td class="text-center"><span class="label bg-green">Aktif</span></td>
                                <td>2011/04/25</td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <hr/>
                        <span><i class="material-icons text-success">edit</i> : edit data</span>
                        <span><i class="material-icons text-danger">delete</i> : hapus data</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
