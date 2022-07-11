<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | adminPANEL</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('vendors/adminlte') }}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('vendors/adminlte') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="{{ asset('vendors/adminlte') }}/dist/css/adminlte.min.css">
    @stack('css')
</head>

{{-- <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed"> --}}

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        {{-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{ asset('vendors/adminlte') }}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> --}}

        {{-- <nav class="main-header navbar navbar-expand navbar-dark"> --}}
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                @yield('nav_button')
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="nav-link btn btn-default btn-sm font-weight-bold text-red border" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
                            Logout <i class="fas fa-sign-out-alt ml-1"></i>
                        </a>
                    </form>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{ route('dashboard.index') }}" class="brand-link">
                <img src="{{ asset('vendors/adminlte') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">admin<span class="text-white">PANEL</span></span>
            </a>

            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-header">GENERAL</li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard.index') }}" class="nav-link @yield('dashboard_active')">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <span>
                                    Dashboard
                                </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('page.index') }}" class="nav-link @yield('page_active')">
                                <i class="nav-icon fas fa-folder"></i>
                                <span>
                                    Page
                                </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('post.index') }}" class="nav-link @yield('post_active')">
                                <i class="nav-icon far fa-folder"></i>
                                <span>
                                    Post
                                </span>
                            </a>
                        </li>

                        <li class="nav-header">SECTIONS</li>

                        <li class="nav-item @yield('food')">
                            <a href="#" class="nav-link @yield('food_active')">
                                <i class="nav-icon fas fa-utensils"></i>
                                <p>
                                    Food
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('food-category.index') }}" class="nav-link @yield('food_category_active')">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Food Category</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('food.index') }}" class="nav-link @yield('food_list_active')">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Food List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item @yield('drink')">
                            <a href="#" class="nav-link @yield('drink_active')">
                                <i class="nav-icon fas fa-glass-cheers"></i>
                                <p>
                                    Drink
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('drink-category.index') }}" class="nav-link @yield('drink_category_active')">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Drink Category</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('drink.index') }}" class="nav-link @yield('drink_list_active')">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Drink List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item @yield('spa')">
                            <a href="#" class="nav-link @yield('spa_active')">
                                <i class="nav-icon fas fa-spa"></i>
                                <p>
                                    Spa
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('spa-category.index') }}" class="nav-link @yield('spa_category_active')">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Spa Category</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('spa.index') }}" class="nav-link @yield('spa_list_active')">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Spa List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('promo.index') }}" class="nav-link @yield('promo_active')">
                                <i class="nav-icon fas fa-percent"></i>
                                <span>
                                    Promo
                                </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('news-information.index') }}" class="nav-link @yield('news_information_active')">
                                <i class="nav-icon far fa-newspaper"></i>
                                <span>
                                    News Information
                                </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('review.index') }}" class="nav-link @yield('review_active')">
                                <i class="nav-icon fas fa-star-half-alt"></i>
                                <span>
                                    Review
                                </span>
                            </a>
                        </li>

                        <li class="nav-header">OTHERS</li>

                        <li class="nav-item">
                            <a href="{{ route('setting.show', ['1']) }}" class="nav-link @yield('setting_active')">
                                <i class="nav-icon fas fa-cogs"></i>
                                <span>
                                    Setting
                                </span>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            @yield('title_breadcrumb')

            {{ $slot }}

        </div>

        <footer class="main-footer text-sm">
            2022 &copy; Created with <i class="fas fa-heart"></i> by <a href="https://instagram.com/a_dev.id" target="_blank" class="font-weight-bold">a-dev</a>. Template by <a href="https://adminlte.io" target="_blank">AdminLTE.io</a>.
        </footer>
    </div>

    <script src="{{ asset('vendors/adminlte') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('vendors/adminlte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('vendors/adminlte') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="{{ asset('vendors/adminlte') }}/dist/js/adminlte.js"></script>
    @stack('js')
</body>

</html>
