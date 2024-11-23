<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
	<title>Eduport - قالب HTML دوره آنلاین و آموزش</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="">
	<meta name="description" content="Eduport - قالب HTML دوره آنلاین و آموزش">

	<!-- Dark mode -->
	<script>
		const storedTheme = localStorage.getItem('theme')

		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
				const activeThemeIcon = document.querySelector('.theme-icon-active use')
				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
					element.classList.remove('active')
				})

				btnToActive.classList.add('active')
				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			}

			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
				if (storedTheme !== 'light' || storedTheme !== 'dark') {
					setTheme(getPreferredTheme())
				}
			})

			showActiveTheme(getPreferredTheme())

			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						localStorage.setItem('theme', theme)
						setTheme(theme)
						showActiveTheme(theme)
					})
				})

			}
		})

	</script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/glightbox/css/glightbox.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style-rtl.css">

</head>

<body>

<!-- Header START -->
<header class="navbar-light navbar-sticky header-static">
	<!-- Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container-fluid px-3 px-xl-5">
			<!-- Logo START -->
			<a class="navbar-brand" href="index.html">
				<img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>

			<!-- Main navbar START -->
			<div class="navbar-collapse w-100 collapse" id="navbarCollapse">

				<!-- Nav category menu START -->
				<ul class="navbar-nav navbar-nav-scroll me-auto">
					<!-- Nav item 1 Demos -->
					<li class="nav-item dropdown dropdown-menu-shadow-stacked">
						<a class="nav-link bg-primary bg-opacity-10 rounded-3 text-primary px-3 py-3 py-xl-0" href="#" id="categoryMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-ui-radios-grid me-2"></i><span>دسته بندی</span></a>
						<ul class="dropdown-menu" aria-labelledby="categoryMenu">

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">برنامه نویسی</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<!-- dropdown submenu open right -->
									<li class="dropdown-submenu dropend">
										<a class="dropdown-item dropdown-toggle" href="#">طراحی وب</a>
										<ul class="dropdown-menu" data-bs-popper="none">
											<li> <a class="dropdown-item" href="#">CSS</a> </li>
											<li> <a class="dropdown-item" href="#">JavaScript</a> </li>
											<li> <a class="dropdown-item" href="#">Angular</a> </li>
											<li> <a class="dropdown-item" href="#">PHP</a> </li>
											<li> <a class="dropdown-item" href="#">HTML</a> </li>
											<li> <a class="dropdown-item" href="#">React</a> </li>
										</ul>
									</li>
									<li> <a class="dropdown-item" href="#">بانک های اطلاعاتی</a> </li>
									<li> <a class="dropdown-item" href="#">برنامه نویسی موبایل</a> </li>
									<li> <a class="dropdown-item" href="#">برنامه نویسی وب</a> </li>
									<li> <a class="dropdown-item" href="#">سیستم عامل</a> </li>
									<li> <a class="dropdown-item" href="#">مهندسی نرم افزار</a> </li>
									<li> <a class="dropdown-item" href="#">مدیریت پروژه</a> </li>
								</ul>
							</li>
							<li> <a class="dropdown-item" href="#">طراحی وب</a></li>
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">دیجیتال مارکتینگ</a>
								<div class="dropdown-menu dropdown-menu-start dropdown-width-lg" data-bs-popper="none">
									<div class="row p-4">
										<!-- Dropdown column item -->
										<div class="col-xl-6 col-xxl-4 mb-4 mb-xl-0">
											<h6 class="mb-0">دسته بندی ها</h6>
											<hr> <!-- Divider -->
											<ul class="list-unstyled">
												<li> <a class="dropdown-item" href="#">اینستاگرام مارکتینگ</a> </li>
												<li> <a class="dropdown-item" href="#">تبلیغ نویسی</a> </li>
												<li> <a class="dropdown-item" href="#">سرچ کنسول</a> </li>
												<li> <a class="dropdown-item" href="#">جذب ترافیک موثر</a> </li>
												<li> <a class="dropdown-item" href="#">افزایش فروش</a> </li>
												<li> <a class="dropdown-item" href="#">ویدیو مارکتینگ</a> </li>
												<li> <a class="dropdown-item" href="#">آموزش GTmetrix</a> </li>
												<li> <a class="dropdown-item" href="#">آموزش Alex</a> </li>
												<li> <a class="dropdown-item" href="#">استراتژی تولید محتوا</a> </li>
												<li> <a class="dropdown-item" href="#">سئو و بهینه سازی</a> </li>
												<li> <a class="dropdown-item" href="#">اصول قرارداد نویسی</a> </li>
											</ul>
										</div>

										<!-- Dropdown column item -->
										<div class="col-xl-6 col-xxl-4 mb-4 mb-xl-0">
											<h6 class="mb-0">درجه بندی مدرک</h6>
											<hr> <!-- Divider -->
											<!-- Dropdown item -->
											<div class="d-flex mb-4 position-relative">
												<img src="assets/images/client/uni-logo-01.svg" class="icon-md" alt="">
												<div class="ms-3">
													<a class="stretched-link h6 mb-0 fw-normal" href="#">مدرک بین المللی سطح مبتدی</a>
													<p class="mb-0 small">لیسانس کامپیوتر</p>
												</div>
											</div>
											<!-- Dropdown item -->
											<div class="d-flex mb-4 position-relative">
												<img src="assets/images/client/uni-logo-02.svg" class="icon-md" alt="">
												<div class="ms-3">
													<a class="stretched-link h6 mb-0 fw-normal" href="#">مدرک بین المللی سطح متوسط</a>
													<p class="mb-0 small">کارشناسی ارشد علوم کامپیوتر</p>
												</div>
											</div>
											<!-- Dropdown item -->
											<div class="d-flex mb-4 position-relative">
												<img src="assets/images/client/uni-logo-03.svg" class="icon-md" alt="">
												<div class="ms-3">
													<a class="stretched-link h6 mb-0 fw-normal" href="#">مدرک بین المللی  زبـان</a>
													<p class="mb-0 small">دانشکده علوم پزشکی</p>
												</div>
											</div>
											<!-- Dropdown item -->
											<div class="d-flex mb-4 position-relative">
												<img src="assets/images/client/uni-logo-01.svg" class="icon-md" alt="">
												<div class="ms-3">
													<a class="stretched-link h6 mb-0 fw-normal" href="#">مدرک بین المللی زبـان</a>
													<p class="mb-0 small">لیسانس کامپیوتر</p>
												</div>
											</div>
											<!-- Dropdown item -->
											<div class="d-flex position-relative">
												<img src="assets/images/client/uni-logo-04.svg" class="icon-md" alt="">
												<div class="ms-3">
													<a class="stretched-link h6 mb-0 fw-normal" href="#">مدرک بین المللی سطح پیشرفته</a>
													<p class="mb-0 small">کارشناسی ارشد توسعه کسب و کار دیجیتالی</p>
												</div>
											</div>
										</div>

										<!-- Dropdown column item -->
										<div class="col-xl-6 col-xxl-4">
											<h6 class="mb-0">در حـال ثبت نام</h6>
											<hr> <!-- Divider -->
											<!-- Dropdown item -->
											<div class="d-flex mb-4 position-relative">
												<h2 class="mb-0"><i class="fab fa-fw fa-google text-google-icon"></i></h2>
												<div class="ms-2">
													<a class="stretched-link h6 mb-0 fw-normal" href="#">گواهی سئو گوگل</a>
													<p class="mb-0 small">بدون پیش نیاز</p>
												</div>
											</div>
											<!-- Dropdown item -->
											<div class="d-flex mb-4 position-relative">
												<h2 class="mb-0"><i class="fab fa-fw fa-linkedin-in text-linkedin"></i></h2>
												<div class="ms-2">
													<a class="stretched-link h6 mb-0 fw-normal" href="#">مدیر توسعه کسب و کار (BDE)</a>
													<p class="mb-0 small">بدون پیش نیاز</p>
												</div>
											</div>
											<!-- Dropdown item -->
											<div class="d-flex mb-4 position-relative">
												<h2 class="mb-0"><i class="fab fa-fw fa-facebook text-facebook"></i></h2>
												<div class="ms-2">
													<a class="stretched-link h6 mb-0 fw-normal" href="#">بازاریابی شبکه های اجتماعی فیس بوک</a>
													<p class="mb-0 small">مشاوره تخصصی</p>
												</div>
											</div>
											<!-- Dropdown item -->
											<div class="d-flex mb-4 position-relative">
												<h2 class="mb-0"><i class="fas fa-fw fa-basketball-ball text-dribbble"></i></h2>
												<div class="ms-2">
													<a class="stretched-link h6 mb-0 fw-normal" href="#">طراحی گرافیکی خلاقانه</a>
													<p class="mb-0 small">بدون پیش نیاز</p>
												</div>
											</div>
										</div>
									</div>

									<!-- Advertisement -->
									<div class="row">
										<div class="col-12">
											<div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden" style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
												<!-- SVG decoration -->
												<figure class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
													<svg width="92.6px" height="135.2px">
														<path class="fill-white" d="M71.5,131.4c0.2,0.1,0.4,0.1,0.6-0.1c0,0,0.6-0.7,1.6-1.9c0.2-0.2,0.1-0.5-0.1-0.7c-0.2-0.2-0.5-0.1-0.7,0.1 c-1,1.2-1.6,1.8-1.6,1.8c-0.2,0.2-0.2,0.5,0,0.7C71.4,131.3,71.4,131.4,71.5,131.4z"></path>
														<path class="fill-white" d="M76,125.5c-0.2-0.2-0.3-0.5-0.1-0.7c1-1.4,1.9-2.8,2.8-4.2c0.1-0.2,0.4-0.3,0.7-0.2c0.2,0.1,0.3,0.4,0.2,0.7 c-0.9,1.4-1.8,2.9-2.8,4.2C76.6,125.6,76.3,125.6,76,125.5C76.1,125.5,76.1,125.5,76,125.5z M81.4,116.9 c-0.2-0.1-0.3-0.4-0.2-0.7c0.2-0.5,0.5-0.9,0.7-1.4c0.5-1.1,1-2.1,1.5-3.2c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6 c-0.5,1.1-1,2.1-1.5,3.2c-0.2,0.5-0.5,0.9-0.7,1.4C81.9,117,81.6,117,81.4,116.9C81.4,116.9,81.4,116.9,81.4,116.9z M85.1,107.1 c0.5-1.6,1-3.2,1.3-4.8c0.1-0.3,0.3-0.4,0.6-0.4c0.3,0.1,0.4,0.3,0.4,0.6c-0.4,1.6-0.8,3.3-1.3,4.9c-0.1,0.3-0.4,0.4-0.6,0.3 c0,0,0,0-0.1,0C85.1,107.6,85,107.3,85.1,107.1z M47.3,83c-1.5-1.1-2.5-2.5-3.1-4.2c-0.1-0.3,0-0.5,0.3-0.6 c0.3-0.1,0.5,0,0.6,0.3c0.5,1.5,1.5,2.7,2.8,3.7c0.2,0.2,0.3,0.5,0.1,0.7C47.9,83.1,47.6,83.1,47.3,83C47.4,83,47.4,83,47.3,83z  M51.7,84.6c0-0.3,0.3-0.5,0.5-0.4c1.4,0.2,2.9-0.3,4.3-1.4c0.2-0.2,0.5-0.1,0.7,0.1c0.2,0.2,0.1,0.5-0.1,0.7 c-1.6,1.2-3.4,1.8-5,1.6c-0.1,0-0.1,0-0.2,0C51.8,85,51.7,84.8,51.7,84.6z M87.2,97.4c0.2-1.7,0.2-3.3,0.2-5 c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5c0.1,1.7,0,3.4-0.2,5.1c0,0.3-0.3,0.5-0.5,0.4c-0.1,0-0.1,0-0.2,0 C87.3,97.8,87.1,97.6,87.2,97.4z M43.7,73.6c0.2-1.6,0.7-3.2,1.5-4.8l0.1-0.1c0.1-0.2,0.4-0.3,0.7-0.2c0,0,0,0,0,0 c0.2,0.1,0.3,0.4,0.2,0.7l-0.1,0.1c-0.7,1.5-1.2,3-1.4,4.5c0,0.3-0.3,0.5-0.6,0.4c-0.1,0-0.1,0-0.2,0 C43.8,74,43.7,73.8,43.7,73.6z M60,79.8c-0.2-0.1-0.3-0.5-0.1-0.7c0.4-0.6,0.8-1.3,1.1-2c0.4-0.8,0.7-1.6,1-2.4 c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6c-0.3,0.9-0.7,1.7-1.1,2.5c-0.4,0.7-0.8,1.4-1.2,2.1C60.5,79.9,60.2,80,60,79.8 C60,79.9,60,79.8,60,79.8z M86.8,87.5c-0.3-1.6-0.7-3.2-1.2-4.8c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3 c0.5,1.6,1,3.3,1.2,4.9c0,0.3-0.1,0.5-0.4,0.6c-0.1,0-0.2,0-0.3,0C87,87.7,86.9,87.6,86.8,87.5z M48.2,65.1 c-0.2-0.2-0.2-0.5,0-0.7c1.2-1.3,2.5-2.4,3.9-3.4c0.2-0.1,0.5-0.1,0.7,0.1c0.1,0.2,0.1,0.5-0.1,0.7c-1.4,0.9-2.6,2-3.7,3.2 c-0.2,0.2-0.4,0.2-0.6,0.1C48.3,65.2,48.3,65.1,48.2,65.1z M63.3,70c0.3-1.6,0.5-3.3,0.5-4.9c0-0.3,0.2-0.5,0.5-0.5 c0.3,0,0.5,0.2,0.5,0.5c-0.1,1.7-0.2,3.4-0.5,5.1c0,0.3-0.3,0.4-0.6,0.4c0,0-0.1,0-0.1,0C63.3,70.4,63.2,70.2,63.3,70z M83.8,78 c-0.7-1.5-1.5-3-2.4-4.3c-0.1-0.2-0.1-0.5,0.1-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.4,1.7,2.9,2.5,4.4c0.1,0.2,0,0.5-0.2,0.7 c-0.1,0.1-0.3,0.1-0.4,0C83.9,78.2,83.8,78.1,83.8,78z M56.5,59.6c-0.1-0.3,0.1-0.5,0.4-0.6c1.7-0.4,3.4-0.5,5.2-0.3 c0.3,0,0.5,0.3,0.4,0.5c0,0.3-0.3,0.5-0.5,0.4c-1.7-0.2-3.3-0.1-4.8,0.3c-0.1,0-0.2,0-0.3,0C56.6,59.8,56.5,59.7,56.5,59.6z  M78.4,69.7c-1.1-1.3-2.2-2.5-3.4-3.6c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0c1.2,1.1,2.4,2.4,3.5,3.7 c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0.1C78.5,69.8,78.4,69.7,78.4,69.7z M63.6,60.1c-0.2-1.6-0.4-3.3-0.8-4.9 c-0.1-0.3,0.1-0.5,0.4-0.6c0.3-0.1,0.5,0.1,0.6,0.4c0.4,1.7,0.7,3.4,0.8,5c0,0.3-0.2,0.5-0.4,0.5c-0.1,0-0.2,0-0.3,0 C63.7,60.4,63.6,60.2,63.6,60.1z M71,63.1c-1.4-0.9-2.9-1.7-4.4-2.3c-0.3-0.1-0.4-0.4-0.3-0.6c0.1-0.3,0.4-0.4,0.6-0.3 c1.5,0.6,3.1,1.4,4.6,2.3c0.2,0.1,0.3,0.5,0.1,0.7C71.6,63.1,71.3,63.2,71,63.1C71.1,63.1,71.1,63.1,71,63.1z M61.3,50.4 c-0.6-1.5-1.3-3-2.1-4.5c-0.1-0.2-0.1-0.5,0.2-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.5,1.6,3.1,2.2,4.6c0.1,0.3,0,0.5-0.3,0.6 c-0.1,0.1-0.3,0-0.4,0C61.5,50.6,61.4,50.5,61.3,50.4z M56.5,41.8c-1-1.3-2.1-2.6-3.2-3.8c-0.2-0.2-0.2-0.5,0-0.7 c0.2-0.2,0.5-0.2,0.7,0c1.2,1.3,2.3,2.6,3.3,3.9c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0C56.6,41.9,56.5,41.8,56.5,41.8z  M49.7,34.5c-1.2-1.1-2.5-2.1-3.9-3.2c-0.2-0.2-0.3-0.5-0.1-0.7c0.2-0.2,0.5-0.3,0.7-0.1c1.4,1,2.7,2.1,3.9,3.2 c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.4,0.2-0.6,0.1C49.7,34.6,49.7,34.5,49.7,34.5z M41.7,28.5c-1.4-0.9-2.8-1.8-4.3-2.6 c-0.2-0.1-0.3-0.4-0.2-0.7c0.1-0.2,0.4-0.3,0.7-0.2c1.5,0.8,2.9,1.7,4.3,2.6c0.2,0.1,0.3,0.5,0.1,0.7 C42.2,28.6,42,28.6,41.7,28.5C41.7,28.5,41.7,28.5,41.7,28.5z"></path>
														<path class="fill-white" d="M30.7,22.6C30.7,22.6,30.7,22.6,30.7,22.6c0,0,0.9,0.4,2.3,1c0.2,0.1,0.5,0,0.7-0.2c0.1-0.2,0-0.5-0.2-0.7 c0,0,0,0,0,0c-1.4-0.7-2.2-1-2.3-1c-0.3-0.1-0.5,0-0.6,0.3C30.3,22.2,30.4,22.5,30.7,22.6z"></path>
														<path class="fill-warning" d="M22.6,23.6l-1.1-4.1c0,0-11.7-7.5-11.9-7.6c-0.1-0.2-4.9-6.5-4.9-6.5l8.2,3.5l12.2,8.4L22.6,23.6z"></path>
														<polygon class="fill-warning opacity-6" points="31.2,12.3 4.7,5.4 25.1,17.2"></polygon>
														<polygon class="fill-warning opacity-6" points="21.5,19.5 15,24.8 4.7,5.4 "></polygon>
													</svg>
												</figure>
												<!-- Body -->
												<div class="card-body">
													<!-- Title -->
													<h5 class="card-title text-white mb-2">دسترسی به 25 هزار دوره آنلاین از 120 موسسه، از امروز شروع کنید!</h5>
													<p class="text-white text-opacity-75">در اینجا توضیحاتی در مورد ویژگی های برتر ارائه شده است که به کاربران امکان می دهد از مزایایی برخوردار شوند و در هزینه های زیادی صرفه جویی کنند</p>
													<!-- Button -->
													<a href="#" class="btn btn-sm btn-dark mb-0">خرید حرفه ای</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li> <a class="dropdown-item" href="#">هوش مصنوعی</a></li>
							<li> <a class="dropdown-item" href="#">زبان انگلیسی</a></li>
							<li> <a class="dropdown-item" href="#">فناوری و اطلاعات</a></li>
							<li> <a class="dropdown-item" href="#">مهندسی نرم افزار</a></li>
							<li> <a class="dropdown-item" href="#">رباتیک</a></li>
							<li> <a class="dropdown-item" href="#">نگارش آکادمیک</a></li>
							<li> <a class="dropdown-item" href="#">علوم انسانی</a></li>
							<li> <a class="dropdown-item" href="#">ریاضیات</a></li>
							<li> <hr class="dropdown-divider"></li>
							<li> <a class="dropdown-item bg-primary text-primary bg-opacity-10 rounded-2 mb-0" href="#">مشاهده همه</a></li>
						</ul>
					</li>
				</ul>
				<!-- Nav category menu END -->

				<!-- Nav Main menu START -->
				<ul class="navbar-nav navbar-nav-scroll me-auto">
					<!-- Nav item 1 Demos -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle active" href="#" id="demoMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">صفحه اصلی</a>
						<ul class="dropdown-menu" aria-labelledby="demoMenu">
							<li> <a class="dropdown-item active" href="index.html">نسخه 1</a></li>
							<li> <a class="dropdown-item" href="index-2.html">نسخه 2</a></li>
							<li> <a class="dropdown-item" href="index-3.html">نسخه 3</a></li>
							<li> <a class="dropdown-item" href="index-4.html">نسخه 4</a></li>
							<li> <a class="dropdown-item" href="index-5.html">نسخه 5</a></li>
							<li> <a class="dropdown-item" href="index-6.html">نسخه 6</a></li>
							<li> <a class="dropdown-item" href="index-7.html">نسخه 7</a></li>
							<li> <a class="dropdown-item" href="index-8.html">نسخه 8</a></li>
							<li> <a class="dropdown-item" href="index-9.html">نسخه 9</a><li>
							<li> <a class="dropdown-item" href="index-10.html">نسخه 10</a></li>
							<li> <a class="dropdown-item" href="index-11.html">نسخه 11</a></li>
						</ul>
					</li>

					<!-- Nav item 2 Pages -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">صفحات</a>
						<ul class="dropdown-menu" aria-labelledby="pagesMenu">
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">دوره ها</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="course-categories.html">دسته بندی</a></li>
									<li> <hr class="dropdown-divider"></li>
									<li> <a class="dropdown-item" href="course-grid.html">لیست نسخه 1</a></li>
									<li> <a class="dropdown-item" href="course-grid-2.html">لیست نسخه 2</a></li>
									<li> <hr class="dropdown-divider"></li>
									<li> <a class="dropdown-item" href="course-list.html">لیست نسخه 3</a></li>
									<li> <a class="dropdown-item" href="course-list-2.html">لیست نسخه 4</a></li>
									<li> <hr class="dropdown-divider"></li>
									<li> <a class="dropdown-item" href="course-detail.html">جزئیات نسخه 1</a></li>
									<li> <a class="dropdown-item" href="course-detail-min.html">جزئیات نسخه 2</a></li>
									<li> <a class="dropdown-item" href="course-detail-adv.html">جزئیات نسخه 3</a></li>
									<li> <a class="dropdown-item" href="course-detail-module.html">جزئیات نسخه 4</a></li>
									<li> <a class="dropdown-item" href="course-video-player.html">جزئیات نسخه 5</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">سایر</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="about.html">درباره ما</a></li>
									<li> <a class="dropdown-item" href="contact-us.html">تماس با ما</a></li>
									<li> <a class="dropdown-item" href="blog-grid.html">لیست وبلاگ 1</a></li>
									<li> <a class="dropdown-item" href="blog-masonry.html">لیست وبلاگ 2</a></li>
									<li> <a class="dropdown-item" href="blog-detail.html">جزئیات وبلاگ</a></li>
									<li> <a class="dropdown-item" href="pricing.html">قیمت گذاری</a></li>
								</ul>
							</li>
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">بنرها</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="#">نسخه 1</a></li>
									<li> <a class="dropdown-item" href="#">نسخه 2</a></li>
									<li> <p class="dropdown-item mb-0">به زودی</p></li>
								</ul>
							</li>
							<li> <a class="dropdown-item" href="instructor-list.html">لیست مدرس</a></li>
							<li> <a class="dropdown-item" href="instructor-single.html">جزئیات مدرس</a></li>
							<li> <a class="dropdown-item" href="become-instructor.html">مدرس شوید</a></li>
							<li> <a class="dropdown-item" href="abroad-single.html">مهاجرت مدرس</a></li>
							<li> <a class="dropdown-item" href="workshop-detail.html">خرید دوره</a></li>
							<li> <a class="dropdown-item" href="event-detail.html">رویدادها <span class="badge bg-success ms-2 smaller">جدید</span></a></li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">فروشگاه</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="shop.html">لیست دوره</a></li>
									<li> <a class="dropdown-item" href="shop-product-detail.html">جزئیات دوره</a></li>
									<li> <a class="dropdown-item" href="cart.html">سبد خرید</a></li>
									<li> <a class="dropdown-item" href="checkout.html">تسویه حساب</a></li>
									<li> <a class="dropdown-item" href="empty-cart.html">سبد خرید خالی</a></li>
									<li> <a class="dropdown-item" href="wishlist.html">مورد علاقه ها</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">پشتیبانی</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="help-center.html">مرکز پشتیبانی</a></li>
									<li> <a class="dropdown-item" href="help-center-detail.html">جزئیات</a></li>
									<li> <a class="dropdown-item" href="faq.html">سوالات متداول</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">احراز هویت</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="sign-in.html">ورود</a></li>
									<li> <a class="dropdown-item" href="sign-up.html">ثبت نام</a></li>
									<li> <a class="dropdown-item" href="forgot-password.html">فراموشی رمز عبور</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">فرم</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="request-demo.html">درخواست دوره</a></li>
									<li> <a class="dropdown-item" href="book-class.html">رزرو آنلاین</a></li>
									<li> <a class="dropdown-item" href="request-access.html">دسترسی رایگان</a></li>
									<li> <a class="dropdown-item" href="university-admission-form.html">پذیرش</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">سایر</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="error-404.html">صفحه 404</a></li>
									<li> <a class="dropdown-item" href="coming-soon.html">به زودی</a></li>
								</ul>
							</li>

						</ul>
					</li>

					<!-- Nav item 3 Account -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="accounntMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">داشبورد</a>
						<ul class="dropdown-menu" aria-labelledby="accounntMenu">
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#"><i class="fas fa-user-tie fa-fw me-1"></i>مدرس</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="instructor-dashboard.html"><i class="bi bi-grid-fill fa-fw me-1"></i>داشبورد</a> </li>
									<li> <a class="dropdown-item" href="instructor-manage-course.html"><i class="bi bi-basket-fill fa-fw me-1"></i>لیست دوره ها</a> </li>
									<li> <a class="dropdown-item" href="instructor-create-course.html"><i class="bi bi-file-earmark-plus-fill fa-fw me-1"></i>ثبت دوره جدید</a> </li>
									<li> <a class="dropdown-item" href="course-added.html"><i class="bi bi-file-check-fill fa-fw me-1"></i>دوره اضافه شد!</a> </li>
									<li> <a class="dropdown-item" href="instructor-quiz.html"><i class="bi bi-question-diamond fa-fw me-1"></i>امتحانات</a> </li>
									<li> <a class="dropdown-item" href="instructor-earning.html"><i class="fas fa-chart-line fa-fw me-1"></i>آنالیز و تحلیل درآمد</a> </li>
									<li> <a class="dropdown-item" href="instructor-studentlist.html"><i class="fas fa-user-graduate fa-fw me-1"></i>لیست دانشجویان</a> </li>
									<li> <a class="dropdown-item" href="instructor-order.html"><i class="bi bi-cart-check-fill fa-fw me-1"></i>لیست سفارشات</a> </li>
									<li> <a class="dropdown-item" href="instructor-review.html"><i class="bi bi-star-fill fa-fw me-1"></i>دیدگاه ها</a> </li>
									<li> <a class="dropdown-item" href="instructor-payout.html"><i class="fas fa-wallet fa-fw me-1"></i>درآمدها</a> </li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
								<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#"><i class="fas fa-user-graduate fa-fw me-1"></i>دانشجو</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="student-dashboard.html"><i class="bi bi-grid-fill fa-fw me-1"></i>داشبورد</a> </li>
									<li> <a class="dropdown-item" href="student-subscription.html"><i class="bi bi-card-checklist fa-fw me-1"></i>خریدهای من</a> </li>
									<li> <a class="dropdown-item" href="student-course-list.html"><i class="bi bi-basket-fill fa-fw me-1"></i>لیست دوره ها</a> </li>
									<li> <a class="dropdown-item" href="student-course-resume.html"><i class="far fa-fw fa-file-alt me-1"></i>رزومه دوره</a> </li>
									<li> <a class="dropdown-item" href="student-quiz.html"><i class="bi bi-question-diamond fa-fw me-1"></i>امتحانات </a> </li>
									<li> <a class="dropdown-item" href="student-payment-info.html"><i class="bi bi-credit-card-2-front-fill fa-fw me-1"></i>اطلاعات کارت</a> </li>
									<li> <a class="dropdown-item" href="student-bookmark.html"><i class="fas bi-cart-check-fill fa-fw me-1"></i>مورد علاقه ها</a> </li>
								</ul>
							</li>

							<li> <a class="dropdown-item" href="admin-dashboard.html"><i class="fas fa-user-cog fa-fw me-1"></i>مدیریت</a> </li>
							<li> <hr class="dropdown-divider"></li>
							<li> <a class="dropdown-item" href="instructor-edit-profile.html"><i class="fas fa-fw fa-edit me-1"></i>ویرایش پروفایل</a> </li>
							<li> <a class="dropdown-item" href="instructor-setting.html"><i class="fas fa-fw fa-cog me-1"></i>تنظیمات</a> </li>
							<li> <a class="dropdown-item" href="instructor-delete-account.html"><i class="fas fa-fw fa-trash-alt me-1"></i>حذف پروفایل</a> </li>

							<li> <hr class="dropdown-divider"></li>
							<!-- Dropdown Level -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">زیر منو</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">

									<!-- dropdown submenu open right -->
									<li class="dropdown-submenu dropend">
										<a class="dropdown-item dropdown-toggle" href="#">نسخه 1</a>
										<ul class="dropdown-menu" data-bs-popper="none">
											<li> <a class="dropdown-item" href="#">عنوان 1</a> </li>
											<li> <a class="dropdown-item" href="#">عنوان 2</a> </li>
										</ul>
									</li>
									<li> <a class="dropdown-item" href="#">عنوان 3</a> </li>

									<!-- dropdown submenu open left -->
									<li class="dropdown-submenu dropstart">
										<a class="dropdown-item dropdown-toggle" href="#">نسخه 2</a>
										<ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
											<li> <a class="dropdown-item" href="#">عنوان 1</a> </li>
											<li> <a class="dropdown-item" href="#">عنوان 2</a> </li>
										</ul>
									</li>
									<li> <a class="dropdown-item" href="#">عنوان 3</a> </li>
								</ul>
							</li>
						</ul>
					</li>

					<!-- Nav item 4 Megamenu-->
					<li class="nav-item dropdown dropdown-fullwidth">
						<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">مگامنو</a>
						<div class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
							<div class="row p-4 g-4">
								<!-- Dropdown column item -->
								<div class="col-xl-6 col-xxl-3">
									<h6 class="mb-0">شروع کن</h6>
									<hr>
									<ul class="list-unstyled">
										<li> <a class="dropdown-item" href="#">اینستاگرام مارکتینگ</a> </li>
										<li> <a class="dropdown-item" href="#">تیبلغ نویسی</a> </li>
										<li> <a class="dropdown-item" href="#">سرچ کنسول</a> </li>
										<li> <a class="dropdown-item" href="#">جذب ترافیک موثر</a> </li>
										<li> <a class="dropdown-item" href="#">افزایش فروش</a> </li>
										<li> <a class="dropdown-item" href="#">ویدیو مارکتینگ</a> </li>
										<li> <a class="dropdown-item" href="#">استراتژی تولید محتوا</a> </li>
										<li> <a class="dropdown-item" href="#">آموزش GTmetrix</a> </li>
										<li> <a class="dropdown-item" href="#">آموزش َAlex</a> </li>
										<li> <a class="dropdown-item" href="#">سئو و بهینه سازی</a> </li>
										<li> <a class="dropdown-item" href="#">اصول قرارداد نویسی</a> </li>
									</ul>
								</div>

								<!-- Dropdown column item -->
								<div class="col-xl-6 col-xxl-3">
									<h6 class="mb-0">میزان رتبه</h6>
									<hr>
									<!-- Dropdown item -->
									<div class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
										<a class="stretched-link h6 mb-0" href="#">تماس با مدیریت</a>
										<p class="mb-0 small text-truncate-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
									</div>
									<!-- Dropdown item -->
									<div class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
										<a class="stretched-link h6 mb-0" href="#">مسیر فروش</a>
										<p class="mb-0 small text-truncate-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
									</div>
									<!-- Dropdown item -->
									<div class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
										<a class="stretched-link h6 mb-0" href="#">امنیت و مجوز</a>
										<p class="mb-0 small text-truncate-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
									</div>
								</div>

								<!-- Dropdown column item -->
								<div class="col-xl-6 col-xxl-3">
									<h6 class="mb-0">مدرک</h6>
									<hr>
									<!-- Dropdown item -->
									<div class="d-flex mb-4 position-relative">
										<h2 class="mb-0"><i class="fab fa-fw fa-google text-google-icon"></i></h2>
										<div class="ms-2">
											<a class="stretched-link h6 mb-0" href="#">گواهی سئو گوگل</a>
											<p class="mb-0 small">بدون پیش نیاز</p>
										</div>
									</div>
									<!-- Dropdown item -->
									<div class="d-flex mb-4 position-relative">
										<h2 class="mb-0"><i class="fab fa-fw fa-linkedin-in text-linkedin"></i></h2>
										<div class="ms-2">
											<a class="stretched-link h6 mb-0" href="#">مدیر توسعه کسب و کار (BDE)</a>
											<p class="mb-0 small">بدون پیش نیاز</p>
										</div>
									</div>
									<!-- Dropdown item -->
									<div class="d-flex mb-4 position-relative">
										<h2 class="mb-0"><i class="fab fa-fw fa-facebook text-facebook"></i></h2>
										<div class="ms-2">
											<a class="stretched-link h6 mb-0" href="#">بازاریابی شبکه های اجتماعی فیس بوک</a>
											<p class="mb-0 small">مشاوره تخصصی</p>
										</div>
									</div>
									<!-- Dropdown item -->
									<div class="d-flex mb-4 position-relative">
										<h2 class="mb-0"><i class="fas fa-fw fa-basketball-ball text-dribbble"></i></h2>
										<div class="ms-2">
											<a class="stretched-link h6 mb-0" href="#">طراحی گرافیکی خلاقانه</a>
											<p class="mb-0 small">بدون پیش نیاز</p>
										</div>
									</div>
								</div>

								<!-- Dropdown column item -->
								<div class="col-xl-6 col-xxl-3">
									<h6 class="mb-0">دانلود نرم افزار کاربردی</h6>
									<hr>
									<!-- Image -->
									<img src="assets/images/element/14.svg" alt="">

									<!-- Download button -->
									<div class="row g-2 justify-content-center mt-3">
										<!-- Google play store button -->
										<div class="col-6 col-sm-4 col-xxl-6">
											<a href="#"> <img src="assets/images/client/google-play.svg" class="btn-transition" alt="google-store"> </a>
										</div>
										<!-- App store button -->
										<div class="col-6 col-sm-4 col-xxl-6">
											<a href="#"> <img src="assets/images/client/app-store.svg" class="btn-transition" alt="app-store"> </a>
										</div>
									</div>
								</div>

								<!-- Action box -->
								<div class="col-12">
									<div class="alert alert-success alert-dismissible fade show mt-2 mb-0 rounded-3" role="alert">
										<!-- Avatar -->
										<div class="avatar avatar-xs me-2">
											<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
										</div>
										<!-- Info -->
										کلاس رشد شخصیت از دقیقه 14 شروع می شود، همین حالا <a href="#" class="alert-link">ثبت نام</a> کنید
									</div>
								</div>
							</div>
						</div>
					</li>

					<!-- Nav item 5 link-->
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="advanceMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-ellipsis-h"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-end min-w-auto" data-bs-popper="none">
							<li>
								<a class="dropdown-item" href="#" target="_blank">
									<i class="text-warning fa-fw bi bi-life-preserver me-2"></i>پشتیبانی
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="docs/index.html" target="_blank">
									<i class="text-danger fa-fw bi bi-card-text me-2"></i>داکیومنت
								</a>
							</li>
							<li> <hr class="dropdown-divider"></li>
							<li>
								<a class="dropdown-item" href="../ltr/index.html" target="_blank">
									<i class="text-info fa-fw bi bi-toggle-off me-2"></i>نسخه LTR
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="https://www.rtl-theme.com/" target="_blank">
									<i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>خرید قالب
								</a>
							</li>
							<li> <hr class="dropdown-divider"></li>
							<li>
								<a class="dropdown-item" href="docs/alerts.html" target="_blank">
									<i class="text-orange fa-fw bi bi-puzzle-fill me-2"></i>کدهای کاربردی
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="#">
								  <i class="text-purple fa-fw bi bi-stickies-fill me-2"></i>اسنیپت ها(Snippets)
								</a>
							</li>
						</ul>
					</li>
				</ul>
				<!-- Nav Main menu END -->

				<!-- Nav Search START -->
				<div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
					<div class="nav-item w-100">
						<form class="position-relative">
							<input class="form-control pe-5 bg-transparent" type="search" placeholder="جستجو..." aria-label="Search">
							<button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
								<i class="fas fa-search fs-6 "></i>
							</button>
						</form>
					</div>
				</div>
				<!-- Nav Search END -->
			</div>
			<!-- Main navbar END -->

			<!-- Profile START -->
			<div class="dropdown ms-1 ms-lg-0">
				<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
					<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
				</a>
				<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
					<!-- Profile info -->
					<li class="px-3 mb-3">
						<div class="d-flex align-items-center">
							<!-- Avatar -->
							<div class="avatar me-3">
								<img class="avatar-img rounded-circle shadow" src="assets/images/avatar/01.jpg" alt="avatar">
							</div>
							<div>
								<a class="h6" href="#">الهام حسینی</a>
								<p class="small m-0">example@gmail.com</p>
							</div>
						</div>
					</li>
					<li> <hr class="dropdown-divider"></li>
					<!-- Links -->
					<li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>ویرایش</a></li>
					<li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>تنظیمات</a></li>
					<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>پشتیبانی</a></li>
					<li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>خروج</a></li>
					<li> <hr class="dropdown-divider"></li>
					<!-- Dark mode options START -->
					<li>
						<div class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
							<button type="button" class="btn btn-sm mb-0" data-bs-theme-value="light">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
									<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
									<use href="#"></use>
								</svg> روشن
							</button>
							<button type="button" class="btn btn-sm mb-0" data-bs-theme-value="dark">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch" viewBox="0 0 16 16">
									<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
									<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
									<use href="#"></use>
								</svg> تیره
							</button>
							<button type="button" class="btn btn-sm mb-0 active" data-bs-theme-value="auto">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
									<use href="#"></use>
								</svg> خودکار
							</button>
						</div>
					</li>
					<!-- Dark mode options END-->
				</ul>
			</div>
			<!-- Profile START -->
		</div>
	</nav>
	<!-- Nav END -->
