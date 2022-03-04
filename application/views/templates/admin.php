<!doctype html>
<html lang="en">

<head>
  <title>Haux.Pro</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
	<link href="<?php echo base_url("assets/material/css/material-dashboard.min.css?v=2.1.2"); ?>" rel="stylesheet" />
	<link href="<?php echo base_url("assets/css/estilo_material.css?v=") . time(); ?>" rel="stylesheet" />

  <link rel="icon" type="imagem/png" href="<?php echo base_url("favicon.ico"); ?>" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="danger" data-background-color="black">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="<?php echo site_url("home"); ?>" class="simple-text logo-mini">
          <img src="<?php echo base_url("assets/img/logo-haux-circle.png"); ?>" height="70" />
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav menu">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url("home"); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url("home/formulario"); ?>">
              <i class="material-icons">description</i>
              <p>Formulário</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url("home/tabela"); ?>">
              <i class="material-icons">content_paste</i>
              <p>Tabelas</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <p id="titulo-tela" class="navbar-brand"></p>
          </div>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Perfil</a>
                  <a class="dropdown-item" href="<?php echo site_url(); ?>">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <?php echo $contents; ?>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
			  	      <a>SKPSystem</a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, feito com a qualidade da SKPSystem
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="<?php echo base_url("assets/material/js/core/jquery.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/material/js/core/popper.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/material/js/core/bootstrap-material-design.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/material/js/plugins/perfect-scrollbar.jquery.min.js"); ?>"></script>
  <!-- Plugin for the momentJs  -->
  <script src="<?php echo base_url("assets/material/js/plugins/moment.min.js"); ?>"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="<?php echo base_url("assets/material/js/plugins/sweetalert2.js"); ?>"></script>
  <!-- Forms Validations Plugin -->
  <script src="<?php echo base_url("assets/material/js/plugins/jquery.validate.min.js"); ?>"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="<?php echo base_url("assets/material/js/plugins/jquery.bootstrap-wizard.js"); ?>"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="<?php echo base_url("assets/material/js/plugins/bootstrap-selectpicker.js"); ?>"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="<?php echo base_url("assets/material/js/plugins/bootstrap-datetimepicker.min.js"); ?>"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="<?php echo base_url("assets/material/js/plugins/jquery.dataTables.min.js"); ?>"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="<?php echo base_url("assets/material/js/plugins/bootstrap-tagsinput.js"); ?>"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="<?php echo base_url("assets/material/js/plugins/jasny-bootstrap.min.js"); ?>"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="<?php echo base_url("assets/material/js/plugins/fullcalendar.min.js"); ?>"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="<?php echo base_url("assets/material/js/plugins/jquery-jvectormap.js"); ?>"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo base_url("assets/material/js/plugins/nouislider.min.js"); ?>"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="<?php echo base_url("assets/material/js/plugins/arrive.min.js"); ?>"></script>
  <!-- Chartist JS -->
  <script src="<?php echo base_url("assets/material/js/plugins/chartist.min.js"); ?>"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url("assets/material/js/plugins/bootstrap-notify.js"); ?>"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url("assets/material/js/material-dashboard.js?v=2.1.2"); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url("assets/js/script_material.js?v=") . time(); ?>" type="text/javascript"></script>
</body>

</html>