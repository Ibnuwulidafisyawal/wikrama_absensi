{{-- <x-app-layout> --}}
    @extends('layouts.app')
    {{-- @section('layoutSidenav_nav') --}}
    <div id="layoutSidenav_content">
        <main>
        <div class="container-fluid px-4 mb-1 " style=" width:88%; margin-left:14%; padding:2%;">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                </ol>
                <div class="row">
                    <div class="col-xl-2 col-md-6">
                        <div class="card bg-primary text-blue mb-4">
                            <div class="card-body">Absen</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                <div class="small text-white"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Rombel</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                <div class="small text-white"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Rayon</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                <div class="small text-white"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Student</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                <div class="small text-white"></i></div>
                            </div>
                        </div>
                    </div>
                </div> 
        </div>
    </div>
                
    {{-- @endsection  --}}
       


{{-- </x-app-layout> --}}