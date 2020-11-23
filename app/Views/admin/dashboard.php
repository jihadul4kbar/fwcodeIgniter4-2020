<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= esc($judul);?></title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css" >
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/fontawesome-5.9.0/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $nama_lengkap;?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title"><?php echo $level;?></div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="\auth\logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?= base_url();?>">Website</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url();?>">Wb</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Menu</li>

              <?php if($level == "Administrator"){?>
              <li class="nav-item  active">
                <a href="<?= base_url();?>" class="nav-link"><i class="fas fa-fire"></i><span>Beranda</span></a>
              </li>
              <li><a class="nav-link" href="<?= base_url();?>/Artikel"><i class="far fa-square"></i> <span>Artikel</span></a></li>
              <li><a class="nav-link" href="<?= base_url();?>/User"><i class="far fa-square"></i> <span>User</span></a></li>
              <!--<li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
                  <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
                  <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                </ul>
              </li>-->
            <?php } elseif($level == "Editor") { ?>
              <li class="nav-item  active">
                <a href="<?= base_url();?>" class="nav-link"><i class="fas fa-fire"></i><span>Beranda</span></a>
              </li>
              <li><a class="nav-link" href="<?= base_url();?>/Artikel"><i class="far fa-square"></i> <span>Artikel</span></a></li>
            <?php } elseif($level == "Author"){ ?>
              <li class="nav-item  active">
                <a href="<?= base_url();?>" class="nav-link"><i class="fas fa-fire"></i><span>Beranda</span></a>
              </li>
            <?php } ?>
            </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
 			<?php echo view($content);?>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="<?php echo base_url();?>/assets/bootstrap/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url();?>/assets/bootstrap/js/popper.min.js" ></script>
  <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>/assets/bootstrap/js/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url();?>/assets/bootstrap/js/moment.min.js"></script>
  <script src="<?php echo base_url();?>/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Template JS File -->
  <script src="<?php echo base_url();?>/assets/js/scripts.js"></script>
  <script src="<?php echo base_url();?>/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="../assets/js/page/index.js"></script>
</body>
</html>
