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
    <li class="active">
        <i class="material-icons">question_answer</i> {{  $title }}
    </li>
</ol>

<div class="container-fluid">
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h4>
                    list Komentar
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
                                <th>Penulis</th>
                                <th>Komentar</th>
                                <th>Tanggapan Atas</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        {{-- <tfoot>
                            <tr>
                                <th>Aksi</th>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Kategori</th>
                                <th>Tanggal</th>
                            </tr>
                        </tfoot> --}}
                        <tbody>
                            <tr>
                                <td>
                                    <a href="{{ url('/admin/komentar/1') }}" data-toggle="tooltip" title="Balas" class="text-primary"><i class="material-icons">replay</i></a>
                                    <a href="{{ url('/admin/komentar/1') }}" data-toggle="tooltip" title="Hapus"  class="text-danger"><i class="material-icons">delete</i>
                                    </a>
                                </td>
                                <td>1</td>
                                <td>Roby</td>
                                <td class="bg-warning">Good bagus sekali berita anda wahai masta abi kusno</td>
                                <td>Pembukaan jalan tol Pekanbaru Dumai</td>
                                <td>2011/04/25</td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <hr/>
                        <span><i class="material-icons text-primary">replay</i> : balas komentar</span>
                        <span><i class="material-icons text-danger">delete</i> : hapus komentar</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('script')

@endsection
