@extends('parts.template') @section('content')
<div class="content servicii-content">
  <div class="firstScreen parallax header-mic" style="background-attachment: inherit; background-image:url(
{{ route('thumb', ['width:1920', setting('career.career-banner')]) }})">
    <div class="color-overlay" style="background: #00000033;">
      <div class="overFirst">
        

      </div>








    </div>
    <!--     <div class="next bounce  sageata">
      <img src="res/sagetica.svg" />
    </div> -->
  </div>


  <div class="services">
    <div class="container-boxes">
      <div class="container-box left-box mobile-hidden-phone">
        <img class="animation width" src="{{ route('thumb', ['width:800', $detaliuJob->image]) }}">
      </div>
      <div class="container-box right-box inside">
      <div class="title-page job-title container-title title-fixed">{{$detaliuJob->titlu}}</div>
        <div class="service-text initial-align-text container-text ">{!!$detaliuJob->descriereJob!!}</div>

      </div>
      
      <div class="container-box left-box desktop-hidden-phone">
        <img class=" width" src="{{ route('thumb', ['width:800', $detaliuJob->image]) }}">
      </div>
      
      <div class = 'forms'>
      <form action='{{ action("CareerController@submit_file") }}' method='post' class="forms" id="form-cv">
        {{ csrf_field() }}
        <input type="hidden" id="form-cv-jobid" name="jobid" value="{{$detaliuJob->id}}">
          <div class="div-form-contact-job">
            <div class="form-text">{{ __('site.email') }}</div>
            <div class="">
              <input type="text" id="femail" name="email">
            </div>
          </div>
        <div class="div-form-contact-job">
        <div class="form-text">{{ __('site.upload') }}</div>
            <div class=" upload-button">
              <div class="upload-btn-wrapper">
                <div class="btn-upload">
                  <p id="file-choosen">{{ __('site.file') }}</p>
                  <div class="choose-file">
                  
                </div>
                  <img class="img-upload" src="res/upload_arrow.png">
                </div>
                  <input type="file" name="cv" id="myFileSelected" placeholder="Incarca CV" accept="application/pdf" style="display: none !important; width: 0px !important; height: 0px !important">
              </div>
          </div>
        </div>

        <div class="div-form-contact-job button-form">
          <button class="button btn-send-message" type="submit">{{ __('site.submit') }}</button>
        </div>
      </form>


        
      </div>
 
      
      
      

      <div class="title-page carreer-title-page extra-width">{{settings('career.career-joining-title')}}</div>
      <div class="square-lists">
        <div class="square-list">
          <div class="square-list-left" style="padding-right:26px"><img src="res/prima.png"></div>
          <div class="square-list-right">{{settings('career.career-descriere1')}}</div>
        </div>
        <div class="square-list">
          <div class="square-list-left" style="padding-right:20px"><img src="res/adoua.png"></div>
          <div class="square-list-right">{{settings('career.career-descriere2') }}

          </div>
        </div>
        <div class="square-list">
          <div class="square-list-left" style="padding-right:22px"><img src="res/atreia.png"></div>
          <div class="square-list-right">{{settings('career.career-descriere3')}}</div>
        </div>
        <div class="square-list">
          <div class="square-list-left" style="padding-right:30px"><img src="res/apatra.png"></div>
          <div class="square-list-right">{{settings('career.career-descriere4')}}</div>
        </div>

      </div>

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
      $formContact.on('submit', function (event) {
        var formData = new FormData(this);
        event.preventDefault();
        $.ajax({
          method: 'POST',
          url: '{{ action("CareerController@submit_file") }}',
          // 										data: $('#form-cariere').serializeArray(),
          data: formData,
          processData: false,
          contentType: false,
          context: this,
          async: true,
          cache: false,
          dataType: 'json'
        }).done(function (res) {
          console.log(res.success);
          if (res.success == true) {
            $.notify(res.msg, "success");

            setTimeout(function () {
              window.location.reload();
            }, 4000);
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