</header>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Main Banner START -->
<section class="position-relative overflow-hidden pt-5 pt-lg-3">
	<!-- SVG START -->
	<figure class="position-absolute top-50 start-0 translate-middle-y ms-n7 d-none d-xxl-block">
		<svg class="rotate-74 fill-danger opacity-1">
			<circle cx="180.4" cy="15.5" r="7.7" />
			<path d="m159.9 22.4c-3.8 0-6.9-3.1-6.9-6.9s3.1-6.9 6.9-6.9 6.9 3.1 6.9 6.9-3.1 6.9-6.9 6.9z" />
			<ellipse transform="matrix(.3862 -.9224 .9224 .3862 71.25 138.08)" cx="139.4" cy="15.5" rx="6.1" ry="6.1" />
			<circle cx="118.9" cy="15.5" r="5.4" />
			<path d="m98.4 20.1c-2.5 0-4.6-2.1-4.6-4.6s2.1-4.6 4.6-4.6 4.6 2.1 4.6 4.6-2.1 4.6-4.6 4.6z" />
			<path d="m77.9 19.3c-2.1 0-3.8-1.7-3.8-3.8s1.7-3.8 3.8-3.8 3.8 1.7 3.8 3.8-1.7 3.8-3.8 3.8z" />
			<path d="m57.3 18.6c-1.7 0-3.1-1.4-3.1-3.1s1.4-3.1 3.1-3.1 3.1 1.4 3.1 3.1-1.4 3.1-3.1 3.1z" />
			<path d="m36.8 17.8c-1.3 0-2.3-1-2.3-2.3s1-2.3 2.3-2.3 2.3 1 2.3 2.3-1 2.3-2.3 2.3z" />
			<circle cx="16.3" cy="15.5" r="1.6" />
			<circle cx="180.4" cy="38.5" r="7.7" />
			<path d="m159.9 45.3c-3.8 0-6.9-3.1-6.9-6.9s3.1-6.9 6.9-6.9 6.9 3.1 6.9 6.9-3.1 6.9-6.9 6.9z" />
			<ellipse transform="matrix(.8486 -.5291 .5291 .8486 .7599 79.566)" cx="139.4" cy="38.5" rx="6.1" ry="6.1" />
			<circle cx="118.9" cy="38.5" r="5.4" />
			<path d="m98.4 43.1c-2.5 0-4.6-2.1-4.6-4.6s2.1-4.6 4.6-4.6 4.6 2.1 4.6 4.6-2.1 4.6-4.6 4.6z" />
			<circle cx="77.9" cy="38.5" r="3.8" />
			<path d="m57.3 41.5c-1.7 0-3.1-1.4-3.1-3.1s1.4-3.1 3.1-3.1 3.1 1.4 3.1 3.1c0 1.8-1.4 3.1-3.1 3.1z" />
			<path d="m36.8 40.8c-1.3 0-2.3-1-2.3-2.3s1-2.3 2.3-2.3 2.3 1 2.3 2.3-1 2.3-2.3 2.3z" />
			<circle cx="16.3" cy="38.5" r="1.6" />
			<circle cx="180.4" cy="61.4" r="7.7" />
			<path d="m159.9 68.3c-3.8 0-6.9-3.1-6.9-6.9s3.1-6.9 6.9-6.9 6.9 3.1 6.9 6.9-3.1 6.9-6.9 6.9z" />
			<ellipse transform="matrix(.3862 -.9224 .9224 .3862 28.902 166.26)" cx="139.4" cy="61.4" rx="6.1" ry="6.1" />
			<circle cx="118.9" cy="61.4" r="5.4" />
			<path d="m98.4 66c-2.5 0-4.6-2.1-4.6-4.6s2.1-4.6 4.6-4.6 4.6 2.1 4.6 4.6c0 2.6-2.1 4.6-4.6 4.6z" />
			<path d="m77.9 65.2c-2.1 0-3.8-1.7-3.8-3.8s1.7-3.8 3.8-3.8 3.8 1.7 3.8 3.8-1.7 3.8-3.8 3.8z" />
			<path d="m57.3 64.5c-1.7 0-3.1-1.4-3.1-3.1s1.4-3.1 3.1-3.1 3.1 1.4 3.1 3.1-1.4 3.1-3.1 3.1z" />
			<path d="m36.8 63.7c-1.3 0-2.3-1-2.3-2.3s1-2.3 2.3-2.3 2.3 1 2.3 2.3-1 2.3-2.3 2.3z" />
			<circle cx="16.3" cy="61.4" r="1.6" />
			<circle cx="180.4" cy="84.4" r="7.7" />
			<path d="m159.9 91.3c-3.8 0-6.9-3.1-6.9-6.9s3.1-6.9 6.9-6.9 6.9 3.1 6.9 6.9-3.1 6.9-6.9 6.9z" />
			<path	d="m139.4 90.5c-3.4 0-6.1-2.7-6.1-6.1s2.7-6.1 6.1-6.1 6.1 2.7 6.1 6.1c0 3.3-2.7 6.1-6.1 6.1z" />
			<circle cx="118.9" cy="84.4" r="5.4" />
			<path d="m98.4 89c-2.5 0-4.6-2.1-4.6-4.6s2.1-4.6 4.6-4.6 4.6 2.1 4.6 4.6-2.1 4.6-4.6 4.6z" />
			<path d="m77.9 88.2c-2.1 0-3.8-1.7-3.8-3.8s1.7-3.8 3.8-3.8 3.8 1.7 3.8 3.8-1.7 3.8-3.8 3.8z" />
			<path d="m57.3 87.4c-1.7 0-3.1-1.4-3.1-3.1s1.4-3.1 3.1-3.1 3.1 1.4 3.1 3.1c0 1.8-1.4 3.1-3.1 3.1z" />
			<path d="m36.8 86.7c-1.3 0-2.3-1-2.3-2.3s1-2.3 2.3-2.3 2.3 1 2.3 2.3-1 2.3-2.3 2.3z" />
			<circle cx="16.3" cy="84.4" r="1.6" />
			<circle cx="180.4" cy="107.3" r="7.7" />
			<path d="m159.9 114.2c-3.8 0-6.9-3.1-6.9-6.9s3.1-6.9 6.9-6.9 6.9 3.1 6.9 6.9-3.1 6.9-6.9 6.9z" />
			<path d="m139.4 113.4c-3.4 0-6.1-2.7-6.1-6.1s2.7-6.1 6.1-6.1 6.1 2.7 6.1 6.1-2.7 6.1-6.1 6.1z" />
			<circle cx="118.9" cy="107.3" r="5.4" />
			<path d="m98.4 111.9c-2.5 0-4.6-2.1-4.6-4.6s2.1-4.6 4.6-4.6 4.6 2.1 4.6 4.6c0 2.6-2.1 4.6-4.6 4.6z" />
			<path d="m77.9 111.2c-2.1 0-3.8-1.7-3.8-3.8s1.7-3.8 3.8-3.8 3.8 1.7 3.8 3.8-1.7 3.8-3.8 3.8z" />
			<path d="m57.3 110.4c-1.7 0-3.1-1.4-3.1-3.1s1.4-3.1 3.1-3.1 3.1 1.4 3.1 3.1-1.4 3.1-3.1 3.1z" />
			<path d="m36.8 109.6c-1.3 0-2.3-1-2.3-2.3s1-2.3 2.3-2.3 2.3 1 2.3 2.3c0.1 1.3-1 2.3-2.3 2.3z" />
			<circle cx="16.3" cy="107.3" r="1.6" />
			<circle cx="180.4" cy="130.3" r="7.7" />
			<path d="m159.9 137.2c-3.8 0-6.9-3.1-6.9-6.9s3.1-6.9 6.9-6.9 6.9 3.1 6.9 6.9-3.1 6.9-6.9 6.9z" />
			<ellipse transform="matrix(.3862 -.9224 .9224 .3862 -34.62 208.52)" cx="139.4" cy="130.3" rx="6.1" ry="6.1" />
			<circle cx="118.9" cy="130.3" r="5.4" />
			<path d="m98.4 134.9c-2.5 0-4.6-2.1-4.6-4.6s2.1-4.6 4.6-4.6 4.6 2.1 4.6 4.6-2.1 4.6-4.6 4.6z" />
			<path d="m77.9 134.1c-2.1 0-3.8-1.7-3.8-3.8s1.7-3.8 3.8-3.8 3.8 1.7 3.8 3.8-1.7 3.8-3.8 3.8z" />
			<path d="m57.3 133.4c-1.7 0-3.1-1.4-3.1-3.1s1.4-3.1 3.1-3.1 3.1 1.4 3.1 3.1-1.4 3.1-3.1 3.1z" />
			<path d="m36.8 132.6c-1.3 0-2.3-1-2.3-2.3s1-2.3 2.3-2.3 2.3 1 2.3 2.3-1 2.3-2.3 2.3z" />
			<circle cx="16.3" cy="130.3" r="1.6" />
			<circle cx="180.4" cy="153.2" r="7.7" />
			<path d="m159.9 160.1c-3.8 0-6.9-3.1-6.9-6.9s3.1-6.9 6.9-6.9 6.9 3.1 6.9 6.9-3.1 6.9-6.9 6.9z" />
			<ellipse transform="matrix(.3862 -.9224 .9224 .3862 -55.794 222.61)" cx="139.4" cy="153.2" rx="6.1" ry="6.1" />
			<circle cx="118.9" cy="153.2" r="5.4" />
			<path d="m98.4 157.8c-2.5 0-4.6-2.1-4.6-4.6s2.1-4.6 4.6-4.6 4.6 2.1 4.6 4.6c0 2.6-2.1 4.6-4.6 4.6z" />
			<circle cx="77.9" cy="153.2" r="3.8" />
			<path d="m57.3 156.3c-1.7 0-3.1-1.4-3.1-3.1s1.4-3.1 3.1-3.1 3.1 1.4 3.1 3.1-1.4 3.1-3.1 3.1z" />
			<path d="m36.8 155.5c-1.3 0-2.3-1-2.3-2.3s1-2.3 2.3-2.3 2.3 1 2.3 2.3-1 2.3-2.3 2.3z" />
			<circle cx="16.3" cy="153.2" r="1.6" />
			<circle cx="180.4" cy="176.2" r="7.7" />
			<path d="m159.9 183.1c-3.8 0-6.9-3.1-6.9-6.9s3.1-6.9 6.9-6.9 6.9 3.1 6.9 6.9-3.1 6.9-6.9 6.9z" />
			<ellipse transform="matrix(.3862 -.9224 .9224 .3862 -76.968 236.7)" cx="139.4" cy="176.2" rx="6.1" ry="6.1" />
			<circle cx="118.9" cy="176.2" r="5.4" />
			<path d="m98.4 180.8c-2.5 0-4.6-2.1-4.6-4.6s2.1-4.6 4.6-4.6 4.6 2.1 4.6 4.6-2.1 4.6-4.6 4.6z" />
			<path d="m77.9 180c-2.1 0-3.8-1.7-3.8-3.8s1.7-3.8 3.8-3.8 3.8 1.7 3.8 3.8-1.7 3.8-3.8 3.8z" />
			<path d="m57.3 179.3c-1.7 0-3.1-1.4-3.1-3.1s1.4-3.1 3.1-3.1 3.1 1.4 3.1 3.1-1.4 3.1-3.1 3.1z" />
			<path d="m36.8 178.5c-1.3 0-2.3-1-2.3-2.3s1-2.3 2.3-2.3 2.3 1 2.3 2.3-1 2.3-2.3 2.3z" />
			<circle cx="16.3" cy="176.2" r="1.6" />
		</svg>
	</figure>
	<!-- SVG END -->

	<!-- SVG START -->
	<span class="position-absolute top-50 end-0 translate-middle-y mt-5 me-n5 d-none d-xxl-inline-flex">
		<svg class="fill-warning rotate-186 opacity-8">
			<path d="m35.4 54.2c0 0.6 0 1.1-0.1 1.7-0.9 9.3-9.2 16.1-18.5 15.1-4.5-0.4-8.5-2.6-11.4-6.1-2.8-3.5-4.2-7.9-3.7-12.4 0.9-9.3 9.2-16.1 18.5-15.1 4.5 0.4 8.5 2.6 11.4 6.1 2.4 3 3.8 6.8 3.8 10.7zm-33.4 0c0 3.8 1.3 7.5 3.8 10.4 2.8 3.4 6.8 5.5 11.2 6 9.1 0.9 17.2-5.8 18.1-14.8 0.4-4.4-0.9-8.7-3.7-12.1s-6.8-5.5-11.2-6c-9.2-0.8-17.3 5.8-18.2 14.9v1.6z" />
			<path d="m39 54.1c0 1.1-0.1 2.2-0.3 3.3-1.8 9.8-11.2 16.2-21 14.4-4.7-0.8-8.8-3.5-11.5-7.4-2.7-4-3.7-8.7-2.8-13.5 1.8-9.8 11.2-16.2 21-14.4 4.7 0.9 8.8 3.6 11.5 7.5 2.1 3 3.1 6.6 3.1 10.1zm-35.6 0.1c0 3.5 1.1 7 3.1 9.9 2.7 3.9 6.7 6.5 11.3 7.4 9.6 1.8 18.8-4.5 20.6-14.1 0.9-4.6-0.1-9.3-2.8-13.2s-6.7-6.5-11.3-7.4c-9.6-1.8-18.8 4.5-20.6 14.1-0.2 1.1-0.3 2.2-0.3 3.3z" />
			<path d="m42.8 54.2c0 1.7-0.2 3.3-0.7 5-2.7 10.2-13.3 16.3-23.5 13.6-5-1.3-9.1-4.5-11.7-8.9-2.5-4.5-3.2-9.7-1.9-14.7 2.7-10.2 13.3-16.3 23.5-13.6 5 1.3 9.1 4.5 11.7 8.9 1.7 3 2.6 6.3 2.6 9.7zm-38.1 0c0 3.3 0.9 6.5 2.5 9.4 2.5 4.4 6.6 7.5 11.5 8.8 10 2.7 20.4-3.3 23.1-13.4 1.3-4.9 0.6-9.9-1.9-14.3s-6.6-7.5-11.5-8.8c-10-2.6-20.4 3.4-23 13.4-0.5 1.6-0.7 3.3-0.7 4.9z" />
			<path d="m46.7 54.2c0 2.2-0.4 4.5-1.1 6.6-3.6 10.7-15.3 16.5-26.1 12.8-5.2-1.8-9.4-5.4-11.8-10.4-2.4-4.9-2.8-10.5-1-15.7 3.6-10.6 15.3-16.4 26-12.8l-0.1 0.2 0.1-0.2c5.2 1.8 9.4 5.4 11.8 10.4 1.5 2.9 2.2 6 2.2 9.1zm-40.8 0c0 3.1 0.7 6.1 2.1 8.9 2.4 4.8 6.5 8.4 11.6 10.2 10.5 3.6 22-2.1 25.6-12.6 1.7-5.1 1.4-10.6-1-15.4s-6.5-8.4-11.6-10.2c-10.5-3.6-22 2.1-25.6 12.6-0.7 2.1-1.1 4.3-1.1 6.5z" />
			<path d="m50.7 54.2c0 2.8-0.5 5.6-1.6 8.2-4.5 11.2-17.4 16.6-28.6 12.1-5.4-2.2-9.7-6.4-12-11.8s-2.3-11.4-0.1-16.8c4.5-11.2 17.4-16.6 28.6-12.1 5.4 2.2 9.7 6.4 12 11.8 1.1 2.8 1.7 5.7 1.7 8.6zm-43.6 0c0 2.8 0.6 5.7 1.7 8.4 2.2 5.3 6.4 9.4 11.8 11.6 11 4.5 23.6-0.9 28.1-11.9 2.2-5.3 2.1-11.2-0.1-16.5s-6.4-9.4-11.8-11.6c-11-4.5-23.6 0.9-28.1 11.9-1.1 2.6-1.6 5.3-1.6 8.1z" />
			<path d="m54.7 54.2c0 3.4-0.7 6.7-2.2 9.9-5.5 11.7-19.5 16.7-31.2 11.3-5.7-2.6-10-7.3-12.1-13.2s-1.8-12.2 0.8-17.9c5.5-11.7 19.4-16.8 31.1-11.3 5.7 2.6 10 7.3 12.1 13.2 1 2.6 1.5 5.3 1.5 8zm-46.5 0c0 2.7 0.5 5.3 1.4 7.9 2.1 5.8 6.3 10.4 11.9 13 11.5 5.4 25.3 0.4 30.6-11.1 2.6-5.6 2.9-11.8 0.8-17.6s-6.3-10.4-11.9-13l0.1-0.2-0.1 0.1c-11.5-5.4-25.3-0.4-30.6 11.1-1.5 3.1-2.2 6.5-2.2 9.8z" />
			<path d="m58.7 54.2c0 4-1 7.9-2.8 11.5-6.4 12.2-21.5 16.9-33.6 10.6-6-3.1-10.3-8.3-12.3-14.6s-1.4-13.1 1.7-19c6.3-12.2 21.4-17 33.6-10.6 5.9 3.1 10.3 8.3 12.3 14.6 0.8 2.5 1.1 5 1.1 7.5zm-49.5 0c0 2.5 0.4 5 1.1 7.4 2 6.3 6.3 11.4 12.1 14.4 12 6.3 26.9 1.6 33.1-10.4 3-5.8 3.6-12.5 1.7-18.7-2-6.3-6.3-11.4-12.1-14.4-12-6.3-26.9-1.6-33.1 10.4-1.9 3.5-2.8 7.4-2.8 11.3z" />
			<path d="m62.9 54.2c0 4.6-1.2 9.1-3.5 13.1-7.3 12.7-23.6 17.1-36.2 9.9-6.1-3.5-10.5-9.2-12.4-16s-0.9-14 2.6-20.1c7.3-12.7 23.5-17.1 36.2-9.8l-0.1 0.2 0.1-0.2c6.1 3.5 10.5 9.2 12.4 16 0.5 2.3 0.9 4.6 0.9 6.9zm-52.7-0.1c0 2.3 0.3 4.6 0.9 6.9 1.8 6.7 6.2 12.3 12.2 15.8 12.5 7.2 28.5 2.9 35.7-9.6 3.5-6.1 4.4-13.1 2.5-19.8-1.8-6.7-6.2-12.3-12.2-15.8-12.5-7.2-28.5-2.8-35.7 9.7-2.2 3.9-3.4 8.3-3.4 12.8z" />
			<path d="m67 54.2c0 5.2-1.4 10.3-4.2 14.8-8.2 13.2-25.5 17.2-38.7 9-6.4-4-10.8-10.2-12.5-17.5s-0.5-14.8 3.5-21.2c8.2-13.2 25.5-17.2 38.7-9 6.4 4 10.8 10.2 12.5 17.5 0.5 2.1 0.7 4.3 0.7 6.4zm-55.9-0.1c0 2.1 0.2 4.3 0.7 6.4 1.7 7.2 6.1 13.3 12.4 17.2 13 8.1 30.1 4.1 38.2-8.9 3.9-6.3 5.1-13.7 3.4-20.9s-6.1-13.3-12.4-17.2c-13-8.1-30.1-4.1-38.2 8.9-2.6 4.4-4.1 9.4-4.1 14.5z" />
			<path d="m71.2 54.2c0 5.8-1.7 11.5-5 16.4-9.1 13.7-27.6 17.4-41.2 8.3-6.6-4.4-11.1-11.1-12.7-18.9s0-15.7 4.4-22.3c9.1-13.6 27.6-17.4 41.2-8.3 6.6 4.4 11.1 11.1 12.7 18.9 0.4 2 0.6 4 0.6 5.9zm-59.1-0.1c0 1.9 0.2 3.9 0.6 5.9 1.5 7.7 6 14.3 12.5 18.6 13.5 9 31.7 5.3 40.7-8.2 4.3-6.5 5.9-14.4 4.3-22-1.5-7.7-6-14.3-12.5-18.6-13.5-9-31.7-5.3-40.7 8.2-3.3 4.8-4.9 10.4-4.9 16.1z" />
			<path d="m75.4 54.3c0 6.4-2 12.7-5.8 18-10 14.1-29.6 17.5-43.7 7.5-6.9-4.8-11.4-12-12.8-20.3s0.5-16.6 5.3-23.4c9.9-14.1 29.6-17.5 43.7-7.5 6.8 4.8 11.4 12 12.8 20.3 0.3 1.8 0.5 3.6 0.5 5.4zm-62.4-0.2c0 1.8 0.2 3.6 0.5 5.3 1.4 8.2 5.9 15.3 12.7 20.1 14 9.9 33.4 6.5 43.2-7.4 4.8-6.8 6.6-15 5.2-23.1-1.4-8.2-5.9-15.3-12.7-20.1-14-9.9-33.4-6.5-43.2 7.4-3.8 5.3-5.7 11.5-5.7 17.8z" />
			<path d="m79.6 54.3c0 7.1-2.3 13.9-6.5 19.7-10.9 14.6-31.6 17.7-46.3 6.8-7.1-5.3-11.7-13-13-21.7s0.9-17.4 6.2-24.5c10.9-14.6 31.6-17.7 46.3-6.8 7.1 5.3 11.7 13 13 21.7 0.2 1.5 0.3 3.1 0.3 4.8zm-65.8-0.2c0 1.6 0.1 3.2 0.4 4.8 1.3 8.7 5.8 16.3 12.8 21.5 14.5 10.8 35 7.7 45.7-6.7 5.2-7 7.4-15.6 6.1-24.2s-5.8-16.3-12.8-21.5l0.1-0.1v0.1c-14.5-10.8-35-7.7-45.7 6.7-4.3 5.7-6.6 12.4-6.6 19.4z" />
			<path d="m83.9 54.3c0 7.7-2.5 15.1-7.4 21.3-11.8 15.1-33.7 17.8-48.8 6-7.3-5.7-12-13.9-13.1-23.1s1.4-18.3 7.1-25.6c11.8-15.1 33.7-17.8 48.8-6 7.3 5.7 12 13.9 13.1 23.1 0.2 1.4 0.3 2.8 0.3 4.3zm-69.2-0.2c0 1.4 0.1 2.9 0.3 4.3 1.1 9.1 5.7 17.2 13 22.9 15 11.7 36.6 9 48.3-6 5.7-7.2 8.1-16.2 7-25.4-1.1-9.1-5.7-17.2-13-22.9-15-11.7-36.6-9-48.3 6-4.8 6.1-7.3 13.5-7.3 21.1z" />
			<path d="m88.1 54.3c0 8.3-2.8 16.4-8.2 22.9-12.7 15.6-35.7 18-51.3 5.3-7.6-6.1-12.3-14.9-13.3-24.5-1-9.7 1.8-19.2 8-26.7 12.7-15.6 35.7-18 51.3-5.3 7.6 6.1 12.3 14.9 13.3 24.5 0.2 1.2 0.2 2.5 0.2 3.8zm-72.6-0.2c0 1.2 0.1 2.5 0.2 3.8 1 9.6 5.6 18.2 13.1 24.3 15.5 12.5 38.3 10.2 50.9-5.2 6.1-7.5 8.9-16.9 7.9-26.5s-5.6-18.2-13.1-24.3c-15.5-12.6-38.3-10.2-50.9 5.2-5.2 6.5-8.1 14.5-8.1 22.7z" />
			<path d="m92.4 54.2c0 9-3.1 17.6-9 24.6-13.6 16.1-37.7 18.1-53.8 4.5-7.8-6.6-12.6-15.8-13.4-26-0.9-10.2 2.3-20 8.9-27.8 13.5-16 37.7-18.1 53.8-4.5 7.8 6.6 12.6 15.8 13.4 26 0.1 1.1 0.1 2.2 0.1 3.2zm-76-0.1c0 1.1 0 2.1 0.1 3.2 0.8 10.1 5.6 19.2 13.3 25.7 15.9 13.5 39.8 11.4 53.3-4.5 6.5-7.7 9.7-17.5 8.8-27.6-0.8-9.9-5.6-19.1-13.3-25.6-15.9-13.5-39.8-11.4-53.3 4.5-5.8 6.9-8.9 15.4-8.9 24.3z" />
			<path d="m96.7 54.2c0 9.7-3.5 18.9-9.9 26.2-14.5 16.6-39.8 18.3-56.3 3.8-8-7-12.8-16.7-13.6-27.4-0.7-10.6 2.8-20.9 9.8-28.9 14.5-16.6 39.8-18.2 56.3-3.8l-0.1 0.1 0.1-0.1c8 7 12.8 16.7 13.6 27.4 0.1 0.9 0.1 1.8 0.1 2.7zm-79.5-0.1c0 0.9 0 1.8 0.1 2.7 0.7 10.6 5.4 20.2 13.4 27.1 16.4 14.4 41.5 12.7 55.8-3.7 7-7.9 10.4-18.1 9.7-28.7-0.7-10.5-5.4-20.1-13.4-27.1-16.4-14.3-41.5-12.7-55.8 3.8-6.4 7.2-9.8 16.4-9.8 25.9z" />
			<path d="m101 54.2c0 10.3-3.8 20.1-10.7 27.9-15.4 17.1-41.8 18.4-58.9 3-8.3-7.5-13.1-17.7-13.7-28.8s3.2-21.8 10.7-30c15.4-17.1 41.8-18.4 58.9-3 8.3 7.5 13.1 17.7 13.7 28.8v2.1zm-83-0.1c0 0.7 0 1.4 0.1 2.2 0.6 11 5.4 21.1 13.6 28.5 16.9 15.3 43.1 13.9 58.4-3 7.4-8.2 11.2-18.8 10.6-29.8s-5.4-21.1-13.6-28.5c-16.9-15.3-43.1-13.9-58.4 3-7 7.7-10.7 17.4-10.7 27.6z" />
			<path d="m105.3 54.2c0 11-4.1 21.4-11.6 29.5-16.3 17.5-43.9 18.6-61.4 2.3-8.5-7.9-13.4-18.6-13.8-30.2-0.5-11.6 3.6-22.7 11.5-31.2 16.3-17.5 43.9-18.5 61.4-2.2 8.5 7.9 13.4 18.6 13.8 30.2 0.1 0.5 0.1 1.1 0.1 1.6zm-86.5-0.1v1.6c0.4 11.5 5.3 22.1 13.7 30 17.4 16.2 44.7 15.2 60.9-2.2 7.8-8.4 11.9-19.4 11.5-30.9s-5.3-22.1-13.7-30l0.1-0.1-0.1 0.1c-17.4-16.1-44.7-15.1-60.9 2.3-7.5 8-11.5 18.3-11.5 29.2z" />
			<path d="m109.6 54.2c0 11.7-4.4 22.7-12.5 31.2-17.2 18-45.9 18.7-63.9 1.5-8.7-8.3-13.7-19.6-14-31.6-0.3-12.1 4.2-23.6 12.5-32.3 17.2-18 45.9-18.7 63.9-1.5 8.7 8.3 13.7 19.6 14 31.6v1.1zm-90 0v1.1c0.3 12 5.2 23.1 13.9 31.4 17.9 17.1 46.3 16.4 63.4-1.5 8.3-8.7 12.7-20 12.4-32s-5.3-23.2-13.9-31.4c-17.9-17.1-46.4-16.4-63.4 1.5-8.1 8.4-12.4 19.3-12.4 30.9z" />
			<path d="m113.9 54.2c0 12.3-4.7 24-13.4 32.8-18.1 18.5-47.9 18.9-66.4 0.8-9-8.8-14-20.5-14.1-33-0.2-12.5 4.6-24.4 13.4-33.4 18.1-18.6 47.9-18.9 66.4-0.8l-0.1 0.1 0.1-0.1c9 8.8 14 20.5 14.1 33v0.6zm-93.6 0v0.5c0.1 12.4 5.1 24.1 14 32.8 18.4 18 48 17.6 65.9-0.7 8.7-8.9 13.4-20.7 13.3-33.1s-5.1-24.1-14-32.8c-18.4-18-48-17.6-65.9 0.7-8.6 8.8-13.3 20.3-13.3 32.6z" />
			<path d="m118.3 54.2c0 13-5.1 25.3-14.3 34.5-19 19-50 19-69 0-9.2-9.2-14.3-21.4-14.3-34.5 0-13 5.1-25.3 14.3-34.5 19-19 50-19 69 0l-0.1 0.1 0.1-0.1c9.2 9.2 14.3 21.5 14.3 34.5zm-97.2 0c0 12.9 5 25.1 14.2 34.2 18.9 18.9 49.6 18.9 68.4 0 9.1-9.1 14.2-21.3 14.2-34.2s-5-25.1-14.2-34.2c-18.8-18.9-49.5-18.9-68.4 0-9.2 9.1-14.2 21.3-14.2 34.2z" />
		</svg>
	</span>
	<!-- SVG END -->

	<!-- SVG START -->
	<figure class="position-absolute top-0 start-0 ms-5">
		<svg class="fill-orange opacity-4" width="29px" height="29px">
			<path d="M29.004,14.502 C29.004,22.512 22.511,29.004 14.502,29.004 C6.492,29.004 -0.001,22.512 -0.001,14.502 C-0.001,6.492 6.492,-0.001 14.502,-0.001 C22.511,-0.001 29.004,6.492 29.004,14.502 Z"></path>
		</svg>
	</figure>
	<!-- SVG END -->

	<!-- Content START -->
	<div class="container">
		<!-- Title -->
		<div class="row align-items-center g-5">
			<!-- Left content START -->
			<div class="col-lg-5 col-xl-6 position-relative z-index-1 text-center text-lg-start mb-5 mb-sm-0">
				<!-- SVG -->
				<figure class="fill-warning position-absolute bottom-0 end-0 me-5 d-none d-xl-block">
					<svg width="42px" height="42px">
						<path d="M21.000,-0.001 L28.424,13.575 L41.999,20.999 L28.424,28.424 L21.000,41.998 L13.575,28.424 L-0.000,20.999 L13.575,13.575 L21.000,-0.001 Z" />
					</svg>
				</figure>
				<!-- SVG -->
				<figure class="fill-success position-absolute top-0 start-50 translate-middle-x mt-n5 ms-5">
					<svg width="22px" height="21px">
						<path d="M10.717,4.757 L14.440,-0.001 L14.215,6.023 L20.142,4.757 L16.076,9.228 L21.435,12.046 L15.430,12.873 L17.713,18.457 L12.579,15.252 L10.717,20.988 L8.856,15.252 L3.722,18.457 L6.005,12.873 L-0.000,12.046 L5.359,9.228 L1.292,4.757 L7.220,6.023 L6.995,-0.001 L10.717,4.757 Z" />
					</svg>
				</figure>
				<!-- Title -->
				<h1 class="mb-0 display-6">به دانشگاه آنلاین ما <br>
					<span class="position-relative">خوش آمدید
						<!-- SVG START -->
						<span class="position-absolute top-50 start-50 translate-middle ms-3 z-index-n1">
							<svg width="300px" height="62.1px" enable-background="new 0 0 366 62.1" viewBox="0 0 366 62.1" xmlns="http://www.w3.org/2000/svg">
								<path class="fill-warning" d="m322.5 25.3c0 1.4 2.9 0.8 3.1 1.6 0.8 1.1-1.1 1.3-0.6 2.4 13.3 0.9 26.9 1.7 40.2 4-2.5 0.7-4.9 1.6-7.3 1.1-4-0.9-8.2-1-12.2-1.2-8.5-0.5-16.9-1.9-25.5-1.7h-3.1c2.6 0.6 4.8 0.4 5.7 2.2-7.3 0.4-14.1-0.8-21.2-1.1-0.2 0.6-0.5 1.2-0.8 1.8 21.3 0.7 42.5 1.6 64.3 4.6-4.2 1.6-7.7 1-10.8 0.8-6.8-0.5-13.5-1.3-20.3-1.9-0.9-0.1-2.3-0.1-2.9 0.2-2.2 1.6-4.3 0.6-7 0.4 1.4-1 2.5 0.5 3.9-0.8-5.6-1-10.7 0.6-15.9 0s-10.5-0.6-16.6-0.8c2 1.6 4.6 1.3 6.2 1.4 4.9 0 9.9 0.8 14.8 0.7 5.3-0.1 10.4 0.5 15.5 0.9 3.2 0.3 6.7-0.1 9.9-0.4 1.1-0.1 0.5 0.3 0.6 0.6 0.5 0.9 2.2 0.8 3.6 0.8 5.1-0.1 10.1 0.6 14.8 1.5 0.8 0.1 1.5 0 1.7 0.7 0 0.7-0.8 0.6-1.5 0.8-3.9 1.2-7.4-0.2-11.1-0.2-2 0-4.3-1.5-6 0.5-0.3 0.4-1.4 0.1-2.2-0.1-4.5-0.8-9.1-0.5-13.8-1.5-2.3-0.5-5.6 0.1-8.4 0.5-4 0.5-8-0.7-12.1-0.9-3.4-0.2-7.1-0.5-10.5-0.7-7.1-0.3-14.2-1.2-22.3-0.4 4.9 1.1 9.4 1.2 13.8 1.2 9.7 0 19.2 2.3 28.9 1.6 7.3 3.2 15.9 1.5 23.8 2.9 4.9 0.8 10.1 0.8 15.2 1.2 0.5 0 0.8 0.3 1.1 0.9-20-2.1-40.2-1.4-60.8-3 4.9 2.1 10.8-0.3 15.3 2.7-8 1.9-15.8-0.9-23.5-0.1 2.8 1.4 7.1 1.1 9.3 3.3 0.5 0.5 0.2 1.1-1.2 1.3 2.3 1 3.4-2.1 5.7-0.4 0.2-0.6 0.2-1 0.3-1.5 0.8-0.3 2 0.8 1.5 1.5-0.2 0.1 0 0.3 0 0.5 18.7 0.4 37.3 1.7 56.2 3.6-1.7 1.1-2.8 1.2-4.2 1.1-7.1-0.5-14.1-0.9-21.2-1.4-3.1-0.2-6.3-0.4-9.4-0.4-7.6-0.2-15-0.7-22.4-1-9-0.4-17.9-0.1-26.9-0.1-1.2 0-2.9-0.4-3.9 1 14.8 0.3 29.7 0.6 44.4 1.1 14.8 0.6 29.9 1.3 44.2 4.2-4.3 1-8.8 0.9-13 0.5-5.3-0.5-10.5-1.1-15.8-1.2-11.4-0.3-22.9-0.9-34.3-1.2-17.6-0.4-35.4-0.3-53.1-0.4-10.8-0.1-21.7-0.2-32.5 0-17.8 0.4-35.7 0.2-53.5 0.5-13.1 0.3-26.3 0.1-39.4 0.5-11.1 0.3-22.4 0.6-33.6 1-13.1 0.6-26.1 0.2-39.3 0.4-3.9 0.1-7.6 0.2-11.8-0.2 0.9-1.2 2.3-1.3 3.9-1.3 8.4 0.2 16.6-0.4 24.9-0.9 3.9-0.2 7.9-0.4 11.9 0.2 2.5 0.4 5.3-0.3 8-0.4 7.3-0.4 14.7-0.7 22-0.9 11.9-0.5 23.7-1.2 35.6-0.8 7.7 0.2 15.3-0.6 22.9-0.1 2.3 0.2 4.3-0.5 6.5-1h-17.6c-9.6 0-19-0.1-28.6 0-8 0.1-16.1 0.3-24 0.8-2.6 0.2-5.4 0.1-8.2 0.1-10.1 0.3-20.1 0.6-30.2 0.5-5.4 0-10.7-0.1-15.9 0.6-2.3 0.3-4-1.3-6.5-0.6 0.2 0.4 0.5 0.9 0.6 1.5-1.9 0-4 0.4-4.9-0.1-4.2-2.2-9.4-1.5-14.1-2.3-1.7-0.3-3.7-0.1-4.3-1.5-0.5-1.3 1.9-1.5 2.6-2.6-4.2-1.4-4.6-5-8.5-7.2-1.5 0.2-0.9 2.8-4.2 1.3 0.3 2.4 4.5 3.9 2.8 6.4-2.3 0.3-3.2-0.8-4.2-1.7-2.5-4-5.1-8.4-5.1-12.7 0.2-6.8 0.2-13.8 3.6-20.4 0.3-0.5 0.3-1 0.8-1.4 0.9-0.9 1.2-2.4 3.6-2.1 2.2 0.2 2.5 1.5 2.6 2.6 0.2 1.4 1.5 1.8 3.2 2.5 0.9-1.4 0.5-2.9 2.6-3.7 0.2-0.1 0.3-0.4 0.3-0.4-3.1-2.2 1.2-2.2 2.3-3.3-3.1-1.8-4-4.3-3.7-7-1.5-0.3-3.1-0.4-4.5 0-1.7 0.6-2.2-0.5-2.9-1 0.6-0.5 0.8-1.1 2.2-1.3 7.6-0.9 15.2-1.7 22.9-2 20-0.7 39.9-0.9 59.9-1 11.9-0.1 23.8 0.4 35.6 1.1 3.6 0.2 7.1-0.9 10.7-0.5 7.9 0.9 15.8 0.3 23.8 0.5 7.3 0.1 14.4-0.6 21.7-0.1 12.2 0.9 24.4 0.3 36.7 0.6 9.4 0.3 18.9 0.4 28.2 1 11.9 0.7 23.8 1.3 35.6 2 11.1 0.6 22.4 0.5 33.3 2 7.1 1 14.4 1.1 21.3 2.4 4 0.7 8.2 1.6 12.4 1.9 2.2 0.2 0.9 1 1.5 1.5-4-0.8-8-0.8-12.1-1.4-4.3-0.7-8.5-1-12.8 0.4-2.9 1-6.3 0.2-9.3-0.1-10.2-1.1-20.6-1.6-30.8-2.4-12.1-0.9-24.3-1.4-36.4-2.1-9.9-0.6-20-0.5-29.9-1-11.4-0.6-22.7 0-34.2-0.5-6.3-0.3-12.3-0.3-18.5-0.4-4.2-0.1-8.4 1.3-12.8 0.3 0.6 0.2 1.2 0.7 1.9 0.7 10.5 0 20.9 1.9 31.6 1.7 6.5-0.1 13.1 0.2 19.8 0.8 3.2 0.3 6.3-0.4 9.7-0.1 7.6 0.7 15.5 0.5 23 0.8 12.4 0.5 24.7 0.4 37.1 1.1 13.3 0.7 26.8 2.1 39.9 4.1 6.2 0.9 12.7 1.5 19.2 1.7 0.6 0 1.1 0.1 1.5 0.5-4.6 0.1-9.3 0-13.9-0.5-0.6 1.1 1.4 0.9 1.5 1.9-9.7 1.6-19.6-1.4-29.4-0.1 2.2 1.4 5.1 1 7.4 1 7.3 0.1 14.1 1.3 21.2 1.9 2.8 0.3 5.9 0 8.5 0.8 1.5 0.5 4.6-1.1 4.9 1.3 4-0.7 7.3 1.5 11.1 1.2 4-0.3 7.7 0.6 11.6 1.1 0.8 0.1 2.2 0.3 2.3 1.1 0.2 1-1.1 1.2-2 1.5-3.4 1-6.7-0.4-10.1-0.4-0.9 0-2-0.2-2.9-0.2-9.4 0.1-18.8-1.3-28.3-1.8-6-0.4-12.1-0.9-18.1-1.3 0 0.2 0 0.4-0.2 0.6 6.1 0.5 12.1 1.4 18.3 0.7z"/>
							</svg>
						</span>
						<!-- SVG END -->
					</span>
				</h1>

				<!-- Content -->
				<p class="my-4">بازار آنلاین آموزش و یادگیری با بیش از 5K دوره و 10 میلیون دانشجو. توسط متخصصان آموزش داده می شود تا به شما در کسب مهارت های جدید کمک کند.</p>

				<!-- Info -->
				<ul class="list-inline position-relative justify-content-center justify-content-lg-start mb-4">
					<li class="list-inline-item me-2"> <i class="bi bi-patch-check-fill h6 me-1"></i>مدرس مجرب</li>
					<li class="list-inline-item me-2"> <i class="bi bi-patch-check-fill h6 me-1"></i>ارائه مدرک</li>
					<li class="list-inline-item"> <i class="bi bi-patch-check-fill h6 me-1"></i>جذب مدرس</li>
				</ul>

				<div class="d-sm-flex align-items-center justify-content-center justify-content-lg-start">
					<!-- Button -->
					<a href="#" class="btn btn-lg btn-danger-soft me-2 mb-4 mb-sm-0">شروع کن</a>
					<!-- Video button -->
					<div class="d-flex align-items-center justify-content-center py-2 ms-0 ms-sm-4">
						<a data-glightbox data-gallery="office-tour" href="https://www.aparat.com/video/video/embed/videohash/31hor/vt/frame" class="btn btn-round btn-primary-shadow mb-0 overflow-visible me-7">
							<i class="fas fa-play"></i>
							<h6 class="mb-0 ms-3 fw-normal position-absolute start-100 top-50 translate-middle-y">مشاهده ویدیو</h6>
						</a>
					</div>
				</div>
			</div>
			<!-- Left content END -->

			<!-- Right content START -->
			<div class="col-lg-7 col-xl-6 text-center position-relative">
				<!-- SVG decoration -->
				<figure class="position-absolute bottom-0 start-50 translate-middle-x mt-4 mb-0">
					<svg width="550px" height="538px" viewBox="0 0 554 544" style="enable-background:new 0 0 554 544;" xml:space="preserve">
						<path class="fill-primary" d="M423.3,77.2c49.5,32.5,100.4,67.2,118.4,114.5s3.5,107.1-15.4,165.7c-18.7,58.6-41.8,116.1-84,148.6 c-42.5,32.8-104.2,40.2-163.8,37.3c-59.5-3.2-116.8-17.1-164.7-47.9c-48.3-30.6-87.2-78.2-102-131.6C-3,310.5,6.6,251,25.3,194.7 C43.6,138,70.7,84.3,114.1,49.5C157.2,14.8,216.7-1,270.8,6.4C324.8,14.2,373.4,44.7,423.3,77.2z" />
					</svg>
				</figure>

				<!-- SVG decoration -->
				<figure class="position-absolute bottom-0 start-50 translate-middle-x mb-n5 z-index-9">
					<svg width="686px" height="298px" viewBox="0 0 686 298">
					<path class="fill-body" d="M60.9,0L0.1,0C0,0,0,0,0,0.1c1.5,5,0,249.5,11.5,297.9c0,0,649.1,16.1,669-4.6c0,0,0,0,0,0c0.2-0.4,1.2-177.2,4.2-293.3 c0,0,0-0.1-0.1-0.1l-72.9,0c0,0-0.1,0-0.1,0c-0.8,3-43.3,162.3-105.9,209.1c0,0-111.4,87.2-309.9-6C195.9,203.1,66.1,143.2,60.9,0 C61,0,60.9,0,60.9,0z"/>
					</svg>
				</figure>

				<!-- SVG decoration -->
				<figure class="position-absolute top-50 start-50 translate-middle mt-n7">
					<svg class="fill-warning">
						<path d="m22.3 57.6v0.1c-0.1 0.3 0.1 0.6 0.3 0.7 0.3 0.2 0.7 0.2 1 0.2h1.4c1.3 0.1 2.6 0.1 3.9 0.1 1.2 0 2.4 0 3.7 0.2s2.6 0.1 3.9 0.2c0.8 0.1 0.8-1.2 0-1.3-1.2-0.1-2.5 0-3.7-0.2-1.2-0.1-2.3-0.2-3.4-0.2-1.2 0-2.4 0-3.6-0.1-0.6 0-1.1-0.1-1.7-0.1-0.2 0-0.7 0.1-0.8 0 0.1 0.2 0.2 0.5 0.3 0.7v-0.1c0.2-0.7-1.1-1-1.3-0.2z" />
						<path d="m23.3 57.6c-0.1-0.5-0.2-0.8-0.1-1.3v-1.2-2.9c0-0.4-0.1-0.7-0.2-1.1 0-0.4 0-0.8-0.1-1.1-0.1-0.2-0.3-0.4-0.5-0.6-0.4-0.3-0.7-0.5-1-0.9-1.2-1.3-2.7-2.3-3.8-3.7s-1.8-2.9-2.2-4.6c-0.1-0.5-0.2-1-0.3-1.4s-0.2-0.8-0.2-1.3c0-0.8 0-1.7-0.1-2.5-0.1-0.7-0.3-1.5-0.2-2.3s0.5-1.8 0.9-2.5c0.8-1.5 1.5-3.1 2.6-4.4 0.5-0.6 0.9-1.3 1.5-1.8 0.6-0.6 1.3-1.2 1.9-1.8 0.7-0.5 1.4-1.1 2.2-1.5 0.7-0.3 1.4-0.4 2.1-0.6 0.7-0.1 1.3-0.2 2-0.4 0.9-0.3 1.7-0.6 2.7-0.8 0.9-0.2 1.8-0.1 2.8-0.1 1 0.1 2 0.1 2.9 0.4 0.8 0.2 1.6 0.3 2.3 0.6 0.8 0.3 1.5 0.8 2.2 1.4 1.4 1.2 2.7 2.6 3.8 4.1 0.5 0.7 1.1 1.5 1.5 2.2 0.4 0.8 0.8 1.7 1.2 2.5 0.7 1.7 0.7 3.6 0.7 5.5 0 0.9-0.1 1.8-0.3 2.6l-0.6 2.7c-0.5 1.8-1.7 3.5-3 4.9-0.6 0.7-1.5 1.3-2.3 1.8-0.4 0.3-0.9 0.5-1.3 0.7s-0.7 0.4-1.1 0.6c-0.7 0.2-1.7 0.3-2 1-0.1 0.4-0.1 0.7-0.1 1.1 0 0.5-0.1 1-0.2 1.4-0.1 0.9-0.2 1.9-0.3 2.8-0.1 0.5 0 1 0 1.5 0 0.3 0 0.9-0.1 1.2-0.4 0.7 0.7 1.4 1.1 0.7 0.3-0.5 0.3-1.4 0.3-2.1 0-1 0.1-1.9 0.2-2.9 0.1-0.9 0.3-1.8 0.3-2.7v-0.5c0-0.2-0.1-0.1 0.2-0.1 0.4 0 0.9-0.3 1.3-0.4 1.6-0.7 3.1-1.7 4.4-2.8 0.6-0.5 1.1-1.3 1.7-1.9 0.6-0.7 1-1.6 1.5-2.4 0.4-0.7 0.6-1.5 0.8-2.3 0.2-1 0.5-2 0.7-2.9 0.3-2 0.2-4-0.1-5.9-0.1-0.9-0.4-1.6-0.7-2.4-0.4-0.9-0.8-1.9-1.3-2.7-1-1.7-2.2-3.3-3.6-4.6-1.2-1.2-2.4-2.4-4-3.1-0.8-0.3-1.6-0.4-2.4-0.7-1-0.3-1.9-0.4-3-0.5-1-0.1-2-0.2-3 0-1 0.1-2 0.5-2.9 0.8-1.5 0.5-3 0.5-4.5 1.1-1.6 0.7-2.9 1.9-4.1 3-0.3 0.3-0.6 0.5-0.9 0.8s-0.5 0.7-0.7 1c-0.3 0.4-0.6 0.7-0.9 1-0.3 0.4-0.6 0.8-0.8 1.2-0.5 0.8-0.8 1.6-1.3 2.5-0.4 0.8-0.8 1.6-1.1 2.5-0.2 0.8-0.4 1.5-0.3 2.4s0.2 1.8 0.2 2.7c0 2 0.6 4 1.2 5.9 0.7 1.9 2 3.6 3.5 5 0.8 0.7 1.6 1.4 2.3 2.2l0.5 0.5c0.2 0.1 0.4 0.2 0.5 0.4 0.2 0.2 0.2 0.9 0.2 1.2 0.2 1.1 0.1 2.3 0.1 3.4v1.4c0 0.5 0.1 0.9 0.2 1.4 0.1 0.7 1.3 0.4 1.1-0.4z" />
						<path d="m27.1 56.7c0.1 0 0.1 0 0 0 0.4 0 0.7 0.1 1 0.1-0.2-0.4-0.1-1.1 0-1.5 0-0.8 0.1-1.7 0.1-2.5 0-1.6 0-3.2-0.1-4.8-0.2-3.1-0.1-6.3-0.5-9.4-0.1-0.7-0.2-1.3-0.4-2-0.1-0.7-0.2-1.3-0.6-1.9-0.7-0.9-1.9-1-2.9-0.6-1.1 0.5-1.8 1.4-1.6 2.7 0.1 0.6 0.2 1.2 0.6 1.7s0.9 1 1.4 1.4c2.1 1.7 5 2.5 7.7 2 1.4-0.3 2.8-0.8 4.2-1.3 1.3-0.5 2.3-1.2 3.2-2.2 0.7-0.8 1.3-2.3 1.1-3.3-0.3-1.1-1.5-1.8-2.6-1.9-1.3-0.1-2.3 0.4-3.1 1.3-0.9 1.1-1.3 2.3-1.7 3.6-0.4 1.6-0.3 3.3-0.3 4.9-0.1 1.7-0.1 3.4-0.1 5.1-0.1 1.8-0.2 3.5-0.4 5.3-0.1 0.9-0.1 1.7-0.1 2.6 0 0.7-0.1 1.5 0.1 2.2 0.2 0.8 1.5 0.5 1.3-0.3-0.1-0.4-0.1-1-0.1-1.5 0-0.6 0-1.3 0.1-1.9l0.3-3.9c0.2-2.5 0.2-5 0.3-7.5 0-1.2 0-2.5 0.1-3.7 0.1-0.6 0.3-1.2 0.5-1.8s0.3-1.1 0.6-1.5c0.6-0.9 1.3-1.6 2.4-1.5 0.5 0 1 0.2 1.3 0.5 0.4 0.5 0.2 1.1 0 1.6-0.3 1-1.3 1.9-2.2 2.4-1 0.5-2.2 0.8-3.2 1.1-1.3 0.4-2.5 0.8-3.8 0.6-1.1-0.1-2.3-0.5-3.3-1-0.4-0.2-0.9-0.5-1.3-0.8s-0.9-0.7-1.2-1.2c-0.2-0.4-0.4-1.1-0.3-1.6 0.2-0.5 0.7-0.8 1.2-0.9 1.3-0.3 1.3 1.2 1.5 2.1 0.3 1.3 0.4 2.5 0.4 3.8 0.2 2.9 0.3 5.8 0.4 8.7 0.1 1.5 0 2.9-0.1 4.4 0 0.9-0.4 2.4 0.2 3.3 0.2 0.3 0.6 0.4 0.9 0.2 0.2-0.1 0.3-0.2 0.4-0.4 0.1-0.7-1-1.4-1.4-0.7z" />
						<path d="m17.2 44.3c-0.4-0.3-0.4-0.9-0.7-1.2-0.4-0.5-0.8-1.1-1.1-1.7-0.6-1.2-0.9-2.6-1.1-4-0.1-0.6-0.3-1.2-0.3-1.8v-2.1c0-0.4-0.1-0.7-0.1-1.1 0-0.3 0.1-0.7 0.2-1 0.1-0.7 0.4-1.4 0.7-2.1 0.6-1.3 1.5-2.5 2.3-3.6 0.8-1 1.7-2 2.6-3s2.3-1.7 3.5-2.3c0.7-0.3 1.3-0.6 2-0.8 0.6-0.2 1.3-0.2 1.9-0.4 0.7-0.2 1.4-0.2 2.1-0.2 0.3 0 0.6-0.1 0.8-0.1 0.4-0.1 0.9 0 1.3 0 1.4 0 2.8 0.1 4.2 0.7 0.6 0.2 1.3 0.4 1.8 0.7 0.6 0.3 1.2 0.6 1.8 0.8 1 0.5 2 1.4 2.8 2.1 1 0.9 1.7 1.9 2.4 3 0.6 1 1.6 1.9 1.9 3 0.2 0.7 0.5 1.3 0.6 2.1 0.1 0.7 0 1.5 0 2.2 0 1.5 0 2.9-0.1 4.4-0.1 0.9-0.2 1.7-0.3 2.6-0.1 0.4-0.1 0.8-0.1 1.2s-0.2 0.7-0.3 1c0 1.3-1 2.6-2.1 3.6-0.5 0.4-1 0.8-1.6 1.1-0.6 0.2-1.2 0.6-1.8 0.9s-1.3 0.5-1.9 0.8-1 0.4-1.3 1c-0.3 0.8 0.9 1.1 1.3 0.3-0.1 0.2 0.1 0.1 0.2 0 0.1 0 0.2-0.1 0.3-0.2 0.3-0.1 0.6-0.2 0.9-0.4 0.6-0.3 1.3-0.5 1.9-0.8 0.5-0.3 1.1-0.5 1.6-0.9 0.6-0.4 1.1-0.7 1.6-1.2 1-0.9 1.9-2.2 2.4-3.4 0.2-0.6 0.5-1.2 0.6-1.8l0.3-2.4c0.2-1.6 0.3-3.3 0.3-4.9s0.1-3.1-0.4-4.7c-0.2-0.6-0.4-1.2-0.7-1.7-0.3-0.6-0.7-1.1-1.1-1.6-0.9-1.1-1.5-2.4-2.5-3.4-1.9-1.9-4-3.5-6.6-4.3-0.7-0.2-1.3-0.5-1.9-0.7-0.8-0.2-1.5-0.4-2.4-0.4-0.8 0-1.5-0.1-2.3-0.1-0.7 0-1.5 0.2-2.3 0.2-0.7 0.1-1.4 0.3-2.1 0.4-0.8 0.1-1.4 0.3-2.2 0.5-1.4 0.5-2.8 1.3-4.1 2.1-0.6 0.4-1 0.8-1.5 1.3-0.5 0.6-1 1.1-1.5 1.6-1 1.1-1.9 2.3-2.7 3.6-0.9 1.4-1.4 3-1.6 4.6-0.1 0.8 0 1.7 0.1 2.6 0 0.7-0.1 1.4 0 2.2 0.2 0.8 0.3 1.6 0.4 2.4 0.2 0.8 0.5 1.7 0.8 2.5 0.3 0.7 0.7 1.4 1.2 2 0.2 0.3 0.3 0.5 0.5 0.9 0.1 0.3 0.3 0.6 0.5 0.8 0.7 0.5 1.6-0.4 0.9-0.9z" />
						<path d="m22.8 62.6c1.1-0.4 2.2-0.4 3.4-0.5 1.1-0.1 2.2-0.1 3.3-0.1s2.2 0.1 3.2 0.3c1.1 0.2 2.2 0.5 3.3 0.4-0.2-0.4-0.3-0.7-0.5-1.1-0.2 0.3-0.7 0.3-1 0.5-0.6 0.2-1.1 0.4-1.7 0.5-1.2 0.4-2.5 0.7-3.7 1.1s-2.4 0.7-3.6 1.1c-0.6 0.2-1.2 0.3-1.8 0.5s-1.3 0.5-1.8 0.5c0.1 0.4 0.1 0.9 0.2 1.3 1.1-0.4 2.3-0.4 3.4-0.4 1.2-0.1 2.4-0.1 3.6-0.1s2.4 0.2 3.6 0.6c0.9 0.3 2.1 0.8 2.9 0.3 0.7-0.4 0.1-1.6-0.7-1.1-0.4 0.2-1.2-0.2-1.6-0.3-0.6-0.2-1.1-0.4-1.7-0.5-1.1-0.2-2.2-0.3-3.3-0.3s-2.3 0.1-3.4 0.1c-1.1 0.1-2.2 0.1-3.3 0.5-0.7 0.2-0.6 1.3 0.2 1.3 0.6 0 1.2-0.2 1.8-0.4s1.2-0.4 1.9-0.5c1.4-0.4 2.7-0.8 4.1-1.2 1.3-0.4 2.6-0.8 4-1.2 0.5-0.2 1.1-0.4 1.6-0.5 0.4-0.1 0.9-0.3 1.2-0.6 0.3-0.4 0.2-1.2-0.5-1.1-1.1 0.1-2.3-0.3-3.4-0.5s-2.2-0.3-3.4-0.3-2.4 0.1-3.6 0.2c-1.1 0.1-2.2 0.2-3.2 0.5-0.7 0-0.3 1.3 0.5 1z" />
						<path d="m22.8 57.6c-0.1-0.3-0.1-0.7-0.2-1s-0.1-0.7-0.1-1 0.1-0.7 0.1-1-0.1-0.7-0.1-1v-1c0-0.3-0.1-0.7-0.1-1v-1c0-0.1 0-0.3-0.1-0.4v-0.2 0c-0.4 0.1-0.8 0.1-1.2 0.2 0 0 0 0.1 0.1 0.1 0.4 0.7 1.5 0.1 1.1-0.7 0 0 0-0.1-0.1-0.1-0.3-0.5-1-0.3-1.2 0.2-0.1 0.3 0 0.5 0.1 0.8s0 0.6 0 1 0.1 0.7 0.1 1.1c0 0.3-0.1 0.7 0 1 0 0.3 0.1 0.7 0.1 1 0 0.4 0 0.8-0.1 1.2 0 0.4 0 0.7 0.1 1.1s0.1 0.8 0.2 1.1c0.3 0.8 1.6 0.4 1.3-0.4z" />
						<path d="m19.5 21.6c-1.6 1.9-3.2 3.9-4.4 6.1-1.1 2.2-1.8 4.6-2.1 7-0.3 2.5 0.3 4.9 1.2 7.3 0.9 2.3 2.4 4.1 4.3 5.5 0.7 0.5 1.3-0.6 0.7-1.1-0.9-0.7-1.7-1.4-2.4-2.3s-1.1-2-1.5-3.1c-0.8-2.1-1.1-4.3-0.8-6.5s1-4.4 2-6.3c1.1-2.1 2.6-3.9 4.1-5.7 0.3-0.6-0.6-1.5-1.1-0.9z" />
						<path d="m29.1 4.1c-0.1 0.5-0.1 1-0.1 1.4v1.4c0 1-0.1 2-0.2 3 0 0.3 0.3 0.6 0.6 0.6 0.4 0 0.6-0.3 0.6-0.6 0.1-1 0.2-1.9 0.2-2.9v-1.4c0-0.4 0-0.8 0.1-1.2 0.3-0.7-0.9-1.1-1.2-0.3z" />
						<path d="m2.2 15c0.5 0.2 1 0.6 1.4 1 0.5 0.4 1.1 0.8 1.6 1.2 1.2 0.8 2.4 1.7 3.5 2.6 0.3 0.2 0.7 0.3 0.9 0 0.2-0.2 0.3-0.7 0-0.9-1.2-1-2.5-1.9-3.8-2.8-0.6-0.4-1.1-0.8-1.6-1.2-0.5-0.5-1.1-0.9-1.7-1.1-0.3-0.1-0.7 0.1-0.8 0.5-0.1 0.2 0.1 0.5 0.5 0.7z" />
						<path d="m50.1 21.3c2.3-1.7 4.6-3.5 6.7-5.4 0.6-0.6-0.3-1.5-0.9-0.9-2.1 1.8-4.2 3.6-6.5 5.2-0.3 0.2-0.4 0.6-0.2 0.9 0.2 0.2 0.6 0.4 0.9 0.2z" />
						<path d="m30.3 2.6v-0.1c-0.4-0.1-0.9-0.1-1.3-0.2 0.1 1.5 0.2 2.9 0.1 4.4 0 1.5-0.1 2.9-0.1 4.4 0 0.8 1.3 0.8 1.3 0 0-1.5 0.1-2.9 0.2-4.4s0-2.9-0.1-4.4c-0.1-0.7-1.1-0.9-1.3-0.2v0.1c-0.3 0.9 1 1.2 1.2 0.4z" />
						<path d="m1.1 14.2c0 0.6 0.6 1.1 1.1 1.4s1.1 0.5 1.7 0.7h0.1c0.1 0-0.1-0.1 0 0 0.2 0.1 0.5 0.2 0.7 0.3 0.5 0.2 0.9 0.5 1.4 0.7 0.9 0.5 1.7 1 2.5 1.6 0.3 0.2 0.7 0.3 0.9 0 0.2-0.2 0.3-0.7 0-0.9-1.5-1.1-3.2-2-4.9-2.8-0.4-0.2-0.9-0.3-1.2-0.5-0.3-0.1-0.5-0.2-0.7-0.4l-0.2-0.2c0.1 0 0 0 0 0.1v0c0-0.8-1.3-0.8-1.4 0z" />
						<path d="m52.1 19.7 0.3-0.3c-0.1 0 0 0 0 0 0.1-0.1 0.3-0.2 0.4-0.3l0.9-0.6c0.6-0.4 1.2-0.8 1.8-1.1 0.3-0.2 0.4-0.6 0.2-0.9s-0.6-0.4-0.9-0.2c-1.3 0.7-2.6 1.5-3.7 2.5-0.3 0.2-0.2 0.7 0 0.9 0.4 0.3 0.7 0.3 1 0z" />
						<path d="m20.2 49.3c-0.1 0 0 0 0 0 0.1 0.2 0.1 0.3 0.1 0.4 0.1 0.3 0.2 0.6 0.4 0.9 0.3 0.7 0.5 1.5 0.7 2.3s0.2 1.7 0.3 2.5c0.1 0.7 0.1 1.6 0.5 2.2 0.4 0.7 1.6 0.1 1.1-0.7-0.2-0.3-0.2-0.6-0.2-1 0-0.5-0.1-0.9-0.1-1.4-0.1-0.9-0.2-1.8-0.4-2.7-0.2-0.8-0.5-1.5-0.8-2.3-0.2-0.5-0.3-1.2-0.8-1.4-0.3-0.1-0.7-0.1-0.9 0.2-0.3 0.4-0.3 0.9 0.1 1z" />
					</svg>
				</figure>
				<!-- Icon logos START -->
				<div class="p-2 bg-white shadow rounded-3 position-absolute top-50 start-0 translate-middle-y mt-n7 d-none d-sm-block">
					<img src="assets/images/client/science.svg" alt="Icon">
				</div>
				<div class="p-2 bg-white shadow rounded-3 position-absolute top-0 end-0 me-5">
					<img src="assets/images/client/angular.svg" alt="Icon">
				</div>
				<div 	class="p-2 bg-white shadow rounded-3 position-absolute top-50 end-0 translate-middle-y mt-5 ms-5 d-none d-lg-block z-index-9">
					<img src="assets/images/client/figma.svg" alt="Icon">
				</div>
				<!-- Icon logos END -->

				<!-- Congratulations message -->
				<div class="p-3 bg-blur border border-light shadow rounded-4 position-absolute bottom-0 start-0 z-index-9 d-none d-xl-block mb-5 ms-5">
					<div class="d-flex justify-content-between align-items-center">
						<!-- Icon -->
						<span class="icon-lg bg-warning rounded-circle"><i class="fas fa-envelope text-white"></i></span>
						<!-- Info -->
						<div class="text-start ms-3">
							<h6 class="mb-0 text-white">تبریک میگم!<span class="ms-4"><i class="fas fa-check-circle text-success"></i></span></h6>
							<p class="mb-0 small text-white">پذیرش شما تکمیل شد</p>
						</div>
					</div>
				</div>

				<!-- Active student -->
				<div class="p-3 bg-success d-inline-block rounded-4 shadow-lg position-absolute top-50 end-0 translate-middle-y mt-n7 z-index-1 d-none d-md-block" style="background:url(assets/images/pattern/01.png) no-repeat center center; background-size:cover;">
					<p class="text-white">دانشجویان جدید امروز ما</p>
					<!-- Avatar group -->
					<ul class="avatar-group mb-0">
						<li class="avatar avatar-sm">
							<img class="avatar-img rounded-circle border-white" src="assets/images/avatar/01.jpg" alt="avatar">
						</li>
						<li class="avatar avatar-sm">
							<img class="avatar-img rounded-circle border-white" src="assets/images/avatar/02.jpg" alt="avatar">
						</li>
						<li class="avatar avatar-sm">
							<img class="avatar-img rounded-circle border-white" src="assets/images/avatar/03.jpg" alt="avatar">
						</li>
						<li class="avatar avatar-sm">
							<img class="avatar-img rounded-circle border-white" src="assets/images/avatar/04.jpg" alt="avatar">
						</li>
						<li class="avatar avatar-sm">
							<div class="avatar-img rounded-circle border-white bg-primary">
								<span class="text-white position-absolute top-50 start-50 translate-middle small">1K+</span>
							</div>
						</li>
					</ul>
				</div>
				<!-- Image -->
				<div class="position-relative">
					<img src="assets/images/element/07.png" alt="">
				</div>
			</div>
			<!-- Right content END -->
		</div>
	</div>
	<!-- Content END -->
