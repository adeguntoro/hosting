<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <!--
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/favicon.ico">
        <link rel="icon" type="image/png" href="./assets/img/favicon.ico">
        -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
        

        <link href="https://fonts.googleapis.com/css?family=Gudea&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <link rel="icon" href="{{ url('HatchfulExport-All/favicon.png') }}">
        <link rel="stylesheet" href="{{ asset('mundana/css/main.css') }}">

        <style>
            .mb{
                margin-bottom: 100px !important;
            }
            .bold {
                font-weight: bold;
            }
        </style>
        @section('css')
        @show
    </head>
    <body>
        <nav class="topnav navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/artikel"><strong>Orange Papaya</strong></a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarColor02" style="">
                    <ul class="navbar-nav ml-auto d-flex align-items-center">                       
                        @auth
                        <li class="nav-item">
                            <div class="dropdown">
                            <button class="btn dropdown-toggle nav-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/post/create">New Post</a>
                                <a class="dropdown-item" href="/dashboard">Dashboard</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                            </div>
                        </li>
                        @endauth

                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        @section('konten')
        @show

        
        <div class="container mt-5 fixed-bottom">
            <footer class="bg-white border-top p-3 text-muted small">
            <div class="row align-items-center justify-content-between">
                <div>
                    <span class="navbar-brand mr-2"><strong>Orange Papaya</strong></span> Copyright &copy;
                    <script>document.write(new Date().getFullYear())</script>
                     . All rights reserved.
                </div>
            </div>
            </footer>
        </div>
        
        <script src="{{ asset('mundana/js/vendor/jquery.min.js') }}"></script>
        <script src="{{ asset('mundana/js/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('mundana/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('mundana/js/functions.js') }}"></script>

    </body>
</html>