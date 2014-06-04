@extends('layout')
@section('main')
<!-- Main component for a primary marketing message or call to action -->
<div class="jumbotron alert alert-danger">
    <h1>{{Doc::h1()}}</h1>
    <p>{{Doc::content()}}</p><br>
</div>
@stop