</section>
<!-- =======================
Main Banner END -->

<!-- =======================
Counter START -->
<section class="py-0 py-xl-5">
	<div class="container">
		<div class="row g-4">
			<!-- Counter item -->
			<div class="col-sm-6 col-xl-3">
				<div class="d-flex justify-content-center align-items-center p-4 bg-warning bg-opacity-15 rounded-3">
					<span class="display-6 lh-1 text-warning mb-0"><i class="fas fa-tv"></i></span>
					<div class="ms-4 h6 fw-normal mb-0">
						<div class="d-flex">
							<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="10"	data-purecounter-delay="200">0</h5>
							<span class="mb-0 h5">دوره</span>
						</div>
						<p class="mb-0">آموزش آنلاین</p>
					</div>
				</div>
			</div>
			<!-- Counter item -->
			<div class="col-sm-6 col-xl-3">
				<div class="d-flex justify-content-center align-items-center p-4 bg-blue bg-opacity-10 rounded-3">
					<span class="display-6 lh-1 text-blue mb-0"><i class="fas fa-user-tie"></i></span>
					<div class="ms-4 h6 fw-normal mb-0">
						<div class="d-flex">
							<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="200" data-purecounter-delay="200">0</h5>
							<span class="mb-0 h5">مـدرس</span>
						</div>
						<p class="mb-0">مجرب و باسابقه</p>
					</div>
				</div>
			</div>
			<!-- Counter item -->
			<div class="col-sm-6 col-xl-3">
				<div class="d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-10 rounded-3">
					<span class="display-6 lh-1 text-purple mb-0"><i class="fas fa-user-graduate"></i></span>
					<div class="ms-4 h6 fw-normal mb-0">
						<div class="d-flex">
							<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="60"	data-purecounter-delay="200">0</h5>
							<span class="mb-0 h5">هنرجـو</span>
						</div>
						<p class="mb-0">دانشجوی آنلاین</p>
					</div>
				</div>
			</div>
			<!-- Counter item -->
			<div class="col-sm-6 col-xl-3">
				<div class="d-flex justify-content-center align-items-center p-4 bg-info bg-opacity-10 rounded-3">
					<span class="display-6 lh-1 text-info mb-0"><i class="bi bi-patch-check-fill"></i></span>
					<div class="ms-4 h6 fw-normal mb-0">
						<div class="d-flex">
							<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="6" data-purecounter-delay="300">0</h5>
							<span class="mb-0 h5">مدرک بین المللی</span>
						</div>
						<p class="mb-0">دوره های گواهی شده</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Counter END -->

