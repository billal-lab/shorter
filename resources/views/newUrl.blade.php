@extends('layouts.base')
@section('content')
    <div class="container">
        <h3>
            You find your Url bellow
        </h3>
        <p>
            <a href="{{config('app.url').':8000'}}/{{$alias}}">{{config('app.url')}}/{{$alias}}</a>
        </p>
    </div>
    
@endsection


