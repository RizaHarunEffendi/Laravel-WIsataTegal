<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        {{-- Style Css --}}
        <link href="/sbadmin/dist/css/styles.css" rel="stylesheet" />
        {{-- DataTables --}}
        <link href="/sbadmin/dist/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
        <script src="/sbadmin/dist/js/jquery-3.4.1.min.js"></script>
        {{-- Fonts --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
     <!-- Navbar-->
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ route('dashboard.index') }}">Website Wisata</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                {{-- <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div> --}}
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} <i class="fas fa-user fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a href="{{ route('user.password.edit') }}" class="dropdown-item">
                            Change Password
                            </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>

                    </div>
                </li>
            </ul>
        </nav>
         <!-- Sidebar-->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{ route('dashboard.index') }}"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a>
                            <a class="nav-link" href="{{ route('user.index') }}"
                                ><div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                Data User</a>
                            <a class="nav-link" href="{{ route('wisata.index') }}"
                                ><div class="sb-nav-link-icon"><i class="far fa-list-alt"></i></div>
                                Data Wisata</a>
                                <a class="nav-link" href="{{ route('wilayah.index') }}"
                                ><div class="sb-nav-link-icon"><i class="fas fa-map-signs"></i></i></div>
                                Data Wilayah</a>

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{ Auth::user()->name }}
                    </div>
                </nav>
            </div>
             <!-- Main Body -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                      <!-- content -->
                      @yield('content')



                    </div>
                </main>
                 <!-- Footer -->
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Website Wisata Tegal 2020</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        {{-- Template --}}
        <script src="/sbadmin/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/sbadmin/dist/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="/sbadmin/dist/assets/demo/chart-area-demo.js"></script>
        <script src="/sbadmin/dist/assets/demo/chart-bar-demo.js"></script>
        <script src="/sbadmin/dist/assets/demo/datatables-demo.js"></script>
        {{-- DataTables --}}
        <script src="/sbadmin/dist/js/jquery.dataTables.min.js"></script>
        <script src="/sbadmin/dist/js/dataTables.bootstrap4.min.js"></script>
        {{-- Alert --}}
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @include('sweet::alert')

    </body>
</html>
