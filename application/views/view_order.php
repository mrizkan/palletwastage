<!DOCTYPE html>
<html lang="en">


<head>
    <?php $this->view('inc/header_top.php'); ?>


</head>
<!-- Menu horizontal icon fixed -->

<body class="horizontal-icon-fixed">
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div></div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">

    <div class="pcoded-container">
        <!-- Menu header start -->
        <?php $this->view('inc/top_bar.php'); ?>
        <!-- Menu header end -->
        <div class="pcoded-main-container">
            <?php $this->view('inc/navigation.php'); ?>
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page header start -->
                                <div class="page-header">
                                    <?php $this->view('inc/success_notification.php'); ?>
                                    <div class="page-header-title">
                                        <?php $poid=0; $buyername=0; foreach ($ordermain_data as $orderdetails):   $poid=$orderdetails->PoId; $buyername=$orderdetails->BuyerName;  endforeach; ?>
                                        <h4> Buyer Name <?= $buyername;?> </h4>
                                    </div>

                                </div>
                                <!-- Page header end -->
                                <!-- Page body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- Basic Form Inputs card start -->
                                            <!-- Hover table card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Order Details for P.O. # <?= $poid;?></h5>

                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-rounded-down"></i>

                                                    </div>
                                                </div>
                                                <div class="card-block table-border-style">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                            <tr>

                                                                <th>Size</th>
                                                                <th>Quantity</th>
                                                                <th>Price</th>
                                                                <th>Delivered</th>
                                                                <th>Pending</th>
<!--                                                                <th>Options</th>-->
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php foreach ($orderdetail_data as $orderdetails): ?>
                                                                <tr>
                                                                    <th><?= $orderdetails->Size ?></th>
                                                                    <td><?= $orderdetails->Quantity ?></td>
                                                                    <td><?= $orderdetails->Price ?></td>
                                                                    <td><?= $orderdetails->Delivered ?></td>
                                                                    <td><?= $orderdetails->Pending ?></td>
<!--                                                                    <td><a href="/Order/delete_order/--><?//= $poid?><!--" class="delete"> <button class="btn btn-danger btn-square ">Delete Order</button></a></td>-->
                                                                </tr>
                                                            <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Hover table card end -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Page body end -->
                        </div>
                    </div>
                    <!-- Main-body end -->


                </div>
            </div>
        </div>
    </div>
</div>





<?php $this->view('inc/footer_below.php'); ?>
</body>

</html>
