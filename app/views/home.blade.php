@extends('layout')
@section('main')
<!-- Main component for a primary marketing message or call to action -->
<div class="jumbotron al-c">
    <h1>{{$doc_h1}}</h1>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
    <p>
        <a class="btn btn-lg btn-primary" href="http://thorcms.com" target="_blank" role="button">View project site &raquo;</a>
        <a class="btn btn-lg btn-success" href="{{Backend::url()}}" role="button"><i class="fa fa-dashboard"></i> Administration panel</a>
    </p>
</div>
@stop