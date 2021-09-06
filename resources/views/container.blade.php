@extends('parts.template') @section('content')
<div class="firstScreen parallax header-mic" style=" background-attachment: inherit; background-image:url(
  {{ route('thumb', ['width:1920', setting('container-terminal.container-banner')]) }})">


  <div class="overFirst">
    <div class="title">
      <div class="titleInside">{{settings('container-terminal.container-title')}}</div>
    </div>






  </div>

</div>
<div class="services services-no-margin">
  <div class="container-container-boxes">
    <div class="container-row">
      <div class="container-box left-box special-container-left">
        <div class="contained-photo">
          <img class="animation cargo-general-width width "
            src="{{ route('thumb', ['width:800', setting('container-terminal.general-big-banner')]) }}">
        </div>
      </div>
      <div class="container-box right-box inside-services service_page-container">
        <div class="service_page-title title-page title-align-left responsive-align-left">
          {{settings('container-terminal.container-title')}}</div>
        <div class="service_page-text service-text service-page-text-width-modified">
          {!!settings('container-terminal.container-banner-descriere')!!}</div>
      </div>
    </div>
    <div class="container-row">
      <div class="contaier-section inside-services">
        <div class="service_page-title title-page title-align-left responsive-align-left">
          {{settings('container-terminal.container-titlu-stanga')}}</div>
        <div class="service_page-text service-text service-page-text-width">
          {!!settings('container-terminal.container-facillities-descriere')!!}</div>
      </div>
      <div class="contaier-section">
        <div class="contained-photo">
          <img class="animation cargo-general-width width"
            src="{{ route('thumb', ['width:800', setting('container-terminal.general-facilities-image')]) }}">
        </div>
      </div>
      <div class="contaier-section inside-services">
        <div class="service_page-title title-page title-align-left responsive-align-left">
          {{settings('container-terminal.container-caracteristics-titlu')}}</div>
        <div class="service_page-text service-text service-page-text-width">
          {!!settings('container-terminal.container-dreapta-descriere')!!}</div>
      </div>
    </div>

    <div class="container-row">
      <div class="contaier-section">
        <div class="contained-photo">
          <img class="animation cargo-general-width width"
            src="{{ route('thumb', ['width:800', setting('container-terminal.container-image1')]) }}">
        </div>
      </div>
      <div class="contaier-section inside-services">
        <div class="service_page-title title-page title-align-left responsive-align-left">
          {{settings('container-terminal.container-titlu')}}</div>
        <div class="service_page-text service-text service-page-text-width">
          {!!settings('container-terminal.container-centru-descriere')!!}</div>
      </div>
      <div class="contaier-section">
        <div class="contained-photo">
          <img class="animation cargo-general-width width"
            src="{{ route('thumb', ['width:800', setting('container-terminal.container-image2')]) }}">
        </div>
      </div>
    </div>


  </div>
<div class="title-page title-page-services">{{settings('container-terminal.dotari-title')}}</div>

  <div class="utilaje">
    <div class="swiper-container swiper-utilaje-container">
      <div class="swiper-wrapper">
        @foreach($car as $utilaj)
        <div class="swiper-slide">

          <a  class = "utilaj-element-poza inline" style = "background-image:url('{{ route('thumb', ['width:600', $utilaj['image']]) }}')" href = "#utilaj-id-{{$utilaj['id']}}">
              <div class = "utilaj-overlay">
                  <div class = "utilaj-text">
                      <div class = "titlu-utilaj">{{$utilaj['title']}}</div>
                      <div class = "subtitlu-utilaj">{{$utilaj['descriere_scurta']}}</div>
                  </div>
              </div>
            </a>
        </div>
        @endforeach
      </div>
      {{-- <div class="swiper-pagination utilaje-pagination"></div> --}}
    </div>
  </div>


  {{-- <div class="utilaje">
      <div class="swiper-container swiper-utilaje-container">
        <div class="swiper-wrapper">
          @foreach($car as $utilaj)
          <div class="swiper-slide utilaj-swiper-slide">
            <div class="job-element utilaj-element">
              <div class="utilaj-container">
                <div class="utilaj-poza">
                  <img style="width:100%;" src="{{ route('thumb', ['width:600', $utilaj['image']]) }}">
                </div>
                <div class="utilaj-text">
                  <div class="utilaj-title service-title ">{{$utilaj['title']}}</div>
                  <div class="utilaj-descriere-scurta service-text service-text-career">{{$utilaj['descriere_scurta']}}
                  </div>
                </div>
                <button class="btnR btnR2 btnR3 btn-5 btn-5b icon-cart-bun bnt-orange detaliu-utilaj" href="#utilaj-id-{{$utilaj['id']}}">
                  <span>{{ __('site.about') }}</span>
                </button>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="swiper-pagination utilaje-pagination"></div>
      </div>
    </div> --}}

  <div style="display:none">
    @foreach($car as $utilaj)
    <div class="utilaj-content" id="utilaj-id-{{$utilaj['id']}}">
      @if(Empty($utilaj['descriere']))
      {{$utilaj['descriere_scurta']}}
      @else
      {!!$utilaj['descriere']!!}
      @endif
    </div>
    @endforeach
  </div>




</div>
@endsection
@push('scripts')
<script>
  $(document).ready(function(){

    $(".detaliu-utilaj").fancybox({
        touch: false,
        hideOnContentClick: true,
        helpers:  {
            overlay : {
                locked : true
            }
        }   
      });
  });
  </script>
  @endpush