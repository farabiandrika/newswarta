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
        <i class="material-icons">tag</i> {{  $title }}
    </li>
</ol>

<!-- Inline Layout -->
<div class="col-4">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h4>
                    Tambah Tag
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
                <form method="POST" action="{{ url('admin/tag/add') }}">
                    {{ csrf_field() }}
                    <div class="row clearfix">
                        <div class="col-lg-7 col-md-7 col-sm-4 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Tag" value="{{ old('nama') }}">
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
                    list Tag
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
                                <th>Nama</th>
                                <th>Dibuat Oleh</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tag as $index=>$tg)
                            <tr>
                                <td>
                                    <form action="{{ url('/admin/tag/'.$tg->id_tag) }}" method="POST">@csrf{{ method_field('delete') }}
                                        <a href="{{ url('/admin/tag/'.$tg->id_tag) }}" class="btn btn-xs btn-warning">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <button class="btn btn-xs btn-danger"><i class="material-icons">delete</i></button>
                                    </form>
                                </td>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $tg->nama }}</td>
                                <td>{{ $tg->user_id }}</td>
                                <td>{{ $tg->created_at }}</td>
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
