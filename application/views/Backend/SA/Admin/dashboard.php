<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description">


	<title>Dashboard</title>

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
	<link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />


	<!-- PLUGINS CSS STYLE -->
	<link href="<?= base_url("assets/assets/plugins/nprogress/nprogress.css"); ?>" rel="stylesheet" />
	<link href="<?= base_url("assets/assets/plugins/daterangepicker/daterangepicker.css"); ?>" rel="stylesheet" />
	<link href="<?= base_url("assets/assets/plugins/data-tables/datatables.bootstrap4.min.css"); ?>" rel="stylesheet" />
	<link href="<?= base_url("assets/assets/plugins/data-tables/jquery.datatables.min.css"); ?> " rel="stylesheet" />
	<link id="sleek-css" rel="stylesheet" href="<?= base_url("assets/assets/css/sleek.css"); ?> " />

	<script src="<?= base_url("assets/assets/plugins/nprogress/nprogress.js"); ?>"></script>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">

	<div class="wrapper">
		<aside class="left-sidebar bg-sidebar">
			<div id="sidebar" class="sidebar sidebar-with-footer">
				<div class="app-brand">
					<a href="#" title="Ruang Cupang">
						<span class="brand-name">Ruang Cupang</span>
					</a>
				</div>
				<div class="sidebar-scrollbar">
					<ul class="nav sidebar-inner" id="sidebar-menu">
						<li class="active">
							<a class="sidenav-item-link" href="<?= base_url('Backend/SA/Admin/dashboard'); ?>" aria-expanded="false" aria-controls="dashboard">
								<i class="mdi mdi-view-dashboard-outline"></i>
								<span class="nav-text">Dashboard</span>
							</a>
						</li>

						<li>
							<a class="sidenav-item-link" href="<?= base_url('Backend/SA/Admin'); ?>" aria-expanded="false" aria-controls="dashboard">
								<i class="mdi mdi-account"></i>
								<span class="nav-text">Admin</span>
							</a>
						</li>

						<li>
							<a class="sidenav-item-link" href="<?= base_url('Backend/SA/Cupang'); ?>" aria-expanded="false" aria-controls="dashboard">
								<i class="mdi mdi-fish"></i>
								<span class="nav-text">Ikan Cupang</span>
							</a>
						</li>

						<li>
							<a class="sidenav-item-link" href="<?= base_url('Backend/SA/Jenis'); ?>" aria-expanded="false" aria-controls="dashboard">
								<i class="mdi mdi-format-list-bulleted"></i>
								<span class="nav-text">Jenis Cupang</span>
							</a>
						</li>

					</ul>
		</aside>


		<div class="page-wrapper">
			<header class="main-header " id="header">
				<nav class="navbar navbar-static-top navbar-expand-lg">
					<!-- Sidebar toggle button -->
					<button id="sidebar-toggler" class="sidebar-toggle">
						<span class="sr-only">Toggle navigation</span>
					</button>

					<div class="col-sm-4 col-sm-offset-8" style="position: relative; margin-left: 860px;">
						<a href="<?= base_url('Auth/Login/logout'); ?>">
							<button class="btn btn-danger">
								<i class="mdi mdi-logout"></i>
								<span class="d-none d-lg-inline-block">Log Out</span>
							</button>
						</a>
					</div>
				</nav>
			</header>


		</div>

		<script src="<?= base_url("assets/assets/plugins/jquery/jquery.min.js"); ?>"></script>
		<script src="<?= base_url("assets/assets/plugins/slimscrollbar/jquery.slimscroll.min.js"); ?>"></script>
		<script src="<?= base_url("assets/assets/plugins/jekyll-search.min.js"); ?>"></script>



		<script src="<?= base_url("assets/assets/plugins/daterangepicker/moment.min.js"); ?>"></script>
		<script src="<?= base_url("assets/assets/plugins/daterangepicker/daterangepicker.js"); ?>"></script>
		<script src="<?= base_url("assets/assets/plugins/data-tables/jquery.datatables.min.js"); ?>"></script>
		<script src="<?= base_url("assets/assets/plugins/data-tables/datatables.bootstrap4.min.js"); ?>"></script>


		<script src="<?= base_url('assets/assets/js/sleek.bundle.js'); ?>"> </script>
		<script src="<?= base_url('assets/assets/js/sweetalert2.all.min.js'); ?>"></script>
		<script src="<?= base_url('assets/assets/js/swit.js'); ?>"></script>
</body>

</html>