@extends('parts.template') @section('content')
<div class="content servicii-content">
    <div class="firstScreen parallax header-mic" style="background-attachment: inherit; background-image:url(
{{ route('thumb', ['width:1920', setting('servicii.servicii-background')]) }})">





        <div class="color-overlay" style="background:#1a1a345c;">
            <div class="overFirst">
                <div class="title">
                    <div class="titleInside">{{settings('servicii.servicii-page-title')}}</div>
                </div>
            </div>



        </div>
        <!--             <div class="next sageata bounce">
                <img src="res/sagetica.svg" />
            </div> -->
    </div>




    <div class="container-boxes">
        <div class="container-box left-box mobile-hidden-phone ">
            <img class="animation width"
                src="{{ route('thumb', ['width:800', setting('servicii.servicii-page-container-image')]) }}">
        </div>
        <div class="container-box right-box inside container-modified" style="">
            <div class="title-page container-title title-fixed">{{settings('servicii.servicii-page-container-title')}}</div>
            <div class="service-text initial-align-text container-text ">
                {!!settings('servicii.servicii-page-container-descriere')!!}</div>

            <a style="text-decoration:none;" href="/container">
                <div class="link">
                    <div class="service-text link-left">{{ __('site.viewMore2') }}</div>
                    <div class="link-right"><img style="width:80%;" src="res/link-arrow.svg"></div>
                </div>
            </a>

        </div>
        <div class=" desktop-hidden-phone container-box left-box">
            <img class=" width"
            src="{{ route('thumb', ['width:800', setting('servicii.servicii-page-container-image')]) }}">
        </div>

        <div class="container-box right-box inside container-modified">
            <div class="title-page container-title title-fixed">{{settings('servicii.servicii-page-general-title')}}</div>
            <div class="service-text initial-align-text container-text ">
                {!!settings('servicii.servicii-page-descriere')!!}</div>
            <a style="text-decoration:none;" href="/general">
                <div class="link">
                    <div class="service-text link-left">{{ __('site.viewMore2') }}</div>
                    <div class="link-right"><img style="width:80%;" src="res/link-arrow.svg"></div>
                </div>
            </a>

        </div>
        <div class="container-box left-box mobile-hidden-phone ">
            <img class="animation width" src="{{ route('thumb', ['width:800', setting('servicii.servicii-page-general-image')]) }}">
        </div>
        <div class="container-box left-box desktop-hidden-phone ">
            <img class=" width" src="{{ route('thumb', ['width:800', setting('servicii.servicii-page-general-image')]) }}">
        </div>




    </div>





</div>

@endsection