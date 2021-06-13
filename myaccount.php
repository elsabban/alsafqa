<?php
include "inc/header.php";
?>
    <section class="bread">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
        </div>
    </section>
    <section>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-10 mx-auto col-12">
                    <div class="sidebar-container">
                        <div class="dashmenu sticky" style="">
                            <ul class="list-unstyled  mb-0">
                                <li><a class="actv" href="">Dashboard <i class="fad fa-clipboard-list"></i></a></li>
                                <li><a href="">Orders <i class="fad fa-box-usd"></i></a></li>
                                <li><a href="">Downloads <i class="fas fa-download"></i></a></li>
                                <li><a href="">Addresses <i class="fad fa-map-marked"></i></a></li>
                                <li><a href="">My wallet <i class="fad fa-wallet"></i></a></li>
                                <li><a href="">Account details <i class="fas fa-user-edit"></i></a></li>
                                <li><a href="">Refund requests <i class="fad fa-exchange"></i></a></li>
                                <li><a href="">Discount point <i class="fas fa-badge-percent"></i></a></li>
                                <li><a href="">Logout <i class="fad fa-sign-out"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-9 mx-auto col-sm-10 col-12">
                    <div class="dashcontent">
                        <div class="dash-1st">
                            <h5>Welcome <span>"mohamed"</span></h5>

                            <form action="">
                                (not mohamed !?<button class="btn btn-default" type="submit">Log out</button>)
                            </form>

                            <p>From your account dashboard you can view your <a href="">recent orders</a>, manage your <a href="">shipping and billing addresses</a>, and <a href="">edit your password and account details.</a></p>
                        </div>

                    </div>
                    <div class="dashcontent">
                        <div class="dash-2nd">
                            <!-- show when there is no orders -->
                            <!-- <div class="alert m-0 alert-warning box">
                                <p class="m-0">No order has been made yet.</p>
                                <a href="">Browse products</a>
                            </div> -->
                            <!-- <div class="container"> -->
                            <div class="row">
                                <!-- single order -->
                                <div class="col-12 col-sm-12 col-lg-10 col-md-12 mx-auto">
                                    <div class="order-box">
                                        <div class="tracking-status d-flex justify-content-between">
                                            <!-- when step comlete add completed class -->
                                            <div class="order-tracking completed">
                                                <span class="is-complete"></span>
                                                <p>Ordered</p>
                                            </div>
                                            <div class="order-tracking completed">
                                                <span class="is-complete"></span>
                                                <p>Shipped</p>
                                            </div>
                                            <div class="order-tracking ">
                                                <span class="is-complete"></span>
                                                <p>Delivered</p>
                                            </div>
                                        </div>
                                        <div class="order-inner">
                                            <div class="order-head">
                                                <p>order number : <span>YYUSDASD</span></p>
                                                <p>order date : <span>12/6/2021</span></p>
                                            </div>
                                            <div class="order-info">
                                                <div class="img-holder" style="background-image: url(assets/img/3.jpg);"></div>
                                                <div class="order-desc">
                                                    <p>Cozy Wireless Speaker with lighting & Power Bank MC3 Pro + gift earpud i11 lighting & Power Bank MC3 Pro + gift earpud i11</p>
                                                    <div class="price-quant">
                                                        <p>250 EGP</p>
                                                        <p>Quantity : <span>2</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="order-avail text-center">
                                            <a href=""><i class="far fa-chevron-left"></i> Order detail</a>
                                            <p>Order cancelled</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- single order -->
                                <div class="col-12 col-sm-12 col-lg-10 col-md-12 mx-auto">
                                    <!-- when order cancelled add class .order-cancelled-->
                                    <div class="order-box order-cancelled">

                                        <div class="tracking-status justify-content-between">

                                            <div class="order-tracking completed">
                                                <span class="is-complete"></span>
                                                <p>Ordered</p>
                                            </div>
                                            <div class="order-tracking completed">
                                                <span class="is-complete"></span>
                                                <p>Shipped</p>
                                            </div>
                                            <div class="order-tracking ">
                                                <span class="is-complete"></span>
                                                <p>Delivered</p>
                                            </div>
                                        </div>
                                        <div class="order-inner">
                                            <div class="order-head">
                                                <p>order number : <span>YYUSDASD</span></p>
                                                <p>order date : <span>12/6/2021</span></p>
                                            </div>
                                            <div class="order-info">
                                                <div class="img-holder" style="background-image: url(assets/img/3.jpg);"></div>
                                                <div class="order-desc">
                                                    <p>Cozy Wireless Speaker with lighting & Power Bank MC3 Pro + gift earpud i11 lighting & Power Bank MC3 Pro + gift earpud i11</p>
                                                    <div class="price-quant">
                                                        <p>250 EGP</p>
                                                        <p>Quantity : <span>2</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="order-avail text-center">
                                            <a href=""><i class="far fa-chevron-left"></i> Order detail</a>
                                            <p>Order cancelled</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
include "inc/footer.php";
?>