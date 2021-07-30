<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Sentyment Analysis</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset ('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset ('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset ('assets/vendor/modal-video/css/modal-video.min.css') }}" rel="stylesheet}" type="text/css">
  <link href="{{ asset ('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset ('assets/vendor/aos/aos.css') }}" rel="stylesheet" type="text/css">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset ('DataTables/datatables.min.css')}}">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <link rel="icon" href="{{ asset ('assets/img/jabar.ico') }}" type="image/x-icon"/>

  <!-- Template Main CSS File -->
  <link href="{{ asset ('assets/css/style.css') }}" rel="stylesheet" type="text/css">

  <!-- Chart JS -->
 

  <!-- =======================================================
  * Template Name: eStartup - v2.2.1
  * Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="/"><span>E-</span>Sentyment Analysis Jabar</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#main">Beranda</a></li>
          <li><a href="#features">Statistik</a></li>
          <li><a href="#team">Sentimen</a></li>
          <li><a href="#contact">Form Kritik dan Saran</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-in">
      <h1></h1>
      <h1>WILUJENG SUMPING!</h1>
      <h2>Ini adalah Halaman E-Sentyment Analysis Pemerintah Provinsi Jawa Barat</h2>
      <img src="{{ asset ('assets/img/hero-img.png') }}" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100">
      <a href="#get-started" class="btn-get-started scrollto">Mulai</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">

          <h2>PROVINSI JAWA BARAT </h2>
          <img src="{{ asset ('assets/img/west_java.png') }}" class="img-fluid">
          <p class="separator">Jawa Barat (biasa disingkat Jabar) adalah salah satu provinsi di Indonesia yang terletak di Pulau Jawa dengan Ibu Kota Bandung. Wilayah Provinsi Jabar berbatasan dengan Provinsi Banten, Provinsi Jawa Tengah, dan DKI Jakarta. Provinsi Jawa Barat didirikan tanggal 4 Juli 1950 berdasarkan Undang-Undang No. 11 Tahun 1950 yang juga meliputi wilayah Banten. Namun, sejak adanya pemekaran wilayah, Banten menjadi provinsi tersendiri pada November 2000 dengan nama Provinsi Banten.</p>

        </div>
      </div>

      <div class="container-fluid">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1206524.8752788703!2d107.1356167155011!3d-6.825147970015075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0xbc18a454fc8e9d7e!2sJawa%20Barat!5e0!3m2!1sid!2sid!4v1623649017235!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

    </section><!-- End Get Started Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Statistik</h2>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-md-12">
          <!-- DONUT CHART -->
            <div class="card">
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Features Section ======= -->
    <section id="team" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Sentimen</h2>
        </div>

        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>No</th>
                  <th>Sentimen</th>
                  <th>Tgl & Waktu</th>
                  <th>Kategori</th>
              </tr>
          </thead>
          <tbody>
          <?php $no=0; ?>
            @foreach($sentimen as $s)
          <?php $no++; ?>
              <tr>
                  <td>{{$no}}</td>
                  <td>{{$s->sentimen}}</td>
                  <td>{{$s->tgl_waktu}}</td>
                  <td>{{$s->kategoris->kategori}}</td>
              </tr>
            @endforeach
            </tbody>
        </table>
        <div class="row" data-aos="fade-up" data-aos-delay="100">

        </div>
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="padd-section">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Form Kritik dan Saran</h2>
        </div>
          <div class="col-lg-12 col-md-6">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email" data-rule="minlen:8" data-msg="Masukkan paling sedikit 8 karakter" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Tolong tuliskan kritik dan saran anda di sini..." placeholder="Kritik dan Saran"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Kritik & saran berhasil dikirim. Terima kasih!</div>
                </div>
                <div class="text-center"><button type="submit">Kirim kritik & saran</button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>

    <div class="copyrights">
      <div class="container">
        <p> <b> Copyright &copy; <script>document.write(new Date().getFullYear())</script>  E-Sentyment Analysis Jabar. All rights reserved.</b></p>
      </div>
    </div>

  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset ('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset ('assets/vendor/modal-video/js/modal-video.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/hoverIntent/hoverIntent.js') }}"></script>
  <script src="{{ asset ('assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{   asset ('assets/js/main.js')  }}"></script>
  <!-- DataTables -->
  <script src="{{asset('DataTables/datatables.min.js')}}"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    } );
  </script>
  <!-- OPTIONAL SCRIPTS -->
  <script src="{{asset ('plugins/chart.js/Chart.min.js') }}"></script>
  <script>
      //-------------
      //- DONUT CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
      var donutData        = {
        labels: [
            'Positif',
            'Negatif',
        ],
        datasets: [
          {
            data: [<?php echo "$positifCount"; ?>, <?php echo "$negatifCount"; ?>],
            backgroundColor : ['#00a65a', '#f56954'],
          }
        ]
      }
      var donutOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })
  </script>
</body>

</html>