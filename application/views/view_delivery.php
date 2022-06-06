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
        <?php include('inc/top_bar.php');?>
        <!-- Menu header end -->
        <div class="pcoded-main-container">

            <?php include('inc/navigation.php');?>
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
                                        <h4>View Deliveries</h4>
                                    </div>

                                </div>
                                <!-- Page header end -->
                                <!-- Page body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- HTML5 Export Buttons table start -->
                                            <div class="card">
                                                <div class="card-header table-card-header">
                                                    <h5>View Deliveries</h5>

                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-rounded-down"></i>

                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                            <tr>
                                                                <th>Date & Time</th>
                                                                <th>P.O. Number</th>
                                                                <th>Supplier Name</th>
                                                                <th>Options</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php foreach ($delivery_datas as $k => $row): ?>
                                                                <tr>
                                                                    <td><?= $row->Date."  ". $row->Time;  ?></td>
                                                                    <td><?= $row->PoId  ?></td>
                                                                    <td><?= $row->BuyerName  ?></td>
                                                                    <td>
                                                                        <a href="<?='delivery_note/'.$row->DeliveryMainId ?>" target="_blank" <button class="btn btn-info btn-sm"><i class="icofont icofont-info-square"></i>View Delivery</button></a>
                                                                    </td>
                                                                </tr>

                                                            <?php endforeach; ?>


                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th>Date & Time</th>
                                                                <th>Supplier Name</th>
                                                                <th>P.O. Number</th>
                                                                <th>Options</th>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- HTML5 Export Buttons end -->
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
</div>
</div>

<?php include('inc/footer_below.php');?>
</body>

</html>
