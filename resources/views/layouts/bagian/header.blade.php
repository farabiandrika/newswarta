<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <div class="topbar">
            <div class="content-topbar container h-100">
                <div class="left-topbar">
                    <span class="left-topbar-item flex-wr-s-c">
                        <span>
                            <?php
                                date_default_timezone_set('Asia/Jakarta');
                                echo date('l, d  F  Y');
                            ?>
                        </span>

                        <span>
                        <div class="row">
                            <div class="col-md-12">&nbsp;
                                <span id="jam"></span>
                                <span id="menit"></span>
                                <span id="detik"></span>
                            </div>
                        </div>
                        <script>
                            window.setTimeout("waktu()", 1000);
                            function waktu() {
                                var waktu = new Date();
                                setTimeout("waktu()", 1000);
                                document.getElementById("jam").innerHTML = waktu.getHours();
                                document.getElementById("menit").innerHTML = waktu.getMinutes();
                                document.getElementById("detik").innerHTML = waktu.getSeconds();
                            }
                        </script>
                        </span>
                    </span>
                </div>

                <div class="right-topbar">
                    <a href="#">
                        <span class="fab fa-facebook-f"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-twitter"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-whatsapp"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-youtube"></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            @foreach($logo as $lg)
            <div class="logo-mobile">
                <a href="{{ url('/') }}"><img src="{{ asset('uploads/pengaturan/logo/'.$lg->logo) }}" alt="LOGO"></a>
            </div>
            @endforeach

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                <li class="left-topbar">
                    <span class="left-topbar-item flex-wr-s-c">
                        <span>
                            <?php
                                date_default_timezone_set('Asia/Jakarta');
                                echo date('l, d  F  Y');
                            ?>
                        </span>

                        <span>
                        <div class="row">
                            <div class="col-md-12">&nbsp;
                                <span id="jam"></span>
                                <span id="menit"></span>
                                <span id="detik"></span>
                            </div>
                        </div>
                        <script>
                            window.setTimeout("waktu()", 1000);
                            function waktu() {
                                var waktu = new Date();
                                setTimeout("waktu()", 1000);
                                document.getElementById("jam").innerHTML = waktu.getHours();
                                document.getElementById("menit").innerHTML = waktu.getMinutes();
                                document.getElementById("detik").innerHTML = waktu.getSeconds();
                            }
                        </script>
                        </span>
                    </span>
                </li>

                <li class="right-topbar">
                    <a href="#">
                        <span class="fab fa-facebook-f"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-twitter"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-whatsapp"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-youtube"></span>
                    </a>
                </li>
            </ul>

            <ul class="main-menu-m">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                    {{-- <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span> --}}
                </li>

                <li>
                    <a href="category-01.html">News</a>
                </li>
            </ul>
        </div>

        <!-- -->
        <div class="wrap-logo container">
            <!-- Logo desktop -->
            @foreach($logo as $lg)
            <div class="logo">
                <a href="{{ url('/') }}"><img src="{{ asset('uploads/pengaturan/logo/'.$lg->logo) }}" alt="LOGO"></a>
            </div>
            @endforeach

            <!-- Banner iklan 1-->
            @foreach($iklan1 as $ik)
            <div class="banner-header">
                <a href="{{ $ik->url }}" target="_blank">
                    <img src="{{ asset('uploads/iklan/'.$ik->banner) }}" alt="IMG">
                </a>
            </div>
            @endforeach
        </div>

        <!-- -->
        <div class="wrap-main-nav">
            <div class="main-nav">
                <!-- Menu desktop -->
                <nav class="menu-desktop">
                    @foreach($logo as $lg)
                    <a class="logo-stick" href="{{ url('/') }}">
                        <img src="{{ asset('uploads/pengaturan/logo/'.$lg->logo) }}" alt="LOGO">
                    </a>
                    @endforeach

                    <ul class="main-menu">
                        <li class="main-menu-active">
                            <a href="{{ url('/') }}">Home</a>
                        </li>

                        <li class="mega-menu-item">
                            <a href="category-01.html">News</a>

                            <div class="sub-mega-menu">
                                <div class="nav flex-column nav-pills" role="tablist">
                                    <a class="nav-link active" data-toggle="pill" href="#news-0" role="tab">All</a>
                                    {{-- <a class="nav-link" data-toggle="pill" href="#news-1" role="tab">Entertaiment</a> --}}
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane show active" id="news-0" role="tabpanel">
                                        <div class="row">
                                            <div class="col-3">
                                                <!-- Item post -->
                                                <div>
                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                        <img src="{{ asset('ui/images/post-05.jpg') }}" alt="IMG">
                                                    </a>

                                                    <div class="p-t-10">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                Donec metus orci, malesuada et lectus vitae
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
                                                            <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                Music
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
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="main-menu-item">
                            <a href="{{ url('/direksi') }}">Direksi</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
