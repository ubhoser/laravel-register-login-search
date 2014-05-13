<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    {{ HTML::style('css/bootstrap.css') }}
  </head>
  <body>

<!-- Statische Navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">HelloFresh</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li>{{ HTML::link('register', 'Register') }}</li>
          </ul>
          {{ Form::open(array('url' => 'search', 'class' => 'navbar-form navbar-right')) }}
          {{ Form::text('term', '', array('placeholder' => 'Search', 'class' => 'form-control')) }}
          {{ Form::close() }}

          <ul class="nav navbar-nav navbar-right">
            @if(Auth::user())
              <li>{{ HTML::link('logout', 'Logout') }}</li>
            @else
              <li>{{ HTML::link('login', 'Login') }}</li>
            @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


    <div class="container">
      @yield('content')
    </div> <!-- /container -->


    {{ HTML::script('js/jquery-1.11.1.min.js') }}
    {{ HTML::script('js/bootstrap.js') }}
  </body>
</html>