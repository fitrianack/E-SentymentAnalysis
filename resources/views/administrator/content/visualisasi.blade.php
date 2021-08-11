@extends('administrator.layouts.app2')

@section('title', 'Visualisasi E-Sentiment Analysis')

@section('analisis-sentimen', 'active')

@section ('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Visualisasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Visualisasi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-6">
          <!-- DONUT CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Statistik Data Training</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutCharttrain" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
          <!-- DONUT CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Statistik Data Testing</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutCharttest" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
          <div class="card card-warning">
              <div class="card-header">
                  <h3 class="card-title">Word Clouds</h3>
                  <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
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

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
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
      </div><!-- /.container-fluid -->
    </section>
<!-- /.content -->

@section('javascripts')
    <script>
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.

    var donutChartCanvas = $('#donutCharttrain').get(0).getContext('2d')
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
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutCharttest').get(0).getContext('2d')
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

@endsection

@endsection
