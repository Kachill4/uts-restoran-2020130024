@extends('layout.master')
@section('title', 'testimoni')
@section('content')
<h1 class="cover-heading">Testimoni</h1>

<section class="client_section layout_padding">
    <div class="container ">
      <div class="heading_container">
        <h2>
          What Cutomers Says
        </h2>
        <hr>
      </div>

      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="client_container layout_padding-top">
                  <div class="img-box">
                    <img src="images/anton.png" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                    Antoni Wijaya
                    </h5>
                    <p>
                    <img src="images/left-quote.png" alt="">
                    <span>
                        Mienya enak !!!
                    </span>
                    <img src="images/right-quote.png" alt=""> <br>
                    Kuah misonya enak dan nikmat.
                    Apalagi ditambah dengan sambel yang seger, jadi makin gurih.
                    </p>
                </div>
                </div>
            </div>

             <div class="carousel-item">
                <div class="client_container layout_padding-top">
                  <div class="img-box">
                    <img src="images/efano.png" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                    Efano Paulus Calvin
                    </h5>
                    <p>
                    <img src="images/left-quote.png" alt="">
                    <span>
                        Rasanya enak ^_^
                    </span>
                    <img src="images/right-quote.png" alt=""> <br>
                    Untuk orang-orang yang baru pertama kali nyobain bakalan nyobain lagi sih....
                    </p>
                </div>
                </div>
            </div>

          <div class="carousel-item">
            <div class="client_container layout_padding-top">
              <div class="img-box">
                <img src="images/erik.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Erik Mario
                </h5>
                <p>
                  <img src="images/left-quote.png" alt="">
                  <span>
                    Nagih Loh....
                  </span>
                  <img src="images/right-quote.png" alt=""> <br>
                  Untuk keseluruhannya oke.
                  Untuk segi rasa kuahnya itu gurih jadi bikin ketagihan terus👍🏻
                </p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="client_container layout_padding-top">
              <div class="img-box">
                <img src="images/ima.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Elizabeth Imanuella
                </h5>
                <p>
                  <img src="images/left-quote.png" alt="">
                  <span>
                    Rasanya enak banget !!!
                  </span>
                  <img src="images/right-quote.png" alt=""> <br>
                  Porsinya pas buat 1 orang,
                  ayamnya banyak... tekstur kerupuknya juga renyah...
                  bumbu kuahnya rich bgt, klo dimakan pas panas perfectttt 🧡👍🏻
                </p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="client_container layout_padding-top">
              <div class="img-box">
                <img src="images/kelvin.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Kelvin Natanael
                </h5>
                <p>
                  <img src="images/left-quote.png" alt="">
                  <span>
                    Enak dan terjangkau >.<
                  </span>
                  <img src="images/right-quote.png" alt=""> <br>
                  Menurut saya enak dan sesuai dengan selera saya.
                  Kuahnya pada Miso gurih dan harganya juga cukup untuk dompet mahasiswa.
                  Kalau bisa banyakin lagi porsinya yaa.... 😁😁😁
                </p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="client_container layout_padding-top">
              <div class="img-box">
                <img src="images/nopal.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                    Naufal Putra
                </h5>
                <p>
                  <img src="images/left-quote.png" alt="">
                  <span>
                    Misonya enak dan porsinya pas !!!
                  </span>
                  <img src="images/right-quote.png" alt=""> <br>
                  Rekomen deh buat yang mau Miso dengan
                  rasa yang enak dan harga terjangkau
                </p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="client_container layout_padding-top">
              <div class="img-box">
                <img src="images/vio.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Viona Marshela
                </h5>
                <p>
                  <img src="images/left-quote.png" alt="">
                  <span>
                    Mie pangsit medan rasanya mantep banget dan aku suka banget!!!
                  </span>
                  <img src="images/right-quote.png" alt=""> <br>
                  Mie pangsit medan rasanya mantep banget.
                  Kerasa rempah rempahnya dan kaya akan bumbu.
                  Buat miso soup nya juga oke dari kuah nya gurih dan banyak isinya.
                  Sambel ijo nya oke banget buat penyuka pedes ini sih juara pedes nya dan
                  sambel merahnya oke juga tetapi tidak terlalu pedas sehingga
                  cocok untuk orang yang tidak suka pedas.
                </p>
              </div>
            </div>
          </div>



        </div>

        <a class="carousel-control-prev"
        href="#carouselExample2Controls"
        role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample2Controls"
        role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </section>



@endsection
