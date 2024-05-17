<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Type some info">
  <meta name="author" content="Type name">

  <title>Website layout sample </title>

  <!-- Bootstrap css -->
  <link href="css/bootstrap.css?v=2.0" rel="stylesheet" type="text/css" />

  <!-- Custom css -->
  <link href="css/ui.css?v=2.0" rel="stylesheet" type="text/css" />
  <link href="css/responsive.css?v=2.0" rel="stylesheet" type="text/css" />

  <!-- Font awesome 5 -->
  <link href="fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

</head>
<body class="bg-light">

<header class="section-header">	
	<section class="header-main bg-white border-bottom py-lg-3 py-2">
		<div class="container">
			<div class="row gy-3 align-items-center">
				<div class="col-4">
					<a href="index.html" class="brand-wrap">
						<img class="logo" height="40" src="images/logo.svg">
					</a> <!-- brand-wrap end.// -->
				</div>
				<div class="col-8">
					<div class="float-end">
						<a href="#" class="btn btn-outline-primary">  Sign in </a>
						<a href="#" class="btn btn-primary">  Register </a>
			        </div>
				</div> <!-- col end.// -->
			</div> <!-- row end.// -->
		</div> <!-- container end.// -->
	</section> <!-- header-main end.// -->
</header> <!-- section-header end.// -->

<!-- ============== SECTION CONTENT  ============== -->
<section class="padding-y bg-light" style="min-height:90vh">
<div class="container">


<!-- ====== COMPONENT LOGIN  ====== -->
<div class="card shadow mx-auto" style="max-width:400px;">
	<div class="card-body">
	<h4 class="card-title mb-4">Sign in</h4>
	<form>	
		<div class="row gx-2">
			<div class="col-6 mb-3">
				<label class="form-label">First name</label>
				<input type="text" class="form-control" name="lorem">
			</div>
			<div class="col-6 mb-3">
				<label class="form-label">Last name</label>
				<input type="text" class="form-control" name="lorem">
			</div> 
		</div> <!-- row // -->
		<div class="mb-3">
			 <label class="form-label">Email</label>
			 <input class="form-control" placeholder="Type email" type="text">
		</div> 
		<div class="mb-3">
			 <label class="form-label">Phone</label>
			 <div class="row gx-2">
			 	<div class="col-4"> <input class="form-control" value="+998"  type="text"> </div>
			 	<div class="col-8"> <input class="form-control" placeholder="Phone" type="text"> </div>
			 </div> <!-- row // -->
		</div> 
		<div class="mb-3">
			<label class="form-label">Create password</label>
			<input class="form-control" placeholder="At least 6 characters." type="password">
		</div>  
		<div class="mb-3">
			<label class="form-label">Repeat password</label>
			<input class="form-control" placeholder="" type="password">
		</div>  
		<div class="mb-4">
		  <button type="submit" class="btn btn-primary w-100"> Login  </button>
		</div> 

		<div class="mb-4">
			<label class="form-check">
			  <input class="form-check-input" type="checkbox" checked value="">
			  <span class="form-check-label"> I agree with Terms and Conditions </span>
			</label>
		</div> 
	</form>
	<hr>
	<p class="text-center mb-2">Already have account? <a href="#">Sign in</a></p>

</div> <!-- card-body.// -->
</div> <!-- card .// -->

<!-- ====== COMPONENT LOGIN  END.// ====== -->

<br><br>

</div> <!-- container .//  -->
</section>
<!-- ============== SECTION CONTENT END// ============== -->

<footer class="section-footer bg-white border-top padding-y-sm">
	<div class="container">
	  <section class="footer-bottom d-flex justify-content-lg-between">
        <p class="mb-0"> © 2023 Templatemount. All rights reserved.  </p>  
        <nav>
          <a href="index.html" class="px-2">Go to main </a> 
          <a href="#" class="px-2">Sample link</a> 
          <a href="#" class="px-2">Another link</a> 
        </nav>
      </section>
	</div><!-- //container -->
</footer>

<!-- Bootstrap js -->
<script src="js/bootstrap.bundle.min.js"></script>

<!-- Custom js -->
<script src="js/script.js?v=2.0"></script>

</body>
</html>