<!-- =======================
Popular course START -->
<section>
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-lg-8 mx-auto text-center">
				<h2 class="fs-3">محبوب ترین دوره ها</h2>
				<p class="mb-0">هر موضوعی را در هر زمان مطالعه کنید. هزاران دوره آموزشی را با کمترین قیمت جستجو کنید!</p>
			</div>
		</div>

		<!-- Tabs START -->
		<ul class="nav nav-pills nav-pills-bg-soft justify-content-sm-center mb-4 px-3" id="course-pills-tab" role="tablist">
			<!-- Tab item -->
			<li class="nav-item me-2 me-sm-5">
				<button class="nav-link mb-2 mb-md-0 active" id="course-pills-tab-1" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-1" type="button" role="tab" aria-controls="course-pills-tabs-1" aria-selected="false">طراحی وب</button>
			</li>
			<!-- Tab item -->
			<li class="nav-item me-2 me-sm-5">
				<button class="nav-link mb-2 mb-md-0" id="course-pills-tab-2" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-2" type="button" role="tab" aria-controls="course-pills-tabs-2"	aria-selected="false">برنامه نویسی</button>
			</li>
			<!-- Tab item -->
			<li class="nav-item me-2 me-sm-5">
				<button class="nav-link mb-2 mb-md-0" id="course-pills-tab-3" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-3" type="button" role="tab" aria-controls="course-pills-tabs-3" aria-selected="false">طراحی گرافیکی</button>
			</li>
			<!-- Tab item -->
			<li class="nav-item me-2 me-sm-5">
				<button class="nav-link mb-2 mb-md-0" id="course-pills-tab-4" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-4" type="button" role="tab" aria-controls="course-pills-tabs-4" aria-selected="false">دیجیتال مارکتنیگ</button>
			</li>
			<!-- Tab item -->
			<li class="nav-item me-2 me-sm-5">
				<button class="nav-link mb-2 mb-md-0" id="course-pills-tab-5" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-5" type="button" role="tab" aria-controls="course-pills-tabs-5"	aria-selected="false">بازار مالی</button>
			</li>
		</ul>
		<!-- Tabs END -->

		<!-- Tabs content START -->
		<div class="tab-content" id="course-pills-tabContent">
			<!-- Content START -->
			<div class="tab-pane fade show active" id="course-pills-tabs-1" role="tabpanel" aria-labelledby="course-pills-tab-1">
				<div class="row g-4">

					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="course image">
							<!-- Card body -->
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-purple bg-opacity-10 text-purple">همه سطح</a>
									<a href="#" class="h6 mb-0"><i class="far fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش Sketch</a></h5>
								<p class="mb-2 text-truncate-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>12دقیقه</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>15 ویدیو</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/02.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-success bg-opacity-10 text-success">مقدماتی</a>
									<a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش Photoshop</a></h5>
								<p class="mb-2 text-truncate-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between ">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>9ساعت</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>65 ویدیو</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/03.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-success bg-opacity-10 text-success">مقدماتی</a>
									<a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش Figma</a></h5>
								<p class="mb-2 text-truncate-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>5دقیقه</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>32 ویدیو</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/07.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-success bg-opacity-10 text-success">مقدماتی</a>
									<a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#"> آموزش React-Native</a></h5>
								<p class="mb-2 text-truncate-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>18دقیقه</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>99 ویدیو</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/11.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-purple bg-opacity-10 text-purple">همه سطح</a>
									<a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش HTML</a></h5>
								<p class="mb-2 text-truncate-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>15دقیقه</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>68 ویدیو</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/12.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-success bg-opacity-10 text-success">مقدماتی</a>
									<a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش CSS</a></h5>
								<p class="text-truncate-2 mb-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between mt-2">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>36دقیقه</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>72 ویدیو</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/04.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-purple bg-opacity-10 text-purple">همه سطح</a>
									<a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش Invision</a></h5>
								<p class="mb-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">3.5/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between mt-2">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>6ساعت</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>82 ویدیو</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/09.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-purple bg-opacity-10 text-purple">همه سطح</a>
									<a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش JavaScript</a></h5>
								<p class="text-truncate-2 mb-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">5.0/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>35دقیقه</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>89 دوره</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->
				</div> <!-- Row END -->
			</div>
			<!-- Content END -->

			<!-- Content START -->
			<div class="tab-pane fade" id="course-pills-tabs-2" role="tabpanel" aria-labelledby="course-pills-tab-2">
				<div class="row g-4">
					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/05.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-success bg-opacity-10 text-success">مقدماتی</a>
									<a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش Python</a></h5>
								<p class="text-truncate-2 mb-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between mt-2">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>10ساعت</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>26 دوره</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/06.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-info bg-opacity-10 text-info">پیشرفته</a>
									<a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش Angular</a></h5>
								<p class="text-truncate-2 mb-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between mt-2">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>9ساعت</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>42 ویدیو</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow">
							<!-- Image -->
							<img src="assets/images/courses/4by3/07.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-success bg-opacity-10 text-success">مقدماتی</a>
									<a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش React-Native</a></h5>
								<p class="text-truncate-2 mb-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>18دقیقه</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>99 دوره</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/09.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-purple bg-opacity-10 text-purple">همه سطح</a>
									<a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش JavaScript</a></h5>
								<p class="text-truncate-2 mb-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">5.0/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>35دقیقه</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>89 ویدیو</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/10.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-info bg-opacity-10 text-info">پیشرفته</a>
									<a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش Bootstrap</a></h5>
								<p class="text-truncate-2 mb-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between mt-2">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>25دقیقه</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>38 دوره</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/13.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-success bg-opacity-10 text-success">مقدماتی</a>
									<a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش PHP</a></h5>
								<p class="text-truncate-2 mb-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>21ساعت</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>30 ویدیو</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->
				</div>
			</div>
			<!-- Content END -->

			<!-- Content START -->
			<div class="tab-pane fade" id="course-pills-tabs-3" role="tabpanel" aria-labelledby="course-pills-tab-3">
				<div class="row g-4">
					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-purple bg-opacity-10 text-purple">همه سطح</a>
									<a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش Sketch</a></h5>
								<p class="text-truncate-2 mb-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>12دقیقه</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>15 ویدیو</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/04.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-purple bg-opacity-10 text-purple">همه سطح</a>
									<a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش Invision</a></h5>
								<p class="mb-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">3.5/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between mt-2">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>6ساعت</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>82 ویدیو</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/02.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-success bg-opacity-10 text-success">مقدماتی</a>
									<a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش Photoshop</a></h5>
								<p class="text-truncate-2 mb-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>9ساعت</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>65 ویدیو</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/03.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-success bg-opacity-10 text-success">مقدماتی</a>
									<a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش Figma</a></h5>
								<p class="text-truncate-2 mb-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>5دقیقه</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>32 ویدیو</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->
				</div>
			</div>
			<!-- Content END -->

			<!-- Content START -->
			<div class="tab-pane fade" id="course-pills-tabs-4" role="tabpanel" aria-labelledby="course-pills-tab-4">
				<div class="row g-4">
					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/01.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-success bg-opacity-10 text-success">مقدماتی</a>
									<a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش Laravel</a></h5>
								<p class="text-truncate-2 mb-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>6ساعت</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>82 ویدیو</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-purple bg-opacity-10 text-purple">همه سطح</a>
									<a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش Sketch</a></h5>
								<p class="text-truncate-2 mb-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>12دقیقه</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>15 ویدیو</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->
				</div>
			</div>
			<!-- Content END -->

			<!-- Content START -->
			<div class="tab-pane fade" id="course-pills-tabs-5" role="tabpanel" aria-labelledby="course-pills-tab-5">
				<div class="row g-4">
					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/04.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-purple bg-opacity-10 text-purple">همه سطح</a>
									<a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش Invision</a></h5>
								<p class="text-truncate-2 mb-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">3.5/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>6ساعت</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>82 ویدیو</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="assets/images/courses/4by3/09.jpg" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-purple bg-opacity-10 text-purple">همه سطح</a>
									<a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش JavaScript</a></h5>
								<p class="text-truncate-2 mb-2">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
								<!-- Rating star -->
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									<li class="list-inline-item ms-2 h6 fw-light mb-0">5.0/5.0</li>
								</ul>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>35دقیقه</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>89 ویدیو</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->
				</div>
			</div>
			<!-- Content END -->
		</div>
		<!-- Tabs content END -->
	</div>
