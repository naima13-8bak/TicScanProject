
@extends('layouts.app')


@section('content')

<link rel="stylesheet" type="text/css" href="{{ url('css/styleHeader.css') }}">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->
      
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <!-- Navigation -->
      <div class="fixed-top">
        <header class="topbar">
            <div class="container">
              <div class="row">
                <!-- social icon-->
                <div class="col-sm-12">
                  <ul class="social-network">
                    <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
      
              </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
          <div class="container">
            <a class="navbar-brand" rel="nofollow" target="_blank" href="" style="text-transform: uppercase;"> 
              <img  class="logo" src="/images/log.png" alt="" >
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
      
              <ul class="navbar-nav ml-auto">
      
                <li class="nav-item active">
                  <a class="nav-link" href="https://nusasatu.com">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
      
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
      
               <li class="nav-item">
                  <a class="nav-link" href="#">Info et Services</a>
                </li>
      
               
      
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
      
                <li class="nav-item">
                  <a class="nav-link" href="#">Se connecter</a>
                </li>
      
                <li class="nav-item">
                  <a class="nav-link" href="#">S'inscrire</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
  @endsection