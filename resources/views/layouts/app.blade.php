<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <title>{{ config('app.name', 'Aplicatie Laravel CRUD ') }}</title>
 <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
 <div id="app">
 <nav class="navbar navbar-default navbar-static-top">
 <div class="container">
 <div class="navbar-header">
 <!-- Collapsed Hamburger -->
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" datatarget="#app-navbar-collapse">
 <span class="sr-only">Toggle Navigation</span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>
 <!-- Branding Image -->
 <a class="navbar-brand" href="{{ url('/') }}">
 {{ config('app.name', 'Aplicatie Laravel CRUD') }}
 </a>
 </div>
 <div class="collapse navbar-collapse" id="app-navbar-collapse">
 <!-- Left Side Of Navbar -->
 <ul class="nav navbar-nav">
 &nbsp;
 </ul>
 <!-- Right Side Of Navbar -->
 <ul class="nav navbar-nav navbar-right">
 <!-- Authentication Links -->
 @if (Auth::guest())
 <li><a href="{{ route('login') }}">Login</a></li>
 <li><a href="{{ route('register') }}">Register</a></li>
 @else
 <li class="dropdown">
 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ariaexpanded="false">
 {{ Auth::user()->name }} <span class="caret"></span>
 </a>
 <ul class="dropdown-menu" role="menu">
 <li>
 <a href="{{ route('logout') }}"
 onclick="event.preventDefault();
 document.getElementById('logout-form').submit();">
 Logout
 </a>
 <form id="logout-form" action="{{ route('logout') }}" method="POST"
style="display: none;">
 {{ csrf_field() }}
 </form>
 </li>
 </ul>
 </li>
 @endif
 </ul>
 </div>
 </div>
 </nav>
 @yield('content')
 </div>
 <!-- Scripts -->

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>