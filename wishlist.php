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
    <section class="cart-body">
        <div class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                        <!-- Shopping cart table -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="p-2 px-3 text-uppercase movy">Product</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase movy">Price</div>
                                        </th>


                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase movy">stock status</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase movy">Remove</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="border-0">
                                            <div class="p-2">
                                                <img src="assets/img/pro1.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                                                <div class="ml-3 d-inline-block align-middle">
                                                    <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Timex Unisex Originals</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: Watches</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="border-0 align-middle"><strong>$79.00</strong></td>
                                        <td class="align-middle border-0">
                                            <!-- toggle class '.vis' to available status -->
                                            <strong class="onStock">in stock</strong>
                                            <strong class="outStock vis">out of stock</strong>
                                        </td>
                                        <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="p-2">
                                                <img src="assets/img/pro1.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                                                <div class="ml-3 d-inline-block align-middle">
                                                    <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">Lumix camera lense</a></h5><span class="text-muted font-weight-normal font-italic">Category: Electronics</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="align-middle"><strong>$79.00</strong></td>
                                        <td class=" align-middle">
                                            <!-- toggle class '.vis' to available status -->
                                            <strong class="onStock vis">in stock</strong>
                                            <strong class="outStock">out of stock</strong>
                                        </td>
                                        <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="p-2">
                                                <img src="assets/img/pro1.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                                                <div class="ml-3 d-inline-block align-middle">
                                                    <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Gray Nike running shoe</a></h5><span class="text-muted font-weight-normal font-italic">Category: Fashion</span>
                                                </div>
                                            </div>
                                            <td class="align-middle"><strong>$79.00</strong></td>
                                            <td class=" align-middle">
                                                <!-- toggle class '.vis' to available status -->
                                                <strong class="onStock">in stock</strong>
                                                <strong class="outStock vis">out of stock</strong>
                                            </td>
                                            <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                                            </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- End -->
                    </div>
                </div>


            </div>
        </div>
    </section>

    <?php
include "inc/footer.php";
?>