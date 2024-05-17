<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Type some info">
	<meta name="author" content="Type name">

	<title>Website layout sample </title>

	<!-- Bootstrap css -->
	<link href="{{asset('css/bootstrap.css?v=2.0')}}" rel="stylesheet" type="text/css" />

	<!-- Custom css -->
	<link href="{{asset('css/ui.css?v=2.0')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/responsive.css?v=2.0')}}" rel="stylesheet" type="text/css" />

	<!-- Font awesome 5 -->
	<link href="{{asset('fonts/fontawesome/css/all.min.css')}}" type="text/css" rel="stylesheet">

</head>
<body class="bg-light">

	<header class="section-header">

		<section class="header-main bg-white border-bottom py-lg-3 py-2">
			<div class="container">
				<div class="row gx-2 align-items-center">

					<div class="col-xl-2 col-lg col-6 col-sm-6  col-md flex-grow-0">
						<a href="index.html" class="brand-wrap me-3">
							<img class="logo" height="40" src="images/logo.svg">
						</a> <!-- brand-wrap end.// -->
					</div> <!-- col end.// -->

					<div class="col-xl-7 col-lg-6 col-12 col-sm-12 col-md">
						<form action="#" class="search my-3 my-lg-0">
							<div class="input-group">
								<input type="search" class="form-control" style="width:55%" placeholder="Search">
								<select class="form-select">
									<option value="">All type</option>
									<option value="codex">Special</option>
									<option value="comments">Only best</option>
									<option value="content">Latest</option>
								</select>
								<button class="btn btn-primary">
									<i class="fa fa-search"></i>
								</button>
							</div> <!-- input-group end.// -->
						</form> <!-- search-wrap end.// -->
					</div> <!-- col end.// -->

					<div class="col-xl-3 col-lg col-md-12 col-12">
						
						<!-- widgets-wrap  -->
						<div class="float-lg-end">
							
							<div class="widget-header mx-2 text-center" style="min-width:44px">
								<a href="page-user-signup.html" class="d-inline-block align-middle">
									<span class="fs-5 d-inline-block"> <i class="fa fa-user"></i> </span>
									<small style="max-width:80px;" class="d-block text-truncate"> Profile </small>
								</a>
							</div>

							<div class="widget-header mx-2 text-center" style="min-width:44px">
								<a href="#" class="d-inline-block align-middle">
									<span class="icon-28 fs-5 d-inline-block position-relative">
										<i class="fa fa-comment-dots"></i> <span class="notify">1</span>
									</span>
									<small style="max-width:80px;" class="d-block text-truncate"> Message </small>
								</a>
							</div>
							
							<div class="widget-header mx-2 text-center" style="min-width:44px">
								<a href="#" class="d-inline-block align-middle">
									<span class="fs-5 d-inline-block"> <i class="fa fa-heart"></i> </span>
									<small style="max-width:80px;" class="d-block text-truncate"> Saved </small>
								</a>
							</div>

							<div class="widget-header mx-2 text-center" style="min-width: 44px;">
								<a href="#" class="d-inline-block align-middle">
									<span class="fs-5 d-inline-block"> <i class="fa fa-shopping-cart"></i> </span>
									<small style="max-width:80px;" class="d-block text-truncate"> Cart </small>
								</a>
							</div>

						</div> 
						<!-- widgets-wrap.// -->
					</div> <!-- col end.// -->
				</div> <!-- row end.// -->
			</div> <!-- container end.// -->
		</section> <!-- header-main end.// -->

		<nav class="navbar navbar-light bg-white navbar-expand-lg border-bottom">
			<div class="container">
				
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_main"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbar_main">
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
								All templates
							</a>
							<nav class="dropdown-menu p-4">
								<!-- megamenu-inner -->
								<div class="d-flex flex-wrap flex-sm-nowrap">
									<div style="width: 12rem">
										
										<h6>Ads website</h6>
										<ul class="list-menu mb-3">
											<li><a class="text-body" href="p-ads-index.html"> Ads home </a> </li>
											<li><a class="text-body" href="p-ads-list.html"> Ads listing </a> </li>
											<li><a class="text-body" href="p-ads-detail.html"> Ads detail </a> </li>
										</ul>
		
										<h6>Techstore</h6>
										<ul class="list-menu mb-3">
											<li><a class="text-body" href="p-techstore-index.html"> Main page </a> </li>
											<li><a class="text-body" href="p-techstore-list.html"> Listing view </a> </li>
											<li><a class="text-body" href="p-techstore-detail.html"> Item details </a> </li>
										</ul>
		
									</div>
									<div style="width: 12rem">
										
										<h6>Marketplace</h6>
										<ul class="list-menu mb-3">
											<li><a class="text-body" href="p-market-index.html"> Main page </a> </li>
											<li><a class="text-body" href="p-market-list.html"> Listing view </a> </li>
											<li><a class="text-body" href="p-market-list-grid.html"> Grid view </a> </li>
											<li><a class="text-body" href="p-market-detail.html"> Item detail </a> </li>
											<li><a class="text-body" href="p-market-cart.html"> Cart page </a> </li>
											<li><a class="text-body" href="p-market-order.html"> Order page </a> </li>
										</ul>
		
									</div>
									<div style="width: 12rem">
		
										<h6>Food order</h6>
										<ul class="list-menu mb-3">
											<li><a class="text-body" href="p-food-index.html"> Main page </a> </li>
											<li><a class="text-body" href="p-food-detail.html"> Restaurant foods </a> </li>
											<li><a class="text-body" href="p-food-order.html">  Food order </a> </li>
										</ul>
		
										<h6>Common pages</h6>
										<ul class="list-menu mb-3">
											<li><a class="text-body" href="p-info-pricing.html"> Pricing page </a> </li>
											<li><a class="text-body" href="p-user-profile.html">  User profile </a> </li>
											<li><a class="text-body" href="p-user-signup.html">  User register </a> </li>
										</ul>
									</div>
								</div>
								<figure class="p-5 text-center bg-warning-light rounded">
										<a href="#" class="btn btn-warning">Download all templates</a>
								</figure>
								<!-- megamenu-inner .// -->
							</nav> <!-- dropdown-menu .// -->
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
								Pages
							</a>
							<ul class="dropdown-menu">
								<li> <a class="dropdown-item" href="p-market-index.html"> Main page </a> </li>
								<li> <a class="dropdown-item" href="p-market-list.html"> Listing view </a> </li>
								<li> <a class="dropdown-item" href="p-market-list-grid.html"> Grid view </a> </li>
								<li> <a class="dropdown-item" href="p-market-detail.html"> Detail page </a> </li>
								<li> <a class="dropdown-item" href="p-market-cart.html"> Cart page </a> </li>
								<li> <a class="dropdown-item" href="p-market-order.html"> Order page </a> </li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Projects</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Fitness sport</a>
						</li>						
					</ul>

					<ul class="navbar-nav ms-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">NGN</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="#">NGN</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">English</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="#">Russian</a>
								<a class="dropdown-item" href="#">Uzbek</a>
							</div>
						</li>
					</ul>

				</div> <!-- collapse end.// -->
			</div> <!-- container end.// -->
		</nav> <!-- navbar end.// -->

	</header> <!-- section-header end.// -->

	<!-- ================ SECTION INTRO ================ -->
	<section class="section-intro mb-3 mt-3">
		<div class="container">
			<main class="card p-3">
				<div class="row">
					<aside class="col-lg-3">
						<nav class="nav flex-column nav-pills mb-3 mb-lg-0">
							<a class="nav-link" aria-current="page" href="#">Electronics</a>
							<a class="nav-link" href="#">Clothes and wear</a>
							<a class="nav-link" href="#">Home interiors</a>
							<a class="nav-link" href="#">Computer and tech</a>
							<a class="nav-link" href="#">Tools, equipments</a>
							<a class="nav-link" href="#">Sports and outdoor</a>
							<a class="nav-link" href="#">Animal and pets</a>
							<a class="nav-link" href="#">Machinery tools</a>
							<a class="nav-link" href="#">Other products</a>
						</nav>
					</aside>
					<div class="col-lg-9">

						<div class="row">
							<div class="col-xxl-9 col-lg-8">
								
								<!-- carousel -->
								<div id="carouselMain" class="carousel-main carousel slide" data-bs-ride="carousel">
									<div class="carousel-inner">
										<article class="carousel-item active">
											<div class="carousel-caption">
												<h2 class="mb-3">
													  <span class="fw-normal">Latest trending</span> <br> <strong>Electronic items</strong>
												</h2>
												<a href="#" class="btn btn-warning"> View more </a>
											</div>
											<img style="height: 352px;" src="images/banners/main-tech.png" class="d-block w-100 img-cover" alt="Banner">
										</article>
										<article class="carousel-item">
											<div class="carousel-caption">
												<h2 class="mb-3">
													  <span class="fw-normal">Latest delas</span> <br> <strong>Best Smartphones</strong>
												</h2>
												<a href="#" class="btn btn-warning"> View more </a>
											</div>
											<img style="height: 352px;" src="images/banners/main-phone.png" class="d-block w-100 img-cover" alt="Banner">
										</article>
									</div>  <!-- carousel-inner .// -->

									<button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Previous</span>
									</button>

									<button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Next</span>
									</button>

								</div>
								<!-- carousel .//end -->

							</div>
							<div class="col-xxl-3 col-lg-4 d-none d-lg-block">
								<!-- main-right -->
								<div class="bg-primary-light p-3 rounded mb-3">
									<p class="d-flex mb-3 text-base">
										<img src="images/avatars/avatar.jpg" class="img-avatar me-2" width="44" height="44"  alt="">
										<span>Hi, user <br> let's get stated</span>
									</p>
									<a href="#" class="btn btn-sm btn-primary w-100">Join now</a>
								</div>

								<div class="bg-warning text-white p-3 rounded mb-2">
									Get US $10 off with a new supplier account 
									<br> <a href="#" class="text-white mt-1 fw-bold d-inline-block">Get now</a>
								</div>
								<div class="bg-info text-white p-3 rounded mb-2">
									Send quotes with supplier preferences 
									<br> <a href="#" class="text-white mt-1 fw-bold d-inline-block">Try now</a>
								</div>
								<!-- main-right -->
							</div>
						</div> <!-- row.// -->
					</div>
					<!-- col.// -->
				</div>
			</main>
		</div> <!-- container end.// -->
	</section>
	<!-- ================ SECTION INTRO END.// ================ -->


	<!-- ================ SECTION DEAL  ================ -->
	<section class="pb-3">
		<div class="container">
			<div class="card overflow-hidden">
				<div class="row gx-0">
					<aside class="col-lg-3 p-4">
						<header>
							<h3>Deals and offers</h3>
							<p>Hygiene equipments</p>
						</header><!-- sect-heading -->
						<div class="timer">
							<div> <span class="num">04</span> <small>Days</small></div>
							<div> <span class="num">12</span> <small>Hours</small></div>
							<div> <span class="num">58</span> <small>Min</small></div>
							<div> <span class="num">02</span> <small>Sec</small></div>
						</div>
					</aside> <!-- col.// -->
					<div class="col-lg-9 border-start">
						<div class="row gx-0 bordered-cols">

							<div class="col-md col-sm-4 col-6">
								<figure class="card-product product-sm p-2">
									<a href="#" class="img-wrap p-2"> <img src="images/items/tech/10.jpg"> </a>
									<div class="p-3 text-center">
										<a href="#" class="title">Electric kattle</a>
										<span class="badge bg-danger rounded-pill"> -20% </span>
									</div>
								</figure>
							</div> <!-- col.// -->

							<div class="col-md col-sm-4 col-6">
								<figure class="card-product product-sm p-2">
									<a href="#" class="img-wrap p-2"> <img src="images/items/tech/9.jpg"> </a>
									<div class="p-3 text-center">
										<a href="#" class="title">Headsets</a>
										<span class="badge bg-danger rounded-pill"> -45% </span>
									</div>
								</figure>
							</div> <!-- col.// -->
							<div class="col-md col-sm-4 col-6">
								<figure class="card-product product-sm p-2">
									<a href="#" class="img-wrap p-2"> <img src="images/items/tech/8.jpg"> </a>
									<div class="p-3 text-center">
										<a href="#" class="title">Smart watches</a>
										<span class="badge bg-danger rounded-pill"> -15% </span>
									</div>
								</figure>
							</div> <!-- col.// -->
							<div class="col-md col-sm-4 col-6">
								<figure class="card-product product-sm p-2">
									<a href="#" class="img-wrap p-2"> <img src="images/items/tech/7.jpg"> </a>
									<div class="p-3 text-center">
										<a href="#" class="title">HP Laptop</a>
										<span class="badge bg-danger rounded-pill"> -20% </span>
									</div>
								</figure>
							</div> <!-- col.// -->
							<div class="col-md col-sm-4 col-6">
								<figure class="card-product product-sm p-2">
									<a href="#" class="img-wrap p-2"> <img src="images/items/tech/6.jpg"> </a>
									<div class="p-3 text-center">
										<a href="#" class="title">Canon camera</a>
										<span class="badge bg-danger rounded-pill"> -20% </span>
									</div>
								</figure>
							</div> <!-- col.// -->
						</div> <!-- row.// -->

					</div> <!-- col.// -->
				</div>
				<!-- row .// -->
			</div>
		</div> <!-- container .// -->
	</section>
	<!-- ================ SECTION DEAL .// ================ -->

	<!-- ================ SECTION CARD CATEGORY  ================ -->
	<section class="pb-3">
		<div class="container">
			<div class="card overflow-hidden">
				<div class="row gx-0">
					<aside class="col-lg-3 p-4 bg-cover" style="background-image: url(images/banners/interior.jpg);">
						<header>
							<h3 class="mb-3">Home and <br> outdoor items</h3>
							<a href="#" class="btn btn-light">Source now</a>
						</header><!-- sect-heading -->
					</aside> <!-- col.// -->
					<div class="col-lg-9">

						<ul class="row g-0 bordered-cols m-0">
							<li class="col-6 col-lg-3 col-md-4">
								<div class="card-product p-3 pe-0">
									<a href="#" class="title">Armchairs </a>
									<img class="size-72x72 float-end mb-2" src="images/items/interior/1.jpg">
									<p class="text-muted small"> From <br> USD 25</p>
								</div>
							</li>
							<li class="col-6 col-lg-3 col-md-4">
								<div class="card-product p-3 pe-0">
									<a href="#" class="title">Office chairs </a>
									<img class="size-72x72 float-end mb-2" src="images/items/interior/2.jpg">
									<p class="text-muted small"> From <br> USD 19</p>
								</div>
							</li>
							<li class="col-6 col-lg-3 col-md-4">
								<div class="card-product p-3 pe-0">
									<a href="#" class="title">Kitchen dishes </a>
									<img class="size-72x72 float-end mb-2" src="images/items/interior/3.jpg">
									<p class="text-muted small"> From <br> USD 7</p>
								</div>
							</li>
							<li class="col-6 col-lg-3 col-md-4">
								<div class="card-product p-3 pe-0">
									<a href="#" class="title">Home Plants </a>
									<img class="size-72x72 float-end mb-2" src="images/items/interior/4.jpg">
									<p class="text-muted small"> From <br> USD 10</p>
								</div>
							</li>
							<li class="col-6 col-lg-3 col-md-4">
								<div class="card-product p-3 pe-0">
									<a href="#" class="title">For Bedroom </a>
									<img class="size-72x72 float-end mb-2" src="images/items/interior/5.jpg">
									<p class="text-muted small"> From <br> USD 12</p>
								</div>
							</li>
							<li class="col-6 col-lg-3 col-md-4">
								<div class="card-product p-3 pe-0">
									<a href="#" class="title">Home Lighting </a>
									<img class="size-72x72 float-end mb-2" src="images/items/interior/6.jpg">
									<p class="text-muted small"> From <br> USD 19</p>
								</div>
							</li>
							<li class="col-6 col-lg-3 col-md-4">
								<div class="card-product p-3 pe-0">
									<a href="#" class="title">Best items </a>
									<img class="size-72x72 float-end mb-2" src="images/items/interior/7.jpg">
									<p class="text-muted small"> From <br> USD 19</p>
								</div>
							</li>
							<li class="col-6 col-lg-3 col-md-4">
								<div class="card-product p-3 pe-0">
									<a href="#" class="title">Category name </a>
									<img class="size-72x72 float-end mb-2" src="images/items/interior/8.jpg">
									<p class="text-muted small"> From <br> USD 19</p>
								</div>
							</li>
						</ul>
					</div> <!-- col.// -->
				</div>
				<!-- row .// -->
			</div>
		</div> <!-- container .// -->
	</section>
	<!-- ================ SECTION CARD CATEGORY .// ================ -->

	<!-- ================ SECTION CARD CATEGORY-2  ================ -->
	<section class="pb-3">
		<div class="container">
			<div class="card overflow-hidden">
				<div class="row gx-0">
					<aside class="col-lg-3 p-4 bg-cover" style="background-image: url(images/banners/tech.jpg);">
						<header>
							<h3 class="mb-3">Consumer <br> electronics and <br> gadgets</h3>
							<a href="#" class="btn btn-light">Source now</a>
						</header><!-- sect-heading -->
					</aside> <!-- col.// -->
					<div class="col-lg-9">

						<ul class="row g-0 bordered-cols m-0">
							<li class="col-6 col-lg-3 col-md-4">
								<div class="card-product p-3 pe-0">
									<a href="#" class="title">Smartphones </a>
									<img class="size-72x72 float-end mb-2" src="images/items/tech/3.jpg">
									<p class="text-muted small"> From <br> USD 140</p>
								</div>
							</li>
							<li class="col-6 col-lg-3 col-md-4">
								<div class="card-product p-3 pe-0">
									<a href="#" class="title">Apple iPhone </a>
									<img class="size-72x72 float-end mb-2" src="images/items/tech/4.jpg">
									<p class="text-muted small"> From <br> USD 850</p>
								</div>
							</li>
							<li class="col-6 col-lg-3 col-md-4">
								<div class="card-product p-3 pe-0">
									<a href="#" class="title">For Gaming </a>
									<img class="size-72x72 float-end mb-2" src="images/items/tech/5.jpg">
									<p class="text-muted small"> From <br> USD 19</p>
								</div>
							</li>
							<li class="col-6 col-lg-3 col-md-4">
								<div class="card-product p-3 pe-0">
									<a href="#" class="title">Cameras </a>
									<img class="size-72x72 float-end mb-2" src="images/items/tech/6.jpg">
									<p class="text-muted small"> From <br> USD 120</p>
								</div>
							</li>
							<li class="col-6 col-lg-3 col-md-4">
								<div class="card-product p-3 pe-0">
									<a href="#" class="title">Computers </a>
									<img class="size-72x72 float-end mb-2" src="images/items/tech/7.jpg">
									<p class="text-muted small"> From <br> USD 19</p>
								</div>
							</li>
							<li class="col-6 col-lg-3 col-md-4">
								<div class="card-product p-3 pe-0">
									<a href="#" class="title">Smartwatches </a>
									<img class="size-72x72 float-end mb-2" src="images/items/tech/8.jpg">
									<p class="text-muted small"> From <br> USD 19</p>
								</div>
							</li>
							<li class="col-6 col-lg-3 col-md-4">
								<div class="card-product p-3 pe-0">
									<a href="#" class="title">Headphones </a>
									<img class="size-72x72 float-end mb-2" src="images/items/tech/9.jpg">
									<p class="text-muted small"> From <br> USD 19</p>
								</div>
							</li>
							<li class="col-6 col-lg-3 col-md-4">
								<div class="card-product p-3 pe-0">
									<a href="#" class="title">Electric kettle</a>
									<img class="size-72x72 float-end mb-2" src="images/items/tech/10.jpg">
									<p class="text-muted small"> From <br> USD 19</p>
								</div>
							</li>
						</ul>
					</div> <!-- col.// -->
				</div>
				<!-- row .// -->
			</div>
		</div> <!-- container .// -->
	</section>
	<!-- ================ SECTION CARD CATEGORY-2 .// ================ -->

	<!-- ================ SECTION BANNER+FORM  ================ -->
	<section class="pb-4 pt-4">
		<div class="container">

			<article class="card bg-primary p-5"
				style="min-height:400px; background-size: cover; background-image: url('images/banners/bg-warehouse.jpg');">
				<div class="row">
					<div class="col-lg-5">
						<h2 class="text-white">An easy way to send requests to all suppliers</h2>
						<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
							incididunt.</p>
					</div>
					<div class="col-lg-5 ms-auto">
						<article class="card card-body">
							<form class="">
								<h6 class="mb-3">Send quote to suppliers</h6>
								<div class="mb-3">
									<input type="text" class="form-control" placeholder="What item you need?">
								</div>
								<div class="mb-3">
									<textarea class="form-control" placeholder="Type more details" rows="3"></textarea>
								</div>
								<div class="mb-3 d-flex" style="max-width: 250px;">
									<input type="number" class=" me-2 form-control" placeholder="Qty">
									<select class="form-select">
										<option value="">Litres</option>
										<option value="">Kgs</option>
									</select>
								</div>
								<button class="btn btn-primary"> Send inquiry </button>
							</form>
						</article>
					</div>
				</div> <!-- row.// -->
			</article>
		</div> <!-- container.// -->
	</section>
	<!-- ================ SECTION BANNER+FORM  ================ -->

	<!-- ================ SECTION PRODUCTS ================ -->
	<section class="pb-3">
		<div class="container">

			<header class="section-heading">
				<h3>New products</h3>
			</header>

			<div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2">

				<div class="col">
					<figure class="card card-product-grid">
						<a href="#" class="img-wrap"> <img src="images/items/cloth/1.jpg"> </a>
						<figcaption class="p-3">
							<div class="price-wrap">
								<span class="price">$24.00</span>
							</div> <!-- price-wrap.// -->
							<a href="#" class="title">T-shirts with multiple colors, for men</a>
						</figcaption>
					</figure>
				</div> <!-- col end.// -->

				<div class="col">
					<figure class="card card-product-grid">
						<a href="#" class="img-wrap"> <img src="images/items/cloth/2.jpg"> </a>
						<figcaption class="p-3">
							<div class="price-wrap">
								<span class="price">$29.90</span>
							</div> <!-- price-wrap.// -->
							<a href="#" class="title">T-shirts with blue color, unisex model</a>
						</figcaption>
					</figure>
				</div> <!-- col end.// -->

				<div class="col">
					<figure class="card card-product-grid">
						<a href="#" class="img-wrap"> <img src="images/items/cloth/3.jpg"> </a>
						<figcaption class="p-3">
							<div class="price-wrap">
								<span class="price">$790.50</span>
							</div> <!-- price-wrap.// -->
							<a href="#" class="title">Casual Winter Jacket, Brown Color</a>
						</figcaption>
					</figure>
				</div> <!-- col end.// -->

				<div class="col">
					<figure class="card card-product-grid">
						<a href="#" class="img-wrap"> <img src="images/items/cloth/4.jpg"> </a>
						<figcaption class="p-3">
							<div class="price-wrap">
								<span class="price">$12.00</span>
							</div> <!-- price-wrap.// -->
							<a href="#" class="title">Jeans shorts for men darkblue color</a>
						</figcaption>
					</figure>
				</div> <!-- col end.// -->

				<div class="col">
					<figure class="card card-product-grid">
						<a href="#" class="img-wrap"> <img src="images/items/cloth/5.jpg"> </a>
						<figcaption class="p-3">
							<div class="price-wrap">
								<span class="price">$192.50</span>
							</div> <!-- price-wrap.// -->
							<a href="#" class="title">Lightweight Jeans bag for travel, Unisex model</a>
						</figcaption>
					</figure>
				</div> <!-- col end.// -->

				<div class="col">
					<figure class="card card-product-grid">
						<a href="#" class="img-wrap"> <img src="images/items/cloth/6.jpg"> </a>
						<figcaption class="p-3">
							<div class="price-wrap">
								<span class="price">$790.50</span>
							</div> <!-- price-wrap.// -->
							<a href="#" class="title">GoPro HERO6 4K Action Camera - Black</a>
						</figcaption>
					</figure>
				</div> <!-- col end.// -->

				<div class="col">
					<figure class="card card-product-grid">
						<a href="#" class="img-wrap"> <img src="images/items/interior/3.jpg"> </a>
						<figcaption class="p-3">
							<div class="price-wrap">
								<span class="price">$790.50</span>
							</div> <!-- price-wrap.// -->
							<a href="#" class="title">Ceramic Jug for Kitchen, Medium size</a>
						</figcaption>
					</figure>
				</div> <!-- col end.// -->

				<div class="col">
					<figure class="card card-product-grid">
						<a href="#" class="img-wrap"> <img src="images/items/interior/2.jpg"> </a>
						<figcaption class="p-3">
							<div class="price-wrap">
								<span class="price">$790.50</span>
							</div> <!-- price-wrap.// -->
							<a href="#" class="title"> Armchair for Home and Office, Yellow color</a>
						</figcaption>
					</figure>
				</div> <!-- col end.// -->

				<div class="col">
					<figure class="card card-product-grid">
						<a href="#" class="img-wrap"> <img src="images/items/interior/5.jpg"> </a>
						<figcaption class="p-3">
							<div class="price-wrap">
								<span class="price">$790.50</span>
							</div> <!-- price-wrap.// -->
							<a href="#" class="title"> Airbed Blue Soft Material With Pump </a>
						</figcaption>
					</figure>
				</div> <!-- col end.// -->

				<div class="col">
					<figure class="card card-product-grid">
						<a href="#" class="img-wrap"> <img src="images/items/interior/7.jpg"> </a>
						<figcaption class="p-3">
							<div class="price-wrap">
								<span class="price">$19.50</span>
							</div> <!-- price-wrap.// -->
							<a href="#" class="title">Modern Product Name Goes Here</a>
						</figcaption>
					</figure>
				</div> <!-- col end.// -->

			</div> <!-- row end.// -->
		</div> <!-- container end.// -->
	</section>
	<!-- ================ SECTION PRODUCTS END.// ================ -->

	<!-- ================ SECTION SERV ================ -->
	<section class="mb-4">
		<div class="container">

			<header class="section-heading">
				<h3>Our extra services</h3>
			</header>

			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<article class="card mb-3">
						<img class="card-img-top" src="images/posts/1.jpg" height="160">
						<div class="card-body">
							<a href="#" class="stretched-link text-body"> Source from Industry Hubs </a>
						</div>
					</article>
				</div> <!-- col.// -->

				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<article class="card mb-3">
						<img class="card-img-top" src="images/posts/2.jpg" height="160">
						<div class="card-body">
							<a href="#" class="stretched-link text-body"> Customize Your Products </a>
						</div>
					</article>
				</div> <!-- col.// -->

				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<article class="card mb-3">
						<img class="card-img-top" src="images/posts/3.jpg" height="160">
						<div class="card-body">
							<a href="#" class="stretched-link text-body"> Fast shipping by ocean or air </a>
						</div>
					</article>
				</div> <!-- col.// -->

				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<article class="card mb-3">
						<img class="card-img-top" src="images/posts/4.jpg" height="160">
						<div class="card-body">
							<a href="#" class="stretched-link text-body"> Product monitoring service </a>
						</div>
					</article>
				</div> <!-- col.// -->

			</div> <!-- row.// -->

		</div> <!-- container end.// -->
	</section>
	<!-- ================ SECTION SERV END.// ================ -->

	<!-- ================ SECTION SUBSCRIBE ================ -->
	<section class="padding-y-lg bg-gray-light">
		<div class="container">

			<h4 class="text-center">Subscribe on our newsletter</h4>
			<p class="pb-2 text-center">Get daily news on upcoming offers from many suppliers all over the world</p>

			<div style="max-width:380px;" class="mx-auto">
				
						<div class="d-flex">
							<div class="me-1 flex-grow-1">
								<input class="w-100 form-control" placeholder="Your Email" type="email">
							</div> <!-- col.// -->
							<div class="">
								<button type="submit" class="btn btn-primary"> <i class="fa fa-envelope"></i> Subscribe
								</button>
							</div> <!-- col.// -->
						</div>
			</div>


		</div> 	<!-- container  .// -->
	</section>
	<!-- ================ SECTION SUBSCRIBE END.// ================ -->


