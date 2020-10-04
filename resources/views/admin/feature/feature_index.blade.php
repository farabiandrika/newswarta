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
        <i class="material-icons">equalizer</i> {{  $title }}
    </li>
</ol>




<div class="col-6">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h4>
                    Pilih di kolom search
                </h4>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>Aksi</th>
                                <th>Judul</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a  id="tombol" href="#proses" class="label bg-primary btn-sm">Tambahkan</a>
                                </td>
                                <td id="x1">Peresmian Stadion Haji Agus Salmi Kota Padang Oleh Walikota Padang, Sumatera Barat</td>
                            </tr>
                            <tr>
                                <td><a  id="tombol" href="#proses" class="label bg-primary btn-sm">Tambahkan</a>
                                </td>
                                <td id="x2">Pembukaan tol Pekanbaru Dumai</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card" id="proses">
            <div class="header">
                <h4>
                    Tambah Feature
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
                <form method="POST" action="{{ url('admin/feature/add') }}">
                    {{ csrf_field() }}
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="judul" class="form-control" placeholder="Judul otomatis dari pencarian" id="judulx">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="urutan" class="form-control" placeholder="urutan" value="{{ old('urutan') }}">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
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

<div class="col-6">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h4>
                    List Feature
                </h4>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>Aksi</th>
                                <th>Judul</th>
                                <th>Urutan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="{{ url('/admin/feature/1') }}" class="text-danger"><i class="material-icons">delete</i></td>
                                <td>Pembukaan jalan tol Pekanbaru Dumai</td>
                                <td class="bg-warning">1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
@endsection

@section('script')
<script>
    window.onload=document.getElementById("judulx");
    var nilainya = document.getElementById("judulx");
$("#tombol").click(function() {
    var nilai = $("#x").text();
    nilainya.value = nilai;
  })
</script>
@endsection
