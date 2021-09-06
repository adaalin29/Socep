<!DOCTYPE html>
<html>

<head>
  <base href="{{ URL::to('/') }}" />
  <title>{{settings('site.title')}}</title>
  <meta charset="utf-8" />
  <meta name="description" content="@yield('description')" />
  <meta name="keywords" content="@yield('keywords')" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- responsive use only -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
            integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="css/stylesheet.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
<!--   <link rel="stylesheet" href="css/style.sass"> -->
    <script src="js/cookies.js" type="text/javascript"></script>
  
<!--   AOS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  

  <!-- responsive use only -->
</head>

<body class = "@if( Request::path() == 'contact') grey-body @endif ">
  
  
    @include('parts.header')
    
  <div class = "overlay-cv">
       <div class = "pop-up-cv">
        <div class = "pop-up-text">
           <div class = "pop-up-title">{{__('site.before')}}</div>
           <div class = "pop-up-content">{{__('site.agree')}} <a href = "legal" class = "pop-up-content-link">{{__('site.politica-salvare')}}</a>?</div>
         </div>
       <div class = "butoane-container">
        <div class = "cancel-pop-up">{{__('site.cancel')}}</div>
         <div class = "de-acord">{{__('site.agree')}}</div>
        </div>
      </div>
  </div>

      
      <main class="@if( Request::path() == '/')   @else(Request::path() != '/') content @endif ">
        @yield('content')
        <button class="scroll-up"> <img src="res/sagetica.svg"> </button>
      </main>
        @include('parts.footer')

  <!--[if lt IE 9]> <script src="js/html5shiv.js"></script> <![endif]-->
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/common.js" type="text/javascript"></script>
  <script src="js/notify.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/jquery.fancybox.js"></script>
  
  
  @stack('scripts')
</body>

</html>