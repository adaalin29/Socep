@extends('parts.template') @section('content')
<div class="content servicii-content">
  <div class="firstScreen parallax header-mic" style = "background-attachment: inherit; background-image:url(
{{ route('thumb', ['width:1920', setting('career.career-banner')]) }})">
<div class=  "color-overlay" style = "background: #00000033;">
    <div class="overFirst">
        <div class="title">
          <div class="titleInside">{{settings('career.career-title')}}</div>
        </div>
  
</div>

    






    </div>
<!--     <div class="next bounce  sageata">
      <img src="res/sagetica.svg" />
    </div> -->
  </div>



  <div class="services">
    <div class="container-boxes">
      <div class="container-box left-box mobile-hidden-phone">
        <img class="animation width" src="{{ route('thumb', ['width:800', setting('career.career-working-image')]) }}">
      </div>
      <div class="container-box right-box inside">
        <div class="title-page container-title">{{settings('career.career-working-title')}}</div>
        <div class="service-text initial-align-text container-text ">{!!settings('career.career-description')!!}</div>
         <a href = "/about" style = "text-decoration: none;"><div class="link link-padding">
         <div class="service-text link-left">{{ __('site.aboutUS') }}</div>
          <div class="link-right"><img src="res/link-arrow.svg"></div>
        </div></a>

      </div>
      <div class="container-box left-box desktop-hidden-phone">
        <img class=" width" src="{{Voyager::image(setting('career.career-working-image'))}}">
      </div>






    </div>
    
    <div class="title-page carreer-title-page">{{settings('career.career-formular-titlu')}}</div>
    <div class="title-subtitle">{{settings('career.career-formular-descriere')}}</div>
    
    <div class = "jobs">
      <div class="swiper-container jobs-swiper">
    <div class="swiper-wrapper">
      @foreach($job as $jobElement)
      <div class="swiper-slide" style = " background-color:#F8F8F8;">
        
        <div class="job-element job-element-fixed">
          <div class = "service-title jobs-title-swiper " style = "text-align:left; min-height:64px;">{{$jobElement['titlu']}}</div>
          <div class="service-text service-text-career" style = "text-align:left;">{{$jobElement['descriere']}}</div>
          {{-- <div class=""> --}}
            <a href = "job/{{$jobElement['slug']}}" class="service-position-right-bottom" style = "left:0;" data-job-id="{{$jobElement['id']}}">
              <button class="btnR btnR2 btnR3 btn-5 btn-5b icon-cart-bun bnt-orange">
                <span>{{ __('site.apply') }}</span>
              </button>
            </a>  
          {{-- </div> --}}
          
        </div>
       
      </div>
       @endforeach
    </div>
  </div>
    </div>
    
<!--     <div class = "jobs-container">
       @foreach($job as $jobElement)
      <div class="job-element job-element-width">
          <div class = "service-title " style = "text-align:left; min-height:64px;">{{$jobElement['titlu']}}</div>
          <div class="service-text service-text-career" style = "text-align:left;">{{$jobElement['descriere']}}</div>
          {{-- <div class=""> --}}
            <a href = "job/{{$jobElement['slug']}}" class="service-position-right-bottom" style = "left:0;" data-job-id="{{$jobElement['id']}}">
              <button class="btnR btnR2 btnR3 btn-5 btn-5b icon-cart-bun bnt-orange">
                <span>{{ __('site.apply') }}</span>
              </button>
            </a>  
          {{-- </div> --}}
          
        </div>
       @endforeach
    </div> -->

    <div class="title-page carreer-title-page extra-width">{{settings('career.career-joining-title')}}</div>
    <div class="square-lists">
      <div class="square-list">
        <div class="square-list-left" style = "padding-right:26px"><img src="res/prima.png"></div>
        <div class="square-list-right">{{settings('career.career-descriere1')}}</div>
      </div>
      <div class="square-list">
        <div class="square-list-left" style = "padding-right:20px"><img src="res/adoua.png"></div>
        <div class="square-list-right">{{settings('career.career-descriere2') }}

        </div>
      </div>
      <div class="square-list">
        <div class="square-list-left" style = "padding-right:22px"><img src="res/atreia.png"></div>
        <div class="square-list-right">{{settings('career.career-descriere3')}}</div>
      </div>
      <div class="square-list">
        <div class="square-list-left" style = "padding-right:30px"><img src="res/apatra.png"></div>
        <div class="square-list-right">{{settings('career.career-descriere4')}}</div>
      </div>

    </div>

    
    
    
    

    
      



    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  </div>
  <div class="photo-cards mobile-hidden-phone">
    <div class="photo-card left-card"><img class="animation contained-photo contained-side contained-left" src="{{ route('thumb', ['width:800', setting('career.career-photo1')]) }}"></div>
    <div class="photo-card middle-card">
      <div class="middle-photos">
        <div class="card-photo top-left contained-left"><img class=" animation contained-photo" src="{{ route('thumb', ['width:800', setting('career.career-photo3')]) }}"></div>
        <div class="card-photo top-right ">
          <div class="photo-align"><img class="animation contained-photo contained-photo-smaller" src="{{ route('thumb', ['width:800', setting('career.career-photo4')]) }}"></div>
        </div>
      </div>
      <div class="middle-photos middle-photos-no-margin">
        <div class="card-photo bottom-left contained-left"><img class="animation contained-photo contained-photo-smaller" src="{{ route('thumb', ['width:800', setting('career.career-photo5')]) }}"></div>
        <div class="card-photo bottom-right"><img class="animation contained-photo" src="{{ route('thumb', ['width:800', setting('career.career-photo6')]) }}"></div>
      </div>
    </div>
    <div class="photo-card right-card"><img class="animation contained-photo contained-side contained-right" src="{{ route('thumb', ['width:800', setting('career.career-photo2')]) }}"></div>
  </div>





</div>
@endsection
@push('scripts')

<script>
    document.addEventListener("DOMContentLoaded", function () {
            $.ajaxSetup({
							
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });
            
            var $formContact = $('#form-cv');
            $formContact.on('submit', function(event) {
                var formData = new FormData(this);
                event.preventDefault();
                $.ajax({
                    method: 'POST',
                    url: '{{ action("CareerController@submit_file") }}',
// 										data: $('#form-cariere').serializeArray(),
										data: formData,
                    processData: false,
			              contentType: false,
                    context: this, async: true, cache: false, dataType: 'json'
                }).done(function(res) {
                  console.log(res.success);
                    if (res.success == true) {
                      $.notify(res.msg, "success");
                      	
											setTimeout(function () { window.location.reload(); }, 4000);
                    } else { 
                    $.notify(res.msg, "error");
//                       $.notify("BOOM!", "error");
											
                    }
                });
                return;
            });
          
        });
</script>
@endpush