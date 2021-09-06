@extends('parts.template') @section('content')

<div class="firstScreen parallax header-mic" style = "background-attachment: inherit;background-image:url({{ route('thumb', ['width:1920', setting('detaliu.rapoarte-banner')]) }})">

  <div class = "color-overlay" style="background: #00000033;">
  <div class="overFirst">
    <div class="title">
      <div class="titleInside">{{ __('site.calendar') }}</div>
    </div>
  </div>





  </div>
</div>



<div class = "services">
  
   <div class="swiper-container">
    <div class="swiper-wrapper">
      @foreach($aniSortati as $anSortat)
       <div class="swiper-slide"><div  class = "arhiva-element" aga_curent_fisier='' an_curent="{{$anSortat['ani']}}">{{$anSortat['ani']}}</div></div>
      @endforeach
    </div>
  </div>
  
 
  <div class="arhiva">
     <!-- Swiper -->
  <!-- Swiper -->
 
    
    
    
    
    
  </div>
   <div class="capete-lista">
   <div class="capat-element mobile-hidden">{{ __('site.nume') }}</div>
   <div class="capat-element">{{ __('site.nume-fisier') }}</div>
  </div>
  <div class="dunga width-mare"></div>
  
  <div class = "lista-fisiere">
    @if($gatherings->count() >0)
       @foreach($gatherings as $gathering)
          <div class = "fisier fisier-an-{{$gathering['ani']}} " an_curent_fisier="{{$gathering['ani']}}">
                <div class = "nume mobile-hidden">{{$gathering['name']}}</div>
                <div class = "fisier-centru">
                  <div class = "logo-fisier"><img src = "res/pdf-imagine.png"></div>
                  <div class="nume-fisier">{{urldecode(pathinfo(parse_url($gathering['url'],PHP_URL_PATH),PATHINFO_FILENAME))}}</div>
                </div>
                <a class = "descarca-link" target="_blank" href = "{{$gathering['url']}}"><div class = "descarca-fisier">{{ __('site.download') }}</div></a>
          </div>
         @endforeach
    @else
      <div class = "No Elements service-text" style = "text-align:left">
        Nu exista fisiere
      </div>
    @endif
  </div>
 

</div>


@endsection
@push('scripts')
<script>
  
 $('.arhiva-element').click(function(){
  $('.arhiva-element').css('background-color','#D8D8D8');
  $(this).css('background-color','#3496FF');
   window.an_curent = $(this).attr('an_curent');
   $('.fisier').each(function(){
     if(typeof(window.an_curent) != 'undefined'){
       if($(this).attr('an_curent_fisier') == window.an_curent){
         $(this).slideDown();
       } else{
         $(this).slideUp();
       }
     } else{
       if($(this).attr('an_curent_fisier') == window.an_curent){
         $(this).slideDown();
       } else{
         $(this).slideUp();
       }
     }
      
   });
 });
  
  $('.categorie-element').click(function(){
  $('.categorie-element').css('border-bottom','0px solid #3496FF');
  $(this).css('border-bottom','3px solid #3496FF');

   $('.fisier').each(function(){
     if(typeof(window.an_curent) != 'undefined'){
       if($(this).attr('an_curent_fisier') == window.an_curent){
         $(this).slideDown();
       } else{
         $(this).slideUp();
       }
     } 
       
   });
 });
  
</script>
@endpush