<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard admin absensi</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link  rel="stylesheet" href="/assets/admin/startbootstrap-sb-admin-gh-pages/css/styles.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="/assets/admin/startbootstrap-sb-admin-gh-pages/assets/css/scripts.js" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

          <script src="{{ asset('js/scripts.js') }}" defer></script>
       
    </head>
    <body class="sb-nav-fixed ">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark" >
            <!-- Navbar Brand-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <a class="navbar-brand ps-3" href="#">Dashboard Absensi</a>
            <!-- Sidebar Toggle-->
            
            <!-- Navbar-->
            
            <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0 mt-7" >
                
                <div>
                    <div class= "font-medium text-white " style="margin-top: 7px">{{ Auth::user()->name }}</div>
                </div>
               
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle " id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        
                        <!-- Logout-->
                        <li><a class="dropdown-item" href="">profil</a></li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-jet-responsive-nav-link href="{{ route('logout') }}" class="dropdown-item"
                                           onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-jet-responsive-nav-link>
                        </form>
        
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        
        
        <div id="layoutSidenav">
         <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion"> 
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading text-light"> Dashboard</div>

                                <a class="nav-link" href="{{ route('dashboard.index') }}">
                                    <div class="sb-nav-link-icon text-light"><i class="fas fa-database fs-6"></i></div>
                                    Dashboard
                                </a>

                            <div class="sb-sidenav-menu-heading text-light">Register </div>

                                <a class="nav-link collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon text-light"><i class="bi bi-person-plus-fill fs-5"></i></div>
                                    Register 
                                    <div class="sb-sidenav-collapse-arrow text-light"><i class="fas fa-angle-down"></i></div>
                                </a>

                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">    
                                    <a class="nav-link " href="{{ route('register-student.index') }}"><i class="bi bi-person-plus-fill"></i> Register Student</a>
                                    <a class="nav-link" href="{{ route('register-admin.index')}}"><i class="bi bi-person-plus-fill "></i> Register Admin</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading text-light">Data Absensi  </div>

                        
                            <a class="nav-link" href="{{ route('dashboard_absen.index')}}">
                                <div class="sb-nav-link-icon text-light"><i class="fas fa-calendar-check fs-6"></i></div>
                                Absen Hadir
                            </a>

                            <a class="nav-link" href="{{ route('dashboard_absen-tidak-masuk.index')}}">
                                <div class="sb-nav-link-icon text-light"><i class="fas fa-calendar-times fs-6"></i></div>
                                Absen Tidak Hadir
                            </a>


                            <div class="sb-sidenav-menu-heading text-light">Data Table </div>

                            
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                    <div class="sb-nav-link-icon text-light"><i class="bi bi-table"></i></div>
                                    Data Table 
                                    <div class="sb-sidenav-collapse-arrow text-light"><i class="fas fa-angle-down fs-6"></i></div>
                                </a>

                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    {{-- <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Student  </a>
                                     </nav> --}}
                                     <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{ route('rayons.index') }}">Rayon </a>
                                     </nav>
                                     <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{ route('rombels.index') }}">Rombel </a>
                                     </nav>
                                    </div>

                                </nav>
                                
                            </div>
                            
                            
                        </div>
                    </div>
                </nav> 
            </div>  
        </div>  
            

            <div id="layoutSidenav_content">
                <main>
                    {{-- <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Absen</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Rombel</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Rayon</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        <div class="small text-white"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Student</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
{{--            
    
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Data Hadir per minggu
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Data Hadir per bulan
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>




                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                            

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div> --}}
                    {{-- </div> --}}
                <footer class="py-4 bg-light " style="margin-top: 35%">
                    <div class="container-fluid px-5">
                        <div class="d-flex align-items-center d-flex justify-content-center">
                            <div class="text-muted ">Copyright &copy; Your Website  {{ now()->year }}</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        
  

        <script src="/assets/admin/startbootstrap-sb-admin-gh-pages/assets/demo/chart-bar-demo.js"></script>
        <script src="/assets/admin/startbootstrap-sb-admin-gh-pages/assets/demo/chart-area-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>

        <script src="/assets/admin/startbootstrap-sb-admin-gh-pages/assets/js/datatables-simple-demo.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

        <script src="/assets/admin/startbootstrap-sb-admin-gh-pages/js/scripts.js"></script>
        <script src="/assets/admin/startbootstrap-sb-admin-gh-pages/js/datatables-simple-demo.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    </body>
    
</html>


