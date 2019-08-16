<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Conference project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('images/kominfo.png')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap4/bootstrap.min.css')}}">
	<link  rel="stylesheet" type="text/css" href="{{asset('/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/plugins/OwlCarousel2-2.2.1/animate.css')}}">
	@yield('css')
</head>

<body>

	<div class="super_container">

		<!-- Side Nave -->

		<div class="menu trans_500">
			<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="menu_close_container">
					<div class="menu_close"></div>
				</div>
				<div class="logo menu_logo">
					<a href="#">
						<div class="logo_container d-flex flex-row align-items-start justify-content-start">
							<div class="logo_image">
								<div><img src="images/coba.png" alt=""></div>
							</div>
							<div class="logo_content">
								<div class="logo_text logo_text_not_ie">Digital Talent Scholarship</div>
								<div class="logo_sub">July 09, 2019 - August 27, 2019</div>
							</div>
						</div>
					</a>
				</div>
				<ul>
					<li class="menu_item"><a href="/">Home</a></li>
					<li class="menu_item"><a href="about">Tentang</a></li>
					<div class="dropdown">
						<li class="menu_item"><a href="#">Pelaksanaan</a></li>
						<div class="dropdown-content">
							<a href="pelaksanaan">Waktu dan Tempat</a>
							<a href="jadwal">Jadwal</a>
						</div>
					</div>
					<li class="menu_item"><a href="speakers">Pengajar</a></li>
					<div class="dropdown">
						<li class="menu_item"><a href="#">Peserta</a></li>
						<div class="dropdown-content">
							<a href="daftarpeserta">Daftar Peserta</a>
							<a href="hakewa">Hak dan Kewajiban</a>
							<a href="tata">Tata Tertib</a>
						</div>
					</div>
					<li class="menu_item"><a href="silabus">Silabus</a></li>
					<li class="menu_item"><a href="news">Berita</a></li>
					<li class="menu_item"><a href="contact">Kontak</a></li>
					<li class="menu_item"><a href="galery">Galery</a></li>
				</ul>
			</div>
		</div>

		<!-- Home -->

		<div class="home">
			@yield('home_background')

			<!-- Header -->

			<header class="header" id="header">
				<div>
					<div class="header_top">
						<div class="container">
							<div class="row">
								<div class="col">
									<div
										class="header_top_content d-flex flex-row align-items-center justify-content-start">
										<div>
											<a href="#">
												<div
													class="logo_container d-flex flex-row align-items-start justify-content-start">
													<div class="logo_image ukur">
														<div><img src="images/gundar.png" alt=""></div>
													</div>
													<div class="logo_image ukur">
														<div><img src="images/kominfo.png" alt=""></div>
													</div>
												</div>
											</a>
										</div>
										<div class="header_social ml-auto">
											<ul>
												<div class="logo_image">
													<div><img src="images/coba.png" alt=""></div>
												</div>
											</ul>
										</div>
										<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header_nav" id="header_nav_pin">
						<div class="header_nav_inner">
							<div class="header_nav_container">
								<div class="container">
									<div class="row">
										<div class="col">
											<div
												class="header_nav_content d-flex flex-row align-items-center justify-content-start">
												<nav class="main_nav">
													<ul>
														<li class="active"><a href="/">Beranda</a></li>
														<li><a href="about">Tentang</a></li>
														<div class="dropdown">
															<li><a href="#">Pelaksanaan</a></li>
															<div class="dropdown-content">
																<a href="pelaksanaan">Waktu dan Tempat</a>
																<a href="jadwal">Jadwal</a>
															</div>
														</div>
														<li><a href="speakers">Pengajar</a></li>
														<div class="dropdown">
															<li><a href="#">Peserta</a></li>
															<div class="dropdown-content">
																<a href="daftarpeserta">Daftar Peserta</a>
																<a href="hakewa">Hak dan Kewajiban</a>
																<a href="tata">Tata Tertib</a>
															</div>
														</div>
														<li><a href="silabus">Silabus</a></li>
														<li><a href="news">Berita</a></li>
														<li><a href="contact">Kontak</a></li>
														<li><a href="galery">Galery</a></li>
													</ul>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="home_content_container">
				<div class="container">
					@yield('home')
				</div>
			</div>
		</div>

		<!-- Intro -->
		@yield('intro')

		<!-- Footer -->
		<footer class="footer">
			<div class="footer_content">
				<div class="container">
					<div class="row">

						<!-- Footer Column -->
						<div class="col-lg-4 footer_col">
							<div class="footer_about">
								<div>
									<a href="#">
										<div
											class="logo_container d-flex flex-row align-items-start justify-content-start">
											<div class="logo_image">
												<div><img src="images/coba2.png" alt=""></div>
											</div>
										</div>
									</a>
								</div>
								<div class="footer_about_text">
									<p>Univeristas Gunadarma J6</p>
									<p>Jalan Cikunir Raya No. 100 Jakamulya, Bekasi City, West Java 17146, Indonesia</p>
									<p>No. Telp 087788119994</p>
								</div>
							</div>
						</div>

						<!-- Footer Column -->
						<div class="col-lg-3 footer_col">
							<div class="footer_links">
								<ul>
									<li><a href="about">Tentang Kami</a></li>
									<li><a href="jadwal">Jadwal</a></li>
									<li><a href="speakers">Pengajar</a></li>
									<li><a href="daftarpeserta">Daftar Peserta</a></li>
									<li><a href="silabus">Silabus</a></li>
									<li><a href="news">Berita</a></li>
								</ul>
							</div>
						</div>

						<!-- Footer Column -->
						<div class="col-lg-3 footer_col">
							<div class="footer_links">
								<ul>
									<li><a href="pelaksana1">Waktu dan Tempat</a></li>
									<li><a href="hakewa">Hak dan kewajiban</a></li>
									<li><a href="tata">Tata Tertib</a></li>
									<li><a href="https://digitalent.kominfo.go.id">Web Eksternal</a></li>
									<li><a href="contact">Contact</a></li>
								</ul>
							</div>
						</div>

						<!-- Footer Column -->

					</div>
				</div>
			</div>
		</footer>

	</div>

	<script src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('/css/bootstrap4/popper.js')}}"></script>
	<script src="{{asset('/css/bootstrap4/bootstrap.min.js')}}"></script>
	<script src="{{asset('/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
	<script src="{{asset('/plugins/easing/easing.js')}}"></script>
	<script src="{{asset('/plugins/parallax-js-master/parallax.min.js')}}"></script>
	@yield('js')
</body>

</html>