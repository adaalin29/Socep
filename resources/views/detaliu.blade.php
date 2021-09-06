@extends('parts.template') @section('content')

<div class="firstScreen parallax header-mic"style = "background-image:url({{ route('thumb', ['width:1920', setting('detaliu.detaliu-banner')]) }})">

  <div class = "color-overlay" style="background: #00000033;">
  <div class="overFirst">
    <div class="title">
      <div class="titleInside"> {{$titlu}}</div>
    </div>
  </div>





  </div>
</div>

<div class = "services continut-pagina-de-interpretat">
{!!$continut!!}

</div>


@endsection