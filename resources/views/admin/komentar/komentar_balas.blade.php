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
        <a href="{{ url('/admin/komentar') }}">
            <i class="material-icons">question_answer</i> Komentar
        </a>
    </li>
    <li class="active">
        <i class="material-icons">replay</i> {{  $title }}
    </li>
</ol>


<!-- Inline Layout -->
<div class="col-6">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h4>
                    Pembukaan jalan Tol Pekanbaru Dumai
                </h4>
            </div>
            <div class="body">
                <p>dikirim : 24/09/2020 13:45</p>
                <p>dari : Roby</p>
                <p>email : Roby@gmail.com</p>
                <hr/>
                <h5>Isi Komentar :</h5>
                <p>Good bagus sekali berita anda wahai masta abi kusno</p>
            </div>
        </div>
    </div>
</div>

<div class="col-6">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h4>
                    Balas Komentar
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
                <form method="POST" action="{{ url('admin/komentar/1') }}">
                    {{ csrf_field() }}
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="4" name="isi" class="form-control no-resize" placeholder="Isi Komentar..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">Balas</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# Inline Layout -->

@endsection

@section('script')

@endsection
