@extends('parts.template') @section('content')
<div class="firstScreen parallax header-mic" style = " background-attachment: inherit; background-image:url(
  {{ route('thumb', ['width:1920', setting('general-terminal.general-banner')]) }})">


            <div class="overFirst">
                <div class="title">
                <div class="titleInside">{{settings('general-terminal.container-title')}}</div>
                </div>






            </div>
            
        </div>
<div class = "services services-no-margin">
  <div class = "container-container-boxes">
    <div class = "container-row">
       <div class="container-box left-box special-container-left">
          <div class = "contained-photo">
              <img class="animation cargo-general-width width" src="{{ route('thumb', ['width:800', setting('general-terminal.big-banner')]) }}">
          </div>
      </div>
      <div class="container-box right-box inside-services service_page-container">
        <div class = "service_page-title title-page title-align-left responsive-align-left">{{settings('general-terminal.container-title')}}</div>
        <div class="service_page-text service-text service-page-text-width-modified">{!!settings('general-terminal.big-banner-descriere')!!}</div>
      </div>
    </div>
    <div class ="container-row">
      <div class = "contaier-section inside-services">
        <div class = "service_page-title title-page title-align-left responsive-align-left">{{settings('general-terminal.facillities-stanga-titlu')}}</div>
        <div class="service_page-text service-text service-page-text-width">{!!settings('general-terminal.facillities-stanga-descriere')!!}</div>
      </div>
      <div class = "contaier-section">
        <div class = "contained-photo">
                <img class="animation cargo-general-width width" src="{{ route('thumb', ['width:800', setting('general-terminal.general-poza-centru')]) }}">
            </div>
      </div>
      <div class = "contaier-section inside-services">
        <div class = "service_page-title title-page title-align-left responsive-align-left">{{settings('general-terminal.characteristics-titlu')}}</div>
        <div class="service_page-text service-text service-page-text-width">{!!settings('general-terminal.caracteristics-descriere')!!}</div>
      </div>
    </div>
    
    <div class = "container-row">
      <div class = "contaier-section">
        <div class = "contained-photo">
                <img class="animation cargo-general-width width" src="{{ route('thumb', ['width:800', setting('general-terminal.general-imagine-stanga')]) }}">
        </div>
      </div>
      <div class = "contaier-section inside-services">
        <div class = "service_page-title title-page title-align-left responsive-align-left">{{settings('general-terminal.others-titlu')}}</div>
        <div class="service_page-text service-text service-page-text-width">{!!settings('general-terminal.others-descriere')!!}</div>
      </div>
      <div class = "contaier-section">
        <div class = "contained-photo">
                <img class="animation cargo-general-width width" src="{{ route('thumb', ['width:800', setting('general-terminal.general-imagine-dreapta')]) }}">
        </div>
      </div>
    </div>
    
    
  </div>
</div>
@endsection