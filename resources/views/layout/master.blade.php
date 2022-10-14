<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'MyCompany') | MyCompany</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <a class="navbar-brand py-0 mr-0" href="https://www.hokben.co.id/">
                    <img class="figure-img" src="./images/logomie.png" width="100" height="100" alt="Logo Mie">
                </a>
            <div class="inner">
                <h3 class="masthead-brand">MyCompany</h3>
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

                {{-- <a class="nav-link active" href="{{route('portfolio')}}">Portfolio</a> --}}
                </nav>
            </div>
        </header>
        <main role="main" class="inner cover">
        @yield('content')
        </main>
        <footer class="mastfoot mt-auto">
        <div class="inner">
        <p>
        ©{{ date("Y") }} <a href="{{route('home')}}">MyCompany</a>
        </p>
        </div>
        </footer>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    </body>
    </html>
