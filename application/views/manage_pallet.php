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

                                        <h4>Manage Pallet Details</h4>
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
                                                    <h5>Pallet Management</h5>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-rounded-down"></i>
                                                    </div>
                                                </div>

                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Options</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php foreach ($records as $k => $row): ?>
                                                                <tr>
                                                                    <td><?= $row->Date  ?></td>
                                                                    <td>

                                                                       <!-- <a href="<?='view/'.$row->ManufactureId ?>" <button class="btn btn-info btn-sm"><i class="icofont icofont-info-square"></i>View Details</button></a>-->
                                                                       <?php if($row->Date==date("Y-m-d")){?>
                                                                           <a href="<?='edit/'.$row->ManufactureId ?>" <button class="btn btn-warning btn-sm"></i>Edit Details</button></a>
                                                                           <a href="<?='Delete/'.$row->ManufactureId ?>" class="delete"> <button class="btn btn-danger btn-square btn-sm">Delete Order</button></a>
                                                                       <?php }else{ ?>
                                                                           <a href="javascript:" <button class="btn btn-info btn-sm"></i>Sorry, Can not update or delete previous data</button></a>
                                                                       <?php } ?>



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
