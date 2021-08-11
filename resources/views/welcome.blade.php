<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Sentiment Analysis</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Any Chart -->
  <script src="https://cdn.anychart.com/samples/tag-cloud/the-old-man-and-the-sea/ignore-items.js"></script>
  <script src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-tag-cloud.min.js"></script>
  <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
  <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
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
        <h1><a href="/"><span>E-</span>SentimentAnalysis</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#main">Beranda</a></li>
          <li><a href="#features">Statistik</a></li>
          <li><a href="#team">Data Sentimen</a></li>
          <li><a href="#contact">Form Masukkan</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-in">
      <h1></h1>
      <h1>WILUJENG SUMPING!</h1>
      <h2>Ini adalah Halaman E-Sentiment Analysis Pemerintah Provinsi Jawa Barat</h2>
      <img src="{{ asset ('assets/img/landing-page.jpg') }}" style="width: 350px" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100">
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

      <div class="container-fluid" style="padding:0px">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1206524.8752788703!2d107.1356167155011!3d-6.825147970015075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0xbc18a454fc8e9d7e!2sJawa%20Barat!5e0!3m2!1sid!2sid!4v1623649017235!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
      </div>

    </section><!-- End Get Started Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="padd-section text-center">

      <div class="container-fluid" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Statistik</h2>
        </div>
        <div class="row">
          <div class="col-md-6">
          <!-- DONUT CHART -->
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Data Training</h3>
              </div>

              <div class="card-body">
                <canvas id="donutChart1" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        <div class="col-md-6">
          <!-- DONUT CHART -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Testing</h3>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
          <div class="card card-warning">
              <div class="card-header">
                  <h3 class="card-title">Word Clouds</h3>
                  </div>
                <div class="card-body">
                <div id="word" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></div>
            </div>
        </div>
        </div>
        <div class="col-md-6">
            <!-- BAR CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Bar Chart</h3>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
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
          <h2>Data Sentimen</h2>
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
          <h2>Tulis masukkan anda disini</h2>
        </div>
          <div class="col-lg-12 col-md-6">
            <div class="form">
              <form action="/predict" method="post" role="form" class="php-email-form">
                @csrf
                <div class="form-group">
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email" data-rule="minlen:8" data-msg="Masukkan paling sedikit 8 karakter" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="sentimen" rows="5" data-rule="required" data-msg="Tuliskan masukkan anda di sini..." placeholder="Kritik dan Saran"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message"></div>
                </div>
                <div class="text-center"><button type="submit">Kirim masukkan</button></div>
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
            data: [<?php echo "$positif_test_count"; ?>, <?php echo "$negatif_test_count"; ?>],
            backgroundColor : ['#3c8dbc', '#d2d6de'],
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

      //-------------
      //- DONUT CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var donutChartCanvas = $('#donutChart1').get(0).getContext('2d')
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

    var areaChartData = {
      labels  : ['April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Positif',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [ <?php echo "$april_positif_count"; ?>, <?php echo "$mei_positif_count"; ?>, <?php echo "$juni_positif_count"; ?>, <?php echo "$juli_positif_count"; ?>]
        },
        {
          label               : 'Negatif',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [ <?php echo "$april_negatif_count"; ?>, <?php echo "$mei_negatif_count"; ?>, <?php echo "$juni_negatif_count"; ?>, <?php echo "$juli_negatif_count"; ?>]
        },
      ]
    }

    //-------------
    //- BAR CHART -
    //-------------

    var areaChartData = {
      labels  : ['April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Positif',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [ <?php echo "$april_positif_count"; ?>, <?php echo "$mei_positif_count"; ?>, <?php echo "$juni_positif_count"; ?>, <?php echo "$juli_positif_count"; ?>]
        },
        {
          label               : 'Negatif',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [ <?php echo "$april_negatif_count"; ?>, <?php echo "$mei_negatif_count"; ?>, <?php echo "$juni_negatif_count"; ?>, <?php echo "$juli_negatif_count"; ?>]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    anychart.onDocumentReady(function () {
      var data = [
    {"x": "pemprov", "value": 1090, },
    {"x": "jabar", "value": 9830, category: "Indo-European"},
    {"x": "ridwan", "value": 5440, category: "Indo-European"},
    {"x": "kamil", "value": 5270, category: "Indo-European"},
    {"x": "provinsi", "value": 4220, category: "Afro-Asiatic"},
    {"x": "emil", "value": 2810, category: "Austronesian"},
    {"x": "pemerintah", "value": 2670, category: "Indo-European"},
    {"x": "masyarakat", "value": 2610, category: "Indo-European"},
    {"x": "jawa", "value": 2290, category: "Indo-European"},
    {"x": "barat", "value": 2290, category: "Indo-European"},
    {"x": "daerah", "value": 1500, category: "Afro-Asiatic"},
    {"x": "bantuan", "value": 1480, category: "Indo-European"},
    {"x": "kinerja", "value": 1290, category: "Japonic"},
    {"x": "gubernur", "value": 1290, category: "Indo-European"},
    {"x": "kami", "value": 1200, category: "Indo-European"},
    {"x": "semoga", "value": 1310, category: "Indo-European"},
    {"x": "covid", "value": 1100, category: "Indo-European"},
    {"x": "allah", "value": 1220, category: "Indo-European"},
    {"x": "lapangan", "value": 1250, category: "Indo-European"},
    {"x": "tahun", "value": 1500, },
    {"x": "warga", "value": 1000, },
    {"x": "usaha", "value": 1000, },
    {"x": "pasti", "value": 1000, },
    {"x": "orang", "value": 1000, },
    {"x": "anak", "value": 1900, },
    {"x": "mohon", "value": 1100, },
    {"x": "semangat", "value": 2900, },
    {"x": "terima", "value": 1100, },
    {"x": "indonesia", "value": 1000, },
    {"x": "sekolah", "value": 1600, },
    {"x": "semoga", "value": 1090, },
    {"x": "bayar", "value": 1090, },
    {"x": "hidup", "value": 1090, },
    {"x": "sangat", "value": 1090, },
    {"x": "kalo", "value": 1090, },
    {"x": "makan", "value": 1090, },
    {"x": "bansos", "value": 1000, },
    {"x": "jika", "value": 1090, },
    {"x": "sasaran", "value": 290, },
    {"x": "jangan", "value": 100, },
    {"x": "gini", "value": 1080, },
    {"x": "tepat", "value": 1110, },
    {"x": "salah", "value": 1090, },
    {"x": "cepat", "value": 1090, },
    {"x": "dalam", "value": 1090, },
    {"x": "jadi", "value": 1090, },
    {"x": "sama", "value": 1090, },
    {"x": "akan", "value": 1090, },
    {"x": "buat", "value": 1500, },
    {"x": "mau", "value": 1090, },
    {"x": "paling", "value": 1090, },
    {"x": "bawah", "value": 2000, },
    {"x": "sesuai", "value": 1090, },
    {"x": "baru", "value": 1090, },
    {"x": "punya", "value": 1090, },
    {"x": "kena", "value": 1090, },
    {"x": "apa", "value": 1090, },
    {"x": "tiap", "value": 1090, },
    {"x": "kerja", "value": 100, },
    {"x": "mereka", "value": 1090, },
    {"x": "makin", "value": 1090, },
    {"x": "sangat", "value": 1090, },

  ];
        // create tag cloud
        var chart = anychart.tagCloud(data);
        var colors = anychart.scales
            .ordinalColor()
            .colors(['#26959f', '#f18126', '#3b8ad8', '#60727b', '#e24b26']);

        // set chart title
        chart

          // set array of angles, by which words will be placed
          .angles([-90, 0, 90])
          // additional empty space in all directions from the text, only in pixels
          // set color scale
            .colorScale(colors);

        // set data with settings

        // set container id for the chart
        chart.container('word');
        // initiate chart drawing
        chart.draw();
    });

  </script>
</body>

</html>
