<?php

session_start();
if(@$_SESSION['log_me_in'] <> 1){
   header("location:../index.php");
 }
  include('show/show.php');
?>
<html>
<style>
   * {
      font-family: 'phetsarath ot';
   }
   body{
      background: #ccc;

   }

   #save {
      margin-top: 30;
   }
</style>

<head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>ລະບົບບໍລິຫານ ເງິນເດືອນພະນັກງານ</title>
   <link rel="icon" href="logo/home_stay.jpeg">
   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- Tempusdominus Bootstrap 4 -->
   <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
   <!-- iCheck -->
   <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- JQVMap -->
   <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="dist/css/adminlte.min.css">
   <!-- overlayScrollbars -->
   <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
   <!-- summernote -->
   <?php //include('../connect.php'); ?>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<style>
   *{
        font-family:Noto sans lao;
    }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
   <div class="container-fluid mt-2">
      <div class="row">
      <div class="col-lg-3 col-6">
         <div class="small-box bg-light ">
            <div class="inner">
               <h4>ຈຳນວນລາຍການທັງໝົດ</h4>
               <p>ມີທັງໝົດ: <?= $co[0]; ?>  ລາຍການ</p>
            </div>
            <div class="icon">
            <i class="bi bi-card-checklist"></i>
            </div>
            <a href="#" class="small-box-footer">ຈຳນວນ</a>
         </div>
      </div>
      <div class="col-lg-3 col-6">
         <div class="small-box bg-success">
            <div class="inner">
               <h4>ລາຍຈ່າຍທັງໝົດ</h4>
               <p>ລວມເງິນທັງໝົດ: <?= number_format($co1[0]); ?>  ກີບ</p>
            </div>
            <div class="icon">
            <i class="fas fa-dollar-sign"></i>
            </div>
            <a href="#" class="small-box-footer">ລວມເງິນ <i class="fas fa-dollar-sign"></i></a>
         </div>
      </div>
      <div class="col-lg-3 col-6">
         <div class="small-box bg-primary">
            <div class="inner">
               <h4>ລາຍຈ່າຍພາຍໃນມື້ນີ້</h4>
               <p> <?= number_format($show_amount[0]); ?>  ກີບ</p>
            </div>
            <div class="icon">
            <i class="fas fa-dollar-sign"></i>
            </div>
            <a href="#" class="small-box-footer">ວັນນີ້ </a>
         </div>
      </div>
      <div class="col-lg-3 col-6">
         <div class="small-box bg-warning">
            <div class="inner">
               <h4>ລາຍຈ່າຍພາຍໃນເດືອນີ້</h4>
               <p>ທັງໝົດ: <?= number_format($show_month[0]); ?> ກີບ</p>
            </div>
            <div class="icon">
            <i class="fas fa-dollar-sign"></i>
            </div>
            <a href="#" class="small-box-footer">ເງິນພາຍໃນເດືອນ  <i class="fas fa-dollar-sign"></i></a>
         </div>
      </div>
      <div class="col-lg-3 col-6">
         <div class="small-box bg-dark">
            <div class="inner">
               <h4>ລາຍຈ່າຍປີນີ້</h4>
               <p>ທັງໝົດ: <?= number_format($show_year[0]); ?> ກີບ</p>
            </div>
            <div class="icon">
            <i class="fas fa-dollar-sign"></i>
            </div>
            <a href="#" class="small-box-footer">ເງິນພາຍໃນປີ <i class="fas fa-dollar-sign"></i></a>
         </div>
      </div>
      


   <!-- jQuery -->
   <script src="plugins/jquery/jquery.min.js"></script>
   <!-- jQuery UI 1.11.4 -->
   <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
   <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
   <script>
      $.widget.bridge('uibutton', $.ui.button)
   </script>
   <!-- Bootstrap 4 -->
   <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- ChartJS -->
   <script src="plugins/chart.js/Chart.min.js"></script>
   <!-- Sparkline -->
   <script src="plugins/sparklines/sparkline.js"></script>
   <!-- JQVMap -->
   <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
   <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
   <!-- jQuery Knob Chart -->
   <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
   <!-- daterangepicker -->
   <script src="plugins/moment/moment.min.js"></script>
   <script src="plugins/daterangepicker/daterangepicker.js"></script>
   <!-- Tempusdominus Bootstrap 4 -->
   <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
   <!-- Summernote -->
   <script src="plugins/summernote/summernote-bs4.min.js"></script>
   <!-- overlayScrollbars -->
   <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
   <!-- AdminLTE App -->
   <script src="dist/js/adminlte.js"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="dist/js/demo.js"></script>
   <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
   <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>