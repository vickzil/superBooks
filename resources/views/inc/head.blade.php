<!doctype html>
	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
		<head>
    		<meta charset="utf-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1">
    		<!-- CSRF Token -->
    		<meta name="csrf-token" content="{{ csrf_token() }}">
    		{{-- Favicon --}}
    		<link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">

    		<title>{{ config('app.name', 'Laravel') }}</title>
    		<link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  			<!-- Fonts -->
  			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  
  			<!-- Icons -->
  			<link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  			<link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">

  			<!-- Page plugins -->
  			<!-- Argon CSS -->
  			<link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.2.0') }}" type="text/css">

    		<!-- Scripts -->
    		<script src="{{ asset('js/app.js') }}" defer></script>

    		<!-- Fonts -->
    		<link rel="dns-prefetch" href="//fonts.gstatic.com">
    		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>