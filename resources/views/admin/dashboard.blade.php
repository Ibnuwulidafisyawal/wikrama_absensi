{{-- <x-app-layout> --}}
    @extends('layouts.app')
    
    {{-- @section('layoutSidenav_nav') --}}
    
    <div id="layoutSidenav_content">
        <form action="{{ route('dashboard.index') }}" method="GET">
        <main>
            <div class="container-fluid px-4 mb-1 " style=" width:88%; margin-left:14%; padding:2%;">
                <h1 class="mt-4">Dashboard Total Absen</h1>
                <ol class="breadcrumb mb-4">
                </ol>
                <div class="row">
                    <div class="col-xl-2 col-md-6 ">
                        <div class="card bg-secondary text-white mb-4">
                            <div class="card-body">User Admin</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $userAdmin }}</div>
                                <div class="small text-white"></i></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-2 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">User Student</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $userStudent }}</div>
                                <div class="small text-white"></i></div>
                            </div>
                        </div>
                    </div>
                </div> 
                </div> 
        </div>
        
        <hr>
          
        <div class="container-fluid px-4 mb-1 " style=" width:88%; margin-left:14%; padding:2%;">
                <h1 class="mt-4">Dashboard Table</h1>
                <ol class="breadcrumb mb-4">
                </ol>
                <div class="row">
                    <div class="col-xl-2 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Total Absen</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $absens }}</div>
                                <div class="small text-white"></i></div>
                        
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Rombel</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $rombels }}</div>
                                <div class="small text-white"></i></div>
                        
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Rayon</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $rayons }}</div>
                                <div class="small text-white"></div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
    <hr>

    <div class="container-fluid px-4 mb-1 " style=" width:88%; margin-left:14%; padding:2%;">
        <h1 class="mt-4">Dashboard Total Absen</h1>
        <ol class="breadcrumb mb-4">
        </ol>
        <div class="row">
            <div class="col-xl-2 col-md-6">
                <div class="card  text-white mb-4" style="background-color: salmon">
                    <div class="card-body">Total Absen</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $absens }}</div>
                        <div class="small text-white"></i></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-6">
                <div class="card  text-white mb-4" style="background-color: lightseagreen">
                    <div class="card-body">Total Absen Hadir</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $absenHadir}}</div>
                        <div class="small text-white"></i></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-6" >
                <div class="card text-white mb-4" style="background-color: purple">
                    <div class="card-body">Total Absen Tidak Hadir</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $absenTidakHadir }}</div>
                        <div class="small text-white"></i></div>
                    </div>
                </div>
            </div>

            
        </div> 
</div>
</div>
</form>