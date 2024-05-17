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
        <div class="row gx-2 align-items-center">

          <div class="col-xl-2 col-lg col-6 col-sm-6  col-md flex-grow-0">
            <a href="index.html" class="brand-wrap me-3">
              <img class="logo" height="40" src="images/logo.svg">
            </a> <!-- brand-wrap end.// -->
          </div> <!-- col end.// -->

          <div class="col-xl-7 col-lg-6 col-12 col-sm-12 col-md">
            <h4>Admin dashboard</h4>
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
</header> <!-- section-header end.// -->


<!-- ============== SECTION PAGETOP ============== -->
<section class="py-4">
  <div class="container">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a class="text-muted" href="index.html">Home</a></li>
      <li class="breadcrumb-item"><a class="text-muted" href="#">Profile</a></li>
      <li class="breadcrumb-item text-muted" aria-current="page">Personal info</li>
    </ol>
  </div> <!-- container //  -->
</section>
<!-- ============== SECTION PAGETOP END// ============== -->


<!-- ============== SECTION CONTENT ============== -->
<section class="padding-bottom">
<div class="container">

<div class="row">
  <aside class="col-lg-3 col-xl-3">
    <!--  COMPONENT MENU LIST  -->
    <nav class="nav gap-1 flex-lg-column nav-pills mb-4">
      <a class="nav-link active" href="#">Personal info</a>
      <a class="nav-link" href="#">New orders</a>
      <a class="nav-link" href="#">Orders history</a>
      <a class="nav-link" href="#">My wishlist</a>
      <a class="nav-link" href="#">Transactions</a>
      <a class="nav-link" href="#">Profile setting</a>
      <a class="nav-link" href="#">Log out</a>
    </nav>
    <!--   COMPONENT MENU LIST END .//   -->
  </aside>
  <main class="col-lg-9  col-xl-9">
    <article class="card">
    <div class="card-body">
      <h5 class="card-title"> Personal info </h5> 
    <figure class="d-flex align-items-center">
      <div class="me-3 flex-grow-0">
        <span class="bg-gray icon-md rounded-circle">
          <img src="images/avatars/avatar.jpg" class="size-56x56 rounded-circle">
        </span>
      </div>
      <figcaption>
        <h6 class="fw-normal">Mr. Jackson Mike</h6>
        <p class="mb-0">
          Email: myusername@gmail.com, Phone: +1234567890988 
          <a href="#" class="px-2"><i class="fa fa-pen"></i></a>
        </p>
      </figcaption>
    </figure>

    <hr>

    <div class="row g-2 mb-3"> 
      <div class="col-md-6">
        <article class="card shadow-sm">
          <div class="p-3">
            <p class="mb-1"> 
              <b class="text-muted me-1"><i class="fa fa-map-marker-alt"></i></b>
              United States, 490 Old Capitol Trail
            </p>
            <a href="#">Edit</a> <b class="dot"></b> 
            <a href="#">Delete</a> 
          </div>
        </article>
      </div> <!-- col.// -->
      <div class="col-md-6">
        <article class="card shadow-sm">
          <div class="p-3">
            
            <p  class="mb-1">
              <b class="text-muted me-1"> <i class="fa fa-map-marker-alt"></i> </b>
              Moscow city, Street name, House 77 
            </p>
            <a href="#">Edit</a> <b class="dot"></b> 
            <a href="#">Delete</a> 
           </div>
        </article>
      </div> <!-- col.// -->
    </div> <!-- row.// -->

    <a href="#" class="btn btn-outline-primary"> 
      <i class="me-2 fa fa-plus"></i> Add new address 
    </a>

    <hr class="my-4">

    <h5 class="card-title"> My recent orders </h5> 



    <!--  ======== item order ======== -->
    <article class="card border-primary mb-4">
      <div class="card-body">
        <header class="d-lg-flex">
          <div class="flex-grow-1">
            <h6 class="mb-0">Order ID: 8924 <i class="dot"></i>  
              <span class="text-warning"> Pending </span>
            </h6>
            <span class="text-muted">Date: 16 December 2018</span>
          </div>
          <div>
            <a href="#" class="btn btn-outline-danger">Cancel order</a>
            <a href="#" class="btn btn-primary">Track order</a> 
          </div>
        </header>
        <hr>
        <div class="row">
          <div class="col-lg-4">
            <p class="mb-0 text-muted">Contact</p>
            <p class="m-0"> 
              Mike Johnatan <br>  Phone: 371-295-9131 <br> Email: info@mywebsite.com </p>
            </div> <!-- col.// -->
            <div class="col-lg-4 border-start">
              <p class="mb-0 text-muted">Shipping address</p>
              <p class="m-0"> United States <br> 
              3601 Old Capitol Trail, Unit A-7, Suite 170777, Wilmington, DE 19808   </p>
            </div> <!-- col.// -->
            <div class="col-lg-4 border-start">
              <p class="mb-0 text-muted">Payment</p>
              <p class="m-0">
                <span class="text-success"> Visa  **** 4216   </span> <br> 
                Shipping fee:  $56 <br> 
                Total paid:  $456 
              </p>
            </div> <!-- col.// -->
          </div> <!-- row.// -->
          <hr>
          <ul class="row">
            <li class="col-xl-4  col-lg-6">
              <figure class="d-flex mb-3">
                <div class="flex-shrink-0 me-2">
                  <img width="72" height="72" src="images/items/cloth/1.jpg" class="size-72x72 img-thumbnail">
                </div>
                <figcaption>
                  <p class="mb-1">T-shirts with multiple colors <br> Size: XXL </p>
                  <b> 2x = $339.90 </b>
                </figcaption>
              </figure> 
            </li>
            <li class="col-xl-4  col-lg-6">
              <figure class="d-flex mb-3">
                <div class="me-2 flex-shrink-0">
                  <img width="72" height="72" src="images/items/tech/9.jpg" class="size-72x72 img-thumbnail">
                </div>
                <figcaption>
                  <p class="mb-1">Gaming Headset 32db, Color: White </p>
                  <b> 1x = $76.00 </b>
                </figcaption>
              </figure> 
            </li>
            <li class="col-xl-4  col-lg-6"> 
              <figure class="d-flex mb-3">
                <div class="me-2 flex-shrink-0">
                  <img width="72" height="72" src="images/items/tech/1.jpg" class="size-72x72 img-thumbnail">
                </div>
                <figcaption>
                  <p class="mb-1">Apple iPhone 12 <br> Color: red </p>
                  <b> 1x = $990.00 </b>
                </figcaption>
              </figure> 
            </li>
          </ul>
        </div> <!-- card-body .// -->
      </article> <!-- card .// --> 
    <!--  ======== item order .// ======== -->

    <!--  ======== item order ======== -->
    <article class="card border-primary mb-4">
      <div class="card-body">
        <header class="d-lg-flex">
          <div class="flex-grow-1">
            <h6 class="mb-0">Order ID: 1009 <i class="dot"></i>  
              <span class="text-success"> Shipped</span>
            </h6>
            <span class="text-muted">Date: 16 December 2018</span>
          </div>
          <div>
            <a href="#" class="btn btn-outline-danger">Cancel order</a>
            <a href="#" class="btn btn-primary">Track order</a> 
          </div>
        </header>
        <hr>
        <div class="row">
          <div class="col-lg-4">
            <p class="mb-0 text-muted">Contact</p>
            <p class="m-0"> 
              Mike Johnatan <br>  Phone: 371-295-9131 <br> Email: info@mywebsite.com </p>
            </div> <!-- col.// -->
            <div class="col-lg-4 border-start">
              <p class="mb-0 text-muted">Shipping address</p>
              <p class="m-0"> United States <br> 
              3601 Old Capitol Trail, Unit A-7, Suite 170777, Wilmington, DE 19808   </p>
            </div> <!-- col.// -->
            <div class="col-lg-4 border-start">
              <p class="mb-0 text-muted">Payment</p>
              <p class="m-0">
                <span class="text-success"> Visa  **** 4216   </span> <br> 
                Shipping fee:  $56 <br> 
                Total paid:  $456 
              </p>
            </div> <!-- col.// -->
          </div> <!-- row.// -->
          <hr>
          <ul class="row">
            <li class="col-xl-4  col-lg-6">
              <figure class="d-flex mb-3">
                <div class="flex-shrink-0 me-2">
                  <img width="72" height="72" src="images/items/interior/1.jpg" class="size-72x72 img-thumbnail">
                </div>
                <figcaption>
                  <p class="mb-1">Sofe for living room, New model A123   </p>
                  <b> 1x = $1,200.90 </b>
                </figcaption>
              </figure> 
            </li>
            <li class="col-xl-4  col-lg-6">
              <figure class="d-flex mb-3">
                <div class="me-2 flex-shrink-0">
                  <img width="72" height="72" src="images/items/interior/2.jpg" class="size-72x72 img-thumbnail">
                </div>
                <figcaption>
                  <p class="mb-1">Orange Armchair for Office </p>
                  <b> 1x = $190.00 </b>
                </figcaption>
              </figure> 
            </li>
          </ul>
        </div> <!-- card-body .// -->
      </article> <!-- card .// --> 
    <!--  ======== item order ======== .// -->



    </div> <!-- card-body .// -->
    </article> <!-- card .// --> 
  </main>
</div> <!-- row.// -->

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