@extends('parts.template') @section('content')

<div class="firstScreen parallax header-mic" style="background-attachment: inherit; background-image:url(
{{Voyager::image(setting('news.news-banner'))}})">




    <div class="color-overlay" style="background: #00000033;">
        <div class="overFirst">
            <div class="title">
            <div class="titleInside">{{settings('news.news-title')}}</div>
            </div>


        </div>



    </div>
    <!--     <div class="next bounce  sageata">
      <img src="res/sagetica.svg" />
    </div> -->
</div>
<!--   @foreach($news as $key => $newsElement)
  <div class="elemente-limie-content @if($key%2 != 0) elemente-inversate @endif">
                 <div class="container-box left-box">
                      <img class = " width" src="{{Voyager::image($newsElement['Image'])}}">
                  </div>
                  <div class="container-box right-box inside">
                      <div class="title-page container-title">{{$newsElement['TItle']}}</div>
                      <div class="service-text initial-align-text container-text " style = "padding-bottom:0;">{!!$newsElement['Descriere']!!}</div>
                      
                  </div>
                </div>
  @endforeach -->


<div class="services">
    <div class="news-container">

        @foreach($news->reverse() as $key => $newsElement)
        <div class="news-element">
            <div class="news-section-top">
                <div class="news-item">
                        <div class="news-title desktop-hidden" style="line-height: 40px;">{{$newsElement['TItle']}}</div>
                        <div class="news-date desktop-hidden">{{$newsElement['data_creare']}}</div>
                    <div class="news-picture desktop-hidden">
                        <img class="width" src="{{ route('thumb', ['width:800', $newsElement['Image']]) }}">
                    </div>
                    <!--                     <div class="news-button">
                        <div class="link-right"><img src="res/link-arrow.svg"></div>
                    </div> -->
                    <div class="news-text">
                        <div class="service-text news-descriere aranjare-elemente" style="padding-bottom:0;">
                            <div class="news-picture mobile-hidden news-picture-news" style="padding-right:20px;">
                                <img class="width" src="{{ route('thumb', ['width:800', $newsElement['Image']]) }}">
                            </div>
                            <div class="descriere-scurta" style="display:none;">
                                <div class="news-date">{{$newsElement['data_creare']}}</div>
                                <div class="news-center">
                                    <div class="news-title" style="line-height: 40px;">{{$newsElement['TItle']}}</div>

                                </div>
                                {!! ($newsElement['Descriere']) !!}
                            </div>
                            <div class="descriere-lunga " style="display:block">
                                <div class="news-date mobile-hidden">{{$newsElement['data_creare']}}</div>
                                <div class="news-center">
                                    <div class="news-title mobile-hidden" style="line-height: 40px;">{{$newsElement['TItle']}}</div>
                                </div>
                                {!!$newsElement['Descriere']!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@push("scripts")
<script>
    $('.news-button').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('btn-active');
        $('.news-content').slideToggle('active');
        var tip_parent = $(this).parent().parent();
        if (screen.width <= 1024) {
            var tip_parent = $(this).parent().parent().parent();
        }
        if (tip_parent.find($('.descriere-scurta')).hasClass('afisat')) {
            tip_parent.find($('.descriere-scurta')).hide();
            tip_parent.find($('.descriere-lunga')).fadeIn();
        } else {
            tip_parent.find($('.descriere-scurta')).fadeIn();
            tip_parent.find($('.descriere-lunga')).hide();
        }
        tip_parent.find($('.descriere-scurta')).toggleClass('afisat');
    });

    //   $('.mobile-button').click(function(e){
    //    $(this).toggleClass('btn-active');
    //   });
</script>


@endpush