</section>
<!-- =======================
Popular course END -->

<!-- =======================
Action box START -->
<section class="pt-0 pt-lg-5">
	<div class="container position-relative">
		<!-- SVG decoration START -->
		<figure class="position-absolute top-50 start-50 translate-middle ms-2">
			<svg>
				<path class="fill-white opacity-4" d="m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z"/>
				<path class="fill-white opacity-4" d="m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z"/>
				<path class="fill-white opacity-4" d="m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z"/>
				<path class="fill-white opacity-4" d="m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z"/>
			</svg>
		</figure>
		<!-- SVG decoration END -->

		<div class="row">
			<div class="col-12">
				<div class="bg-info p-4 p-sm-5 rounded-3">
					<div class="row position-relative">
						<!-- Svg decoration -->
						<figure class="fill-white opacity-1 position-absolute top-50 start-0 translate-middle-y">
							<svg width="141px" height="141px">
								<path	d="M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z"/>
							</svg>
						</figure>
						<!-- Action box -->
						<div class="col-11 mx-auto position-relative">
							<div class="row align-items-center">
								<!-- Title -->
								<div class="col-lg-7">
									<h3 class="text-white">مدرس شویـد!</h3>
									<p class="text-white mb-3 mb-lg-0">ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
								</div>
								<!-- Content and input -->
								<div class="col-lg-5 text-lg-end">
									<a href="#" class="btn btn-outline-warning mb-0">ثبت نام</a>
								</div>
							</div>
						</div>
					</div> <!-- Row END -->
				</div>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Action box END -->

