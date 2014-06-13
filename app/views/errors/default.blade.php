@extends('layout')
@section('main')
<!-- Main component for a primary marketing message or call to action -->
<div class="jumbotron error-page">
        <h1 class="page-header al-c"><i class="block fa fa-3x fa-warning"></i> Unexpected Error</h1>
        <p class="lead al-c">The application cannot continue.</p>
        @if(Config::get('app.debug'))
        <div class="container well al-c">
        {{$exception->getMessage()}} in 
        <b>{{$exception->getFile()}}:{{$exception->getLine()}}</b>
        </div>
        @endif
</div>
@stop