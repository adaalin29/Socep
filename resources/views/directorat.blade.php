@extends('parts.template') @section('content')

<div class="content servicii-content" style="background-image:url("") >
    
        <div class=" directorat-banner firstScreen parallax directorat-poza header-mic " style = " background-position-y: 33%;
  background-attachment:
  inherit;background-image:url({{ route('thumb', ['width:1920', setting('detaliu.directorat-banner')]) }})"></div>

<div class="services">

  <div class="container-boxes">
    @foreach($directory as $key => $director)
    <div class="elemente-limie-content @if($key%2 != 0) elemente-inversate @endif">
      <div class="container-box left-box">
        <img class=" width" src="{{ route('thumb', ['width:1200', $director['poza']]) }}">
      </div>
      <div class="container-box right-box inside">
        <div class="title-page container-title directories-title">{{$director['nume']}}</div>
        <div class="title-page container-title directories-subtitle">{{$director['titlu']}}</div>
        <div class="service-text initial-align-text container-text ">{!!$director['descriere']!!}</div>
        <a style="text-decoration:none;" target="_blank" href="{{$director['url']}}">
          <div class="link" style="margin-bottom:20px;">
            <div class="service-text link-left" style="width: 115px; font-size: 18px;">{{ __('site.download-cv') }}
            </div>
            <div class="link-right"><img style="width:80%;" src="res/link-arrow.svg"></div>
          </div>
        </a>
      </div>
    </div>
    @endforeach
  </div>
</div>


</div>



@endsection