<!-- =======================
Trending courses START -->
<section class="pb-5 pt-0 pt-lg-5">
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-lg-8 mx-auto text-center">
				<h2 class="fs-3">دوره های پیشنهادی جشنواره</h2>
				<p class="mb-0">مشاهده دوره های جدید و 🔥 در جشنواره</p>
			</div>
		</div>
		<div class="row">
			<!-- Slider START -->
			<div class="tiny-slider arrow-round arrow-blur arrow-hover">
				<div class="tiny-slider-inner pb-1" data-autoplay="true" data-arrow="true" data-edge="2" data-dots="false" data-items="3" data-items-lg="2" data-items-sm="1">
					<!-- Card item START -->
					<div>
						<div class="card action-trigger-hover border bg-transparent">
							<!-- Image -->
							<img src="assets/images/courses/4by3/14.jpg" class="card-img-top" alt="course image">
							<!-- Ribbon -->
							<div class="ribbon mt-3"><span>رایگان</span></div>
							<!-- Card body -->
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-3">
									<span class="hstack gap-2">
										<a href="#" class="badge bg-primary bg-opacity-10 text-primary">طراحی وب</a>
										<a href="#" class="badge text-bg-dark">مقدماتی</a>
									</span>
									<a href="#" class="h6 fw-light mb-0"><i class="far fa-bookmark"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش ساخت شبکه اجتماعی با MERN</a></h5>
								<!-- Rating -->
								<div class="d-flex justify-content-between mb-2">
									<div class="hstack gap-2">
										<p class="text-warning m-0">4.5<i class="fas fa-star text-warning ms-1"></i></p>
										<span class="small">(6500)</span>
									</div>
									<div class="hstack gap-2">
										<p class="h6 fw-light mb-0 m-0">6500</p>
										<span class="small">(دانشجو)</span>
									</div>
								</div>
								<!-- Time -->
								<div class="hstack gap-3">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>6ساعت</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>82 ویدیو</span>
								</div>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 bg-transparent">
								<hr>
								<!-- Avatar and Price -->
								<div class="d-flex justify-content-between align-items-center">
									<!-- Avatar -->
									<div class="d-flex align-items-center">
										<div class="avatar avatar-sm">
											<img class="avatar-img rounded-1" src="assets/images/avatar/10.jpg" alt="avatar">
										</div>
										<p class="mb-0 ms-2"><a href="#" class="h6 fw-light mb-0">مهرداد نوروزی</a></p>
									</div>
									<!-- Price -->
									<div>
										<h5 class="text-success mb-0 item-show">رایگـان</h5>
										<a href="#" class="btn btn-sm btn-success-soft item-show-hover"><i class="fas fa-shopping-cart me-2"></i>افزودن به سبد</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div>
						<div class="card action-trigger-hover border bg-transparent">
							<!-- Image -->
							<img src="assets/images/courses/4by3/15.jpg" class="card-img-top" alt="course image">
							<!-- Card body -->
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-3">
									<span class="hstack gap-2">
										<a href="#" class="badge bg-primary bg-opacity-10 text-primary">طراحی وب</a>
										<a href="#" class="badge text-bg-dark">همه سطح</a>
									</span>
									<a href="#" class="h6 fw-light mb-0"><i class="far fa-bookmark"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">دوره بازاریابی دیجیتال برای مبتدیان</a></h5>
								<!-- Rating -->
								<div class="d-flex justify-content-between mb-2">
									<div class="hstack gap-2">
										<p class="text-warning m-0">4.0<i class="fas fa-star text-warning ms-1"></i></p>
										<span class="small">(3500)</span>
									</div>
									<div class="hstack gap-2">
										<p class="h6 fw-light mb-0 m-0">4500</p>
										<span class="small">(دانشجو)</span>
									</div>
								</div>
								<!-- Time -->
								<div class="hstack gap-3">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>12دقیقه</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>65 ویدیو</span>
								</div>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 bg-transparent">
								<hr>
								<!-- Avatar and Price -->
								<div class="d-flex justify-content-between align-items-center">
									<!-- Avatar -->
									<div class="d-flex align-items-center">
										<div class="avatar avatar-sm">
											<img class="avatar-img rounded-1" src="assets/images/avatar/04.jpg" alt="avatar">
										</div>
										<p class="mb-0 ms-2"><a href="#" class="h6 fw-light mb-0">علی صالحی</a></p>
									</div>
									<!-- Price -->
									<div>
										<h5 class="text-success mb-0 item-show">30,000 تومان</h5>
										<a href="#" class="btn btn-sm btn-success-soft item-show-hover"><i class="fas fa-shopping-cart me-2"></i>افزودن به سبد</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div>
						<div class="card action-trigger-hover border bg-transparent">
							<!-- Image -->
							<img src="assets/images/courses/4by3/17.jpg" class="card-img-top" alt="course image">
							<!-- Card body -->
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-3">
									<span class="hstack gap-2">
										<a href="#" class="badge bg-primary bg-opacity-10 text-primary">برنامه نویسی</a>
										<a href="#" class="badge text-bg-dark">مقدماتی</a>
									</span>
									<a href="#" class="h6 fw-light mb-0"><i class="far fa-bookmark"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش ساخت سایت خبری با لاراول</a></h5>
								<!-- Rating -->
								<div class="d-flex justify-content-between mb-2">
									<div class="hstack gap-2">
										<p class="text-warning m-0">4.5<i class="fas fa-star text-warning ms-1"></i></p>
										<span class="small">(2000)</span>
									</div>
									<div class="hstack gap-2">
										<p class="h6 fw-light mb-0 m-0">8000</p>
										<span class="small">(دانشجو)</span>
									</div>
								</div>
								<!-- Time -->
								<div class="hstack gap-3">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>24ساعت</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>55 ویدیو</span>
								</div>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 bg-transparent">
								<hr>
								<!-- Avatar and Price -->
								<div class="d-flex justify-content-between align-items-center">
									<!-- Avatar -->
									<div class="d-flex align-items-center">
										<div class="avatar avatar-sm">
											<img class="avatar-img rounded-1" src="assets/images/avatar/09.jpg" alt="avatar">
										</div>
										<p class="mb-0 ms-2"><a href="#" class="h6 fw-light mb-0">الهام نصرتی</a></p>
									</div>
									<!-- Price -->
									<div>
										<h5 class="text-success mb-0 item-show">135,000 تومان</h5>
										<a href="#" class="btn btn-sm btn-success-soft item-show-hover"><i class="fas fa-shopping-cart me-2"></i>افزودن به سبد</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item START -->
					<div>
						<div class="card action-trigger-hover border bg-transparent">
							<!-- Image -->
							<img src="assets/images/courses/4by3/16.jpg" class="card-img-top" alt="course image">
							<!-- Card body -->
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-3">
									<span class="hstack gap-2">
										<a href="#" class="badge bg-primary bg-opacity-10 text-primary">طراحی وب</a>
										<a href="#" class="badge text-bg-dark">مقدماتی</a>
									</span>
									<a href="#" class="h6 fw-light mb-0"><i class="far fa-bookmark"></i></a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="#">آموزش مقدماتی کتابخانه Pygame</a></h5>
								<!-- Rating -->
								<div class="d-flex justify-content-between mb-2">
									<div class="hstack gap-2">
										<p class="text-warning m-0">4.0<i class="fas fa-star text-warning ms-1"></i></p>
										<span class="small">(2000)</span>
									</div>
									<div class="hstack gap-2">
										<p class="h6 fw-light mb-0 m-0">1200</p>
										<span class="small">(دانشجو)</span>
									</div>
								</div>
								<!-- Time -->
								<div class="hstack gap-3">
									<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>9ساعت</span>
									<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>21 ویدیو</span>
								</div>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 bg-transparent">
								<hr>
								<!-- Avatar and Price -->
								<div class="d-flex justify-content-between align-items-center">
									<!-- Avatar -->
									<div class="d-flex align-items-center">
										<div class="avatar avatar-sm">
											<img class="avatar-img rounded-1" src="assets/images/avatar/01.jpg" alt="avatar">
										</div>
										<p class="mb-0 ms-2"><a href="#" class="h6 fw-light mb-0">زهرا حیدری</a></p>
									</div>
									<!-- Price -->
									<div>
										<h5 class="text-success mb-0 item-show">69,000 تومان</h5>
										<a href="#" class="btn btn-sm btn-success-soft item-show-hover"><i class="fas fa-shopping-cart me-2"></i>افزودن به سبد</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->
				</div>
			</div>
			<!-- Slider END -->
		</div>
	</div>
