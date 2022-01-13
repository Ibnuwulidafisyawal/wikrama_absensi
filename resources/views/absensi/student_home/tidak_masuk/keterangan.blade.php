@extends('layouts.student')
@extends('layouts.navbarStudent')

<body class="img-bg">

     <!-- Main Content -->
     <div class="container-fluid d-flex justify-content-center position-absolute" style="top:30%; ">
        <div class="card " style="width:30%; height:450px; border-color:grey; border-radius:10px;">


            <div class="d-flex justify-content-center">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/logoWikrama.jpg') }}" alt="" style="width:70px;" class="">
                  </a>
            </div>

        <div class="d-flex justify-content-center">
            <h3>Keterangan Tidak Hadir</h3>
        </div>

        <form action="" method="POST">

            <div class="d-flex justify-content-start mt-3">
                <strong>

                    <div class="mt-2">
                        <span class="text-primary">Nis</span>
                        <span class="text-primary">:</span>
                        <span class="text-success"> {{Auth::user()->nis}} </span>
                    </div>
                    

                    <div class="mt-2">
                        <span class="text-primary" >Nama</span>
                        <span class="text-primary">:</span>
                        <span class="text-success">{{Auth::user()->nama}}</span>
                    </div>

                    <div class="mt-2">
                        <span class="text-primary" >Tanggal Dan Kehadiran</span>
                        <span class="text-primary">:</span>
                        <span class="text-success">{{ $absens->keterangan }}</span>
                    </div>
                    

                </strong>
               
             
            </div>

            <div class="pull-left" style="margin-top: 10%; margin-left:70%; width:40%;">
                <a class="btn btn-secondary" href="{{ route('absensi.login') }}">Logout <i class="bi bi-arrow-right-circle"></i></a>
            </div>
            
            <div class="pull-right" style="margin-top: -18%; margin-margin-right:70%; width:40%;">
                <a class="btn btn-secondary" href="{{ route('absensi.student_home.index') }}"><i class="bi bi-arrow-left-circle"></i> Home</a>
            </div>

        </form>

        <footer class="d-flex justify-content-center">
            <strong>
                <small class="text-danger">Harap Screenshoot Bukti Absensi Hari Ini </small>
            </strong>
        </footer>

    </div>
      </div>
</body>