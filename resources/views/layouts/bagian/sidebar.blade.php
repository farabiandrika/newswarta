<div class="col-md-10 col-lg-4 p-b-30">
    <div class="p-l-10 p-rl-0-sr991 p-b-20">
        <!-- Stay Connected -->
        <div class="p-b-35">
            <div class="how2 how2-cl4 flex-s-c">
                <h3 class="f1-m-2 cl3 tab01-title">
                    Stay Connected
                </h3>
            </div>

            <ul class="p-t-35">
                @foreach ($mediasosial as $ms)
                <li class="flex-wr-sb-c p-b-20">
                    <a href="{{ $ms->url_fb }}" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0" target="_blank">
                        <span class="fab fa-facebook-f"></span>
                    </a>

                    <div class="size-w-3 flex-wr-sb-c">
                        <span class="f1-s-8 cl3 p-r-20">
                            {{ $ms->nama_fb }}
                        </span>

                        <a href="{{ $ms->url_fb }}" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03" target="_blank">
                            Like
                        </a>
                    </div>
                </li>

                <li class="flex-wr-sb-c p-b-20">
                    <a href="{{ $ms->url_ig }}" class="size-a-8 flex-c-c borad-3 size-a-8 fs-16 cl0 hov-cl0" style="background-color: #AA38B8" target="_blank">
                        <span class="fab fa-instagram"></span>
                    </a>

                    <div class="size-w-3 flex-wr-sb-c">
                        <span class="f1-s-8 cl3 p-r-20">
                            {{ $ms->nama_ig }}
                        </span>

                        <a href="{{ $ms->url_ig }}" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03" target="_blank">
                            Follow
                        </a>
                    </div>
                </li>

                <li class="flex-wr-sb-c p-b-20">
                    <a href="{{ $ms->url_tw }}" class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0" target="_blank">
                        <span class="fab fa-twitter"></span>
                    </a>

                    <div class="size-w-3 flex-wr-sb-c">
                        <span class="f1-s-8 cl3 p-r-20">
                            {{ $ms->nama_tw }}
                        </span>

                        <a href="{{ $ms->url_tw }}" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03" target="_blank">
                            Follow
                        </a>
                    </div>
                </li>

                <li class="flex-wr-sb-c p-b-20">
                    <a href="{{ $ms->url_yt }}" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0" target="_blank">
                        <span class="fab fa-youtube"></span>
                    </a>

                    <div class="size-w-3 flex-wr-sb-c">
                        <span class="f1-s-8 cl3 p-r-20">
                            {{ $ms->nama_yt }}
                        </span>

                        <a href="{{ $ms->url_yt }}" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03" target="_blank">
                            Subscribe
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>

        <!-- Category -->
        <div class="p-b-60">
            <div class="how2 how2-cl4 flex-s-c">
                <h3 class="f1-m-2 cl3 tab01-title">
                    Category
                </h3>
            </div>

            <ul class="p-t-35">
                <li class="how-bor3 p-rl-4">
                    <a href="#" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
                        Fashion
                    </a>
                </li>
            </ul>
        </div>

        <!-- Most Popular -->
        <div class="p-b-30">
            <div class="how2 how2-cl4 flex-s-c">
                <h3 class="f1-m-2 cl3 tab01-title">
                    Most Popular
                </h3>
            </div>

            <ul class="p-t-35">
                <li class="flex-wr-sb-s p-b-22">
                    <ul>
                        <li class="flex-wr-sb-s p-b-20">
                          <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                            <img src="{{ asset('ui/images/popular-post-01.jpg') }}" alt="IMG">
                          </a>

                          <div class="size-w-5">
                            <h6 class="p-b-5">
                              <a href="#" class="f1-s-5 cl6">
                                Donec metus orci, malesuada et lectus vitae
                              </a>
                            </h6>

                            <span class="f1-s-3 cl6">
                              Feb 17
                            </span>
                          </div>
                        </li>
                      </ul>
                </li>
            </ul>
        </div>

        <!-- Archive -->
        <div class="p-b-37">
            <div class="how2 how2-cl4 flex-s-c">
                <h3 class="f1-m-2 cl3 tab01-title">
                    Archive
                </h3>
            </div>

            <ul class="p-t-32">
                <li class="p-rl-4 p-b-19">
                    <a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
                        <span>
                            July 2018
                        </span>

                        <span>
                            (9)
                        </span>
                    </a>
                </li>

                <li class="p-rl-4 p-b-19">
                    <a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
                        <span>
                            June 2018
                        </span>

                        <span>
                            (39)
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Video -->
        <div class="p-b-55">
            <div class="how2 how2-cl4 flex-s-c m-b-35">
                <h3 class="f1-m-2 cl3 tab01-title">
                    Featured Video
                </h3>
            </div>

            <div>
                <div class="wrap-pic-w pos-relative">
                    <img src="{{ asset('ui/images/video-01.jpg') }}" alt="IMG">

                    <button class="s-full ab-t-l flex-c-c fs-32 cl0 hov-cl10 trans-03" data-toggle="modal" data-target="#modal-video-01">
                        <span class="fab fa-youtube"></span>
                    </button>
                </div>

                <div class="p-tb-16 p-rl-25 bg3">
                    <h5 class="p-b-5">
                        <a href="#" class="f1-m-3 cl0 hov-cl10 trans-03">
                            Music lorem ipsum dolor sit amet consectetur
                        </a>
                    </h5>

                    <span class="cl15">
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

        <!-- Subscribe -->
        <div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-55">
            <h5 class="f1-m-5 cl0 p-b-10">
                Subscribe
            </h5>

            <p class="f1-s-1 cl0 p-b-25">
                Get all latest content delivered to your email a few times a month.
            </p>

            <form class="size-a-9 pos-relative">
                <input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email" placeholder="Email">

                <button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
                    <i class="fa fa-arrow-right"></i>
                </button>
            </form>
        </div>

        <!-- iklan  -->
        <div class="flex-c-s p-b-50">
            @foreach($iklan2 as $ik2)
            <a href="{{ $ik2->url }}" target="_blank">
                <img class="max-w-full" src="{{ asset('uploads/iklan/'.$ik2->banner) }}" alt="IMG">
            </a>
            @endforeach
        </div>

        <!-- Tag -->
        <div class="p-b-55">
            <div class="how2 how2-cl4 flex-s-c m-b-30">
                <h3 class="f1-m-2 cl3 tab01-title">
                    Tags
                </h3>
            </div>

            <div class="flex-wr-s-s m-rl--5">
                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                    Fashion
                </a>

                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                    Lifestyle
                </a>

                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                    Denim
                </a>

                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                    Streetstyle
                </a>

                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                    Crafts
                </a>

                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                    Magazine
                </a>

                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                    News
                </a>

                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                    Blogs
                </a>
            </div>
        </div>
    </div>
</div>
