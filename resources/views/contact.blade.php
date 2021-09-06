@extends('parts.template') @section('content')
<div class="content servicii-content">
  
    <div class="firstScreen parallax header-mic" style = "background-attachment: inherit; background-image:url(
{{ route('thumb', ['width:1920', setting('contact.contact-banner')]) }})">


    <div class="overFirst">
      <div class="title">
        <div class="titleInside">Contact</div>
      </div>






    </div>
<!--     <div class="next bounce  sageata">
      <img src="res/sagetica.svg" />
    </div> -->
  </div>



  <div class="services">
    <div class="container-boxes">
      <div class="container-box right-box">
        <div class="title-page container-title">{{settings('contact.contact-title')}}</div>
        <div class="service-text initial-align-text container-text ">{{settings('contact.contact-descriere')}}</div>
        <div class="contact">
          <div class="contact-address positioned">{{settings('contact.contact-locatie-titlu')}}</div>
          <div class="contact-forms contact-forms-align">
            <div class="contact-form-left"><img class="contact-form-big" src="res/phone.svg"></div>
            <div class="contact-form-right contact-form-right-align contact-address desktop-hidden-phone gold-text">{{ __('site.call') }}</div>
            <div class="contact-form-right contact-form-right-align contact-address">{{settings('contact.contact-telefon1')}}</div>

          <div class="contact-form-right contact-form-right-align contact-address desktop-hidden-phone">{{settings('contact.contact-telefon2')}}</div>
          </div>
          <div class="contact-forms contact-forms-align mobile-hidden-phone">
            <div class="contact-form-left"><img class="contact-form-big" src="res/phone.svg"></div>
            <div class="contact-form-right contact-form-right-align contact-address">{{settings('contact.contact-telefon2')}}</div>
          </div>
          <div class="contact-forms contact-forms-align">
            <div class="contact-form-left"><img class="contact-form-big" src="res/email.svg"></div>
            <div class="contact-form-right contact-form-right-align contact-address desktop-hidden-phone gold-text">{{ __('site.scrie') }}</div>
            <div class="contact-form-right contact-form-right-align-email contact-address"><a href="mailto:{{settings('contact.contact-email')}}">{{settings('contact.contact-email')}}</a></div>
          </div>
        </div>

      </div>
      <div class="container-box left-box mobile-hidden-phone" style="margin-top:50px">

        <div id="map-canvas" onclick="mapsSelector()" style="height:450px"></div>
      </div>

    </div>


    {{-- <div class="title-page container-title">{{settings('contact.contact-contactus')}}</div>
    <div class="service-text initial-align-text container-text contact-us-text ">{!! settings('contact.contact-contactus-descriere') !!}</div> --}}
    
    <div class="service-boxes">
      <div class="service-box contact-box-width">

        <div class="service-title contact-box-title" style = "margin-top: 0%">{{settings('contact.contact-commercial-title')}}</div>
        <div class="align-forms">
          <div class="contact-forms">
            <div class="contact-form-left"><img src="res/phone.png"></div>
            <div class="contact-form-right smaller-width contact-address">{{settings('contact.contact-commercial-telefon')}}</div>
          </div>
          <div class="contact-forms">
            <div class="contact-form-left"><img src="res/email.png"></div>
            <div class="contact-form-right smaller-width contact-address"><a href="mailto:{{settings('contact.contact-commercial-email')}}">{{settings('contact.contact-commercial-email')}}</a></div>
          </div>
        </div>

      </div>

      <div class="service-box contact-box-width">

        <div class="service-title contact-box-title" style = "margin-top: 0%">{{settings('contact.contact-forwarding')}}</div>
        <div class="align-forms">
          <div class="contact-forms">
            <div class="contact-form-left"><img src="res/phone.png"></div>
            <div class="contact-form-right smaller-width contact-address">{{settings('contact.commercial-forwarding-telefon')}}</div>
          </div>
          <div class="contact-forms">
            <div class="contact-form-left"><img src="res/email.png"></div>
            <div class="contact-form-right smaller-width contact-address"><a href="mailto:{{settings('contact.contact-forwarding-email')}}">{{settings('contact.contact-forwarding-email')}}</a></div>
          </div>
        </div>

      </div>
      <div class="service-box contact-box-width">

        <div class="service-title contact-box-title" style = "margin-top: 0%">{{settings('contact.contact-actionariat')}}</div>
        <div class="align-forms">
          <div class="contact-forms">
            <div class="contact-form-left"><img src="res/phone.png"></div>
            <div class="contact-form-right smaller-width contact-address">{{settings('contact.commercial-actionariat-telefon')}}</div>
          </div>
          <div class="contact-forms">
            <div class="contact-form-left"><img src="res/email.png"></div>
            <div class="contact-form-right smaller-width contact-address"><a href="mailto:{{settings('contact.actionariat-email1')}}">{{settings('contact.actionariat-email1')}}</a></div>
          </div>
          <div class="contact-forms">
            <div class="contact-form-left"><img src="res/email.png"></div>
            <div class="contact-form-right smaller-width contact-address"><a href="mailto:{{settings('contact.actionariat-email2')}}">{{settings('contact.actionariat-email2')}}</a></div>
          </div>
        </div>

      </div>
    </div>


  </div>

</div>

@endsection @push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCmM1P-D5Zka0kPEbZSrsR90gpBlDxgm18"></script>
<script>
  function initialize() {

    // 				var geocoder;

    //         var address = "{{setting('site.adresa')}}";

    // # Get marker data

    var defaultMarkerLat = "{{setting('contact.contact-latitudine')}}";

    var defaultMarkerLng = "{{setting('contact.contact-longitudine')}}";

    var markerImg = '../res/marker.png';

    var markerTitle = "{{setting('site.title')}}";



    // # Show map

    var myLatlng = new google.maps.LatLng(defaultMarkerLat, defaultMarkerLng);

    var mapOptions = {

      zoom: 15,

      center: myLatlng,

      scrollwheel: false,

      mapTypeId: google.maps.MapTypeId.ROADMAP,

      disableDefaultUI: true

    }

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    // # Show marker

    var marker = new google.maps.Marker({



      position: myLatlng,

      map: map,

      // 					icon:{markerImg} ,
      icon: {
        url: "res/marker.png",
        scaledSize: new google.maps.Size(48, 48)
      },

      title: markerTitle
    });

  }


  google.maps.event.addDomListener(window, 'load', initialize);
  
  $(document).ready(function(){
    if (screen.width<=1024){
      $('#map-canvas').appendTo('.content.servicii-content') 
    } 
  });
  
  function mapsSelector() {
  if /* if we're on iOS, open in Apple Maps */
    ((navigator.platform.indexOf("iPhone") != -1) || 
     (navigator.platform.indexOf("iPad") != -1) || 
     (navigator.platform.indexOf("iPod") != -1))
     window.open("http://maps.apple.com/?ll={{setting('contact.contact-latitudine')}},{{setting('contact.contact-longitudine')}}");
//      window.open("https://maps.google.com/maps?daddr={{setting('contact.contact-latitudine')}},{{setting('contact.contact-longitudine')}}&amp;ll=");
else /* else use Google */
    window.open("https://maps.google.com/maps?daddr={{setting('contact.contact-latitudine')}},{{setting('contact.contact-longitudine')}}&amp;ll=");
}
  
  


</script>
@endpush