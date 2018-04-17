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
            <li class="active"><a href="http://localhost/Framework-Pengenalan-MC/">Home</a></li>
            <li><a href="http://localhost/Framework-Pengenalan-MC/Page">About</a></li>
            <li><a href="http://localhost/Framework-Pengenalan-MC/Blog">Blog</a></li>
          </ul>
        </div>
      </div>
    </section>
  </div>


<section id="viewcrud">
  <div class="container">
    <div class="crud">
      <div class="row mar-bot40">

          <div class="title">
            <div class="container">
              <h3><span class="fa fa-star"></span>  Data Artikel <span class="fa fa-star"></span></h3>          
              <a style=" margin-bottom:20px" href="crud/tambah" class="btn btn-info col-md-2 test"><span class="fa fa-plus"> Tambah Artikel</span></a>    
              <br/>
              <br/>
            </div>
          </div>

      </div> 
      
        <table class="table table-hover" >
          <tr align="justify">
            <th class="col-md-0">Nomor</th>
            <th class="col-md-0">Id Artikel</th>
            <th class="col-md-0">Judul</th>
            <th class="col-md-0">Konten/Deskripsi</th>
            <th class="col-md-0">Gambar</th>
            <th class="col-md-0">Tanggal Posting</th>
            <th class="col-md-0">Pilihan</th>
          </tr>
          <?php 
            $no=1;
            foreach($query as $b)
            {
          ?>
          <tr align="justify">
            <td><?php echo $no++ ?></td>
            <td><?php echo $b->id_blog; ?></td>
            <td><?php echo $b->judul; ?></td>
            <td><?php echo substr($b->konten, 0, 20) . '...'; ?></td>
            <td><img style='width:100px;height:150px' src="<?php echo base_url().'assets/image/'?><?php echo $b->images; ?>"></td>
            <td><?php echo $b->tgl_posting; ?></td>
            <td>
            <a href="crud/edit/<?php echo $b->id_blog; ?>"  class="btn btn-primary">
              <span class="fa fa-edit">  Edit</span>
            </a>
            <a href="<?php echo base_url()."index.php/crud/hapus/".$b->id_blog ?> " onClick="return confirm('Apakah anda yakin ingin menghapus konten ini?')"  class="btn btn-danger">
              <span class="fa fa-trash">  Hapus</span>
            </a>
            </td>
          </tr>   
          <?php 
            }
          ?>
        </table>
    </div>
  </div>
</section>


  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <script src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="assets/js/jquery.isotope.min.js"></script>
  <script src="assets/js/jquery.nicescroll.min.js"></script>
  <script src="assets/js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="assets/js/skrollr.min.js"></script>
  <script src="assets/js/jquery.scrollTo.js"></script>
  <script src="assets/js/jquery.localScroll.js"></script>
  <script src="assets/js/stellar.js"></script>
  <script src="assets/js/responsive-slider.js"></script>
  <script src="assets/js/jquery.appear.js"></script>
  <script src="assets/js/grid.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>
  <script src="assets/contactform/contactform.js"></script>

</body>

</html>
