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
                                    <div class="page-header-title">
                                        <h4>Manage Bank</h4>
                                    </div>

                                </div>
                                <!-- Page header end -->
                                <!-- Page body start -->
                                <div class="page-body">

                                    <!-- Basic Button table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Manage Bank Details</h5>

                                            <div class="card-header-right">
                                                <i class="icofont icofont-rounded-down"></i>

                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id="custom-btn-riz"
                                                       class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Option</th>
                                                    </tr>
                                                    </thead>


                                                    <tbody>
                                                    <?php foreach ($records as $k => $row): ?>
                                                        <tr>

                                                            <td><?= $row->BankName ?></td>


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
                                                                           href="<?='edit/'.$row->BankId ?>">Edit</a>
                                                                        <a class="dropdown-item waves-effect
                                                                        waves-light delete" href="<?='Delete/'
                                                                        .$row->BankId ?>"
                                                                        >Delete</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Option</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Basic Button table end -->


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

<?php $this->view('inc/footer_below.php'); ?>
</body>

</html>
