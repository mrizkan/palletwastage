<!DOCTYPE html>
<html lang="en">

<head>
     <?php include('inc/header_top.php');?>
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
            <?php $this->view('inc/top_bar.php');?>
            <!-- Menu header end -->
            <div class="pcoded-main-container">
                <?php $this->view('inc/navigation.php');?>
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

                                            <div class="col-lg-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Details</h5>

                                                        <div class="card-header-right">
                                                            <i class="icofont icofont-rounded-down"></i>

                                                        </div>
                                                    </div>
                                                    <div class="card-block">

                                                        <form action="Calculation" method="post" enctype="multipart/form-data">
                                                            <div class="form-group row">
                                                                <div class="col-sm-1">
                                                                    <input type="text" name="form[A]"
                                                                           required class="form-control" placeholder="A" value="<?=
                                                                    isset($records->A)
                                                                        ?$records->A:''; ?>">
                                                                </div>
                                                                <div class="col-sm-1">
                                                                    <input type="text" name="form[B]"
                                                                           required class="form-control" placeholder="B" value="<?=
                                                                    isset($records->B)
                                                                        ?$records->B:''; ?>">
                                                                </div>
                                                                <div class="col-sm-1">
                                                                    <input type="text" name="form[L]"
                                                                           required class="form-control" placeholder="L" value="<?=
                                                                    isset($records->L)
                                                                        ?$records->L:''; ?>">
                                                                </div>
                                                                <div class="col-sm-3">

                                                                    <button class="btn btn-primary btn-round">Calculate</button>

                                                                </div>



                                                            </div>





                                                            <?= form_close() ?>


                                                    </div>
                                                </div>
                                                <!-- Basic Form Inputs card end -->


                                               <?php if (!empty($data))
                                                { ?>
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Submited</h5>

                                                        <div class="card-header-right">
                                                            <i class="icofont icofont-rounded-down"></i>

                                                        </div>
                                                    </div>
                                                    <div class="card-block">




                                                    </div>
                                                </div>
                                                <!-- Basic Form Inputs card end -->
                                              <?php  }
                                                else{  } ?>


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
    </div>

    <?php $this->view('inc/footer_below.php');?>
</body>

</html>
