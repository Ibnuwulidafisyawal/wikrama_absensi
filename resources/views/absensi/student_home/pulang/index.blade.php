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
 
                <form method="POST" action="{{ route('students.store')}}" control="" class="form-group" enctype="multipart/form-data">
                       
                <div class="mt-3" >
                    <x-jet-label for="nis" value="{{ __('Nis :') }}" style="margin-left: -93%;"/>
                    <x-jet-input id="nis" class="block mt-1 w-full form_input" type="text" name="nis" value=" {{ Auth::user()->nis }}" required autofocus autocomplete="nis" readonly/>
                </div>

                <div class="mt-3">
                    <x-jet-label for="nama" value="{{ __('Nama :') }}" style="margin-left: -90%;"/>
                    <x-jet-input id="nama" class="block mt-1 w-full form_input" type="text" name="nama" value=" {{ Auth::user()->nama }}" required autofocus autocomplete="nama" disabled/>
                </div>


                      <div class="mt-3">
                          <x-jet-label for="jam_kedatangan" value="{{ __('Tanggal dan Jam kedatangan:') }}" style="margin-left: -60%;"/>
                          <x-jet-input id="jam_kedatangan" class="block mt-1 w-full form_input" type="text" name="jam_kedatangan" value=" {{$presensi->jam_kedatangan}}" required autofocus autocomplete="jam_kedatangan" disabled/>
                      </div>

                   </form>

                <form action="{{ route('students.update',$presensi->id)}}" method="POST">
                  
                  @csrf
                  @method('PUT')

                  <div class="mt-1">
                    <x-jet-label for="jam_kepulangan" value="{{ __('Jam Kepulangan') }}" style="margin-left: -78%;" />
                    <select class="form-control " name="jam_kepulangan" id="jam_kepulangan" >
                      <option value="" hidden></option>
                      <option value="15.00">15.00</option>
                      <option value="16.30">16.30</option>
                      <option value="17.00">17.00</option>
                    </select>
                </div>
          
                 <div class="row mt-3">
                   <button type="submit" href="" class="btn">Submit</button>
                 </div>
   
                </form>

                
              </div>
            </div>
          </div>
        </div>
      </div>
</body>

{{-- {{ route('absensi.student_home.datang.store') }} --}}