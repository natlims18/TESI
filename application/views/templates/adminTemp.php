<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Padaria do Barba</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>public/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>public/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="https://noticiasdemogi.com.br/wp-content/uploads/2019/10/padaria.jpg" alt="">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">1</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 2 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Pedido nº1</h4>
                <p>Você tem um novo pedido</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            

            <li>
              <hr class="dropdown-divider">
            </li>

            

            <li>
              <hr class="dropdown-divider">
            </li>


            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">2</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="<?php echo base_url(); ?>public/assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Clara</h4>
                  <p>Novo pedido de Ifood</p>
                  <p>10 mins. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="<?php echo base_url(); ?>public/assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Pedido Recebido</p>
                  <p>2 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="data:image/jpeg;base64,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" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Sr. Barba</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Sr. Barba</h6>
              <span>Padeiro</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url(); ?>index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url();?>produto">
          <i class="bi bi-device-ssd"></i>
          <span>Produtos</span>
        </a>
      </li><!-- End Dashboard Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    
     <?php echo $contents; ?> -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Julia e Natalia</span></strong>. Todos os direitos reservados
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>public/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url(); ?>public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>public/assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>public/assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo base_url(); ?>public/assets/vendor/quill/quill.min.js"></script>
  <script src="<?php echo base_url(); ?>public/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo base_url(); ?>public/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url(); ?>public/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>public/assets/js/main.js"></script>

</body>
</html>