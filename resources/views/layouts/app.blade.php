<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">

<title>{{ config('app.name') }}</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="{{asset('image/favicon.png')}}" rel="icon" type="image/png" >
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen" />
<link href="{{asset('javascript/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet"/>
<link href="{{asset('css/stylesheet.css')}}" rel="stylesheet">
<link href="{{asset('css/responsive.css')}}" rel="stylesheet">
<link href="{{asset('javascript/owl-carousel/owl.carousel.css')}}" type="text/css" rel="stylesheet" media="screen" />
<link href="{{asset('javascript/owl-carousel/owl.transitions.css')}}" type="text/css" rel="stylesheet" media="screen" />
<script type="text/javascript" src="{{asset('javascript/jquery-2.1.1.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('javascript/bootstrap/js/bootstrap.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('javascript/template_js/jstree.min.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/template_js/template.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/common.js')}}" ></script>
<script type="text/javascript" src="{{asset('javascript/global.js')}}" ></script>
<script type="text/javascript" src="{{asset('javascript/owl-carousel/owl.carousel.min.js')}}" ></script>
</head>
<body class="index">
<div class="preloader loader" style="display: block;"> <img src="{{asset('image/loader.gif')}}"  alt="#"/></div>

<header>
    @include('layouts.dash.header')
</header>

<nav id="menu" class="navbar">
    @include('layouts.dash.nav')
</nav>
<div class="container">
  <div class="row">
    @yield('content')
  </div>
</div>
<footer>
    @include('layouts.dash.footer')
</footer>

<script src="javascript/jquery.parallax.js"></script>

<script>
    jQuery(document).ready(function ($) {
        $('.parallax').parallax();
    });
</script>

</body>
</html>
