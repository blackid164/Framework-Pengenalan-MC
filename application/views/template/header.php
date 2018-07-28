<?php
  if (!$this->session->userdata('username')) {
    redirect('login');
  }

  // echo $this->session->userdata('level');
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/dt/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/dt/jquery.dataTables.min.css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <nav class="navbar-inverse navbar-default" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url() ?>home"><img class="img-responsive" alt="Coding" src="<?php echo base_url() ?>assets/img/logo1.png" width="40" height="40" style="margin-top: -10px;"></a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url() ?>home">Home</a></li>
          <li><a href="<?php echo base_url() ?>blog">Blog</a></li>
          <li><a href="<?php echo base_url() ?>about">About</a></li>
          <li><a href="<?php echo base_url() ?>user/ganti_pass">Ganti Password</a></li>
          <li><a href="<?php echo base_url() ?>login/logout">Hello <?php echo $this->session->userdata('username'); ?>, Logout</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>
  <?php if($this->session->flashdata('user_registered')): ?>
         <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('user_loggedin')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('login_failed')): ?>
      <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('not_allow')): ?>
      <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('not_allow').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedout')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('updated')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('updated').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('deleted')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('deleted').'</p>'; ?>
    <?php endif; ?>


  