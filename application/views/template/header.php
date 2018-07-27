<?php
  if (!$this->session->userdata('username')) {
    redirect('login');
  }

  // echo $this->session->userdata('level');
?>
<!DOCTYPE html>
<html class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Pemrograman Web Framework</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="assets/css/isotope.css" media="screen" />
  <link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/bootstrap-theme.css">
  <link href="assets/css/responsive-slider.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/skin/default.css">
</head>

<body>

  <div class="header">
    <section id="header" class="appear">

      <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="fa fa-bars color-white"></span>
          </button>
          <h1><a class="navbar-brand" href="http://localhost/Framework-Pengenalan-MC/" data-0="line-height:90px;" data-300="line-height:50px;">Windhu
          </a></h1>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
            <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
            <li><a href="<?php echo base_url() ?>About">About</a></li>
            <li><a href="<?php echo base_url() ?>Blog">Blog</a></li>
          </ul>
        </div>
        <!--/.navbar-collapse -->
      </div>


    </section>
  </div>