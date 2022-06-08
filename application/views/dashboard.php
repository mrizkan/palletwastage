<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc/header_top.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/vfs_fonts.min.js"></script>
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


                                </div>
                                <!-- Page header end -->
                                <!-- Page body start -->
                                <div class="page-body">

                                    <div class="row">
                                        <div class="col-lg-3">
                                            <!-- Basic Form Inputs card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Wastage Details</h5>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-rounded-down"></i>
                                                    </div>
                                                </div>
                                                <div class="card-block">

                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label>Pallet Size</label>
                                                            <input type="text" name="form[PalletSize]"
                                                                   required class="form-control"
                                                                   placeholder="Pallet Size">
                                                        </div>
                                                        <div class="col-sm-9"></div>





                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Basic Form Inputs card end -->
                                        </div>
                                        <div class="col-lg-4">
                                            <!-- Basic Form Inputs card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Material A</h5>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-rounded-down"></i>
                                                    </div>
                                                </div>
                                                <div class="card-block">

                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label>Material A</label>
                                                            <input type="text" name="form[MaterialA]"
                                                                   required class="form-control"
                                                                   placeholder="Material A">
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Basic Form Inputs card end -->
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
</div>


<?php $this->view('inc/footer_below.php'); ?>
</body>

</html>
