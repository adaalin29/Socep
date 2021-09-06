@extends('parts.template') @section('content')

<div class="firstScreen parallax header-mic"
  style="background-attachment: inherit;background-image:url({{ route('thumb', ['width:1920', setting('detaliu.rapoarte-banner')]) }})">

  <div class="color-overlay" style="background: #00000033;">
    <div class="overFirst">
      <div class="title">
        <div class="titleInside">{{settings('certifications.certificari-titlu')}}</div>
      </div>
    </div>





  </div>
</div>



<div class="services">
  <div class="certifications">
    @foreach($certificat as $certificatDocument)
    <div class="certificat">
      <a style = "display:block;" target="_blank" href="{{$certificatDocument['pdf']}}">
        <img class="certificat-image-picture animation" style = "z-index:initial" src="{{Voyager::image($certificatDocument['image'])}}">
      </a>
    </div>
    @endforeach
  </div>



</div>


@endsection