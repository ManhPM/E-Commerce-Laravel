<!DOCTYPE html>
<html dir="ltr" lang="en">

				<head>
								<meta charset="utf-8">
								<meta http-equiv="X-UA-Compatible" content="IE=edge">
								<meta name="viewport" content="width=device-width, initial-scale=1">
								<meta name="keywords"
												content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
								<meta name="description"
												content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
								<meta name="robots" content="noindex,nofollow">
								<title>
												@yield("title", "Dashboard")
								</title>
								<link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
								<link rel="icon" type="image/png" sizes="16x16"
												href="{{ asset("admin/assets/plugins/images/favicon.png") }}">
								<link href="{{ asset("admin/assets/plugins/bower_components/chartist/dist/chartist.min.css") }}"
												rel="stylesheet">
								<link rel="stylesheet"
												href="{{ asset("admin/assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css") }}">
								<link href="{{ asset("admin/assets/css/style.min.css") }}" rel="stylesheet">
				</head>

				<body>
								<div class="preloader">
												<div class="lds-ripple">
																<div class="lds-pos"></div>
																<div class="lds-pos"></div>
												</div>
								</div>
								<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
												data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
												@include("admin.layouts.topbar")
												@include("admin.layouts.sidebar")
												<div class="page-wrapper">
																<!-- ============================================================== -->
																<!-- Bread crumb and right sidebar toggle -->
																<!-- ============================================================== -->
																<div class="page-breadcrumb bg-white">
																				<div class="row align-items-center">
																								<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
																												<h4 class="page-title">@yield("title", "Dashboard") Management</h4>
																								</div>
																								<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
																												<div class="d-md-flex">
																																<ol class="breadcrumb ms-auto">
																																				<li style="display: none"><a href="#" class="fw-normal">Dashboard</a></li>
																																</ol>
																																<a href="https://www.wrappixel.com/templates/ampleadmin/assets/" target="_blank"
																																				class="btn btn-danger d-none d-md-block pull-right hidden-xs hidden-sm waves-effect waves-light ms-3 text-white">Create</a>
																												</div>
																								</div>
																				</div>

																</div>
																@yield("content")
																@include("admin.layouts.footer")
												</div>
								</div>
								<script src="{{ asset("admin/assets/plugins/bower_components/jquery/dist/jquery.min.js") }}"></script>
								<script src="{{ asset("admin/assets/bootstrap/dist/js/bootstrap.bundle.min.js") }}"></script>
								<script src="{{ asset("admin/assets/js/app-style-switcher.js") }}"></script>
								<script src="{{ asset("admin/assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js") }}"></script>
								<script src="{{ asset("admin/assets/js/waves.js") }}"></script>
								<script src="{{ asset("admin/assets/js/sidebarmenu.js") }}"></script>
								<script src="{{ asset("admin/assets/js/custom.js") }}"></script>
								<script src="{{ asset("admin/assets/plugins/bower_components/chartist/dist/chartist.min.js") }}"></script>
								<script
												src="{{ asset("admin/assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js") }}">
								</script>
								<script src="{{ asset("admin/assets/js/pages/dashboards/dashboard1.js") }}></script>
				</body>

</html>
