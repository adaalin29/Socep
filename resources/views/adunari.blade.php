@extends('parts.template') @section('content')

<div class="firstScreen parallax header-mic" style = "background-attachment: inherit;background-image:url({{ route('thumb', ['width:1920', setting('detaliu.adunari-banner')]) }})">
  <div class="overFirst">
    <div class="title">
      <div class="titleInside">{{ __('site.aga') }}</div>
    </div>
  </div>
</div>
<div class = "services">
   <div class="swiper-container">
    <div class="swiper-wrapper">
      @foreach($aniSortati as $anSortat)
       <div class="swiper-slide"><div  class = "arhiva-element" aga_curent_fisier='' an_curent="{{$anSortat}}">{{$anSortat}}</div></div>
      @endforeach
    </div>
    <!-- Add Pagination -->
  </div>
  <div class = "categorii">
    <div class="swiper-container">
    <div class="swiper-wrapper">
      @foreach($agauri as $aga)
      <div class="swiper-slide"><div class="categorie-element uppercase-text" id_aga="{{$aga['id']}}" an_aga="{{$aga['an']}}">{{$aga['name']}}</div></div>
      @endforeach
    </div>
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
          <div class="fisier fisier-an-{{$gathering->an}} fisier-aga-{{$gathering['id_aga']}}" an_curent_fisier="{{$gathering->an}}" aga_curent_fisier="{{$gathering['id_aga']}}">
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
   var an_curent = $(this).attr('an_curent');
  $(".categorie-element").each(function(){
    if($(this).attr('an_aga') == an_curent){
      $(this).parent().show();
      $('.categorie-element[an_aga='+an_curent+']').first().trigger('click');
    } else{
      $(this).parent().hide();
    }
  });
  $('.arhiva-element').css('background-color','#D8D8D8');
  $(this).css('background-color','#3496FF');
   window.an_curent = $(this).attr('an_curent');
   $('.fisier').each(function(){
     if(typeof(window.an_curent) != 'undefined'){
       if($(this).attr('an_curent_fisier') == window.an_curent && $(this).attr('aga_curent_fisier') == window.aga_curent){
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
   window.aga_curent = $(this).attr('id_aga');
    $(".arhiva-element").attr('aga_curent_fisier',window.aga_curent);
   $('.fisier').each(function(){
     if(typeof(window.an_curent) != 'undefined'){
       if($(this).attr('aga_curent_fisier') == window.aga_curent && $(this).attr('an_curent_fisier') == window.an_curent){
         $(this).slideDown();
       } else{
         $(this).slideUp();
       }
     } else{
       if($(this).attr('aga_curent_fisier') == window.aga_curent){
         $(this).slideDown();
       } else{
         $(this).slideUp();
       }
     }
       
   });
 });
  
</script>
<script>
  $(document).ready(function(){
    if($('div.arhiva-element').length > 0){
      $('.arhiva-element').first().trigger('click');

  }
  })
</script>
@endpush