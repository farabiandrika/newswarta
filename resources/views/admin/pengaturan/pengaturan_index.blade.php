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
        <i class="material-icons">settings</i> {{  $title }}
    </li>
</ol>


<div class="col-6">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        {{-- logo --}}
        <div class="card">
            <div class="header">
                <h4>
                    Ubah Logo
                </h4>
            </div>
            <div class="body">
                <img src="{{ asset('adminlte/images/logo.png') }}" width="124px">
                <hr/>
                @foreach ($logo as $lg)
                <p>
                    <form action="{{ url('/admin/pengaturan/logo/'.$lg->id) }}" method="POST">@csrf{{ method_field('delete') }}
                        <button class="btn btn-sm btn-danger">Hapus yang sebelumnya</button>
                    </form>
                </p>
                @endforeach
                <p>Pilih Logo&nbsp;<span class="text-primary">** Wajib ukuran 124px x 124px</span></p>
                <p>
                    <form
                        method="POST"
                        action="{{ url('admin/pengaturan/logo/add') }}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <p><input type="file" name="logo" class="form-control"/></p>
                        <p><input type="hidden" name="status" class="form-control" value="1"/></p>
                        <p>
                            <button type="submit" class="btn btn-primary waves-effect">Ubah</button>
                        </p>
                  </form>
                </p>
            </div>
        </div>
        {{-- Tentang --}}
        <div class="card">
            <div class="header">
                <h4>
                    Tentang
                </h4>
            </div>
            <div class="body">
                <p>
                    @foreach ($tentang as $tg)
                    <form method="POST" action="{{ url('admin/pengaturan/tentang/'.$tg->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                        <p><textarea name="tentang" class="form-control" rows="7">{{ $tg->tentang }}</textarea></p>
                        <p><button type="submit" class="btn btn-primary waves-effect">Ubah</button></p>
                    </form>
                    @endforeach
                </p>
            </div>
        </div>
        {{-- Media sosial --}}
        <div class="card">
            <div class="header">
                <h4>
                    Media Sosial
                </h4>
            </div>
            <div class="body">
                <p>
                    @foreach ($mediasosial as $ms)
                    <form method="POST" action="{{ url('admin/pengaturan/mediasosial/'.$ms->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                        <p><i class="fab fa-facebook"></i>
                            <input class="form-control" type="text" name="nama_fb" value="{{ $ms->nama_fb }}"/></p>
                            <input class="form-control" type="text" name="url_fb" value="{{ $ms->url_fb }}"/></p>
                        <p><i class="fab fa-twitter"></i>
                            <input class="form-control" type="text" name="nama_tw" value="{{ $ms->nama_tw }}"/></p>
                            <input class="form-control" type="text" name="url_tw" value="{{ $ms->url_tw }}"/></p>
                        <p><i class="fab fa-youtube"></i>
                            <input class="form-control" type="text" name="nama_yt" value="{{ $ms->nama_yt }}"/></p>
                            <input class="form-control" type="text" name="url_yt" value="{{ $ms->url_yt }}"/></p>
                        <p><i class="fab fa-instagram"></i>
                            <input class="form-control" type="text" name="nama_ig" value="{{ $ms->nama_ig }}"/></p>
                            <input class="form-control" type="text" name="url_ig" value="{{ $ms->url_ig }}"/></p><hr/>
                        <p><button type="submit" class="btn btn-primary waves-effect">Ubah</button></p>
                    </form>
                    @endforeach
                </p>
            </div>
        </div>
    </div>
</div>

<div class="col-6">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        {{-- headline --}}
        <div class="card">
            <div class="header">
                <h4>
                    Headline
                </h4>
            </div>
            <div class="body">
                <img src="{{ asset('adminlte/images/text berjalan.jpg') }}" width="90%">
                <hr/>
                    <form method="POST" action="{{ url('admin/pengaturan/headline/add') }}">
                        @csrf
                        <p>
                            <input class="form-control" type="text" name="headline" placeholder="ex:wartakriminalnusantara"/></p>
                        <p><button type="submit" class="btn btn-primary waves-effect">Tambah</button></p>
                    </form>
                </p><hr/>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>Aksi</th>
                                <th>Headline</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($headline as $hd)
                            <tr>
                                <td>
                                    <form action="{{ url('/admin/pengaturan/headline/'.$hd->id) }}" method="POST">@csrf{{ method_field('delete') }}
                                        <button class="btn btn-xs btn-danger"><i class="material-icons">delete</i></button>
                                    </form>
                                </td>
                                <td>{{ $hd->headline }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Struktur Organisasi --}}
        <div class="card">
            <div class="header">
                <h4>
                    Struktur Organisasi
                </h4>
            </div>
            <div class="body">
                <img src="{{ asset('adminlte/images/struktur.png') }}" width="250px">
                <hr/>
                @foreach ($struktur as $st)
                <p>
                    <form action="{{ url('/admin/pengaturan/struktur/'.$st->id) }}" method="POST">@csrf{{ method_field('delete') }}
                        <button class="btn btn-sm btn-danger">Hapus yang sebelumnya</button>
                    </form>
                </p>
                @endforeach
                    <form
                        method="POST"
                        action="{{ url('admin/pengaturan/struktur/add') }}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <p><input type="file" name="struktur" class="form-control"/></p>
                        <p><input type="hidden" name="status" class="form-control" value="1"/></p>
                        <p>
                            <button type="submit" class="btn btn-primary waves-effect">Ubah</button>
                        </p>
                  </form>
                </p>
            </div>
        </div>
</div>
@endsection

@section('script')

@endsection
