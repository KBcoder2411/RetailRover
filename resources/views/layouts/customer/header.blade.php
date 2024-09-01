<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('public/assets/customerassets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('public/assets/customerassets/css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/customerassets/css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public\assets\customerassets\images\RETAILfavicon.png')}}" />

    <title>Retail-Rover</title>
    <style>
        .dropdown-menu a {
            color: black;
            /* Change this if you need a different color */
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="{{ route('welcome') }}">
                <img src="{{ asset('public/assets/customerassets/images/RETAIL.png') }}" alt="" height="70px" width="170px">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li>
                        <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('about') }}">About us</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
                    </li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li class="nav-item dropdown">
                        @if (Route::has('login'))
                            @auth
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user" style="font-size: 24px;"></i> {{ Auth()->user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                                    <a class="dropdown-item" href="{{ route('myorder') }}">My Orders</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            @else
                                <a class="nav-link dropdown-toggle" href="#" id="guestDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user" style="font-size: 24px;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="guestDropdown">
                                    <a class="dropdown-item" href="{{ route('login') }}">Log in</a>
                                    @if (Route::has('register'))
                                        <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                                    @endif
                                </div>
                            @endauth
                        @endif
                    </li>
                    <li>
                        @guest
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
                                <i class="fas fa-shopping-cart" style="font-size: 24px;"></i>
                            </a>
                        @else
                            <a class="nav-link" href="{{ route('cart') }}">
                                <i class="fas fa-shopping-cart" style="font-size: 24px;"></i>
                              
                            </a>
                        @endguest
                    </li>
                    @auth

                    
                   
                @endauth
                </ul>

            </div>
        </div>

    </nav>

    <!-- Modal for Login/Register -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login or Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>You need to <a href="{{ route('login') }}" class="btn btn-success">login</a> or <a href="{{ route('register') }}" class="btn btn-info">register</a> to access the cart.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
 