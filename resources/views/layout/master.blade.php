<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title', 'MyCompany') | MyCompany</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">

            <div class="inner">
                <a class="masthead-brand" href="{{route('home')}}">
                    <img class="figure-img" src="./images/logomie.png" width="100" height="100" alt="Logo Mie">
                </a><BR><BR><BR>
                <h3 class="masthead-brand">M I S O &nbsp;&nbsp;&nbsp;K A M P U N G</h3>
                <nav class="nav nav-masthead justify-content-center">



                <a  class="nav-link {{Route::is('home') ? "active" : "" }} "
                    href="{{route('home')}}">
                    Home
                </a>

                <a  class="nav-link {{Route::is('product') ? "active" : "" }} "
                    href="{{route('product')}}">
                    Product
                </a>

                <a  class="nav-link {{Route::is('testimoni') ? "active" : "" }} "
                    href="{{route('testimoni')}}">
                    Testimoni
                </a>

                <a  class="nav-link {{Route::is('about') ? "active" : "" }} "
                    href="{{route('about')}}">
                    About
                </a>

                {{-- <a class="nav-link active" href="{{route('portfolio')}}">Portfolio</a> --}}
                </nav>
            </div>
        </header>

        <main role="main" class="inner cover">
            @yield('content')
        </main>

        {{-- <footer class="mastfoot mt-auto">
        <div class="inner">
        <p>
        ©{{ date("Y") }} <a href="{{route('home')}}">MyCompany</a>
        </p>
        </div>
        </footer> --}}

        <footer class="bg-dark py-4 text-white mt-4">
            <section class="info_section layout_padding">
                <div class="container">
                  <div class="info_logo">
                    <h2>
                      Miso Kampung Bahagia
                    </h2>
                  </div>
                  <div class="info_contact">
                    <div class="row">
                      <div class="col-md-4">
                        <a href="https://goo.gl/maps/2mUTVgkTWxhw3hHTA">
                          <img src="images/location.png" alt="">
                          <span>
                            Jalan Raya Kopo No. 70, Bandung, Jawa Barat
                          </span>
                        </a>
                      </div>
                      <div class="col-md-4">
                          <img src="images/call.png" alt="">
                          <span>
                            Call : +628122160398
                          </span>
                      </div>
                      <div class="col-md-4">
                          <img src="images/mail.png" alt="">
                          <span>
                            ichikana28@gmail.com
                          </span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8 col-lg-9">
                      <div class="info_form">
                        <form action="">
                          <input type="text" placeholder="Enter your email">
                          <button>
                            subscribe
                          </button>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                      <div class="info_social">
                        <div>
                          <a href="">
                            <img src="images/facebook-logo-button.png" alt="">
                          </a>
                          <a href="">
                            <img src="images/twitter-logo-button.png" alt="">
                          </a>
                          <a href="">
                            <img src="images/instagram.png" alt="">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </section>

              <!-- end info section -->


              <!-- footer section -->
              <section class="container-fluid footer_section">
                <p>
                  &copy; <span id="displayYear"></span> All Rights Reserved By
                  <a href="https://html.design/">Free Html Templates</a>
                </p>
              </section>
        </footer>

    </div>
    <script src="{{asset('js/app.js')}}"></script>
    </body>
    </html>
