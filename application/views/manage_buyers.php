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
                                        <div class="page-header-title">
                                            <h4>Manage Buyer</h4>
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
                                                        <h5>Buyer Details</h5>
                                                       
                                                        <div class="card-header-right">
                                                            <i class="icofont icofont-rounded-down"></i>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Contact Person</th>
                                                                        <th>E-mail</th>
                                                                        <th>Contact Number</th>
                                                                        <th>Address</th>
                                                                        <th>Remarks</th>
                                                                        <th>Options</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php foreach ($records as $k => $row): ?>
                                                                    <tr>
                                                                        <td><?= $row->Name  ?></td>
                                                                        <td><?= $row->ContactPerson  ?></td>
                                                                        <td><?= $row->	Email  ?></td>
                                                                        <td><?= $row->Contact1 . ' ,' . $row->Contact2
                                                                            . ' ,' . $row->Contact3 ?></td>
                                                                        <td><?= $row->	Address  ?></td>
                                                                        <td><?= $row->	Remarks  ?></td>
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
                                                                                       href="<?='edit/'.$row->BuyerId ?>">Edit</a>
                                                                                    <a class="dropdown-item waves-effect
                                                                        waves-light delete" href="<?='Delete/'.$row->BuyerId ?>"
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
                                                                    <th>Contact Person</th>
                                                                    <th>E-mail</th>
                                                                    <th>Contact Number</th>
                                                                    <th>Address</th>
                                                                    <th>Remarks</th>
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
