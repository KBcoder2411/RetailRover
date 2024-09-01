<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Retail-Rover</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public\assets\customerassets\images\RETAILfavicon.png')}}" />
        <!-- Google Fonts
		============================================ -->
    <link
        href="https://fonts.googleapis.com/css?family=Play:400,700"
        rel="stylesheet" />
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}" />
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/assets/css/font-awesome.min.css')}}" />
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/assets/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/owl.theme.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/owl.transitions.css')}}" />
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/assets/css/animate.css')}}" />
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/assets/css/normalize.css')}}" />
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/assets/css/meanmenu.min.css')}}" />
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/assets/css/main.css')}}" />
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/assets/css/morrisjs/morris.css')}}" />
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link
        rel="stylesheet"
        href="{{asset('public/assets/css/scrollbar/jquery.mCustomScrollbar.min.css')}}" />
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/assets/css/metisMenu/metisMenu.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/metisMenu/metisMenu-vertical.css')}}" />
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/assets/css/calendar/fullcalendar.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/calendar/fullcalendar.print.min.css')}}" />
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}" />
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/assets/css/responsive.css')}}" />
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
           
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li style="color: rgb(0,118,235);">
                            <h1>RETAIL-ROVER</h1>
                        </li>

                        <li class="active">

                            <a  href="#">
                                <i class="fa big-icon fa-home icon-wrap"></i>
                                <span class="mini-click-non">Dashboard</span>
                            </a>
                           
                        </li>
                    
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa fa-user author-log-ic"></i>
                                <span class="mini-click-non">Product</span></a>
                            <ul class="submenu-angle" aria-expanded="false">


                                <li>

                                    <a title="Product List" href="{{route('productlist')}}"><i
                                            class="fa fa-female sub-icon-mg"
                                            aria-hidden="true"></i>
                                        <span class="mini-sub-pro">Product List</span></a>
                                </li>

                                <li>
                                    <a title="Images Cropper" href="{{route('addproduct')}}"><i
                                            class="fa fa-user author-log-ic"
                                            aria-hidden="true"></i>
                                        <span class="mini-sub-pro">Add Product</span></a>
                                </li>
                            </ul>
                        </li>
                    
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa fa-user author-log-ic"></i>
                                <span class="mini-click-non">Users</span></a>
                            <ul class="submenu-angle" aria-expanded="false">


                                

                                <li>
                                    <a title="Images Cropper" href="{{route('user')}}"><i
                                            class="fa fa-user author-log-ic"
                                            aria-hidden="true"></i>
                                        <span class="mini-sub-pro">User list</span></a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa fa-user author-log-ic"></i>
                                <span class="mini-click-non">Cotacts</span></a>
                            <ul class="submenu-angle" aria-expanded="false">

                            <li>
                                    <a title="" href="{{route('showcontacts')}}"><i
                                            class="fa fa-user author-log-ic"
                                            aria-hidden="true"></i>
                                        <span class="mini-sub-pro">Contact list</span></a>
                                </li>

                                <li>
                                    <a title="" href="{{route('shownewsletter')}}"><i
                                            class="fa fa-user author-log-ic"
                                            aria-hidden="true"></i>
                                        <span class="mini-sub-pro">Newsletter Subscribers</span></a>
                                </li>


                            </ul>
                        </li>

                        

                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-flask icon-wrap"></i>
                                <span class="mini-click-non">Tools</span></a>
                            <ul class="submenu-angle" aria-expanded="false">


                                <li>
                                    <a title="Images Cropper" href="images-cropper.html"><i
                                            class="fa fa-file-image-o sub-icon-mg"
                                            aria-hidden="true"></i>
                                        <span class="mini-sub-pro">Images Cropper</span></a>
                                </li>
                            </ul>
                        </li>



                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-pie-chart icon-wrap"></i>
                                <span class="mini-click-non">Miscellaneous</span></a>
                            <ul class="submenu-angle" aria-expanded="false">



                                <li>
                                    <a title="404 Page" href="404.html"><i class="fa fa-tint sub-icon-mg" aria-hidden="true"></i>
                                        <span class="mini-sub-pro">404 Page</span></a>
                                </li>
                                <li>
                                    <a title="500 Page" href="500.html"><i class="fa fa-tree sub-icon-mg" aria-hidden="true"></i>
                                        <span class="mini-sub-pro">500 Page</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-table icon-wrap"></i>
                                <span class="mini-click-non">Data Tables</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li>
                                    <a title="Peity Charts" href="static-table.html"><i
                                            class="fa fa-table sub-icon-mg"
                                            aria-hidden="true"></i>
                                        <span class="mini-sub-pro">Static Table</span></a>
                                </li>
                                <li>
                                    <a title="Data Table" href="data-table.html"><i class="fa fa-th sub-icon-mg" aria-hidden="true"></i>
                                        <span class="mini-sub-pro">Data Table</span></a>
                                </li>
                            </ul>
                        </li>




                    </ul>
                </nav>
            </div>
        </nav>
    </div>

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        
        
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul
                                                class="nav navbar-nav mai-top-nav header-right-menu">


                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                        <span class="admin-name">{{ Auth::user()->name }}</span>
                                                        <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                                    </a>

                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">

                                                        <li><a href="route('profile.edit')"><span class="fa fa-user author-log-ic"></span>
                                                                {{ __('Profile') }}</a>
                                                        </li>


                                                        <li>

                                                            <form method="POST" action="{{ route('logout') }}">
                                                                @csrf

                                                                <x-dropdown-link :href="route('logout')"
                                                                    onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                                                    {{ __('Log Out') }}
                                                                </x-dropdown-link>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>