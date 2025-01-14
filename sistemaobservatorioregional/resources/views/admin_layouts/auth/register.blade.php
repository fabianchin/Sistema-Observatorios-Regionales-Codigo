<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Soft UI Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
       
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Registro de usuario</h3>
                  <p class="mb-0">Ingrese los datos que se le solicitan</p>
                </div>
                <div class="card-body">

                    <form  method="POST" action="{{ route('register')}}" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="name" >
                                Nombre
                            </label>
                            <input 
                                type="text"
                                name="name"
                                id="name"
                                placeholder="Tu nombre"
                                class="form-control"
                                value="{{old('name')}}"
                                >
                                @error('name')
                                <p class="alert  alert-danger text-white" role="alert">
                                    {{$message}}
                                </p>
                                @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" >
                                Correo
                            </label>
                            <input 
                                type="text"
                                name="email"
                                id="email"
                                placeholder="correo@una.cr"
                                class="form-control"
                                value="{{old('email')}}"
                                >
                                @error('email')
                                <p class="alert alert-danger text-white" role="alert">
                                    {{$message}}
                                </p>
                                @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" >
                                Contraseña
                            </label>
                            <input 
                                type="password"
                                name="password"
                                id="password"
                                placeholder="Contraseña"
                                class="form-control"
                                >
                                @error('password')
                                <p class="alert alert-danger text-white" role="alert">
                                    {{$message}}
                                </p>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" >
                                Repetir contraseña
                            </label>
                            <input 
                                type="password"
                                name="password_confirmation"
                                id="password_confirmation"
                                placeholder="Contraseña"
                                class="form-control"
                                >
                                
                        </div>
                        <input
                             type="submit"
                             value="Registrar"
                             class="btn bg-gradient-info w-100 mt-4 mb-0"
                            >
                    </form>
                    
                </div>
                
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/curved-images/curved6 - Copy.jpg')"></div>
                {{-- <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/Logos-Observatorios.png')"></div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Observatorios regionales.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script>
</body>

</html>