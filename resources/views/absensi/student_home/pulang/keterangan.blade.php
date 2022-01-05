@extends('layouts.student')
@extends('layouts.navbarStudent')

<body class="img-bg">


    {{-- <div class="container-fluid d-flex justify-content-center position-absolute" >
            <div class="d-flex justify-content-center align-items-center container">
                <div class="card py-10 px-20" style="margin-top: 30%">
                </div>
        </div>
    </div>     --}}



     <!-- Main Content -->
     <div class="container-fluid d-flex justify-content-center position-absolute" style="top:30%; ">
        <div class="card " style="width:30%; height:400px; border-color:grey; border-radius:10px;">


            <div class="d-flex justify-content-center">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/logoWikrama.jpg') }}" alt="" style="width:70px;" class="">
                  </a>
            </div>

        <div class="d-flex justify-content-center">
            <h3>Keterangan Hadir</h3>
        </div>

        <form action="" method="POST">

            <div class="d-flex justify-content-start mt-3">
                <strong>

                    <div class="mt-2">
                        <span>Nis</span>
                        <span>:</span>
                        <span> {{Auth::user()->nis}} </span>
                    </div>
                    

                    <div class="mt-2">
                        <span>Nama</span>
                        <span>:</span>
                        <span>{{Auth::user()->nama}}</span>
                    </div>
                    
                    {{-- @foreach ($absens as $absen) --}}
                        


                    <div class="mt-2">
                        <span>Tgl Dan Jam Kedatangan</span>
                        <span>:</span>
                        <span>{{ $absen->jam_kedatangan }}</span>
                    </div>
                                        {{-- @endforeach --}}

                    <div class="mt-2">
                        <span>Jam Kepulangan</span>
                        <span>:</span>
                        <span>{{ $absen->jam_kepulangan }}</span>
                    </div>
                    

                </strong>
               
             
            </div>

            <div class="pull-left" style="margin-top: 10%; margin-left:70%; width:40%;">
                <a class="btn btn-secondary" href="">Logout <i class="bi bi-arrow-right-circle"></i></a>
            </div>
            

        </form>
    </div>
      </div>
</body>