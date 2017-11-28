<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sociedade e Tecnologia</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">


	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="jquery.1.11.1.min.js"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<style>
.dropbtn {
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>



<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">

		<header class="main-header">
			<nav class="navbar navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<a href="/home"class="navbar-brand">
							<b>Nao</b>SEI</a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
							<i class="fa fa-bars"></i>
						</button>
					</div>
<!-- 
					<div class="dropdown">
						<button class="dropbtn">Produtos</button>
						<div class="dropdown-content">
							<a href="#">Link 1</a>
							<a href="#">Link 2</a>
							<a href="#">Link 3</a>
						</div>
					</div> -->

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
						<!-- <ul class="nav navbar-nav">
							<li>
								<a href="Produto"> <i class="fa fa-plus"></i> Cadastrar Produto</a>
                            </li>
                            <li>
								<a href="#"> <i class="fa fa-list"></i> Listar</a>
							</li>
						</ul>  -->
                        
					<!-- <div class="navbar-custom-menu"> -->

					<ul class="nav navbar-nav">

						<li class="dropdown">

							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-briefcase"></i> Produtos </a>

							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="/produto"> <i class="fa fa-plus"></i> Adicionar</a>
								</li>
								<li>
									<a href="/produto_list"> <i class="fa fa-list"></i> Listar </a>
								</li>
							</ul>

						</li>
					
					</ul>

					<!-- </div> -->


					</div>
					<!-- /.navbar-collapse -->
					<!-- Navbar Right Menu -->
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
 							
                            <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user-circle" style="font-size:20px; margin-right:5px"></i> User </a>
								<ul class="dropdown-menu" role="menu">
									<li>
										<a href="/login"> Login</a>
									</li>
									<li>
										<a href="/cadastro">Cadastro</a>
									</li>
								</ul>
							</li>

                            

						</ul>
					</div>
					<!-- /.navbar-custom-menu -->
				</div>
				<!-- /.container-fluid -->
			</nav>
		</header>
		<!-- Full Width Column -->
		<div class="content-wrapper">
			<div class="container">
				<!-- Content Header (Page header) -->
				<section class="content-header">
