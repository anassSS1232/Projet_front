<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bibliothéque</title>
  <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap-slider.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/vendor.base.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/dataTables.bootstrap4.css')}}">
  <link href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
  
  <link href="{{asset('assets/plugins/slick-carousel/slick/slick.css')}}" rel="stylesheet">
  <link href="{{asset('assets/plugins/slick-carousel/slick/slick-theme.css')}}" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="{{asset('assets/plugins/fancybox/jquery.fancybox.pack.css')}}" rel="stylesheet">
  <link href="{{asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">

</head>

    <body>

            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                    <!-- Navbar Brand-->
                    <a class="navbar-brand ps-3" href="/dashboard">Start Bootstrap</a>
                    <!-- Sidebar Toggle-->
                    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fa fa-bars"></i></button>
                    <!-- Navbar Search-->
                    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                    <!-- Navbar-->
                    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user fa-fw"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Settings</a></li>
                                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="{{ route('signout') }}">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
            </nav>
                <div id="layoutSidenav">
                    <div id="layoutSidenav_nav">
                        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                            <div class="sb-sidenav-menu">
                                <div class="nav">
                                    <div class="sb-sidenav-menu-heading">Core</div>
                                    <a class="nav-link" href="/dashboard">
                                        <div class="sb-nav-link-icon"><i class="fa fa-tachometer"></i></div>
                                        Dashboard
                                    </a>
                                    <a class="nav-link" href="/addproduct">
                                        <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                                        Add Books
                                    </a>
                                    <a class="nav-link" href="/addcategorie">
                                        <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                                        Add Category
                                    </a>
                                    <div class="sb-sidenav-menu-heading">Interface</div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                        <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                                        Pages
                                        <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                                Authentication
                                                <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                                            </a>
                                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                                <nav class="sb-sidenav-menu-nested nav">
                                                    <a class="nav-link" href="/login">Login</a>
                                                    <a class="nav-link" href="/registration">Register</a>
                                                </nav>
                                            </div>
                                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                                Site
                                                <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                                            </a>
                                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                                <nav class="sb-sidenav-menu-nested nav">
                                                    <a class="nav-link" href="/">Home</a>
                                                    <a class="nav-link" href="/list">Books</a>
                                                    <a class="nav-link" href="/profil">Profil</a>
                                                </nav>
                                            </div>
                                        </nav>
                                    </div>
                                    <div class="sb-sidenav-menu-heading">Addons</div>
                                    <a class="nav-link" href="charts.html">
                                        <div class="sb-nav-link-icon"><i class="fa fa-bar-chart"></i></div>
                                        Charts
                                    </a>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                        <div class="sb-nav-link-icon"><i class="fa fa-table"></i></div>
                                        Tables
                                        <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="/tables">Users</a>
                                            <a class="nav-link" href="/articletable">Articles</a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="sb-sidenav-footer">
                                <div class="small">Logged in as:</div>
                                Start Bootstrap
                            </div>
                        </nav>
                    </div>
                    
                    

                    @yield('section')

                        <footer class="py-4 bg-light mt-auto">
                            <div class="container-fluid px-4">
                                <div class="d-flex align-items-center justify-content-between small">
                                    <div class="text-muted">Copyright &copy; Your Website 2021</div>
                                        <div>
                                            <a href="#">Privacy Policy</a>
                                            &middot;
                                            <a href="#">Terms &amp; Conditions</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                @yield('script')
    </body>

</html>