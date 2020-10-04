<!-- Banner iklan-->
<div class="container m-b-15">
    <div class="flex-c-c">
        @foreach($iklan3 as $ik3)
        <a href="{{ $ik3->url }}" target="_blank">
            <img class="max-w-full" src="{{ asset('uploads/iklan/'.$ik3->banner) }}" alt="IMG">
        </a>
        @endforeach
    </div>
</div>
<footer>
    <div class="bg2 p-t-40 p-b-25">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 p-b-20">
            <div class="size-h-3 flex-s-c">
              @foreach($logo as $lg)
              <a href="{{ url('/') }}">
                  <img class="max-s-full" src="{{ asset('uploads/pengaturan/logo/'.$lg->logo) }}" alt="LOGO">
              </a>
              @endforeach
            </div>

            <div>
            @foreach($tentang as $tg)
              <p class="f1-s-1 cl11 p-b-16">
                <?php echo substr($tg->tentang,0,200);?><a href="{{ url('/direksi') }}">&nbsp;[...]</a>
            @endforeach

              <div class="p-t-15">
                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                  <span class="fab fa-facebook-f"></span>
                </a>

                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                  <span class="fab fa-twitter"></span>
                </a>

                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                  <span class="fab fa-whatsapp"></span>
                </a>

                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                  <span class="fab fa-youtube"></span>
                </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 p-b-20">
            <div class="size-h-3 flex-s-c">
              <h5 class="f1-m-7 cl0">
                Popular Posts
              </h5>
            </div>
            <ul>
              <li class="flex-wr-sb-s p-b-20">
                <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                  <img src="{{ asset('ui/images/popular-post-01.jpg') }}" alt="IMG">
                </a>

                <div class="size-w-5">
                  <h6 class="p-b-5">
                    <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
                      Donec metus orci, malesuada et lectus vitae
                    </a>
                  </h6>

                  <span class="f1-s-3 cl6">
                    Feb 17
                  </span>
                </div>
              </li>
            </ul>
          </div>

          <div class="col-sm-6 col-lg-4 p-b-20">
            <div class="size-h-3 flex-s-c">
              <h5 class="f1-m-7 cl0">
                Category
              </h5>
            </div>

            <ul class="m-t--12">
              <li class="how-bor1 p-rl-5 p-tb-10">
                <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                  Fashion (22)
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="bg11">
      <div class="container size-h-4 flex-c-c p-tb-15">
        <span class="f1-s-1 cl0 txt-center">
          Copyright © 2020
          <a href="#" class="f1-s-1 cl10 hov-link1">This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://rodhian.site" target="_blank">VEDORA</a>
        </span>
      </div>
    </div>
  </footer>
