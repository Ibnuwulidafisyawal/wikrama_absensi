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
                {{-- <div class="pull-right">
                    <a class="btn btn-secondary" href="{{ route('absensi.student_home') }}"><i class="bi bi-arrow-left-circle"></i> Back</a>
                </div> --}}
                <h2>Present Today</h2>
                
              </div>
              

          
              <div class="row">
 
                <form method="POST" action="{{ route('absensi.student_home.tidak_masuk.index') }}" control="" class="form-group" enctype="multipart/form-data">
                  @csrf
                  
                        <div class="mt-3" >
                            <x-jet-label for="nis" value="{{ __('Nis :') }}" style="margin-left: -93%;"/>
                            <x-jet-input id="nis" class="block mt-1 w-full form_input" type="text" name="nis" value=" {{ Auth::user()->nis }}" required autofocus autocomplete="nis" readonly/>
                        </div>
        
                        <div class="mt-3">
                            <x-jet-label for="nama" value="{{ __('Nama :') }}" style="margin-left: -90%;"/>
                            <x-jet-input id="nama" class="block mt-1 w-full form_input" type="text" name="nama" value=" {{ Auth::user()->nama }}" required autofocus autocomplete="nama" disabled/>
                        </div>

                        <x-jet-label class="mt-3" for="keterangan" value="{{ __('Keterangan :') }}" style="margin-left: -83%;"/>
                        <select class="form-control" name="keterangan" id="keterangan">
                            <option value="" hidden></option>
                            <option value="izin" >Izin</option>
                            <option value="sakit" >Sakit</option>
                        </select>

                     <div class="row">
                       <button type="submit" class="btn">Submit</button>
                     </div>
       
                   </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
</body>

{{-- {{ route('absensi.student_home.datang.store') }} --}}