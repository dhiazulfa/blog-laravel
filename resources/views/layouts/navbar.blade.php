<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Neverland') }}</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    
    <style>
        .bg {
      background: white;
    }

    .row-table {
      display: table;
      table-layout: fixed;
      width: 100%;
      height: 100%;
    }

    .col-table {
      display: table-cell;
      float: none;
      height: 100%;
    }

    .col-content {
      height: 100%;
      margin-top: 0;
      margin-bottom: 0;
    }
    </style>

    </head>

<body>
        
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<a class="navbar-brand" href="/">Dhiazulfa </a>

@guest
<div class="container-fluid">
<ul class="navbar-nav ml-auto">
    <a class="btn btn-outline-success mr-3"  href="{{ route('login') }}">{{ __('Login') }} </a>


@if (Route::has('register'))
    
    <a class="btn btn-outline-danger" href="{{ route('register') }}" hidden>{{ __('Register') }} </a>
</ul>
</div>
@endif

<div class="collapse navbar-collapse" id="navbarSupportedContent">
@else
  <ul class="navbar-nav mr-auto">
  
    <li class="nav-item active">
      <a class="nav-link" href="/" target="_blank">Blog <span class="sr-only">(current)</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#">Tentang</a>
    </li>
    
  </ul>

<ul class="navbar-nav ml-auto">

<li class="nav-item dropdown">

    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
       document.getElementById('logout-form').submit();">
       {{ __('Logout') }}
    </a>
    
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

    </div>
</li>
</ul>

</div>

@endguest

</nav>

<main class="py-4">
    @yield('content')
</main>

</body>
</html>