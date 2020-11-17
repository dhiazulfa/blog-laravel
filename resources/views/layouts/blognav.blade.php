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
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet'/>
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    
    <style type="text/css">

    .footer-inverse {
      background-color: black;
      color: white;
    }


/* Social Menu */
.menu-socialnbt{float: center; margin-bottom: 25px;}
.menu-socialnbt ul{float:right;text-align:right;list-style:none; position:relative;display:inline;}
.menu-socialnbt ul li{position:relative;display:inline-block;}
.menu-socialnbt li a:before{padding-left:.5em;padding-right:.5em; display:inline-block;padding:0 5px;vertical-align:top;font-family:'Fontawesome';font-size:25px;color:black;-webkit-font-smoothing:antialiased;content:'\f0c0';}
.menu-socialnbt li a[href*="facebook.com"]::before{content:'\f09a';}
.menu-socialnbt li a[href*="twitter.com"]::before{content:'\f099';}
.menu-socialnbt li a[href*="pinterest.com"]::before{content:'\f0d2';}
.menu-socialnbt li a[href*="github.com"]::before{content:'\f09b';}
.menu-socialnbt li a[href*="tumblr.com"]::before{content:'\f173';}
.menu-socialnbt li a[href*="instagram.com"]::before{content:'\f16d';}
.menu-socialnbt li a[href*="linkedin.com"]::before{content:'\f0e1';}
.menu-socialnbt li a[href*="feeds/posts/default"]::before{content:'\f09e';}
@media screen and (max-width: 600px) {

.menu-socialnbt{float:right; margin-left:55px; margin-top: 15px; margin-bottom:-100px;}
#menu-socialnbt ul{position:relative;display:inline;float:right;}
#menu-socialnbt li a{padding-left:.5em;padding-right:.5em; font-size:15px;}


}


/* NAVIGATION */
nav {
  width: 80%;
  margin: 0 auto;
  background: #fff;
  padding: 30px 0;
  box-shadow: 0px 5px 0px #dedede;
}
nav ul {
  margin-right: 45px;
  list-style: none;
  text-align: center;
}
nav ul li {
  display: inline-block;
}
nav ul li a {
  display: block;
  padding: 15px;
  text-decoration: none;
  color: #aaa;
  font-weight: 800;
  text-transform: uppercase;
  margin: 0 10px;
}
nav ul li a,
nav ul li a:after,
nav ul li a:before {
  transition: all .5s;
}

nav ul li a:hover {
  color: yellow;
}

/* stroke */
nav.stroke ul li a,
nav.fill ul li a {
  position: relative;
}
nav.stroke ul li a:after,
nav.fill ul li a:after {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  width: 0%;
  content: '.';
  color: transparent;
  background: #aaa;
  height: 1px;
}
nav.stroke ul li a:hover:after {
  width: 100%;
}

nav.fill ul li a {
  transition: all 2s;
}

nav.fill ul li a:after {
  text-align: left;
  content: '.';
  margin: 0;
  opacity: 0;
}
nav.fill ul li a:hover {
  color: #fff;
  z-index: 1;
}
nav.fill ul li a:hover:after {
  z-index: -10;
  animation: fill 1s forwards;
  -webkit-animation: fill 1s forwards;
  -moz-animation: fill 1s forwards;
  opacity: 1;
}



/* Keyframes */
@-webkit-keyframes fill {
  0% {
    width: 0%;
    height: 1px;
  }
  50% {
    width: 100%;
    height: 1px;
  }
  100% {
    width: 100%;
    height: 100%;
    background: #333;
  }
}

/* Keyframes */
@-webkit-keyframes circle {
  0% {
    width: 1px;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    height: 1px;
    z-index: -1;
    background: #eee;
    border-radius: 100%;
  }
  100% {
    background: #aaa;
    height: 5000%;
    width: 5000%;
    z-index: -1;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    border-radius: 0;
  }
}

</style>
    
</head>
<body>

<div class="content">


    <h1 class="title m-b-md">
     Neverland
  </h1>

    <p class="owner"> By Addifa Rosyadani</p>

</div>

<nav class="stroke">
    <ul>
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Gallery</a></li>
      <li><a href="#">More</a></li>
    </ul>
</nav>

<main class="py-4">
<div class="row">
    @yield('content')
</div>
</main>

<footer class="py-2 footer-inverse text-center">
      <p>Blog template built </a> by <a href="https://twitter.com/dhzlf_">@dhzl_</a></p>

      <p>Login as </a> Admin <a class="btn btn-outline-success mr-3" target="_blank" href="{{ route('login') }}">{{ __('Login') }} </a>

      <p>Copyright &copy; Dhiazulfa Maulana Bachtiar 2020</p>

</footer>

</body>
</html>