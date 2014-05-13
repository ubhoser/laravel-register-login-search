@extends('master')

@section('content')
  <div class="row">
    <div class="span6 well">
      Welcome to your profile page {{ ucwords(e(Auth::user()->name)) }}
      <div>
        Your E-Maill Address is {{ ucwords(e(Auth::user()->email)) }}
      </div>
    </div>
  </div>

@endsection