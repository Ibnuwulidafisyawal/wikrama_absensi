<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/loginStudent.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/homeStudent.css') }}">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link  rel="stylesheet" href="/assets/admin/startbootstrap-sb-admin-gh-pages/css/styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    {{-- <link href="/assets/admin/startbootstrap-sb-admin-gh-pages/assets/css/scripts.js" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <script src="{{ asset('js/scripts.js') }}" defer></script>
   
</head>
<body>
   


    <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-green-600 text-white-50 position-absolute top-100 start-50 translate-middle w-100" style="background: #008080">
        <footer class="footer_area section_padding_130_0">
            <div class="container">
              <div class="row">
                <!-- Single Widget-->
                <div class="col-12 col-sm-6 col-lg-4">
                  <div class="single-footer-widget section_padding_0_130">
                    <!-- Footer Logo-->
                    <div class="footer-logo mb-3"></div>
                    <p>
                        <strong>Alamat</strong>
                        <br>
                        Jl.Raya Wangun
                        <br>
                        Kelurahan Sindangsari
                        <br>
                        Bogor Timur 16720
                    </p>
                    <!-- Copywrite Text-->
                    <div class="copywrite-text mb-5">
                      {{-- <p class="mb-0">Made with <i class="lni-heart mr-1"></i>by<a class="ml-1">Designing World</a></p> --}}
                    </div>
                    <!-- Footer Social Area-->
                    <div class="footer_social_area">
                        <a href="https://web.facebook.com/smkwikrama/" target="https://web.facebook.com/smkwikrama/" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fab fa-facebook fs-3 "></i></a>
                            <a href="https://www.instagram.com/smkwikrama/" target="https://www.instagram.com/smkwikrama/ data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest"><i class="fab fa-instagram fs-3 "></i></a>
                            <a href="https://twitter.com/smkwikrama" target="https://twitter.com/smkwikrama" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype"><i class="fab fa-twitter fs-3"></i></a>
                            <a href="https://www.youtube.com/channel/UCyhEUzlXbXet57qFnDfdWuw" target="https://www.youtube.com/channel/UCyhEUzlXbXet57qFnDfdWuw" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fab fa-youtube fs-3"></i></a>
                    </div>
                  </div>
                </div>
                <!-- Single Widget-->
                <div class="col-12 col-sm-6 col-lg">
                  <div class="single-footer-widget section_padding_0_130">
                    <!-- Widget Title-->
                    <h5 class="widget-title">Tentang Wikrama</h5>
                    <!-- Footer Menu-->
                    <div class="footer_menu">
                      <ul>
                        <li><a href="#">Sejarah</a></li>
                        <li><a href="#">Penghargaan Sekolah</a></li>
                        <li><a href="#">Kerja sama</a></li>
                        <li><a href="#">Struktur Organisasi</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Single Widget-->
                <div class="col-12 col-sm-6 col-lg">
                  <div class="single-footer-widget section_padding_0_130">
                    <!-- Widget Title-->
                    <h5 class="widget-title">Jurusan</h5>
                    <!-- Footer Menu-->
                    <div class="footer_menu">
                      <ul>
                        <li><a href="#">Informasi Teknologi</a></li>
                        <li><a href="#">Pemasaran</a></li>
                        <li><a href="#">Pariwisata</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Single Widget-->
                <div class="col-12 col-sm-6 col-lg">
                  <div class="single-footer-widget section_padding_0_130">
                    <!-- Widget Title-->
                    <h5 class="widget-title">Contact</h5>
                    <!-- Footer Menu-->
                    <div class="footer_menu">
                      <ul >
                        <li><a href="#">Telepone</a></li>
                        <p> <i class="fas fa-phone-alt"></i> 0251-8242411 </p>
                        <p> <i class="fab fa-whatsapp"></i> 082221718035 </p>
                        <li><a href="#">Email Us</a></li>
                        {{-- <i class="far fa-envelope"></i>  --}}
                       <p>prohumasi@smkwikrama.net</p>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </footer>
            <div class="container text-center">
              <small>Copyright  &copy; {{ now()->year }} Ibnu Wulida Fisyawal</small>
            </div>
     </footer>
        
    
</body>
</html>