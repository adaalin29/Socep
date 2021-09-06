@extends('parts.template') @section('content')

<div class="firstScreen parallax header-mic"
  style=" background-attachment: inherit; background-image:url({{ route('thumb', ['width:1920', setting('detaliu.consiliu-banner')]) }})">

  <div class="color-overlay" style="background: #00000033;">
    <div class="overFirst">
      <div class="title">
        <div class="titleInside"> {{settings('consiliu.consiliu-titlu')}}</div>
      </div>

    </div>




  </div>
</div>

<div class="services">
  <div class="service-text">{!!settings('consiliu.consiliu-text')!!}</div>
<!--   <div class="container-boxes">
    @foreach($employees as $employee)
    <div class="consiliu-box">
      <div class="consiliu-picture">
        <img class="width" src="{{Voyager::image($employee['image'])}}" </div> <div class="continut-consiliu">
        <div class="title-page consiliu-title">
          {{$employee['nume']}}
        </div>
      </div>

      <div class="descarca-cv">
        <div class="descarca-image">
          <img style="width:38px;height:38px" src="../res/pdfMare.png">
        </div>
        <div class="descarca-link link-left descarca-corect">
          <a class="consiliu-font" href="{{$employee['url']}}">{{ __('site.download-cv') }}</a>
        </div>
      </div>


    </div>

  </div>
  @endforeach -->

</div>


@endsection