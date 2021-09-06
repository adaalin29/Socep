@extends('parts.template') @section('content')
<div class="firstScreen parallax header-mic" style="background-attachment: inherit; background-image: url(
{{ route('thumb', ['width:1920', setting('about.background')]) }})">


  <div class = "color-overlay" style="background: #00000033;">
    <div class="overFirst" style = "width:50%;">
      <div class="title">
        <div class="titleInside">{{settings('about.about-title')}}</div>
      </div>
  </div>






  </div>
<!--   <div class="next sageata bounce">
    <img src="res/sagetica.svg" />
  </div> -->
</div>


<div class="services">
  <div class="title-page">{{settings('about.about-services-title')}}</div>
  <div class="service-boxes">
    <div class="service-box colorat about-height mobile-hidden-phone">
      <div class="service-container-position">
        <div class="service-position-left">
          <div class="service-position-left-upper">
            <div class="service-title">{{settings('about.about-container-terminal-title')}}</div>
          </div>
          <div class="service-position-left-bottom">
            <div class="service-text">{{settings('about.about-container-terminal-descriere')}}</div>
          </div>


        </div>
        <div class="service-position-right">

          <div class="service-position-right-upper">
            <div class="service-image"><img src="res/box1.png"></div>
          </div>

          <div class="service-position-right-bottom">
            <a href="/container"><button class="btnR btnR2 btnR3 btn-5 btn-5b icon-cart-bun bnt-orange">
            <span>{{ __('site.viewMore') }}</span>
              </button></a>
          </div>
        </div>

      </div>


    </div>

    <div class="service-box colorat about-height mobile-hidden-phone">
      <div class="service-container-position">
        <div class="service-position-left">
          <div class="service-position-left-upper">
            <div class="service-title">{{settings('about.about-general-title')}}</div>
          </div>
          <div class="service-position-left-bottom">
            <div class="service-text">{{settings('about.about-general-descriere')}}</div>
          </div>


        </div>
        <div class="service-position-right">

          <div class="service-position-right-upper">
            <div class="service-image"><img src="res/box2.png"></div>
          </div>

          <div class="service-position-right-bottom">
            <a href="/general"><button class="btnR btnR2 btnR3 btn-5 btn-5b icon-cart-bun bnt-orange">
                <span>{{ __('site.viewMore') }}</span>
              </button></a>
          </div>
        </div>

      </div>


    </div>




    <div class="service-box desktop-hidden-phone mobile-service-box">
      <div class="service-image"><img src="res/box1.png"></div>
    <div class="service-title">{{settings('about.about-container-terminal-title')}}</div>
      <div class="service-text">{{settings('about.about-container-terminal-descriere')}} </div>
      <a href="/container"><button class="btnR btnR2 btnR3 btn-5 btn-5b icon-cart-bun bnt-orange">
          <span>{{ __('site.viewMore') }}</span>
        </button></a>

    </div>

    <div class="service-box desktop-hidden-phone mobile-service-box">
      <div class="service-image"><img src="res/box2.png"></div>
    <div class="service-title">{{settings('about.about-general-title')}}</div>
    <div class="service-text">{{settings('about.about-general-descriere')}}</div>
      <a href="/general"><button class="btnR btnR2 btnR3 btn-5 btn-5b icon-cart-bun bnt-orange">
          <span>{{ __('site.viewMore') }}</span>
        </button></a>

    </div>

  </div>
</div>





