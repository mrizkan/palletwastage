<!DOCTYPE html>
<html lang="en">


<head>
    <?php $this->view('inc/header_top.php'); ?>


</head>
<!-- Menu horizontal icon fixed -->

<body class="horizontal-icon-fixed" bgcolor="white;" themebg-pattern="pattern 888">
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

        <!-- Menu header end -->
        <div class="pcoded-main-container">

            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page body start -->
                                <div class="page-body">
                                    <!-- Container-fluid starts -->
                                    <div class="container">
                                        <!-- Main content starts -->
                                        <div>
                                            <!-- Invoice card start -->
                                            <div class="card">
                                                <div class="row invoice-contact">
                                                    <div class="col-md-8">
                                                        <div class="invoice-box row">
                                                            <div class="col-sm-12">
                                                                <table class="table table-responsive invoice-table table-borderless">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><img src="<?= base_url() ?>assets/images/malogo.png" alt="MA Enterprise" style="width: 100%;" /></td>
                                                                    </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="card-block">
                                                    <div class="row invoive-info">
                                                        <div class="col-md-4 col-xs-12 invoice-client-info">
                                                            <h6>Client Information :</h6>
                                                            <h6 class="m-0"><?php echo $BuyerDetails->Name;?></h6>
                                                            <p class="m-0"><?php echo $BuyerDetails->Contact1;?></p>

                                                        </div>
                                                        <div class="col-md-4 col-sm-6">
                                                            <h6>Order Information :</h6>
                                                            <table class="table table-responsive invoice-table invoice-order table-borderless">
                                                                <tbody>
                                                                <tr>
                                                                    <th>Date :</th>
                                                                    <td><?php echo $DeliveryMainDetails->Date ?></td>
                                                                </tr>
                                                                <tr style="display: none;">
                                                                    <th>Time :</th>
                                                                    <td><?php echo $DeliveryMainDetails->Time ?></td>
                                                                </tr>


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6">
                                                            <h6 class="m-b-20">P.O. Number   <span><?php echo $DeliveryMainDetails->PoId ?></span></h6>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="table-responsive">
                                                                <table class="table  invoice-detail-table">
                                                                    <thead>
                                                                    <tr class="thead-default">
                                                                        <th>Description</th>
                                                                        <th>Size</th>
                                                                        <th>Quantity</th>

                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php foreach ($DeliveryDetails as $k => $row):
                                                                    if ($row->Releasing_Quantity<>0){?>
                                                                    <tr>
                                                                        <td>
                                                                            <h6>Pallet 2 Way</h6>

                                                                        </td>
                                                                        <td><?php echo $row->ItemName; ?></td>
                                                                        <td><?php echo $row->Releasing_Quantity; ?> pcs</td>

                                                                    </tr>
                                                                    <?php }endforeach; ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <!-- Invoice card end -->
                                        </div>
                                    </div>
                                    <!-- Container ends -->
                                </div>
                                <!-- Page body end -->
                            </div>
                        </div>
                        <!-- Warning Section Starts -->
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
