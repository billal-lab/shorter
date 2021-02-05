@extends('layouts.base')
@section('content')

<form  class = "container" action="" method="POST">
    <h3>URL Shortener</h3>
    <div class="input-group mb-3">
        {{csrf_field()}}
        <input type="text" class="form-control" name="url" placeholder="Entrer votre url" value="{{old('url')}}">
        <div class="input-group-append">
          <button class="btn btn-success" type="submit">Go</button>
        </div>
    </div>
    {!!
        $errors->first('url','
        <div class="alert alert-warning">
        <strong>Warning ! </strong>:message
        </div>')
    !!}
</form>
@endsection
    
