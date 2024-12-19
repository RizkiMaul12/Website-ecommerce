<?php


if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {


?>

    <div class="row"><!-- 1 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <ol class="breadcrumb"><!-- breadcrumb Starts -->

                <li class="active">

                    <i class="fa fa-dashboard"></i> Dashboard / View Coupons

                </li>

            </ol><!-- breadcrumb Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 1 row Ends -->

    <div class="row"><!-- 2 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <div class="panel panel-default"><!-- panel panel-default Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <h3 class="panel-title"><!-- panel-title Starts -->

                        <i class="fa fa-money fa-fw"></i> View Coupons

                    </h3><!-- panel-title Ends -->

                </div><!-- panel-heading Ends -->

                <div class="panel-body"><!-- panel-body Starts -->

                    <div class="table-responsive"><!-- table-responsive Starts -->

                        <table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

                            <thead><!-- thead Starts -->

                                <tr>

                                    <th>#</th>
                                    <th>Title </th>
                                    <th>Product </th>
                                    <th>Coupon Price </th>
                                    <th>Code </th>
                                    <th>Limit </th>
                                    <th>Used </th>
                                    <th>Delete </th>
                                    <th>Edit </th>

                                </tr>

                            </thead><!-- thead Ends -->

                            <tbody><!-- tbody Starts -->

                                <?php

                                $i = 0;

                                $get_coupons = "select * from coupons";
                                $run_coupons = mysqli_query($con, $get_coupons);

                                if (!$run_coupons || mysqli_num_rows($run_coupons) == 0) {
                                    echo "<tr><td colspan='9'>No coupons found</td></tr>";
                                } else {
                                    while ($row_coupons = mysqli_fetch_array($run_coupons)) {
                                        $coupon_id = $row_coupons['coupon_id'];
                                        $product_id = $row_coupons['product_id'];
                                        $coupon_title = $row_coupons['coupon_title'];
                                        $coupon_price = $row_coupons['coupon_price'];
                                        $coupon_code = $row_coupons['coupon_code'];
                                        $coupon_limit = $row_coupons['coupon_limit'];
                                        $coupon_used = $row_coupons['coupon_used'];

                                        // Query produk dengan validasi hasil
                                        $get_products = "select * from products where product_id='$product_id'";
                                        $run_products = mysqli_query($con, $get_products);

                                        $product_title = "Unknown Product"; // Default jika produk tidak ditemukan
                                        if ($run_products && mysqli_num_rows($run_products) > 0) {
                                            $row_products = mysqli_fetch_array($run_products);
                                            $product_title = $row_products['product_title'];
                                        }

                                        $i++;
                                ?>

                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $coupon_title; ?></td>
                                            <td><?php echo $product_title; ?></td>
                                            <td><?php echo "Rp. $coupon_price"; ?></td>
                                            <td><?php echo $coupon_code; ?></td>
                                            <td><?php echo $coupon_limit; ?></td>
                                            <td><?php echo $coupon_used; ?></td>
                                            <td>
                                                <a href="index.php?delete_coupon=<?php echo $coupon_id; ?>">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                            <td>
                                                <a href="index.php?edit_coupon=<?php echo $coupon_id; ?>">
                                                    <i class="fa fa-pencil"></i> Edit
                                                </a>
                                            </td>
                                        </tr>

                                <?php
                                    }
                                }
                                ?>

                            </tbody><!-- tbody Ends -->

                        </table><!-- table table-bordered table-hover table-striped Ends -->

                    </div><!-- table-responsive Ends -->

                </div><!-- panel-body Ends -->

            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->

<?php } ?>