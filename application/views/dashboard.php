<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title ?></title>
	<link href='<?=base_url("assets/uploads/images/LogoIconKulzein2.png"); ?>' rel='shortcut icon' type='image/x-icon' />
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <!-- <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"> -->
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!--datatable-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets')?>/vendor/DataTables/datatables.min.css"/>

  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- Modal CSS -->
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/toastr/toastr.min.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    
    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>

      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
     </a>
    </ul>
    
   <!--  <button href="<?=base_url()?>index.php/dashboard/logout" class="btn btn-warning">
    <i class="nav-icon fas fa-sign-out-alt">KELUAR</i>
    </button> -->
    
    <a class="btn btn-default" href="<?php echo base_url('index.php/login/logout')?>">
      <?php 
              $this->session->flashdata('pesan');
            ?>
    <i class="nav-icon fas fa-sign-out-alt">Logout</i>
    </a>
  
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url()?>index.php/dashboard" class="brand-link">
           <img src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/dist/img/logoatas.png"
           style="opacity: .9" >
     <!--  <span class="brand-text font-weight-light">KULZEIN ADMIN</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url().'assets/uploads/images/'.$user['foto_admin']?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <?php echo 'Selamat Datang , ' .$user['nama']; ?>
         <!--  <a href="<?=base_url()?>index.php/dashboard/profil_admin" class="d-block">ADMIN KULZEIN</a> -->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="<?=base_url()?>index.php/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url()?>index.php/Data_kostumer" class="nav-link">
              <i class="nav-icon fas fa fa-users"></i>
              <p>
              Data Kostumer
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Data Produk
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url()?>index.php/Data_p_rumahan" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <img src="<?=base_url("assets/uploads/images/rumahan.png"); ?>">
                  <p>Data Produk Rumahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url()?>index.php/Data_p_event" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <img src="<?=base_url("assets/uploads/images/event.png"); ?>">
                  <p>Data Produk Event</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url()?>index.php/Data_p_ready_to_cook" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <img src="<?=base_url("assets/uploads/images/readytocook.png"); ?>">
                  <p>Data Produk Ready To Cook</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item">
            <a href="<?=base_url()?>index.php/Data_artikel" class="nav-link">
              <i class="nav-icon fas fa fa-newspaper"></i>
              <p>
                Data Artikel
              </p>
            </a>
          </li>
          <!--  <li class="nav-item">
            <a href="<?=base_url()?>index.php/dashboard/grafikPenjualan" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Grafik
              </p>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a href="<?=base_url()?>index.php/grafik" class="nav-link">
              <i class="nav-icon fas fa fa-chart-bar"></i>
              <p>
                Grafik
              </p>
            </a>
          </li> -->
          
           <li class="nav-item">
            <a href="<?=base_url()?>index.php/data_checkout" class="nav-link">
              <i class="nav-icon fas fa fa-shopping-bag"></i>
              <p>
                Data Transaksi
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?=base_url()?>index.php/laporan" class="nav-link">
              <i class="nav-icon fas fa fa-book"></i>
              <p>
                Laporan 
              </p>
            </a>
          </li>
        

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0 text-dark">Dashboard</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url()?>index.php/dashboard">Beranda</a></li>
              <li class="breadcrumb-item active"></li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    




   <?php 
    $this->load->view($konten);

   ?>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 Admin Kulzein.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>



<!-- jQuery -->
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/dist/js/adminlte.js"></script>
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/dist/js/pages/dashboard3.js"></script>

<!-- OPTIONAL SCRIPTS -->
<!-- <script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script> -->
<!-- ChartJS -->
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/chart.js/Chart.min.js"></script>
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/dist/js/demo.js"></script>




<!-- DataTables -->
<script type="text/javascript" src="<?php echo base_url('assets')?>/vendor/DataTables/datatables.min.js"></script>
<!-- <script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/datatables/jquery.dataTables.min.js"></script>
<script src=<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js></script>
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script type="text/javascript" src="<?php base_url('assets')?>/vendor/AdminLTE-3.0.5/plugins/DataTables/datatables.min.js"></script> -->

<!-- date-range-picker -->

<!-- Select2 -->
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/select2/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/moment/moment.min.js"></script>
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Modal -->
<!-- Bootstrap 4 -->
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/toastr/toastr.min.js"></script>





<script type="text/javascript">
  $(document).ready( function () {
    $('#tbl_artikel').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $('#tbl_produk_rumahan').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $('#tbl_produk_event').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
    $('#tbl_kostumer').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $('#tbl_checkout').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
      });
</script>

<!-- <script>
  $(document).ready( function () {
    $('#tbl_artikel').DataTable();
} );
</script> -->


<!-- datetimepicker -->
<script >
//Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
</script>


