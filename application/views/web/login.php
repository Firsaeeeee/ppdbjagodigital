<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php echo base_url(); ?>" />
    <title>Halaman Login Siswa</title>
    <link rel="icon" type="image/png" href="img/logo_min.png">
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="assets/panel/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="assets/panel/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/panel/css/core.css" rel="stylesheet" type="text/css">
    <link href="assets/panel/css/components.css" rel="stylesheet" type="text/css">
    <link href="assets/panel/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="assets/panel/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="assets/panel/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="assets/panel/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/panel/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->


    <!-- Theme JS files -->
    <script type="text/javascript" src="assets/panel/js/core/app.js"></script>
    <!-- /theme JS files -->

</head>

<body class="navbar-bottom login-container">

    <!-- Main navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="">
                <!--<img src="img/logo3.png" alt="Logo" width="30">-->
            </a>

            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            </ul>
        </div>

        <!-- <div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#">
						<i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Go to website</span>
					</a>
				</li>

				<li>
					<a href="#">
						<i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Contact admin</span>
					</a>
				</li>

				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cog3"></i>
						<span class="visible-xs-inline-block position-right"> Options</span>
					</a>
				</li>
			</ul>
		</div> -->
    </div>
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">
                <!-- Simple login form -->
                <form action="" method="post">
                    <div class="panel panel-body login-form">
                        <div class="text-center">
                            <!-- <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div> -->
                            <img src="img/logo_min.png" alt="Logo" width="100">
                            <h5 class="content-group">Form Login PPDB Online<small class="display-block">MIN 3 WAY KANAN TEGAL MUKTI</small></h5>
                            <?php
                            echo $this->session->flashdata('msg');
                            ?>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input type="text" class="form-control" name="username" placeholder="Masukkan No. Pendaftaran" required autofocus>
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input type="password" class="form-control" name="password" placeholder="Masukkan NISN" required>
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <!-- <div class="col-md-12"> -->
                        <!-- <div class="col-md-6">
									<div class="form-group">
										<a href="web/daftar" class="btn btn-primary btn-block"><i class="icon-circle-left2 position-left"></i> Daftar</a>
									</div>
								</div> -->
                        <div class="form-group">
                            <button type="submit" name="btnlogin" class="btn btn-primary btn-block">Masuk <i class="icon-circle-right2 position-right"></i></button>
                        </div>
                        <!-- </div> -->

                        <div class="text-center">
                            <!-- <a href="web/lupa_password">Lupa Password??</a> -->
                        </div>
                    </div>
                </form>
                <!-- /simple login form -->
            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->


    <!-- Footer -->
    <div class="navbar navbar-default navbar-fixed-bottom footer">
        <ul class="nav navbar-nav visible-xs-block">
            <li><a class="text-center collapsed" data-toggle="collapse" data-target="#footer"><i class="icon-circle-up2"></i></a></li>
        </ul>

        <div class="navbar-collapse collapse" id="footer">
            <div class="navbar-text">
                Copyright Jagodigital &copy; <?php echo date('Y'); ?> Panel Siswa PPDB MIN 3 WAY KANAN TEGAL MUKTI
            </div>

            <!-- <div class="navbar-right">
				<ul class="nav navbar-nav">
					<li><a href="#">About</a></li>
					<li><a href="#">Terms</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div> -->
        </div>
    </div>
    <!-- /footer -->

</html>