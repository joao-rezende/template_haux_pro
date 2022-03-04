<!doctype html>
<html lang="en">

<head>
	<title>Haux.Pro - Login</title>
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
  <div class="wrapper">
    <div class="main-panel full">
      <div class="content login">
		<div class="fundo">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-4 offset-sm-4">
						<div class="card black">
							<div class="card-header card-header-primary">
								<div class="pull-left" style="margin-top: 9px;">
									<h4 class="card-title">Login</h4>
									<p class="card-category">Informe seus dados para entrar no sistema</p>
								</div>
								<img class="pull-right" src="<?php echo base_url("assets/img/logo-haux-circle.png"); ?>" height="70" />
							</div>
							<div class="card-body">
								<label style="background-color: #A11C1A; padding: 7px 10px; border-radius: 50%;">
								<span class="fa fa-facebook-f" style="font-size: 20px; color: #fff; "></span>
								</label>
								<form id="login" method="post" action="<?php echo site_url("login/logar"); ?>">
									<div class="row">
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
											<label class="bmd-label-floating">Usuário</label>
											<input type="text" required class="form-control">
											</div>
										</div>
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
											<label class="bmd-label-floating">Senha</label>
											<input type="password" required class="form-control">
											</div>
										</div>
									</div>

									<button id="btn-entrar" type="submit" class="btn btn-primary btn-block">Entrar</button>
									<button id="btn-esqueci-senha" class="btn btn-primary btn-link btn-block">Esqueci minha senha</button>
									<div class="clearfix"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
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
  <script src="<?php echo base_url("assets/material/js/core/jquery.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/material/js/core/popper.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/material/js/core/bootstrap-material-design.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/material/js/plugins/perfect-scrollbar.jquery.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/material/js/material-dashboard.js?v=2.1.2"); ?>" type="text/javascript"></script>
</body>

</html>