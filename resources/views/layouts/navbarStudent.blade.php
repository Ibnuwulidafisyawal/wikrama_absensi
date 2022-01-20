<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/homeStudent.css') }}">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link  rel="stylesheet" href="/assets/admin/startbootstrap-sb-admin-gh-pages/css/styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
      <script src="{{ asset('js/scripts.js') }}" defer></script>
</head>
<script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
    
 <body>

<script type="text/javascript">
    $(document).ready(function() {
        $('dropdown-toggle').dropdown()
    });
    </script>
      
      <nav class="navbar navbar-expand-lg navbar bg" style="background-color: #008080">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logoWikrama.jpg') }}" alt="" style="width:60px;" class="rounded-pill">
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown ms-2">
                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                  Tentang Wikrama
                </a>
                <ul class="dropdown-menu dropdown-menu-Dark w-25 p-3" aria-labelledby="navbarDarkDropdownMenuLink" style="background-color: #008080 ">
                  <li><a class="dropdown-item ms-1" href="#"> Sejarah </a></li>
                  <li><a class="dropdown-item ms-1" href="#"> prestasi</a></li>
                  <li><a class="dropdown-item ms-1" href="#"> Peraturan</a></li>
                </ul>
              </li>
    
              <li class="nav-item dropdown ms-2">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                  Jurusan Wikrama
                </a>
                <ul class="dropdown-menu dropdown-menu-Dark w-50 p-3" aria-labelledby="navbarDarkDropdownMenuLink" style="background-color: #008080">
                  <li><a class="dropdown-item ms-1" href="#" > IT </a></li>
                  <li><a class="dropdown-item ms-1" href="#"> Pemasaran</a></li>
                  <li><a class="dropdown-item ms-1" href="#"> Pariwisata</a></li>
                </ul>
              </li>
    
              <a class="nav-link" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
               kerja Sama 
              </a>

              <a class="nav-link" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                Struktur Organisasi
               </a>



              <a class="nav-link position-absolute top-1 end-0 start-1" href="{{ route('absensi.login') }}" id="navbarDarkDropdownMenuLink"   style="color: white; ">
                Logout <i class="fas fa-sign-out-alt"></i>
               </a>



               
            </ul>
          </div>
        </div>
      </nav>

      </body>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>