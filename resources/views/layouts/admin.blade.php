<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title> Valex -  Premium dashboard ui bootstrap rwd admin html5 template </title>

		<!-- Favicon -->
		<link rel="icon" href="{{ asset('img/brand/favicon.png') }}" type="image/x-icon"/>

		<!-- Icons css -->
		<link href="{{ asset('admin/css/icons.css') }}" rel="stylesheet">

		<!-- Internal Select2 css -->
		<link href="{{ asset('admin/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

		<!--  Right-sidemenu css -->
		<link href="{{ asset('admin/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

		<!--  Custom Scroll bar-->
		<link href="{{ asset('admin/plugins/mscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet"/>

		<!--  Left-Sidebar css -->
		<link rel="stylesheet" href="{{ asset('admin/css/sidemenu.css') }}">

		<!--- Style css --->
		<link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

		<!--- Dark-mode css --->
		<link href="{{ asset('admin/css/style-dark.css') }}" rel="stylesheet">

		<!---Skinmodes css-->
		<link href="{{ asset('admin/css/skin-modes.css') }}" rel="stylesheet" />

		<!--- Animations css-->
		<link href="{{ asset('admin/css/animate.css') }}" rel="stylesheet">
        @stack('css')

        @livewireStyles
	</head>

	<body class="main-body app sidebar-mini">

		<!-- Loader -->
		<div id="global-loader">
			<img src="{{ asset('admin/img/loader.svg') }}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- Page -->
		<div class="page">
			<!-- main-sidebar -->
			<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
			<aside class="app-sidebar sidebar-scroll">
				<div class="main-sidebar-header active">
					<a class="desktop-logo logo-light active" href="#"><img src="{{ asset('admin/img/brand/logo.png') }}" class="main-logo" alt="logo"></a>
					<a class="desktop-logo logo-dark active" href="#"><img src="{{ asset('admin/img/brand/logo-white.png') }}" class="main-logo dark-theme" alt="logo"></a>
					<a class="logo-icon mobile-logo icon-light active" href="#"><img src="{{ asset('admin/img/brand/favicon.png') }}" class="logo-icon" alt="logo"></a>
					<a class="logo-icon mobile-logo icon-dark active" href="#"><img src="{{ asset('admin/img/brand/favicon-white.png') }}" class="logo-icon dark-theme" alt="logo"></a>
				</div>
				<div class="main-sidemenu">

					<ul class="side-menu">
						<li class="side-item side-item-category">Main</li>
						<li class="slide">
							<a class="side-menu__item" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">Index</span><span class="badge badge-success side-badge">1</span></a>
						</li>


						<li class="side-item side-item-category">Ressources</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3"/><path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z"/></svg><span class="side-menu__label">Annonces</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="#S">Gérer les annonces</a></li>
								<li><a class="slide-item" href="#">Nouvelle annonce</a></li>
							</ul>
						</li>
                        <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3"/><path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z"/></svg><span class="side-menu__label">Catégories</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="#">Gérer les categories</a></li>
								<li><a class="slide-item" href="#">Nouvelle categorie</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3"/><path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z"/></svg><span class="side-menu__label">Articles</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="#">Gérer les articles</a></li>
								<li><a class="slide-item" href="#">Nouvel article</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
								<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
									<path d="M0 0h24v24H0V0z" fill="none"/>
									<path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3"/>
									<path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z"/>
								</svg>
								<span class="side-menu__label">Blogs</span>
								<i class="angle fe fe-chevron-down"></i>
							</a>
							<ul class="slide-menu">
								<!-- Lien pour gérer les blogs (index) -->
								<li><a class="slide-item" href="{{ route('admin.blog.index') }}">Gérer les Blogs</a></li>
								<!-- Lien pour créer un nouvel article -->
								<li><a class="slide-item" href="{{ route('admin.blog.create') }}">Nouvel Blog</a></li>
							</ul>
						</li>
						

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3"/><path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z"/></svg><span class="side-menu__label">Avis</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="#">Gérer les avis</a></li>
								<li><a class="slide-item" href="#">Réponse aux avis</a></li>
							</ul>
						</li>

					</ul>
				</div>
			</aside>
			<!-- main-sidebar -->

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- main-header -->
				<div class="main-header sticky side-header nav nav-item">
					<div class="container-fluid">
						<div class="main-header-left ">
							<div class="responsive-logo">
								<a href="#"><img src="{{ asset('admin/img/brand/logo.png') }}" class="logo-1" alt="logo"></a>
								<a href="#"><img src="{{ asset('admin/img/brand/logo-white.png') }}" class="dark-logo-1" alt="logo"></a>
								<a href="#"><img src="{{ asset('admin/img/brand/favicon.png') }}" class="logo-2" alt="logo"></a>
								<a href="#"><img src="{{ asset('admin/img/brand/favicon.png') }}" class="dark-logo-2" alt="logo"></a>
							</div>
							<div class="app-sidebar__toggle" data-toggle="sidebar">
								<a class="open-toggle" href="#"><i class="header-icon fe fe-align-left" ></i></a>
								<a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
							</div>

						</div>
						<div class="main-header-right">

							<div class="nav nav-item  navbar-nav-right ml-auto">


								<div class="dropdown main-profile-menu nav nav-item nav-link">
									<a class="profile-user d-flex" href="#"><img alt="" src="{{ asset('admin/img/faces/6.jpg') }}"></a>
									{{-- <div class="dropdown-menu">
										<div class="main-header-profile bg-primary p-3">
											<div class="d-flex wd-100p">
												<div class="main-img-user"><img alt="" src="{{ asset('admin/img/faces/6.jpg') }}" class=""></div>
												<div class="ml-3 my-auto">
													<h6>Petey Cruiser</h6><span>Premium Member</span>
												</div>
											</div>
										</div>
										<a class="dropdown-item" href=""><i class="bx bx-user-circle"></i>Profile</a>
										<a class="dropdown-item" href=""><i class="bx bx-cog"></i> Edit Profile</a>
										<a class="dropdown-item" href=""><i class="bx bxs-inbox"></i>Inbox</a>
										<a class="dropdown-item" href=""><i class="bx bx-envelope"></i>Messages</a>
										<a class="dropdown-item" href=""><i class="bx bx-slider-alt"></i> Account Settings</a>
										<a class="dropdown-item" href="page-signin.html"><i class="bx bx-log-out"></i> Sign Out</a>
									</div> --}}
								</div>

							</div>
						</div>
					</div>
				</div>
				<!-- /main-header -->

				<!-- container -->
				<div class="container-fluid">

                    @yield('content') <!-- Contenu spécifique à chaque page -->

				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->



			<!-- Footer opened -->
			<div class="main-footer ht-40">
				<div class="container-fluid pd-t-0-f ht-100p">
					<span>Copyright © 2020 <a href="#">Valex</a>. Designed by <a href="#">Spruko</a> All rights reserved.</span>
				</div>
			</div>
			<!-- Footer closed -->

		</div>
		<!-- End Page -->

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!-- JQuery min js -->
		<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>

		<!-- Bootstrap Bundle js -->
		<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

		<!--Internal  Chart.bundle js -->
		<script src="{{ asset('admin/plugins/chart.js/Chart.bundle.min.js') }}"></script>

		<!-- Ionicons js -->
		<script src="{{ asset('admin/plugins/ionicons/ionicons.js') }}"></script>

		<!-- Moment js -->
		<script src="{{ asset('admin/plugins/moment/moment.js') }}"></script>

		<!-- P-scroll js -->
		<script src="{{ asset('admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
		<script src="{{ asset('admin/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

		<!-- Sticky js -->
		<script src="{{ asset('admin/js/sticky.js') }}"></script>

		<!-- Rating js-->
		<script src="{{ asset('admin/plugins/rating/jquery.rating-stars.js') }}"></script>
		<script src="{{ asset('admin/plugins/rating/jquery.barrating.js') }}"></script>

		<!-- Internal Select2.min js -->
		<script src="{{ asset('admin/plugins/select2/js/select2.min.js') }}"></script>
		<script src="{{ asset('admin/js/select2.js') }}"></script>

		<!-- Custom Scroll bar Js-->
		<script src="{{ asset('admin/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

		<!-- Sidebar js -->
		<script src="{{ asset('admin/plugins/side-menu/sidemenu.js') }}"></script>

		<!-- Right-sidebar js -->
		<script src="{{ asset('admin/plugins/sidebar/sidebar.js') }}"></script>
		<script src="{{ asset('admin/plugins/sidebar/sidebar-custom.js') }}"></script>

		<!-- eva-icons js -->
		<script src="{{ asset('admin/js/eva-icons.min.js') }}"></script>

		<!-- custom js -->
		<script src="{{ asset('admin/js/custom.js') }}"></script>

        @livewireScripts

        @stack('scripts') <!-- Définir une stack pour les scripts -->


	</body>
</html>