<footer class="section-footer footer-dark bg-dark">
<div class="container">
  <section class="footer-main padding-y">
    <div class="row">
      <aside class="col-12 col-sm-12 col-lg-4">
        <article class="me-lg-5">
          <img src="images/logo-white.png" height="44" class="logo-footer">
          <p class="mt-3 text-white-50"> here is some information about our company, We work since 1990 and still growing. This is just good html template</p>
          <nav class="mb-4 mb-lg-0">
            <a class="btn btn-icon btn-primary" title="Facebook" target="_blank" href="#"><i
                class="fab fa-facebook-f"></i></a>
            <a class="btn btn-icon btn-primary" title="Instagram" target="_blank" href="#"><i
                class="fab fa-instagram"></i></a>
            <a class="btn btn-icon btn-primary" title="Youtube" target="_blank" href="#"><i
                class="fab fa-youtube"></i></a>
            <a class="btn btn-icon btn-primary" title="Twitter" target="_blank" href="#"><i
                class="fab fa-twitter"></i></a>
          </nav>
        </article>
      </aside>
      <aside class="col-6 col-sm-4 col-lg-2">
        <h6 class="title">Store</h6>
        <ul class="list-menu mb-4">
          <li> <a href="#">About us</a></li>
          <li> <a href="#">Find store</a></li>
          <li> <a href="#">Categories</a></li>
          <li> <a href="#">Blogs</a></li>
        </ul>
      </aside>
      <aside class="col-6 col-sm-4 col-lg-2">
        <h6 class="title">Information</h6>
        <ul class="list-menu mb-4">
          <li> <a href="#">Help center</a></li>
          <li> <a href="#">Money refund</a></li>
          <li> <a href="#">Shipping info</a></li>
          <li> <a href="#">Refunds</a></li>
        </ul>
      </aside>
      <aside class="col-6 col-sm-4  col-lg-2">
        <h6 class="title">Support</h6>
        <ul class="list-menu mb-4">
          <li> <a href="#"> Help center </a></li>
          <li> <a href="#"> Documents </a></li>
          <li> <a href="#"> Account restore </a></li>
          <li> <a href="#"> My Orders </a></li>
        </ul>
      </aside>
      <aside class="col-6 col-sm-4 col-lg-2">
        <h6 class="title">Download</h6>
        <a href="#" class="mb-2 d-inline-block"> <img src="images/misc/btn-appstore.png" height="40"></a>
        <a href="#" class="mb-2 d-inline-block"> <img src="images/misc/btn-market.png" height="40"></a>
      </aside>
    </div> <!-- row.// -->
  </section> <!-- footer-top.// -->
  <hr class="my-0">
  <section class="footer-bottom d-flex justify-content-between">
    <div class="text-white-50">
      © 2018- 2023 Templatemount.
    </div>
    <nav class="dropup">
      <button class="dropdown-toggle btn text-white align-items-center" type="button" data-bs-toggle="dropdown">
        <img src="images/flags/flag-usa.png" class="me-2" height="20">
        <span>English</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="#">Russian</a></li>
        <li><a class="dropdown-item" href="#">Arabic</a></li>
        <li><a class="dropdown-item" href="#">Spanish</a></li>
      </ul>
    </nav>

  </section>
</div> <!-- container end.// -->
</footer>

	<!-- Bootstrap js -->
	<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

	<!-- Custom js -->
	<script src="{{asset('js/script.js?v=2.0')}}"></script>

</body>
</html>