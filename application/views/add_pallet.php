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

                                        <h4>Add Pallet Details</h4>
                                    </div>

                                </div>
                                <!-- Page header end -->
                                <!-- Page body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- Basic Form Inputs card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Enter Manufacturing Details</h5>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-rounded-down"></i>
                                                    </div>
                                                </div>

                                                <form action="" method="post" enctype="multipart/form-data">
                                                <div class="card-block">
                                                        <div class="form-group row">
                                                            <div class="col-sm-3">
                                                                <input type="date" name="form[Date]"
                                                                       required class="form-control" placeholder="Select the Date">
                                                            </div>

                                                        </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                            <?php foreach ($sizes as $k => $size):  ?>
                                                            <div class="col-sm-2">
                                                            <label><?= $size->Size  ?></label>
                                                            </div>
                                                                <div class="col-sm-2">
                                                                <input type="number" name="size[<?= $size->SizeId  ?>]" class="form-control"
                                                                      placeholder="Enter the Amount">
                                                                    <br>
                                                            </div>
                                                            <?php endforeach; ?>

                                                        <div class="col-sm-4">

                                                            <button class="btn btn-primary btn-round">Add</button>
                                                        </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- End of card-block tag -->
                                                    <?= form_close() ?>
                                            </div>
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
