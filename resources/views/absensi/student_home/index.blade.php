@extends('layouts.student')
@extends('layouts.navbarStudent')

<body class="img-bg">
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
 
                <form method="POST" action="datang.index" control="" class="form-group">
                 @csrf
                    <button class=" btn-success w-75 p-1 mt-3 rounded-pill " type="submit">Datang</button>
                </form>
<hr style="margin-left: -10px">

                <form method="POST" action="tidak_masuk.index" control="" class="form-group">
                    @csrf
                       <button class=" btn-danger w-75  p-1 mt-1 rounded-pill" type="submit">Tidak Masuk</button>
                   </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    
</body>