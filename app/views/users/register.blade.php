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
        <legend>Registration</legend>
        {{ Form::open(array('url' => 'register')) }}
        <div class="input-group input-group-lg">
          {{ Form::label('email', 'E-Mail Address:') }}
          {{ Form::text('email', '', array('placeholder' => 'Email')) }}
        </div>
        <div class="input-group input-group-lg">
          {{ Form::label('name', 'Name:') }}
          {{ Form::text('name', '', array('placeholder' => 'Name')) }}
        </div>
        <div class="input-group input-group-lg">
          {{ Form::label('password', 'Password') }}
          {{ Form::password('password') }}
        </div>
        <div class="input-group input-group-lg">
          {{ Form::label('password_confirmation', 'Password confirm') }}
          {{ Form::password('password_confirmation') }}
        </div>
        <div class="input-group input-group-lg">
          {{ Form::submit('Submit') }}
        </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>

@endsection