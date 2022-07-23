<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page_title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <meta name="description" content="@yield('page_description')" />

    <meta property="og:title" content="@yield('page_title')" />
    <meta property="og:description" content="@yield('page_description')">
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://www.amospa.com" />
    <meta property="og:image" content="@yield('page_image')" />

    <meta name="twitter:title" content="@yield('page_title')">
    <meta name="twitter:description" content="@yield('page_description')">
    <meta name="twitter:image" content="@yield('page_image')">
    <meta name="twitter:card" content="summary_large_image">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f3eef7;
            font-size: 13px;
        }

        .dropdown-item {
            font-size: 13px !important;
        }

        header {
            position: relative;
            background-color: black;
            height: 100vh;
            min-height: 25rem;
            width: 100%;
            overflow: hidden;
        }

        header video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: auto;
            z-index: 0;
        }

        .bg-light-purple {
            background-color: #f3eef7;
        }

        .bg-purple {
            background-color: #e3d5ea;
        }

        .bg-dark-purple {
            background-color: #8c5da1;
        }

        .btn-purple {
            background-color: #8c5da1;
            color: white;
            border: 1px solid #8c5da1;
        }

        .btn-purple:hover {
            background-color: #724a85;
            border: 1px solid #724a85;
            color: #fff;
        }

        .btn-light-purple {
            background-color: #af90bf;
            color: #fff;
            border: 1px solid #af90bf;
        }

        .btn-light-purple:hover {
            background-color: #724a85;
            border: 1px solid #724a85;
            color: #fff;
        }

        .btn-light-purple:active {
            background-color: #724a85;
            border: 1px solid #724a85;
            color: #fff;
        }


        .text-purple {
            color: #8c5da1;
        }

        .text-light-purple {
            color: #e3d5ea;
        }

        .logo-white {
            filter: invert(1) sepia(0) saturate(0) hue-rotate(0deg);
            transition: 200ms;
        }

        .nav-link {
            font-weight: 700
        }

        .fs-menu {
            font-size: 20px;
        }

        .fs-menu-desc {
            font-size: 16px;
        }

        @media (pointer: coarse) and (hover: none) {
            header {
                no-repeat center center scroll;
                height: auto;
                min-height: 220px;
            }
        }
    </style>
    @stack('css')
</head>

<body>
    {{-- mobile --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-black sticky-top d-lg-none">
        <div class="container-fluid">
            <a class="navbar-brand m-auto ps-5" href="#">
                <img src="{{ asset('images/logo.png') }}" style="width: 150px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Café
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Amo Café</a></li>
                            <li><a class="dropdown-item" href="#">Drinks Menu</a></li>
                            <li><a class="dropdown-item" href="#">Food Menu</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
            </div>

            <a href="#" class="btn btn-purple m-auto py-2 px-3 mt-3 fw-bold text-uppercase" style="font-size: 14px;">BOOK NOW</a>

        </div>
    </nav>

    {{-- desktop --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top bg-opacity-75 p-lg-0">
        <div class="container">
            <a class="navbar-brand" href="#">
                <object id="logo" data="{{ asset('images/logo.svg') }}" width="60px" class="logo-white"> </object>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item px-1">
                        <a class="nav-link active" aria-current="page" href="{{ route('front.home') }}">Home</a>
                    </li>
                    <li class="nav-item px-1 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Café
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('front.amo_cafe') }}">Amo Café</a></li>
                            <li><a class="dropdown-item" href="{{ route('front.drinks_menu') }}">Drinks Menu</a></li>
                            <li><a class="dropdown-item" href="{{ route('front.food_menu') }}">Food Menu</a></li>
                        </ul>
                    </li>
                    <li class="nav-item px-1 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Spa Menu
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('front.nails') }}">Nails</a></li>
                            <li><a class="dropdown-item" href="#">Hair</a></li>
                            <li><a class="dropdown-item" href="#">Face</a></li>
                            <li><a class="dropdown-item" href="#">Body</a></li>
                            <li><a class="dropdown-item" href="#">Waxing</a></li>
                            <li><a class="dropdown-item" href="#">IV Therapy</a></li>
                            <li><a class="dropdown-item" href="#">Little Extras</a></li>
                            <li><a class="dropdown-item" href="#">Sauna</a></li>
                            <li><a class="dropdown-item" href="#">Packages</a></li>
                        </ul>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link" href="{{ route('front.groups_mobile') }}">Groups and Mobile</a>
                    </li>
                    <li class="nav-item px-1 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Amo World
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('front.promotion') }}">Monthly Promotions</a></li>
                            <li><a class="dropdown-item" href="{{ route('front.review') }}">Customer Reviews</a></li>
                            <li><a class="dropdown-item" href="{{ route('front.gallery') }}">Media Gallery</a></li>
                            <li><a class="dropdown-item" href="{{ route('front.news-informations') }}">News & Information</a></li>
                            <li><a class="dropdown-item" href="{{ route('front.about') }}">About Us</a></li>
                        </ul>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link" href="{{ route('front.contact') }}">Contact Us</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a href="#" class="btn btn-purple text-uppercase">book now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{ $slot }}

    <footer>
        <section class="container-fluid bg-dark-purple py-lg-3">
            <div class="text-center">
                <a href="">
                    <img src="{{ asset('images/1485341118_06-facebook.png') }}" class="px-lg-2">
                </a>
                <a href="">
                    <img src="{{ asset('images/1485341181_38-instagram.png') }}" class="px-lg-2">
                </a>
                <a href="">
                    <img src="{{ asset('images/tripadvisor-xxl-1.png') }}" class="px-lg-2">
                </a>
                <a href="">
                    <img src="{{ asset('images/youtube-3.png') }}" class="px-lg-2">
                </a>
            </div>
        </section>

        <section class="container-fluid pt-5">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 text-center">
                    <a href="#">
                        <object data="{{ asset('images/logo.svg') }}" width="100px"> </object>
                    </a>
                    <ul class="list-unstyled my-lg-3">
                        <li>EMAIL: infos@amospa.com</li>
                        <li>Sauna & Cafe: 9:00am - 10:00pm</li>
                        <li>Spa: 9:00am - 10:00pm</li>
                    </ul>

                </div>
                <div class="col-lg-6">
                    <h2 class="fs-4 fw-bold">
                        AMO SPA Canggu
                    </h2>
                    <ul class="list-unstyled mt-lg-3">
                        <li>Jl. Pantai Batu Bolong No. 69, Canggu, Badung, Bali</li>
                        <li>BOOKINGS: +62 361 907 1146</li>
                        <li>SMS & CALL: +62 8113 999 806 or +62 81907 546 376</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="container-fluid bg-dark-purple py-lg-4 mt-lg-4">
            <div class="container">
                <div class="text-white">
                    © 2022 AMO Spa. All Rights Reserved. [Privacy Policy] | [Mobile Booking Policy]
                </div>
            </div>
        </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                document.getElementById("logo").style.width = "40px";
            } else {
                document.getElementById("logo").style.width = "60px";
            }
        }
    </script>
    @stack('js')
</body>

</html>
