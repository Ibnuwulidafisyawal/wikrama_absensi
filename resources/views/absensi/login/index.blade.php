@extends('layouts.loginStudent')

<body class="img-bg">
    <!-- Main Content -->
    <div class="container-fluid d-flex justify-content-center position-absolute" style="top:35%">
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
               <h2>Log In</h2>
             </div>
   
             <div class="row">
               <form method="POST" action="absensi.login" control="" class="form-group">
                @csrf
                 <div class="row">
                   <input type="text" name="username" id="username" class="form__input" placeholder="Username">
                 </div>
   
                 <div class="row">
                   <input type="password" name="password" id="password" class="form__input" placeholder="Password">
                 </div>
                
                 <div class="row">
                   <button type="submit" class="btn">Log in</button>
                 </div>
   
               </form>
             </div>
           </div>
         </div>
       </div>
     </div>
   
   </body>
    
   