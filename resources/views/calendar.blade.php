@extends('parts.template') @section('content')

<div class="firstScreen parallax">


  <div class="overFirst">
    <div class="title">
      <div class="titleInside"> Calendar Financiar</div>
    </div>






  </div>
  <div class="next sageata bounce">
    <img src="res/sagetica.svg" />
  </div>
</div>

<div class = "services">
  <div class = "categorii">
    <div class="categorie-element">Semestriale</div>
    <div class="categorie-element">Trimestriale</div>
    <div class="categorie-element">Anuale Preliminare</div>
    <div class="categorie-element">Anuale Finale</div>
  </div>
 
  <div class="arhiva">
     <!-- Swiper -->
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><div class = "arhiva-element">2019</div></div>
      <div class="swiper-slide"><div class = "arhiva-element">2019</div></div>
      <div class="swiper-slide"><div class = "arhiva-element">2019</div></div>
      <div class="swiper-slide"><div class = "arhiva-element">2019</div></div>
      <div class="swiper-slide"><div class = "arhiva-element">2019</div></div>
      
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
    
    
    
    
    
  </div>
   <div class="capete-lista">
   <div class="capat-element">Nume</div>
   <div class="capat-element">Nume fisier</div>
  </div>
  <div class="dunga width-mare"></div>
  
  <div class = "lista-fisiere">
    <div class = "fisier">
      <div class = "nume">Financial Calendar for 2019</div>
      <div class = "fisier-centru">
        <div class = "logo-fisier"><img src = "res/pdf-imagine.png"></div>
        <div class="nume-fisier">Financial Calendar for 2019</div>
      </div>
      <a class = "descarca-link" href = ""><div class = "descarca-fisier">DOWNLOAD</div></a>
      
    </div>
  </div>

</div>


@endsection
@push('scripts')
<script>
  
 $('.arhiva-element').click(function(){
  $('.arhiva-element').css('background-color','#D8D8D8');
  $(this).css('background-color','#3496FF');
 })
  
</script>
@endpush