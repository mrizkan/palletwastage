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

                                        <h4>P.O. Details</h4>
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
                                                    <h5>P.O. Details</h5>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-rounded-down"></i>
                                                    </div>
                                                </div>

                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                            <tr>
                                                                <th>P.O. Number</th>
                                                                <th>Supplier Name</th>
                                                                <th>Options</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php foreach ($records as $k => $row): ?>
                                                                <tr>
                                                                    <td><?= $row->PoId  ?></td>
                                                                    <td><?= $row->BuyerName  ?></td>
                                                                    <td>

                                                                        <a href="<?= base_url() ?><?='/Order/view_order/'.$row->PoId ?>" <button class="btn btn-info btn-sm"><i class="icofont icofont-info-square"></i>View Order</button></a>
                                                                    <a href="<?= base_url() ?><?='/Order/delete_order/'.$row->PoId ?>" class="delete"> <button class="btn btn-danger btn-square btn-sm">Delete Order</button></a>
                                                                    </td>
                                                                </tr>

                                                            <?php endforeach; ?>
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Options</th>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>

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
