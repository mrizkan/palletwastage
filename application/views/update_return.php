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
                                        <h4><?php foreach ($OrderMainDetails as $OrderMainDetail):  echo $OrderMainDetail->BuyerName; echo " Update Return Items for the P.O. #"; echo $OrderMainDetail->PoId; endforeach;?></h4>
                                    </div>

                                </div>
                                <!-- Page header end -->
                                <!-- Page body start -->
                                <div class="page-body">
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <!-- Basic Form Inputs card start -->



                                            <!-- Basic table card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Update the Details Below</h5>

                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-rounded-down"></i>

                                                    </div>
                                                </div>
                                                <form action="updatereturndetails" method="post" enctype="multipart/form-data">
                                                    <?php foreach ($OrderMainDetails as $OrderMainDetail): ?>
                                                    <input type="text" name="po[BuyerName]"
                                                           required class="form-control"
                                                           value="<?php echo $OrderMainDetail->BuyerName;?>" hidden>
                                                    <input type="text" name="po[BuyerId]"
                                                           required class="form-control"
                                                           value="<?php echo $OrderMainDetail->BuyerId;?>" hidden>
                                                    <input type="text" name="po[po]"
                                                           required class="form-control"
                                                           value="<?php echo $OrderMainDetail->PoId;?>" hidden>
                                                    <?php endforeach; ?>
                                                <div class="card-block table-border-style">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th>Size</th>
                                                                <th>Return Quantity</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php foreach ($OrderDetails as $orderdetails): ?>
                                                            <tr>

                                                                <td><?php echo $orderdetails->Size; ?></td>
                                                                <td><input type="number" name="form[<?= $orderdetails->OrderDetailId  ?>][]" class="form-control">
                                                                    <input type="number" hidden  name="form[<?= $orderdetails->OrderDetailId;?>][]" value="<?= $orderdetails->SizeId;?>" class="form-control"></td>

                                                            </tr>
                                                            <?php endforeach; ?>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group row">
                                                            <div class="col-lg-9">

                                                            </div>

                                                            <div class="col-lg-1">
                                                                <a href=""> <button class="btn btn-warning btn-sm"><i class="icofont icofont-check-circled"></i>Update Order</button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?= form_close() ?>
                                            </div>
                                            <!-- Basic table card end -->

                                        </div>
                                        <div class="col-lg-6">
                                            <!-- Basic Form Inputs card start -->



                                            <!-- Basic table card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Current Status of P.O. </h5>

                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-rounded-down"></i>

                                                    </div>
                                                </div>
                                                <div class="card-block table-border-style">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>

                                                                <th>Size</th>
                                                                <th>Requested Quantity</th>
                                                                <th>Price</th>
                                                                <th>Delivered</th>
                                                                <th>Pending</th>

                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php foreach ($OrderDetails as $orderdetails): ?>
                                                                <tr>

                                                                    <td><?php echo $orderdetails->Size; ?></td>
                                                                    <td><?php echo $orderdetails->Quantity; ?></td>
                                                                    <td><?php echo $orderdetails->Price; ?></td>
                                                                    <td class="text-success"><b><?php echo $orderdetails->Delivered; ?></b></td>
                                                                    <td class="text-warning"><b><?php echo $orderdetails->Pending; ?></b></td>

                                                                </tr>
                                                            <?php endforeach; ?>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Basic table card end -->

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
