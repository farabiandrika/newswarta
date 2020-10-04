@extends('layouts.master')


@section('feature')
    <!-- Breadcrumb -->
    <div class="container">
        <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
            <div class="f2-s-1 p-r-30 m-tb-6">
                <a href="index.html" class="breadcrumb-item f1-s-3 cl9">
                    Home
                </a>

                <a href="category-01.html" class="breadcrumb-item f1-s-3 cl9">
                    Category
                </a>

                <span class="breadcrumb-item f1-s-3 cl9">
                    Entertaiment
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
            Kategori
        </h2>
    </div>

    <!-- Feature post -->
    <section class="bg0">
        <div class="container">
            <div class="row m-rl--1">
                <div class="col-12 p-rl-1 p-b-2">
                    <div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url({{ asset('ui/images/entertaiment-16.jpg') }});">
                        <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                        <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                            <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                Kategori
                            </a>

                            <h3 class="how1-child2 m-t-14 m-b-10">
                                <a href="blog-detail-01.html" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
                                    Music quisque at ipsum vel orci eleifend ultrices
                                </a>
                            </h3>

                            <span class="how1-child2">
                                <span class="f1-s-4 cl11">
                                    Jack Sims
                                </span>

                                <span class="f1-s-3 cl11 m-rl-3">
                                    -
                                </span>

                                <span class="f1-s-3 cl11">
                                    Feb 16
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 p-r-25 p-r-15-sr991">
            <!-- Item latest -->
            <div class="m-b-45">
                <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                    <img src="{{ asset('ui/images/entertaiment-06.jpg') }}" alt="IMG">
                </a>

                <div class="p-t-16">
                    <h5 class="p-b-5">
                        <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                            You wish lorem ipsum dolor sit amet consectetur
                        </a>
                    </h5>

                    <span class="cl8">
                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                            by John Alvarado
                        </a>

                        <span class="f1-s-3 m-rl-3">
                            -
                        </span>

                        <span class="f1-s-3">
                            Feb 18
                        </span>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-sm-6 p-r-25 p-r-15-sr991">
            <!-- Item latest -->
            <div class="m-b-45">
                <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                    <img src="{{ asset('ui/images/entertaiment-07.jpg') }}" alt="IMG">
                </a>

                <div class="p-t-16">
                    <h5 class="p-b-5">
                        <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                            You wish lorem ipsum dolor sit amet consectetur
                        </a>
                    </h5>

                    <span class="cl8">
                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                            by John Alvarado
                        </a>

                        <span class="f1-s-3 m-rl-3">
                            -
                        </span>

                        <span class="f1-s-3">
                            Feb 16
                        </span>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-sm-6 p-r-25 p-r-15-sr991">
            <!-- Item latest -->
            <div class="m-b-45">
                <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                    <img src="{{ asset('ui/images/entertaiment-08.jpg') }}" alt="IMG">
                </a>

                <div class="p-t-16">
                    <h5 class="p-b-5">
                        <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                            You wish lorem ipsum dolor sit amet consectetur
                        </a>
                    </h5>

                    <span class="cl8">
                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                            by John Alvarado
                        </a>

                        <span class="f1-s-3 m-rl-3">
                            -
                        </span>

                        <span class="f1-s-3">
                            Feb 15
                        </span>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-sm-6 p-r-25 p-r-15-sr991">
            <!-- Item latest -->
            <div class="m-b-45">
                <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                    <img src="{{ asset('ui/images/entertaiment-09.jpg') }}" alt="IMG">
                </a>

                <div class="p-t-16">
                    <h5 class="p-b-5">
                        <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                            You wish lorem ipsum dolor sit amet consectetur
                        </a>
                    </h5>

                    <span class="cl8">
                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                            by John Alvarado
                        </a>

                        <span class="f1-s-3 m-rl-3">
                            -
                        </span>

                        <span class="f1-s-3">
                            Feb 13
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="flex-wr-s-c m-rl--7 p-t-15">
        <a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active">1</a>
        <a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7">2</a>
    </div>
@endsection

@section('script')

@endsection
