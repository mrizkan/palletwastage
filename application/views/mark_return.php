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
                                        <h4>Mark Return</h4>
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
                                                    <h5>Mark Return</h5>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-rounded-down"></i>
                                                    </div>
                                                </div>
                                                <div class="card-block">

                                                    <form action="updatereturn" method="post" enctype="multipart/form-data">
                                                        <div class="form-group row">
                                                            <div class="col-sm-10">
                                                                <select class="js-example-basic-single form-control form-control-primary" name="form[PoId]" id="supplier" required>
                                                                    <option value="">Select P.O. Id</option>
                                                                    <?php foreach ($records as $k => $row): ?>
                                                                        <option value="<?= $row->PoId  ?>"><?= $row->PoId . ' ,  '.$row->BuyerName  ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>


                                                                <script type="text/javascript">
                                                                    document.getElementById('supplier').value = "<?php echo $this->input->post('form[PoId]')?>";
                                                                </script>
                                                            </div>




                                                            <div class="col-sm-2">

                                                                <button class="btn btn-info btn-round">Search</button>

                                                            </div>

                                                        </div>

                                                        <?= form_close() ?>


                                                </div> <!-- End of card-block tag -->



                                            </div>


                                        </div>
                                        <!-- Basic Form Inputs card end -->
                                        <!-- Column selector table start -->

                                        <!-- Column selector table end -->
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
