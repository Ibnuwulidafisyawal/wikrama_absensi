@extends('layouts.student')
@extends('layouts.navbarStudent')

<script src="{{ asset('js/jam.js') }}"></script>
<head>
  <style>
    #watch {
        color: rgb(252, 150, 65);
        position: absolute;
        z-index: 1;
        height: 40px;
        width: 700px;
        overflow: show;
        margin: auto;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        font-size: 10vw;
        -webkit-text-stroke: 3px rgb(210, 65, 36);
        text-shadow: 4px 4px 10px rgba(210, 65, 36, 0.4),
            4px 4px 20px rgba(210, 45, 26, 0.4),
            4px 4px 30px rgba(210, 25, 16, 0.4),
            4px 4px 40px rgba(210, 15, 06, 0.4);
    }
</style>

</head>
<body class="img-bg" onload="realtimeClock()">
     <!-- Main Content -->
     <div class="container-fluid d-flex justify-content-center position-absolute" style="top:30%">
        <div class="row main-content bg-success text-center">
 
         @if ($errors->any())
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 @foreach ($errors->all() as $error)
                     <div>{{ $error }}</div>
                 @endforeach
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
         @endif
 
          <div class="col-md-4 text-center company__info">
            <span class="company__logo">
              <h2><img src="{{ asset('img/logoWikrama.jpg') }}" alt="" style="width: 50%; margin-left:22.8%;"></h2>
            </span>
            <h4 class="company_title">Smk Wikrama Bogor</h4>
            <small>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.</small>
          </div>
          <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
            <div class="container-fluid">
              <div class="row">
                <h2>Present Today</h2>
              </div>


              <div class="row">
 
                <form method="POST" action="{{ route('students.store') }}" control="" class="form-group">
                 @csrf
                 
                    <button class=" btn-success w-75 p-1 mt-3 rounded-pill" href="{{ route('absensi.student_home.pulang.index') }}" type="submit">Datang</button>
                    
                </form>
                    <hr style="margin-left: -10px">

                {{-- <form method="POST" action="{{ route('absensi.student_home.tidak_masuk.index') }}" control="" class="form-group"> --}}
                    {{-- @csrf --}}

                     <a href="{{ route('absensi.student_home.tidak_masuk.index') }}">
                      <button class=" btn-danger w-75  p-1 mt-1 rounded-pill"  type="submit">Tidak Masuk</button>
                    </a>  
                    
                   {{-- </form> --}}
                
              </div>
            </div>
          </div>
        </div>
      </div>
    
</body>