<div class="mission">
  <div class="mission-boxes">

  </div>
  <div class="mission-box box1">
    <div class="box-width-box1 padding">
      <div class="title-page initial-align">{{settings('about.about-mission-title')}}</div>
      <div class="mission-image"><img class="width border-image"
          src="{{ route('thumb', ['width:800', setting('about.about-mission-image')]) }}"></div>
      <div class="service-title initial-align black with-margin" style="">{{settings('about.about-sustainable-title')}}
      </div>
      <div class="service-text initial-align-text">{{settings('about.about-sustainable-descriere')}}</div>
    </div>
  </div>
  <div class="mission-box box2">
    <div class="color-overlay">
      <div class="box-text white" style="padding-right:5%;">
        <div class="box-width">
          <div class="title-page white initial-align">{{settings('about.about-benefits-descriere')}}</div>
          <div class="service-title white initial-align">{{settings('about.about-benefits-scurta')}}
          </div>

          <div class="mission-list">
            @php ($delay_contor = 0)
            @foreach($beneficiu as $beneficiuDetail)

            <div data-aos="fade-right" data-aos-delay="{{$delay_contor*150}}" data-aos-easing="ease-in-sine"
              class="mission-element count-element">
              <div class="mission-list-image"><img src="res/check.png"></div>
              <div class="mission-text">{{$beneficiuDetail['Description']}}</div>
            </div>
            <?php $delay_contor++ ?>
            @endforeach
          </div>
        </div>
      </div>

    </div>

  </div>

  <div class="mission-box box3 desktop-hidden-phone" style="padding-top:0">
    <div class="box-width padding box4-padding">
      <div class="mission-image"><img class="width border-image"
          src="{{ route('thumb', ['width:800', setting('about.about-quote-picture')]) }}"></div>
      <div class="quote-part">
        <div class="quote-image mobile-hidden-phone"><img src="res/quote.png"></div>
        <div class="service-title initial-align black with-margin quote-align-title mobile-quote-title">"{{ __('site.quoteBig') }}
        </div>
        <div class="quote-image desktop-hidden-phone"><img src="res/quote-reversed.png"></div>
      </div>
      <div class="service-text initial-align-text grey-text">{{ __('site.quoteSmall') }}"</div>
      <div class="service-text initial-align-text-quote grey-text">Nicolae Dusu- {{ __('site.quoteGuy') }}</div>

    </div>
  </div>
  <div class="mission-box box2">
    <div class="color-overlay overlay-box2">
      <div class="box-text no-padding white">
        <div class="box-width-box1">
          <div class="title-page white initial-align">{{settings('about.about-sustainablebox-title')}}</div>






          <div class="service-text white initial-align-text text-padding-bottom">
            {{settings('about.about-sustainablebox-descriere')}}</div>

          <div class="mission-list">
            <div data-aos="fade-right" data-aos-easing="ease-in-sine" class="mission-element">
              <div class="mission-list-image"><img src="res/group1.png"></div>
              <div class="mission-text box3-text box3-list">{{settings('about.about-sustainablebox-item1')}}</div>
            </div>
            <div data-aos="fade-right" data-aos-delay="150" data-aos-easing="ease-in-sine" class="mission-element">
              <div class="mission-list-image"><img src="res/group2.png"></div>
              <div class="mission-text box3-text box3-list">{{settings('about.about-sustainablebox-item2')}}
              </div>
            </div>
            <div data-aos="fade-right" data-aos-delay="300" data-aos-easing="ease-in-sine" class="mission-element">
              <div class="mission-list-image"><img src="res/group3.png"></div>
              <div class="mission-text box3-text box3-list">{{settings('about.about-sustainablebox-item3')}}</div>
            </div>


          </div>
        </div>
      </div>

    </div>

  </div>
  <div class="mission-box box3 mobile-hidden-phone">
    <div class="box-width padding box4-padding">
      <div class="mission-image"><img class="width border-image"
          src="{{ route('thumb', ['width:800', setting('about.about-quote-picture')]) }}"></div>
      <div class="quote-part">
        <div class="quote-image"><img src="res/quote.png"></div>
        <div class="service-title initial-align black with-margin">"{{ __('site.quoteBig') }}</div>
      </div>
      <div class="service-text initial-align-text grey-text">{{ __('site.quoteSmall') }}"</div>
      <div class="service-text initial-align-text-quote grey-text">Nicolae Dusu- {{ __('site.quoteGuy') }}</div>

    </div>
  </div>

</div>

<div class="history">
<div class="title-page">{{settings('about.socep-history')}}</div>
  <div class="history-container">

    <div class="history-image">
      <img class="imagine-istoric" src="res/socephistory.svg">
    </div>
  </div>
  <div class="sNav" style = "display:none;">
      <img class="sageti sageata1" src="res/sageataGri2.png" alt="sageata" tabindex="0" role="button" aria-label="Previous slide">
      <div id="hand" style="background-image: url(&quot;res/hand.png&quot;);"></div>
      <img class="sageti sageata2" src="res/sageataGri2.png" alt="sageata" tabindex="0" role="button" aria-label="Next slide">
    </div>
</div>





@endsection @push("scripts")
<script>
  AOS.init();
</script>
<script src="js/dragscroll.js" type="text/javascript"></script>

<script>
  var history_animation_active = false;
  $(window).on('scroll', function () {
            var scrollTop = $(this).scrollTop();
            var topDistance = $(".history-image").offset().top;
            // console.log(scrollTop, topDistance, topDistance - screen.height - 300);
                if ((topDistance - screen.height + 400) < scrollTop) {
                  if (history_animation_active == false) {
                    history_animation_active = true;
                    $('.history-container').animate({ scrollLeft: 200 }, 600);
                    setTimeout(function () {
                      $('.history-container').animate({ scrollLeft: 0 }, 600);
                    }, 600);
                  }
                }
                else{
                  history_animation_active = false;
                }
    });
</script>


@endpush