<?php 

 $url = "http://" . $_SERVER['SERVER_NAME'].'/gallery-final';

?>

<!DOCTYPE html>
<html>

<head>
    <title>AL SAFKA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="assets/img/logo32.png" type="image/gif" sizes="32x32">
    <meta name="description" content="gellery">
    <meta name="keywords" content="gift,online store,ecommerce">
    <meta name="author" content="yis web">


    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/datepicker.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jssocials.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/jssocials-theme-flat.css" /> -->

    <link rel="stylesheet" type="text/css" href="assets/css/style.css?n=3">




</head>

<body>
    <div class="wrapper">
        <header class="bg-light">
            <div class="container">

                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                        <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt=""></a>
                        <!-- show on mobile only -->
                        <ul class="navbar-nav mobile-show">
                            <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-user"></i></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <a class="dropdown-item" href>Action</a>
                            <a class="dropdown-item" href>Another action</a>
                            <a class="dropdown-item" href>Something else here</a>
                        </div>
                    </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="login.php"><i class="far fa-user"></i></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img width="25" src="assets/img/shopping-cart.png" alt=""><span class="badge">3</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <div class="shopping-cart">
                                        <div class="shopping-cart-header">
                                            <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">3</span>
                                            <div class="shopping-cart-total">
                                                <span class="lighter-text">Total:</span>
                                                <span class="main-color-text">$2,229.97</span>
                                            </div>
                                        </div>
                                        <!--end shopping-cart-header -->

                                        <ul class="shopping-cart-items list-unstyled">
                                            <li class="clearfix">
                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1" />
                                                <span class="item-name">Sony DSC-RX100M III</span>
                                                <span class="item-price">$849.99</span>
                                                <span class="item-quantity">Quantity: 01</span>
                                            </li>

                                            <li class="clearfix">
                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item2.jpg" alt="item1" />
                                                <span class="item-name">KS Automatic Mechanic...</span>
                                                <span class="item-price">$1,249.99</span>
                                                <span class="item-quantity">Quantity: 01</span>
                                            </li>

                                            <li class="clearfix">
                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item3.jpg" alt="item1" />
                                                <span class="item-name">Kindle, 6" Glare-Free To...</span>
                                                <span class="item-price">$129.99</span>
                                                <span class="item-quantity">Quantity: 01</span>
                                            </li>
                                        </ul>

                                        <a href="cart.php" class="btn">Checkout</a>
                                    </div>
                                    <!--end shopping-cart -->

                                </div>
                            </li>
                        </ul>
                        <div class="collapse mainmenu navbar-collapse" id="navbarTogglerDemo03">
                            <form class="form-inline w-100 my-3 ">
                                <div class="input-group w-100">
                                    <input type="text" class="form-control searchBar" placeholder="what do you look for!!">
                                    <div class="input-group-append ">
                                        <button class="btn btn-secondary" type="button">
                                <i class="fa fa-search"></i>
                              </button>
                                    </div>
                                </div>
                            </form>
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="wishlist.php">Wishlist </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact&nbsp;us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Arabic</a>
                                </li>
                                <!-- <li class="nav-item res-item">
                                <a class="nav-link" href="#">register/sign&nbsp;in</a>
                            </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">register/sign&nbsp;in</a>
                                </li>
                                <!-- <li class="nav-item dropdown res-item">
                                <a class="nav-link dropdown-toggle" href id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">register/sign&nbsp;in</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                                    <a class="dropdown-item" href>Action</a>
                                    <a class="dropdown-item" href>Another action</a>
                                    <a class="dropdown-item" href>Something else here</a>
                                </div>
                            </li> -->
                                <li class="nav-item dropdown res-item">
                                    <a class="nav-link dropdown-toggle" href id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img width="25" src="assets/img/shopping-cart.png" alt=""><span class="badge">3</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <div class="shopping-cart">
                                            <div class="shopping-cart-header">
                                                <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">3</span>
                                                <div class="shopping-cart-total">
                                                    <span class="lighter-text">Total:</span>
                                                    <span class="main-color-text">$2,229.97</span>
                                                </div>
                                            </div>
                                            <!--end shopping-cart-header -->

                                            <ul class="shopping-cart-items list-unstyled">
                                                <li class="clearfix">
                                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1" />
                                                    <span class="item-name">Sony DSC-RX100M III</span>
                                                    <span class="item-price">$849.99</span>
                                                    <span class="item-quantity">Quantity: 01</span>
                                                </li>

                                                <li class="clearfix">
                                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item2.jpg" alt="item1" />
                                                    <span class="item-name">KS Automatic Mechanic...</span>
                                                    <span class="item-price">$1,249.99</span>
                                                    <span class="item-quantity">Quantity: 01</span>
                                                </li>

                                                <li class="clearfix">
                                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item3.jpg" alt="item1" />
                                                    <span class="item-name">Kindle, 6" Glare-Free To...</span>
                                                    <span class="item-price">$129.99</span>
                                                    <span class="item-quantity">Quantity: 01</span>
                                                </li>
                                            </ul>

                                            <a href="cart.php" class="btn">Checkout</a>
                                        </div>
                                        <!--end shopping-cart -->

                                    </div>
                                </li>
                            </ul>

                        </div>
                </div>
            </div>
            </nav>
        </header>