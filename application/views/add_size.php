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
                                        <h4>Size Details</h4>
                                    </div>

                                </div>
                                <!-- Page header end -->
                                <!-- Page body start -->
                                <div class="page-body">
                                    <div class="row">

                                        <div class="col-lg-4">
                                            <!-- Basic Form Inputs card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Add Size</h5>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-rounded-down"></i>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <form action="" method="post" enctype="multipart/form-data">
                                                        <div class="form-group row">



                                                            <div class="col-sm-8">
                                                                <input type="text" name="form[Size]"
                                                                       required class="form-control" placeholder="Enter the Size" value='<?=
                                                                isset($records2->Size)
                                                                    ?$records2->Size:""; ?>'>
                                                            </div>
                                                            <div class="col-sm-4">

                                                                <button class="btn btn-primary btn-round">Save</button>
                                                            </div>
                                                        </div>

                                                </div> <!-- End of card-block tag -->



                                                <?= form_close() ?>


                                            </div>
                                        </div>
                                        <!-- Basic Form Inputs card end -->
                                        <!-- Column selector table start -->
                                        <div class="col-lg-8">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Size Manage</h5>

                                                <div class="card-header-right">
                                                    <i class="icofont icofont-rounded-down"></i>


                                                </div>
                                            </div>
                                            <div class="card-block">

                                                <div class="dt-responsive table-responsive">
                                                    <table class="table table-striped table-bordered nowrap">
                                                        <thead>
                                                        <tr>
                                                            <th>Size</th>
                                                            <th>Option</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach ($records as $k => $row): ?>
                                                        <tr>
                                                            <td><?= $row->Size  ?></td>
                                                            <td>
                                                                <div class="btn-group dropdown-split-info">
                                                                    <button type="button"
                                                                            class="btn btn-inverse btn-mini"><i
                                                                                class="icofont icofont-info-square"></i>Info
                                                                    </button>
                                                                    <button type="button"
                                                                            class="btn btn-inverse dropdown-toggle
                                                                            dropdown-toggle-split waves-effect waves-light btn-mini"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                        <span class="sr-only">Toggle primary</span>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item waves-effect waves-light"
                                                                           href="<?= base_url() ?>/Size/edit/<?=$row->SizeId ?>">Edit</a>
                                                                        <a class="dropdown-item waves-effect
                                                                        waves-light delete" href="<?= base_url() ?>/Size/Delete/<?=$row->SizeId ?>"
                                                                        >Delete</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; ?>


                                                        </tbody>
                                                        <tfoot>
                                                        <tr>
                                                            <th>Size</th>
                                                            <th>Option</th>

                                                        </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
