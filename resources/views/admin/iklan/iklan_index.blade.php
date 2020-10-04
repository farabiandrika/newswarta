@extends('admin.layouts.master') @section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>{{ $title }}</h2>
    </div>
</div>
<ol class="breadcrumb">
    <li>
        <a href="{{ url('/admin') }}">
            <i class="material-icons">home</i>
            Home
        </a>
    </li>
    <li class="active">
        <i class="material-icons">web_asset</i>
        {{  $title }}
    </li>
</ol>

<div class="col-6">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        {{-- iklan 1 --}}
        <div class="card">
            <div class="header">
                <h4>
                    Iklan 1
                </h4>
            </div>
            <div class="body">
                <img src="{{ asset('adminlte/images/iklan1.jpg') }}" width="100%">
                <hr/>
                @foreach ($iklan1 as $ik1)
                <p>
                    <form action="{{ url('/admin/iklan/'.$ik1->id) }}" method="POST">@csrf{{ method_field('delete') }}
                        <button class="btn btn-sm btn-danger">Hapus yang sebelumnya</button>
                    </form>
                </p>
                @endforeach
                <p>Pilih Iklan 1&nbsp;<span class="text-primary">** Wajib ukuran 731px x 93px</span></p>
                <p>
                    <form
                        method="POST"
                        action="{{ url('admin/iklan/add') }}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <p><input type="file" name="banner" class="form-control"/></p>
                        <p><input
                            type="text"
                            name="url"
                            class="form-control"
                            placeholder="url Iklan ex: https://www.contoh.com"/></p>
                        <p><input type="hidden" name="status" class="form-control" value="1"/></p>
                        <p>
                            <button type="submit" class="btn btn-primary waves-effect">Ubah</button>
                        </p>
                    </form>
                </p>
            </div>
        </div>
        {{-- iklan 2 --}}
        <div class="card">
            <div class="header">
                <h4>
                    Iklan 2
                </h4>
            </div>
            <div class="body">
                <img src="{{ asset('adminlte/images/iklan2.jpg') }}" width="100%">
                <hr/>
                @foreach ($iklan2 as $ik2)
                <p>
                    <form action="{{ url('/admin/iklan/'.$ik2->id) }}" method="POST">@csrf{{ method_field('delete') }}
                        <button class="btn btn-sm btn-danger">Hapus yang sebelumnya</button>
                    </form>
                </p>
                @endforeach
                <p>Pilih Iklan 2&nbsp;<span class="text-primary">** Wajib ukuran 303px x optional</span></p>
                <p>
                  <form
                    method="POST"
                    action="{{ url('admin/iklan/add') }}"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <p><input type="file" name="banner" class="form-control"/></p>
                    <p><input
                        type="text"
                        name="url"
                        class="form-control"
                        placeholder="url Iklan ex: https://www.contoh.com"/></p>
                    <p><input type="hidden" name="status" class="form-control" value="2"/></p>
                    <p>
                        <button type="submit" class="btn btn-primary waves-effect">Ubah</button>
                    </p>
                  </form>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="col-6">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        {{-- iklan 3 --}}
        <div class="card">
            <div class="header">
                <h4>
                    Iklan 3
                </h4>
            </div>
            <div class="body">
                <img src="{{ asset('adminlte/images/iklan3.jpg') }}" width="90%">
                <hr/>
                @foreach ($iklan3 as $ik3)
                <p>
                    <form action="{{ url('/admin/iklan/'.$ik3->id) }}" method="POST">@csrf{{ method_field('delete') }}
                        <button class="btn btn-sm btn-danger">Hapus yang sebelumnya</button>
                    </form>
                </p>
                @endforeach
                <p>Pilih Iklan 3&nbsp;<span class="text-primary">** Wajib ukuran 731px x 93px</span></p>
                <p>
                  <form
                    method="POST"
                    action="{{ url('admin/iklan/add') }}"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <p><input type="file" name="banner" class="form-control"/></p>
                    <p><input
                        type="text"
                        name="url"
                        class="form-control"
                        placeholder="url Iklan ex: https://www.contoh.com"/></p>
                    <p><input type="hidden" name="status" class="form-control" value="3"/></p>
                    <p>
                        <button type="submit" class="btn btn-primary waves-effect">Ubah</button>
                    </p>
                  </form>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection
