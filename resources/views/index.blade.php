@extends('parts.template') @section('content')

<div class="firstScreen parallax index-height"style = "background:black">
  <video id="vid" style="opacity:0.6" autoplay muted playsinline loop>
                <source src="{{asset('res/socep-intro.mp4')}}" type="video/mp4">
            </video>

  <div class="overFirst width-new-title">
    <div class="title ">
      <div class="titleInside"style = "margin-bottom:30px;">{{settings('index.index-title')}}</div>
    </div>



    <div class="description">
      {{settings('index.index-subtitlu')}}
    </div>
  </div>
  <div class="next sageata bounce">
    <img src="res/sagetica.svg" />
  </div>
</div>






<div class="secondScreen">
  
   <div class="container-element-home-text-scroll">
     <div class="linieLaterala"></div>
     <div class="stg">
        <div class="stgTitle">
        <div class="stgTInside">{{settings('index.titlu-animat')}}</div>
        </div>
        <div class="dr desktop-hidden dr-mobile">
          <img src="res/socep-gif.gif" alt="" />
        </div>
        <div class="stgDescriere">
          {{settings('index.subtitlu-animat')}}
        </div>
      </div>
    </div>

  
    <div class="dr mobile-hidden">
      <img src="res/socep-gif.gif" alt="" />
    </div>
</div>












<div class="thirdScreen">
  <div class="dublu">
    <img src="{{ route('thumb', ['width:1920', setting('index.index-sustainable-image')]) }}" alt="ship" />
  </div>
  <div class="simplu">
    <div class="intro">
        {{ __('site.sustain') }}
    </div>
    <div class="simplutitlu">
      <div class="simplutitluinside">{{settings('index.index-sustainable-title')}}</div>
    </div>
    <div class="simpludescriere">
      {{settings('index.index-sustainable-descriere')}} </div>
    
    <a href = "/about" style = "text-decoration: none;">
    <div class="readmore">
        {{ __('site.read') }}
    </div></a>
  </div>
  <div class="simplu cupoza">
    <img src="{{ route('thumb', ['width:800', setting('index.index-tehno-image')]) }}" alt="" />
  </div>
  <div class="simplu">
    <div class="intro">
        {{ __('site.who') }}
    </div>
    <div class="simplutitlu">

      <div class="simplutitluinside">{{settings('index.index-tehno-title')}}</div>
    </div>
    <div class="simpludescriere">
      {{settings('index.index-tehno-descriere')}}
    </div>
    <a href = "/about" style = "text-decoration: none;">
    <div class="readmore">
        {{ __('site.read') }}
    </div></a>
  </div>
  <div class="simplu colorat1 colorat" ontouchstart="document.getElementById('flip1').classList.toggle('hover');">
    <div class="avatar av1">
      <img src="res/avatar1.png" alt="" />
    </div>
    <div class="coloratdescriere">
      {{settings('index.index-tehno-descriere-dreapta')}}
    </div>
    <!-- <div id="flip1" class="flip-container">
                    <div class="flipper">
                        <div class="front">
                            <div class="coverButon">
                            </div>
                        </div>
                        <div class="back">
                            <a class="seemore">
                                see more
                            </a>
                        </div>
                    </div>
                </div> -->
    <a href = "/container"><button class="btnR btn-5 btn-5b icon-cart">
                    <span>{{ __('site.viewMore') }}</span>
                </button></a>
  </div>
  <div class="simplu">
    <div class="intro">
        {{ __('site.news') }}
    </div>
    <div class="simplutitlu">

      <div class="simplutitluinside">{{settings('index.index-cargo-titlu')}}</div>
    </div>
    <div class="simpludescriere">
      {{settings('index.index-cargo-descriere')}}
    </div>
    <a href = "/news" style = "text-decoration: none;">
    <div class="readmore">
        {{ __('site.read') }}
    </div></a>
  </div>
  <div class="simplu colorat2 colorat" ontouchstart="document.getElementById('flip1').classList.toggle('hover');">
    <div class="avatar">
      <img src="res/cargo.svg" alt="" />
    </div>
    <div class="coloratdescriere">
      {{settings('index.index-cargo-descriere-centru')}}
    </div>
    <a href = "/general"><button class="btnR btnR2 btn-5 btn-5b icon-cart2">
                    <span>{{ __('site.viewMore') }}</span>
                </button></a>
  </div>
  <div class="simplu">
    <div class="intro">
        {{ __('site.busy') }}
    </div>
    <div class="simplutitlu">

      <div class="simplutitluinside">{{settings('index.index-cargo-dreapta-titlu')}}</div>
    </div>
    <div class="simpludescriere">
      {{settings('index.index-cargo-dreapta-descriere')}}
    </div>
    <a href = "/news" style = "text-decoration: none;">
    <div class="readmore">
        {{ __('site.read') }}
    </div></a>
  </div>
</div>


@endsection @push('scripts')
<script>
    $(document).ready(function () {
            $(".titleInside").css("bottom",'0');
             $(".overFirst .description").css("opacity", '1');
    });
</script>
<script>
    $(window).on('scroll', function () {
            var scrollTop = $(this).scrollTop();
                var topDistance = $(".secondScreen").offset().top;

                if ((topDistance - 300) < scrollTop) {
                    $(".linieLaterala").css("width","7%");
                    $(".stgTInside").css("bottom","0");
                    $(".stgDescriere").css("opacity","1");
                }
                else{
                    $(".linieLaterala").css("width", "1%");
                    $(".stgTInside").css("bottom", "-250px");
                    $(".stgDescriere").css("opacity","0");
                }

            
              
    });
</script>
@endpush