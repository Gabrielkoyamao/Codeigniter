<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sociedade e Tecnologia</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
	<link rel="stylesheet" href="/dist/css/skins/skin-blue.min.css">
	<!-- Custom Css for Login Page -->
	<link rel="stylesheet" href="/dist/css/login.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->


<body class="hold-transition skin-green layout-top-nav">

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">

		</section>

		<!-- Main content -->
		<section class="content">
				<div class="container">
					<div class="card card-container">

						<div class="col-md-4 col-md-offset-4 well form-login">
							<center>
							<i class="fa fa-user-circle" style="font-size:90px; margin-bottom:20px; margin-top:20px"></i>
							</center>
							<form class="form-signin" action="/login/login_login" method="post">
								<span id="reauth-email" class="reauth-email"></span>
								<input type="email" id="email" name="email" class="form-control" placeholder="Email address" value="<?=@$data_email?>"required autofocus>
								<label class="control-label text-danger"><?=@$errorEmail?></label>

								<input type="password" id="senha" name="senha" class="form-control" placeholder="Password" required>
								<label class="control-label text-danger"></i> <?=@$errorSenha?></label>
								
								
								<div id="remember" class="checkbox">
									<label>
										<input type="checkbox" value="remember-me"> Remember me
									</label>
								</div>
								<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
							</form>
							<!-- /form -->
							<a href="#" class="forgot-password">
								Forgot the password?
							</a>
						</div>
					</div>
					<!-- /card-container -->
				</div>
			<!-- /container -->
			<!-- Row -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->


</body>

</html>

