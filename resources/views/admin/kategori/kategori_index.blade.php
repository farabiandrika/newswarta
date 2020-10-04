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
        <a href="{{ url('/admin/pos') }}">
            <i class="material-icons">push_pin</i> Pos
        </a>
    </li>
    <li class="active">
        <i class="material-icons">view_headline</i> {{  $title }}
    </li>
</ol>



<!-- Inline Layout -->
<div class="col-4">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h4>
                    Tambah Kategori
                </h4>
            </div>
            <div class="body">
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
                <form method="POST" action="{{ url('admin/kategori/add') }}">
                    {{ csrf_field() }}
                    <div class="row clearfix">
                        <div class="col-lg-7 col-md-7 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Kategori" value="{{ old('nama') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
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
                    list Kategori
                </h4>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Aksi</th>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Dibuat Oleh</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $index=>$kt)
                            <tr>
                                <td>
                                    <form action="{{ url('/admin/kategori/'.$kt->id_kategori) }}" method="POST">@csrf{{ method_field('delete') }}
                                        <a href="{{ url('/admin/kategori/'.$kt->id_kategori) }}" class="btn btn-xs btn-warning">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <button class="btn btn-xs btn-danger"><i class="material-icons">delete</i></button>
                                    </form>
                                </td>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $kt->nama }}</td>
                                <td>{{ $kt->user_id }}</td>
                                <td>{{ $kt->created_at }}</td>
                            </tr>
                            @endforeach
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