</section>
<!-- =======================
Trending courses END -->

<!-- =======================
Reviews START -->
<section class="bg-light">
	<div class="container">
		<div class="row g-4 g-lg-5 align-items-center">
			<div class="col-xl-7 order-2 order-xl-1">
				<div class="row mt-0 mt-xl-5">
					<!-- Review -->
					<div class="col-md-7 position-relative mb-0 mt-0 mt-md-5">
						<!-- SVG -->
						<figure class="fill-danger opacity-2 position-absolute top-0 start-0 translate-middle mb-3">
							<svg width="211px" height="211px">
								<path d="M210.030,105.011 C210.030,163.014 163.010,210.029 105.012,210.029 C47.013,210.029 -0.005,163.014 -0.005,105.011 C-0.005,47.015 47.013,-0.004 105.012,-0.004 C163.010,-0.004 210.030,47.015 210.030,105.011 Z"></path>
							</svg>
						</figure>

						<div class="bg-body shadow text-center p-4 rounded-3 position-relative mb-5 mb-md-0">
							<!-- Avatar -->
							<div class="avatar avatar-xl mb-3">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
							</div>
							<!-- Content -->
							<blockquote>
								<p>
									<span class="me-1 small"><i class="fas fa-quote-left"></i></span>
										با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد
									<span class="ms-1 small"><i class="fas fa-quote-right"></i></span>
								</p>
							</blockquote>
							<!-- Rating -->
							<ul class="list-inline mb-2">
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
							</ul>
							<!-- Info -->
							<h6 class="mb-0">الهام حسینی</h6>
						</div>
					</div>

					<!-- Mentor list -->
					<div class="col-md-5 mt-5 mt-md-0 d-none d-md-block">
						<div class="bg-body shadow p-4 rounded-3 d-inline-block position-relative">
							<!-- Icon -->
							<div class="icon-lg bg-warning rounded-circle position-absolute top-0 start-100 translate-middle">
								<i class="bi bi-shield-fill-check text-dark"></i>
							</div>
							<!-- Title -->
							<h6 class="mb-3">مدرسین مجرب</h6>
							<!-- Mentor Item -->
							<div class="d-flex align-items-center mb-3">
								<!-- Avatar -->
								<div class="avatar avatar-sm">
									<img class="avatar-img rounded-1" src="assets/images/avatar/09.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0">نازنین فلاحتی</h6>
									<p class="mb-0 small">مدرس فیزیک</p>
								</div>
							</div>

							<!-- Mentor Item -->
							<div class="d-flex align-items-center mb-3">
								<!-- Avatar -->
								<div class="avatar avatar-sm">
									<img class="avatar-img rounded-1" src="assets/images/avatar/04.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0">مهرداد نوروزی</h6>
									<p class="mb-0 small">مدرس شیمی</p>
								</div>
							</div>

							<!-- Mentor Item -->
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-sm">
									<img class="avatar-img rounded-1" src="assets/images/avatar/02.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0">رامین ناصری</h6>
									<p class="mb-0 small">مدرس ریاضی</p>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- Row END -->

				<div class="row mt-5 mt-xl-0">
					<!-- Rating -->
					<div class="col-7 mt-0 mt-xl-5 text-end position-relative z-index-1 d-none d-md-block">
						<!-- SVG -->
						<figure	class="fill-danger position-absolute top-0 start-50 mt-n7 ms-6 ps-3 pt-2 z-index-n1 d-none d-lg-block">
							<svg style="transform: scale(-1,1)" enable-background="new 0 0 160.7 159.8" height="180px">
								<path d="m153.2 114.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z" />
								<path d="m116.4 114.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
								<path d="m134.8 114.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
								<path d="m135.1 96.9c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
								<path d="m153.5 96.9c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z" />
								<path d="m98.3 96.9c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
								<ellipse cx="116.7" cy="99.1" rx="2.1" ry="2.2" />
								<path d="m153.2 149.8c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.3 0.9-2.2 2.1-2.2z" />
								<path d="m135.1 132.2c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2 0-1.3 0.9-2.2 2.1-2.2z" />
								<path d="m153.5 132.2c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.3 0.9-2.2 2.1-2.2z" />
								<path d="m80.2 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2z" />
								<path d="m117 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
								<path d="m98.6 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
								<path d="m135.4 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
								<path d="m153.8 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
								<path d="m80.6 61.7c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z" />
								<ellipse cx="98.9" cy="63.9" rx="2.1" ry="2.2" />
								<path d="m117.3 61.7c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
								<ellipse cx="62.2" cy="63.9" rx="2.1" ry="2.2" />
								<ellipse cx="154.1" cy="63.9" rx="2.1" ry="2.2" />
								<path d="m135.7 61.7c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
								<path d="m154.4 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
								<path d="m80.9 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z" />
								<path d="m44.1 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z" />
								<path d="m99.2 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2z" />
								<ellipse cx="117.6" cy="46.3" rx="2.1" ry="2.2" />
								<path d="m136 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
								<path d="m62.5 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z" />
								<path d="m154.7 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
								<path d="m62.8 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z" />
								<ellipse cx="136.3" cy="28.6" rx="2.1" ry="2.2" />
								<path d="m99.6 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z" />
								<path d="m117.9 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2z" />
								<path d="m81.2 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z" />
								<path d="m26 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
								<ellipse cx="44.4" cy="28.6" rx="2.1" ry="2.2" />
								<path d="m136.6 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2 0.1 1.2-0.9 2.2-2.1 2.2z" />
								<path d="m155 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2 0.1 1.2-0.9 2.2-2.1 2.2z" />
								<path d="m26.3 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-0.9 2.2-2.1 2.2z" />
								<path d="m81.5 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-0.9 2.2-2.1 2.2z" />
								<path d="m63.1 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-0.9 2.2-2.1 2.2z" />
								<path d="m44.7 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-0.9 2.2-2.1 2.2z" />
								<path d="m118.2 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2 0.1 1.2-0.9 2.2-2.1 2.2z" />
								<path d="m7.9 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2 0.1 1.2-0.9 2.2-2.1 2.2z" />
								<path d="m99.9 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2z" />
							</svg>
						</figure>

						<div class="p-3 bg-primary d-inline-block rounded-4 shadow-lg text-center" style="background:url(assets/images/pattern/02.png) no-repeat center center; background-size:cover;">
							<!-- Info -->
							<h5 class="text-white mb-0">4.5/5.0</h5>
							<!-- Rating -->
							<ul class="list-inline mb-2">
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
							</ul>
							<p class="text-white mb-0">بر اساس 3265 رتبه بندی</p>
						</div>
					</div>

					<!-- Review -->
					<div class="col-md-5 mt-n6 mb-0 mb-md-5">
						<div class="bg-body shadow text-center p-4 rounded-3">
							<!-- Avatar -->
							<div class="avatar avatar-xl mb-3">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
							</div>
							<!-- Content -->
							<blockquote>
								<p>
									<span class="me-1 small"><i class="fas fa-quote-left"></i></span>
										با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد
									<span class="ms-1 small"><i class="fas fa-quote-right"></i></span>
								</p>
							</blockquote>
							<!-- Rating -->
							<ul class="list-inline mb-2">
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
							</ul>
							<!-- Info -->
							<h6 class="mb-0">مسعود قهرمانی</h6>
						</div>
					</div>
				</div> <!-- Row END -->
			</div>
			<div class="col-xl-5 order-1 text-center text-xl-start">
				<!-- Title -->
				<h2 class="fs-2">دیدگـاه هنرجویـان</h2>
				<p>با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
				<a href="#" class="btn btn-primary mb-0">سایر دیدگاه</a>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Reviews END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="pt-5">
	<div class="container">
		<!-- Row START -->
		<div class="row g-4">

			<!-- Widget 1 START -->
			<div class="col-lg-3">
				<!-- logo -->
				<a class="me-0" href="index.html">
					<img class="light-mode-item h-40px" src="assets/images/logo.svg" alt="logo">
					<img class="dark-mode-item h-40px" src="assets/images/logo-light.svg" alt="logo">
				</a>
				<p class="my-3">شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
				<!-- Social media icon -->
				<ul class="list-inline mb-0 mt-3">
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-facebook" href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-instagram" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-twitter" href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-linkedin" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
				</ul>
			</div>
			<!-- Widget 1 END -->

			<!-- Widget 2 START -->
			<div class="col-lg-6">
				<div class="row g-4">
					<!-- Link block -->
					<div class="col-6 col-md-4">
						<h5 class="mb-2 mb-md-4">لینک های مفید</h5>
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link" href="#">درباره ما</a></li>
							<li class="nav-item"><a class="nav-link" href="#">تماس با ما</a></li>
							<li class="nav-item"><a class="nav-link" href="#">وبلاگ</a></li>
							<li class="nav-item"><a class="nav-link" href="#">تسویه حساب</a></li>
							<li class="nav-item"><a class="nav-link" href="#">سوالات متداول</a></li>
						</ul>
					</div>

					<!-- Link block -->
					<div class="col-6 col-md-4">
						<h5 class="mb-2 mb-md-4">راهنما و پشتیبانی</h5>
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link" href="#">داکیومنت</a></li>
							<li class="nav-item"><a class="nav-link" href="#">ارسال تیکت</a></li>
							<li class="nav-item"><a class="nav-link" href="#">خرید دوره</a></li>
							<li class="nav-item"><a class="nav-link" href="#">نقشه سایت</a></li>
						</ul>
					</div>

					<!-- Link block -->
					<div class="col-6 col-md-4">
						<h5 class="mb-2 mb-md-4">لینک های سریع</h5>
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link" href="#">جذب مدرس</a></li>
							<li class="nav-item"><a class="nav-link" href="#">مشاوره رایگان</a></li>
							<li class="nav-item"><a class="nav-link" href="#">شرایط و قوانین</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Widget 2 END -->

			<!-- Widget 3 START -->
			<div class="col-lg-3">
				<h5 class="mb-2 mb-md-4">تماس با ما</h5>
				<!-- Time -->
				<p class="mb-2">
					تلفن: <span class="h6 fw-light ms-2">093200000000</span>
					<span class="d-block small">(9:00 تا 17:00 بعداز ظهر)</span>
				</p>

				<p class="mb-0">ایمیل:<span class="h6 fw-light ms-2">example@gmail.com</span></p>

				<div class="row g-2 mt-2">
					<!-- Google play store button -->
					<div class="col-6 col-sm-4 col-md-3 col-lg-6">
						<a href="#"> <img src="assets/images/client/google-play.svg" alt=""> </a>
					</div>
					<!-- App store button -->
					<div class="col-6 col-sm-4 col-md-3 col-lg-6">
						<a href="#"> <img src="assets/images/client/app-store.svg" alt="app-store"> </a>
					</div>
				</div> <!-- Row END -->
			</div>
			<!-- Widget 3 END -->
		</div><!-- Row END -->

		<!-- Divider -->
		<hr class="mt-4 mb-0">

		<!-- Bottom footer -->
		<div class="py-3">
			<div class="container px-0">
				<div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-md-left">
					<!-- copyright text -->
					<div class="text-primary-hover"> ارائه شده در سایت <a href="https://www.rtl-theme.com/" target="_blank" class="text-body">راست چین</a></div>
					<!-- copyright links-->
					<div class="justify-content-center mt-3 mt-lg-0">
						<ul class="nav list-inline justify-content-center mb-0">
							<li class="list-inline-item">
								<!-- Language selector -->
								<div class="dropup mt-0 text-center text-sm-end">
									<a class="dropdown-toggle nav-link" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="fas fa-globe me-2"></i>زبان ها
									</a>
									<ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/uk.svg" alt="">فارسی</a></li>
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/gr.svg" alt="">انگلیسی </a></li>
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/sp.svg" alt="">فرانسوی</a></li>
									</ul>
								</div>
							</li>
							<li class="list-inline-item"><a class="nav-link" href="#">شرایط استفاده</a></li>
							<li class="list-inline-item"><a class="nav-link pe-0" href="#">قوانین سایت</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/tiny-slider/tiny-slider-rtl.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.js"></script>
<script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>
</body>

</html>
