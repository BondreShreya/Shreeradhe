<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/Shree_Radhe.png') }}" style="width:50%">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>
    shreeradhe
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

@include('layout.pages.link')
@yield('custom_styles')
<style>

</style>
</head>
<body class="">
  <div class="wrapper ">
  @include('layout.pages.sidebar')
    <div class="main-panel">
      <!-- Navbar -->
      @include('layout.pages.navbar')
      <!-- End Navbar -->
    
     @yield('content')
    </div>
  </div>
  @include('layout.pages.script')
@yield('customjs')
</body>

</html>