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
                        Nulla non interdum metus non laoreet nisi tellus eget aliquam lorem pellentesque
                </span>
            </div>

            <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
                <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
                <button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
                    <i class="zmdi zmdi-search"></i>
                </button>
            </div>
        </div><hr/>
    </div>
@endsection

@section('content')
<div class="p-r-10 p-r-0-sr991">
    <!-- Blog Detail -->
    <div class="p-b-70">
        <a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
            Technology
        </a>

        <h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
            Nulla non interdum metus non laoreet nisi tellus eget aliquam lorem pellentesque
        </h3>

        <div class="flex-wr-s-s p-b-30">
            <span class="f1-s-3 cl8 m-r-15">
                <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                    by John Alvarado
                </a>

                <span class="m-rl-3">-</span>

                <span>
                    Feb 18
                </span>
            </span>

            <span class="f1-s-3 cl8 m-r-15">
                5239 Views
            </span>

            <a href="#" class="f1-s-3 cl8 hov-cl10 trans-03 m-r-15">
                0 Comment
            </a>
        </div>

        <!-- Share -->
        <div class="flex-s-s">
            <span class="f1-s-12 cl5 p-t-1 p-b-20 m-r-15">
                Share:
            </span>

            <div class="flex-wr-s-s size-w-0">
                <a href="#" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                    <i class="fab fa-facebook-f m-r-1"></i>
                </a>

                <a href="#" class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                    <i class="fab fa-twitter m-r-1"></i>
                </a>

                <a href="#" class="dis-block f1-s-13 cl0 bg-google borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                    <i class="fab fa-google-plus-g m-r-1"></i>
                </a>

                <a href="#" class="dis-block f1-s-13 cl0 borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03" style="background-color: #AA38B8">
                    <i class="fab fa-instagram m-r-1"></i>
                </a>

                <a href="#" class="dis-block f1-s-13 cl0 bg-success borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                    <i class="fab fa-whatsapp m-r-1"></i>
                </a>
            </div>
        </div>

        <div class="wrap-pic-max-w p-b-30 text-center">
            <img src="{{ asset('ui/images/blog-list-01.jpg') }}" alt="IMG">
            <p class="mt-2"><i>foto bersama untuk pamit dari kepengurusan tahun 2019/2020</i></p>
        </div>

        <p class="f1-s-11 cl6 p-b-25">
            Curabitur volutpat bibendum molestie. Vestibulum ornare gravida semper. Aliquam a dui suscipit, fringilla metus id, maximus leo. Vivamus sapien arcu, mollis eu pharetra vitae, condimentum in orci. Integer eu sodales dolor. Maecenas elementum arcu eu convallis rhoncus. Donec tortor sapien, euismod a faucibus eget, porttitor quis libero.
        </p>

        <p class="f1-s-11 cl6 p-b-25">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Duis viverra dui eu pharetra pellentesque. Donec a eros leo. Quisque sed ligula vitae lorem efficitur faucibus. Praesent sit amet imperdiet ante. Nulla id tellus auctor, dictum libero a, malesuada nisi. Nulla in porta nibh, id vestibulum ipsum. Praesent dapibus tempus erat quis aliquet. Donec ac purus id sapien condimentum feugiat.
        </p>

        <p class="f1-s-11 cl6 p-b-25">
            Praesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate
        </p>

        <!-- Tag -->
        <div class="flex-s-s p-t-12 p-b-15">
            <span class="f1-s-12 cl5 m-r-8">
                Tags:
            </span>

            <div class="flex-wr-s-s size-w-0">
                <a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
                    Streetstyle
                </a>

                <a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
                    Crafts
                </a>
            </div>
        </div>

        <!-- Share -->
        <div class="flex-s-s">
            <span class="f1-s-12 cl5 p-t-1 m-r-15">
                Share:
            </span>

            <div class="flex-wr-s-s size-w-0">
                <a href="#" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                    <i class="fab fa-facebook-f m-r-1"></i>
                </a>

                <a href="http://twitter.com/share?source=sharethiscom&amp;text=&lt;?php echo $title;?&gt;&amp;url=&lt;?php echo $url; ?&gt;&amp;via=berbagiyuks"&gt;&lt;img src="images/tw.jpg" /&gt;&lt;/a&gt;" class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                    <i class="fab fa-twitter m-r-1"></i>
                </a>

                <a href="#" class="dis-block f1-s-13 cl0 bg-google borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                    <i class="fab fa-google-plus-g m-r-1"></i>
                </a>

                <a href="#" class="dis-block f1-s-13 cl0 borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03" style="background-color: #AA38B8">
                    <i class="fab fa-instagram m-r-1"></i>
                </a>

                <a href="#" class="dis-block f1-s-13 cl0 bg-success borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                    <i class="fab fa-whatsapp m-r-1"></i>
                </a>
            </div>
        </div>
        <div>
            <hr/>
            <h4 class="f1-l-4 cl3 p-b-12">
                0 Comment
            </h4>
            <hr/>
        </div>
    </div>

    <!-- Leave a comment -->
    <div>
        <h4 class="f1-l-4 cl3 p-b-12">
            Leave a Comment
        </h4>

        <p class="f1-s-13 cl8 p-b-40">
            Your email address will not be published. Required fields are marked *
        </p>

        <form>
            <textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" name="msg" placeholder="Comment..."></textarea>

            <input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="name" placeholder="Name*">

            <input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="email" placeholder="Email*">

            <input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="website" placeholder="Website">

            <button class="size-a-17 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-10">
                Post Comment
            </button>
        </form>
    </div>
</div>

@endsection

@section('script')

@endsection
