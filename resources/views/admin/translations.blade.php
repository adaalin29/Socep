@extends('voyager::master')

@section('page_title', 'Translations')

@section('content')
    <style>
        .full-page-content {
            
        }
        .full-page-iframe {
            border: none;
            width: 100%;
            height: calc(100vh - 100px);
        }
    </style>
    <div class="full-page-content">
        <iframe class="full-page-iframe" src="{{ url(config('translation.ui_url')) }}"></iframe>
    </div>
@stop
