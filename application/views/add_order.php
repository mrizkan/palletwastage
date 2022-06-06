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
                                        <h4>Add P.O Details</h4>
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
                                                    <h5>Buyer Details</h5>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-rounded-down"></i>
                                                    </div>
                                                </div>
                                                <div class="card-block">

                                                    <form action="<?= base_url('Order/cart') ?>" method="post" enctype="multipart/form-data">
                                                        <div class="form-group row">
                                                            <div class="col-sm-6">
                                                                <input type="text" name="form[PoNumber]"
                                                                       class="form-control form-txt-info" placeholder="P.O. Number" value="" id="poid" required>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <select class="js-example-basic-single form-control form-control-primary" name="form[Supplier]" id="Supplier" required>
                                                                    <option value="">Select Buyer</option>
                                                                    <?php foreach ($buyers as $k => $row): ?>
                                                                        <option value="<?= $row->BuyerId  ?>"><?= $row->Name  ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>


                                                                <script type="text/javascript">
                                                                    document.getElementById('Supplier').value = "<?php echo $this->input->post('form[Supplier]')?>";
                                                                    document.getElementById('poid').value = "<?php echo $this->input->post('form[PoNumber]')?>";

                                                                </script>
                                                            </div>
                                                        </div>





                                                </div> <!-- End of card-block tag -->

                                            </div>
                                        </div>

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

                                                        <div class="form-group row">
                                                            <div class="col-sm-4">
                                                                <select class="js-example-basic-single" name="form[Size]">
                                                                    <option value="">Select Size</option>
                                                                    <?php foreach ($sizes as $k => $row): ?>
                                                                        <option value="<?= $row->SizeId  ?>"><?= $row->Size  ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <input type="number" name="form[Quantity]"
                                                                       class="form-control form-txt-info" placeholder="Quantity" required>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <input type="number" name="form[Price]"
                                                                       class="form-control form-txt-danger" placeholder="Price" required>
                                                            </div>

                                                            <div class="col-sm-1">

                                                                <button class="btn btn-info btn-round">Add</button>

                                                            </div>

                                                        </div>

                                                        <?= form_close() ?>


                                                </div> <!-- End of card-block tag -->

                                            </div>
                                        </div>
                                        <!-- Basic Form Inputs card end -->
                                        <!-- Column selector table start -->
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>P.O. for <?php echo $name = $this->session->userdata('Supplier_Name'); ?></h5>

                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-rounded-down"></i>


                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="form-group row">
                                                    <div class="col-lg-10"></div>
                                                    <div class="col-lg-2">
                                                        <a href="<?= base_url('Order/cart_destroy') ?>"> <button class="btn btn-danger btn-outline-danger btn-mini"><i class="icofont icofont-eye-alt"></i>Delete all</button></a>
                                                    </div>
                                                    </div>
                                                    <div class="dt-responsive table-responsive">
                                                        <table class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                            <tr>
                                                                <th>Size</th>
                                                                <th>Quantity</th>
                                                                <th>Price</th>
                                                                <th>Amount</th>
                                                                <th>Option</th>

                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $i = 1; ?>

                                                            <?php foreach ($this->cart->contents() as $items): ?>
                                                            <input type="hidden" name="form[rowid]" value="<?php echo $items['rowid']; ?>" >
                                                                <tr>
                                                                    <td><?php echo $items['size']; ?></td>
                                                                    <td><?php echo $items['qty']; ?></td>
                                                                    <td><?php echo $items['price']; ?></td>
                                                                    <td>Rs. <?php echo $this->cart->format_number($items['subtotal']); ?></td>
                                                                    <td>
                                                                        <a href="<?= base_url() ?>/Order/cart_delete/<?php echo $items['rowid']; ?>"> <button class="btn btn-danger btn-outline-danger btn-icon btn-mini"><i class="ion-close-round"></i></button></a>
                                                                    </td>
                                                                </tr>
                                                                <?php $i++; ?>

                                                            <?php endforeach; ?>



                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th>Size</th>
                                                                <th>Quantity</th>
                                                                <th>Price</th>
                                                                <th>Amount</th>
                                                                <th>Option</th>

                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group row">
                                                            <div class="col-lg-8">
                                                                <strong class="text-danger" style="font-size: 30px;">Total P.O. Amount Rs. <?php echo $this->cart->format_number($this->cart->total()); ?></strong>
                                                            </div>

                                                            <div class="col-lg-1">
                                                               <a href="<?= base_url() ?>/Order/addpo/"> <button class="btn btn-success"><i class="icofont icofont-check-circled"></i>Proceed Order</button></a>
                                                            </div>
                                                        </div>
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
