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
                                        <?php $poid=0; $buyername=0; $buyerid=0; foreach ($ordermain_data as $orderdetails):   $poid=$orderdetails->PoId; $buyername=$orderdetails->BuyerName; $buyerid=$orderdetails->BuyerId;  endforeach; ?>
                                        <h4> Buyer Name <?= $buyername;?> </h4>
                                    </div>

                                </div>
                                <!-- Page header end -->
                                <!-- Page body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <!-- Basic Form Inputs card start -->
                                            <!-- Hover table card start -->
                                            <form action="" method="post" enctype="multipart/form-data">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Order Details for P.O. # <?= $poid;?> <br><br> <input name="po[deliverydate]" type="date" required class="form-control"></h5>

                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-rounded-down"></i>

                                                    </div>
                                                </div>


                                                    <input type="text" name="po[BuyerName]"
                                                           required class="form-control"
                                                           value="<?php echo $buyername;?>" hidden>
                                                    <input type="text" name="po[BuyerId]"
                                                           required class="form-control"
                                                           value="<?php echo $buyerid;?>" hidden>
                                                    <input type="text" name="po[BuyerContact]"
                                                       required class="form-control"
                                                       value="<?php echo $buyerid;?>" hidden>
                                                    <input type="text" name="po[po]"
                                                           required class="form-control"
                                                           value="<?php echo $poid;?>" hidden>
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
                                                                <th>Number of Pallets</th>
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
                                                                    <td><input type="number" name="form[<?= $orderdetails->OrderDetailId  ?>][]" class="form-control">
                                                                        <input type="number" hidden  name="form[<?= $orderdetails->OrderDetailId;?>][]" value="<?= $orderdetails->SizeId;?>" class="form-control"></td>
                                                                    <!--                                                                    <td><a href="/Order/delete_order/--><?//= $poid?><!--" class="delete"> <button class="btn btn-danger btn-square ">Delete Order</button></a></td>-->
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
                                                            <a href="" target="_blank"> <button class="btn btn-success btn-sm"><i class="icofont icofont-check-circled"></i>Update Order</button></a>
                                                        </div>
                                                    </div>
                                                </div>

                                                    <?= form_close() ?>
                                            </div>
                                            <!-- Hover table card end -->
                                        </div>
                                        <div class="col-lg-4">
                                            <!-- Basic Form Inputs card start -->
                                            <!-- Hover table card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Current Quantity in Store</h5>

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
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php foreach ($orderdetail_data as $orderdetails): ?>
                                                                <?php foreach ($sizedetail_data as $sizedetail):
                                                                       if($orderdetails->Size == $sizedetail->Size){?>
                                                                    <tr>
                                                                        <th><?= $sizedetail->Size ?></th>
                                                                        <td><?= $sizedetail->Quantity ?></td>
                                                                    </tr>
                                                                <?php } endforeach; ?>
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
