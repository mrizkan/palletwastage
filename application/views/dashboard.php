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
<!--            --><?php //$this->view('inc/navigation.php'); ?>
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
                                    <form action="Calculation" method="post"
                                          enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <!-- Basic Form Inputs card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Wastage Details </h5>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-rounded-down"></i>
                                                    </div>
                                                </div>
                                                <div class="card-block">

                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="text" name="form[PalletSize]"
                                                                   required class="form-control"
                                                                   placeholder="Pallet Size">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <br>
                                                            <button class="btn btn-sm btn-primary btn-round">
                                                                Calculate
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Basic Form Inputs card end -->
                                        </div>
                                        <div class="col-lg-3">
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
                                                        <div class="col-sm-6">

                                                            <input type="number" name="form[MaterialAL]"
                                                                   required class="form-control"
                                                                   placeholder="L">
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <input type="number" name="form[MaterialANoOfPCS]"
                                                                   required class="form-control"
                                                                   placeholder="No. of PCS Used..">
                                                        </div>
                                                        <br><br>
                                                        <div class="col-sm-6">

                                                            <input type="number" name="form[MaterialARL]"
                                                                   required class="form-control"
                                                                   placeholder="Required Plank Size for Manufacturing a Pallet">
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <input type="number" name="form[MaterialARNPCS]"
                                                                   required class="form-control"
                                                                   placeholder="No. of PCS used for a Pallet">
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Basic Form Inputs card end -->
                                        </div>
                                        <div class="col-lg-3">
                                            <!-- Basic Form Inputs card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Material B</h5>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-rounded-down"></i>
                                                    </div>
                                                </div>
                                                <div class="card-block">

                                                    <div class="form-group row">
                                                        <div class="col-sm-6">

                                                            <input type="number" name="form[MaterialBL]"
                                                                   required class="form-control"
                                                                   placeholder="L">
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <input type="number" name="form[MaterialBNoOfPCS]"
                                                                   required class="form-control"
                                                                   placeholder="No. of PCS Used..">
                                                        </div>
                                                        <br><br>
                                                        <div class="col-sm-6">

                                                            <input type="number" name="form[MaterialBRL]"
                                                                   required class="form-control"
                                                                   placeholder="Required Plank Size for Manufacturing a Pallet">
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <input type="number" name="form[MaterialBRNPCS]"
                                                                   required class="form-control"
                                                                   placeholder="No. of PCS used for a Pallet">
                                                        </div>


                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Basic Form Inputs card end -->
                                        </div>
                                        <div class="col-lg-3">
                                            <!-- Basic Form Inputs card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Material C</h5>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-rounded-down"></i>
                                                    </div>
                                                </div>
                                                <div class="card-block">

                                                    <div class="form-group row">
                                                        <div class="col-sm-6">

                                                            <input type="number" name="form[MaterialCL]"
                                                                    class="form-control"
                                                                   placeholder="L">
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <input type="number" name="form[MaterialCNoOfPCS]"
                                                                    class="form-control"
                                                                   placeholder="No. of PCS Used..">
                                                        </div>
                                                        <br><br>
                                                        <div class="col-sm-6">

                                                            <input type="number" name="form[MaterialCRL]"
                                                                    class="form-control"
                                                                   placeholder="Required Plank Size for Manufacturing a Pallet">
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <input type="number" name="form[MaterialCRNPCS]"
                                                                    class="form-control"
                                                                   placeholder="No. of PCS used for a Pallet">
                                                        </div>


                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Basic Form Inputs card end -->
                                        </div>

                                        <?= form_close() ?>


                                        <?php if (!empty($data)) { ?>
                                            <div class="col-lg-12">
                                                <!-- Complex Headers With Column Visibility table start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="<?= base_url() . "Calculation/print_datas" ?>"
                                                           class="btn btn-inverse" target="_blank"> Print</a>
                                                        <div class="card-header-right">
                                                            <i class="icofont icofont-rounded-down"></i>

                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive dt-responsive">

                                                            <table id="complex-header"
                                                                   class="table table-striped table-bordered nowrap"
                                                                   style="display: block; overflow-x: auto; white-space: nowrap;">
                                                                <thead>
                                                                <tr style="background-color: #de3c3c; color: white;">
                                                                    <th rowspan="2">Pallet Code</th>
                                                                    <th rowspan="2">Pallet Size</th>
                                                                    <th rowspan="2">Material Details</th>
                                                                    <th colspan="3">Standard Size Used for a plank cm</th>
                                                                    <th colspan="2">Volume of Standard plank</th>
                                                                    <th colspan="1">No. of PCS used for a Pallet</th>
                                                                    <th colspan="1">Standard Material Volume for
                                                                        Manufacturing a Pallet using Standard
                                                                    </th>
                                                                    <th colspan="3">Required plank size for manufacturing a
                                                                        Pallet
                                                                    </th>
                                                                    <th colspan="1">No. of PCS used for a Pallet</th>
                                                                    <th colspan="1">Actual Material Volume used for
                                                                        Manufacturing of a pallet
                                                                    </th>
                                                                    <th colspan="1">Off Cut</th>
                                                                    <th colspan="1">Off Cut Wastage</th>
                                                                    <th colspan="1">Wastage</th>
                                                                    <th colspan="1">Wastage %</th>
                                                                </tr>
                                                                <tr style="background-color: #de3c3c; color: white;">
                                                                    <th>L</th>
                                                                    <th>W</th>
                                                                    <th>H</th>
                                                                    <th>cm<sup>3</sup></th>
                                                                    <th>m<sup>3</sup></th>
                                                                    <th>#</th>
                                                                    <th>#</th>
                                                                    <th>L</th>
                                                                    <th>W</th>
                                                                    <th>H</th>
                                                                    <th>#</th>
                                                                    <th>(Y m<sup>3</sup>)</th>
                                                                    <th>cm</th>
                                                                    <th>m<sup>3</sup></sup></th>
                                                                    <th>(x-y m<sup>3</sup>)</th>
                                                                    <th>m<sup>3</sup></th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php $p=1; foreach ($_SESSION['Material'] as $datas => $data) { ?>

                                                               <tr style="background-color: white; mso-ansi-font-weight: bold;">
                                                                    <td><?php echo "P".$p; ?></td>
                                                                    <td><?php echo $data['PalletSize'];?></td>
                                                                    <td>Material A</td>
                                                                    <td><?php echo $data['MaterialAL'];?></td>
                                                                    <td>10</td>
                                                                    <td>1.9</td>
                                                                    <td><?php echo $data['Acm3'];?></td>
                                                                    <td><?php echo $data['Am3'];?></td>
                                                                    <td><?php echo $data['MaterialANoOfPCS'];?></td>
                                                                    <td>0.028</td>
                                                                    <td>100</td>
                                                                    <td>9</td>
                                                                    <td>2</td>
                                                                    <td>13</td>
                                                                    <td>0.0234</td>
                                                                    <td>20</td>
                                                                    <td>0.00468</td>
                                                                    <td>0.0046</td>
                                                                    <td>16%</td>
                                                                </tr>
                                                                    <tr style="background-color: white; mso-ansi-font-weight: bold;">
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Material B</td>
                                                                        <td><?php echo $data['MaterialBL'];?></td>
                                                                        <td>10</td>
                                                                        <td>1.9</td>
                                                                        <td><?php echo $data['Bcm3'];?></td>
                                                                        <td><?php echo $data['Bm3'];?></td>
                                                                        <td><?php echo $data['MaterialBNoOfPCS'];?></td>
                                                                        <td>0.028</td>
                                                                        <td>100</td>
                                                                        <td>9</td>
                                                                        <td>2</td>
                                                                        <td>13</td>
                                                                        <td>0.0234</td>
                                                                        <td>20</td>
                                                                        <td>0.00468</td>
                                                                        <td>0.0046</td>
                                                                        <td>16%</td>
                                                                    </tr>
                                                                    <?php if (!empty($data['MaterialCL'])){?>
                                                                <tr style="background-color: white; mso-ansi-font-weight: bold;">


                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Material C</td>
                                                                        <td><?php echo $data['MaterialCL'];?></td>
                                                                        <td>10</td>
                                                                        <td>1.9</td>
                                                                        <td><?php echo $data['Ccm3'];?></td>
                                                                        <td><?php echo $data['Cm3'];?></td>
                                                                        <td><?php echo $data['MaterialCNoOfPCS'];?></td>
                                                                        <td>0.028</td>
                                                                        <td>100</td>
                                                                        <td>9</td>
                                                                        <td>2</td>
                                                                        <td>13</td>
                                                                        <td>0.0234</td>
                                                                        <td>20</td>
                                                                        <td>0.00468</td>
                                                                        <td>0.0046</td>
                                                                        <td>16%</td>

                                                                </tr>
                                                                        <tr style="background-color: white; mso-ansi-font-weight: bold;">


                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td style="background-color: #25db25;">0.028</td>
                                                                            <td style="background-color: #25db25;">100</td>
                                                                            <td style="background-color: #25db25;">9</td>
                                                                            <td style="background-color: #25db25;">2</td>
                                                                            <td style="background-color: #25db25;">13</td>
                                                                            <td style="background-color: #25db25;">0.0234</td>
                                                                            <td style="background-color: #25db25;">20</td>
                                                                            <td style="background-color: #25db25;">0.00468</td>
                                                                            <td style="background-color: #25db25;">0.0046</td>
                                                                            <td style="background-color: #25db25;">16%</td>

                                                                        </tr>
                                                                <!--  If No Data for Material C below codes-->
                                                                    <?php $p++; } else { ?>
                                                                        <tr style="background-color: white; mso-ansi-font-weight: bold;">


                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td style="background-color: #25db25;">0.028</td>
                                                                            <td style="background-color: #25db25;">100</td>
                                                                            <td style="background-color: #25db25;">9</td>
                                                                            <td style="background-color: #25db25;">2</td>
                                                                            <td style="background-color: #25db25;">13</td>
                                                                            <td style="background-color: #25db25;">0.0234</td>
                                                                            <td style="background-color: #25db25;">20</td>
                                                                            <td style="background-color: #25db25;">0.00468</td>
                                                                            <td style="background-color: #25db25;">0.0046</td>
                                                                            <td style="background-color: #25db25;">16%</td>

                                                                        </tr>
                                                                  <?php $p++;  } ?>

                                                                <?php }?>


                                                                </tbody>

                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Complex Headers With Column Visibility table end -->
                                            </div>
                                        <?php } else {  } ?>

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
