@extends('layouts.master')


@section('feature')
    <!-- Breadcrumb -->
    <div class="container">
        <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
            <div class="f2-s-1 p-r-30 m-tb-6">
                <a href="index.html" class="breadcrumb-item f1-s-3 cl9">
                    Home
                </a>

                <span class="breadcrumb-item f1-s-3 cl9">
                    Direksi
                </span>
            </div>

            <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
                <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
                <button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
                    <i class="zmdi zmdi-search"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Page heading -->
    <div class="container p-t-4 p-b-20">
        <h2 class="f1-l-1 cl2">
            Direksi
        </h2>
    </div>
@endsection

@section('content')
     <div class="row">
        <div class="col-sm-12 p-r-25 p-r-15-sr991">
            <p class="text-center">
            @foreach ($struktur as $st)
                <img class="justify-content-center" src="{{  asset('uploads/pengaturan/struktur/'.$st->struktur)}}" width="100%">
            @endforeach
            </p>
            <br/>
            @foreach($tentang as $tg)
            <p class="text-justify">
               {{ $tg->tentang }}
            </p>
            @endforeach
        </div>
    </div><br/>

@endsection

@section('script')

@endsection
