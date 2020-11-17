@extends('layouts.blognav')
    @section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
      
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<title>Addifa Rosyadani</title>

<style>
    
    .jumbotron{
    min-height: 500px;
    padding-top: 10em;
    }

    .MultiCarousel{
    float: left;
    overflow: hidden;
    padding: 15px;
    width: 100%;
    position:relative;
    }

    .MultiCarousel .MultiCarousel-inner{
    transition: 0.05s ease all;
    float: left;
    }
    
    .MultiCarousel .MultiCarousel-inner .item{
    float: left;
    }
    
    .MultiCarousel .MultiCarousel-inner .item > div{
    text-align: center;
    padding:10px;
    margin:10px;
    }
    
    .MultiCarousel .leftLst, .MultiCarousel .rightLst{
    position:absolute;
    border-radius:50%;
    top:calc(50% - 20px);
    }
    
    .MultiCarousel .leftLst{
    left:0;
    }
    
    .MultiCarousel .rightLst{
    right:0;
    }
    
    .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over{
    pointer-events: none;
    background:#ccc;
    }
    
    </style>

<link href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Dosis:400,500,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'/>
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<!-- Styles -->
<style>

    body, button,input{
      color:#404040;
      color:hsl(0,0%,25%);
      font-family:'Dosis',serif;
      font-weight:500;
      font-size:16px;
      font-size:1rem;
      line-height:1.5;
    }

    .body {
      color:#404040;
      color:hsl(0,0%,25%);
      font-family:'Dosis',serif;
      font-weight:530;
      font-size:16px;
      font-size:1rem;
      text-align: justify;
      line-height:1.5;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
      font-weight:700;
      font-family:'Amatic SC',sans-serif;
      font-size: 120px;
      color:#000;
      color:hsl(0,0%,0%);
      -ms-word-break:break-word;
      word-break:break-word;
    }

    .judul{
        font-weight: 600;
        font-size: 80px;
        font-family : 'Amatic SC',sans-serif;
        color: black;
    }

    .owner {
        color: #636b6f;
        padding: 0 25px;
        font-size: 30px;
        font-weight: 400;
        letter-spacing: .1rem;
        font-family:'Amatic SC',sans-serif;
        text-decoration: none;
        text-transform: uppercase;
      }

    .m-b-md {
        margin-bottom: 0px;
    }


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

<div class="container">
<div id="carouseldhiaz" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner" role="listbox">

    
    <div class="carousel-item active">
      <img class="d-block w-100" src="../images/bg_slider/bg-slider1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../images/bg_slider/bg-slider2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../images/bg_slider/bg-slider3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouseldhiaz" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouseldhiaz" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>

</div>

<div class="container">

<div class="container col-md-8 flex-center">

    @foreach($blogs as $blog)
    <div class="blog-main">
        <br> <br>
          <h3 class="pb-3 mb-4 border-bottom">
          </h3>

    <div class="blog-post">
          <center>
            <h3 class="blog-post-title judul">{{ $blog->title }}</h2>

            @if($blog->image)
                <img  width="300px" height="200px" src="{{ asset('images/'.$blog->image) }}" alt="Blog Post Image">
            @endif
          </center>
            <br><br>
            <p class="body "> {!! nl2br(e($blog->body)) !!} </p>
            <p class="blog-post-meta">Post on {{ $blog->created_at->format('d-m-Y') }} by {{ $blog->writer->name }}</p>
    @endforeach
    </div><!-- /.blog-post -->

    <h3 class="pb-3 mb-4 border-bottom"></h3>


<div class="container">
<div class="row row-table">

@foreach($posts as $post)

<div class="col-md-4 col-sm-6 mb-3 col-table">
<div class="card border-1 col-content bg">

<!--  @if($post->image)
  <img class="card-img-top" src="{{ asset('images/'.$post->image) }}" width="140px" height="150px" alt="Blog Post Image">
  @endif -->

  <div class="card-body">
  <h5 class="card-title"> <b> {{ $post->title }} </b> by <small><i>{{ $post->writer->name }}</i></small></h5>
  <p class="card-text">
  {{ str_limit($post->body, 100) }}

  <p> <a href="{{ url('/read', $post->slug_judul) }}">Baca Selengkapnya </a> </p>

  </p>
  </div>

  </div>
  </div>
  @endforeach
</div>
</div>


<nav class="blog-pagination mt-5">
  <a class="btn btn-outline-primary" href="#">Older</a>
  <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
</nav>

</div> 

</div>



@endsection
</body>
</html>