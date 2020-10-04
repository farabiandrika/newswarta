<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Head -->
    @include('layouts.bagian.head')
    </head>
    <body class="animsition">

        <!-- Header -->
        @include('layouts.bagian.header')


        <!-- Feature post -->
        <!-- section untuk feature -->
        @yield('feature')

        <!-- content -->
        <!-- section untuk content -->
        <section class="bg0 p-t-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        @yield('content')
                    </div>
                    <!--- sidebar-->
                    @include('layouts.bagian.sidebar')
                </div>
            </div>
        </section>

        <!-- Footer -->
        @include('layouts.bagian.footer')

        <!-- Back to top -->
        <div class="btn-back-to-top" id="myBtn">
            <span class="symbol-btn-back-to-top">
                <span class="fas fa-angle-up"></span>
            </span>
        </div>

        <!-- untuk include semua script -->
        @include('layouts.bagian.script')
        <!-- untuk menambahkan script -->
        @yield('scripts')
    </body>
</html>
