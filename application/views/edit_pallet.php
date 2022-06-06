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
                                        <?php $selected_date=0; foreach ($manufacture_data as $manufacture_datas):   $selected_date= $manufacture_datas->Date; $manufacture_id=$manufacture_datas->ManufactureId; ?><?php endforeach; ?>
                                        <h4>Update Details</h4>
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
                                                    <h5>Update the Details for the day <strong class="text-danger"><?php echo $selected_date;?></strong></h5>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-rounded-down"></i>
                                                    </div>
                                                </div>

                                                <form action="" method="post" enctype="multipart/form-data">
                                                    <div class="card-block">
                                                        <div class="form-group row">
                                                            <div class="col-sm-3">
                                                                <input type="text" name="form[ManufactureId]"
                                                                       required class="form-control"
                                                                       value="<?php echo $manufacture_id;?>" hidden>
                                                            </div>

                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <div class="row">
                                                                <?php foreach ($pallets as $pallet): //p($pallet); ?>
                                                                    <?php foreach ($sizes as $k => $size):
                                                                        ?>
                                                                        <?php if ($pallet->SizeId == $size->SizeId):
                                                                        $pallet5= $pallet->Quantity;?>

                                                                        <div class="col-sm-2">
                                                                            <label><?= $size->Size ?></label>
                                                                        </div>
                                                                        <div class="col-sm-2">
                                                                            <input type="number"
                                                                                   name="size[<?= $size->SizeId ?>][UpdtQuantity]"
                                                                                   class="form-control"
                                                                                   placeholder="Enter the Amount"
                                                                                   value="<?php echo $pallet5;?>">
                                                                            <input type="hidden"
                                                                                   name="size[<?= $size->SizeId ?>][OriSizeId]"
                                                                                   class="form-control"
                                                                                   value="<?= $size->SizeId ?>">
                                                                            <input type="hidden"
                                                                                   name="size[<?= $size->SizeId ?>][OldQuantity]"
                                                                                   class="form-control"
                                                                                   value="<?= $pallet5 ?>">
                                                                            <input type="hidden"
                                                                                   name="size[<?= $size->SizeId ?>][OldSizeQuantity]"
                                                                                   class="form-control"
                                                                                   value="<?= $size->Quantity ?>">
                                                                            <br>
                                                                        </div>
                                                                        <div class="col-sm-8"></div>

                                                                    <?php endif; ?>
                                                                    <?php endforeach; ?>
                                                                <?php endforeach; ?>




                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8"></div>
                                                            <div class="col-sm-4">

                                                                <button class="btn btn-primary btn-round">Update</button>
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
