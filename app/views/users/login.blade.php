@extends('master')

@section('content')
  <div class="row">
    <div class="span4 offset4">
      <div class="well">
        @if($errors->any())
        <div class="alert alert-error">
          <a href="#" class="close" data-dismiss="alert">&times;</a>
          {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </div>
        @endif
        
        <legend>Please Sing In</legend>
        {{ Form::open(array('url' => 'login')) }}
        <div class="input-group input-group-lg">
          {{ Form::label('email', 'E-Mail Address:') }}
          {{ Form::text('email') }}
        </div>
        <div class="input-group input-group-lg">
          {{ Form::label('password', 'Password') }}
          {{ Form::password('password') }}
        </div>
        <div class="input-group input-group-lg">
          {{ Form::submit('Sing In!') }}
        </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>

@endsection