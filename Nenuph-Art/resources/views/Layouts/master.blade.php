<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 {{--  AUTH --}}
 <meta name="csrf-token" content="{{ csrf_token() }}">
 {{-- AUTH --}}


  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('font/flaticon.css')}}">
  <link  href="{{asset('font-awesome-4.7.0/css/font-awsome.min.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{asset('css/froala_blocks.css')}}"/>
  <link  href="{{asset('css/master.css')}}" rel="stylesheet">
{{--   <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}



</head>
<body>

@yield('content')








@include('layouts.footer')






</body>
</html>