<!-- PRINT LAPORAN -->
<!-- <script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script> -->
<script>
   $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------
    var areaChartCanvas = $('#barChart').get(0).getContext('2d')

    var areaChartData = {
      // labels  : ['Rumahan','Event','Ready to Cook'],
      datasets: [
        {
          label               : 'Rumahan',
          backgroundColor     : 'rgba(60,60,190,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,150,159,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [
            <?php echo $this->db->query("SELECT MONTH(tanggal_order) AS bulan, COUNT(*) AS jumlah_orderan
            FROM tbl_checkout
            WHERE tanggal_order BETWEEN '2021-01-01' AND '2021-02-28' AND id_menu = '1'
            GROUP BY MONTH(tanggal_order);")->num_rows();?>],
        },
        {
          label               : 'Event',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [
          <?php echo $this->db->query("SELECT MONTH(tanggal_order) AS bulan, COUNT(*) AS jumlah_orderan
          FROM tbl_checkout
          WHERE tanggal_order BETWEEN '2021-01-01' AND '2021-02-28' AND id_menu = '2'
          GROUP BY MONTH(tanggal_order);")->num_rows();?>],
        },
        {
          label               : 'Ready to Cook',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [
          <?php echo $this->db->query("SELECT MONTH(tanggal_order) AS bulan, COUNT(*) AS jumlah_orderan
          FROM tbl_checkout
          WHERE tanggal_order BETWEEN '2021-01-01' AND '2021-02-28' AND id_menu = '3'
          GROUP BY MONTH(tanggal_order);")->num_rows();?>]
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
//-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = barChartData.datasets[0]
    var temp1 = barChartData.datasets[1]
    var temp2 = barChartData.datasets[2]
    barChartData.datasets[0] = temp0
    barChartData.datasets[1] = temp1
    barChartData.datasets[2] = temp2

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#kostumer').get(0).getContext('2d')
    var kostumerData     = {
      labels: [
          'laki-laki', 
          'Perempuan'
      ],
      datasets: [
        {
          data: [<?php echo $this->db->query("SELECT jenis_kelamin from tbl_kostumer 
            where jenis_kelamin='laki-laki'")->num_rows();?>,
          <?php echo $this->db->query("SELECT jenis_kelamin from tbl_kostumer 
            where jenis_kelamin='Perempuan'")->num_rows();?>],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#kostumer').get(0).getContext('2d')
    var pieData        = kostumerData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })
  })
</script>
<script>
  $(function () {
  //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#menupalingsuka').get(0).getContext('2d')
    var menuSukaData     = {
      labels: [
          'Menu Rumahan', 
          'Menu Event',
          'Menu Ready to Cook'
      ],
      datasets: [
        {
          data: [
             
          <?php echo $this->db->query("SELECT MONTH(tanggal_order) AS bulan, MAX(id_menu) AS produk, MAX(kode_produk) AS menu_disukai
            FROM tbl_checkout
            WHERE tanggal_order BETWEEN '2021-02-01' AND '2021-03-31' AND id_menu = '1'
            GROUP BY MONTH(tanggal_order)")->num_rows();?>,
          <?php echo $this->db->query("SELECT MONTH(tanggal_order) AS bulan, MAX(id_menu) AS produk, MAX(kode_produk) AS menu_disukai
            FROM tbl_checkout
            WHERE tanggal_order BETWEEN '2021-02-01' AND '2021-03-31' AND id_menu = '2'
            GROUP BY MONTH(tanggal_order)")->num_rows();?>,
          <?php echo $this->db->query("SELECT MONTH(tanggal_order) AS bulan, MAX(id_menu) AS produk, MAX(kode_produk) AS menu_disukai
            FROM tbl_checkout
            WHERE tanggal_order BETWEEN '2021-02-01' AND '2021-03-31' AND id_menu = '3'
            GROUP BY MONTH(tanggal_order)")->num_rows();?>],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#menupalingsuka').get(0).getContext('2d')
    var pieData        = menuSukaData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })
  })
</script>

<script>
  $(function () {
 //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#kostumer_cetak').get(0).getContext('2d')
    var kostumerCetakData     = {
      labels: [
          'laki-laki', 
          'Perempuan'
      ],
      datasets: [
        {
          data: [<?php echo $this->db->query("SELECT jenis_kelamin from tbl_kostumer 
            where jenis_kelamin='laki-laki'")->num_rows();?>,
          <?php echo $this->db->query("SELECT jenis_kelamin from tbl_kostumer 
            where jenis_kelamin='Perempuan'")->num_rows();?>],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCetakCanvas = $('#kostumer_cetak').get(0).getContext('2d')
    var pieCetakData        = kostumerCetakData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCetakCanvas, {
      type: 'pie',
      data: pieCetakData,
      options: pieOptions      
    })
  })
</script>

</body>
</html>
