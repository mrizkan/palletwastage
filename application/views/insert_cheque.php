<!DOCTYPE html>
<html lang="en">

<head>
     <?php include('inc/header_top.php');?>
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
                                            <h4>Add New Cheque</h4>
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
                                                        <h5>Cheque Details</h5>
                                                        
                                                        <div class="card-header-right">
                                                            <i class="icofont icofont-rounded-down"></i>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        
                                                        <form>
                                                            <div class="form-group row">
                                                                <label class="col-sm-1 col-form-label">Sales Rep.</label>
                                                                <div class="col-sm-3">
                                                                   <select name="form[salesrep_id]" class="form-control
                                                                   form-control-danger">
                                            <option value="">Select Sales Rep.</option>
                                            <?php foreach ($salesrep_details as $k => $row): ?>
                                                <option value="<?=$row->SalesRepId ?>"><?=$row->FirstName.' ' .$row->
                                                    LastName
                                                    ?></option>
                                            <?php endforeach; ?>


                                        </select>
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Supp./Clie.</label>
                                                                <div class="col-sm-3">
                                                                    <select name="form[supplier_id]" class="form-control
                                                                    form-control-info">
                                            <option value="opt1">Select Supplier / Client</option>
                                            <?php foreach ($supplier_details as $k => $row): ?>
                                                <option value="<?=$row->BuyerId ?>"><?=$row->Name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                                                </div>
                                                                
                                                                <label class="col-sm-1 col-form-label">Invoice #</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" name="form[invoice_number]"
                                                                           class="form-control"  value="<?=
                                                                    isset($records->invoice_number)
                                                                        ?$records->invoice_number:''; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-1 col-form-label">Cash</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" name="form[cash]"
                                                                           class="form-control"   value="<?=
                                                                    isset($records->cash)
                                                                        ?$records->cash:''; ?>">
                                                                </div>
                                                                
                                                                <label class="col-sm-1 col-form-label">Bank</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" name="form[bank]"
                                                                           class="form-control"    value="<?=
                                                                    isset($records->bank)
                                                                        ?$records->bank:''; ?>">
                                                                </div>
                                                                <label class="col-sm-1 col-form-label"> Che.Date</label>
                                                                <div class="col-sm-3">
                                                                    <input type="date" name="form[cheque_date]"
                                                                           class="form-control">
                                                                </div>
                                                                
                                                                
                                                                
                                                            </div>
                                                            <div class="form-group row">

                                                                
                                                                <label class="col-sm-1 col-form-label">Amount </label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" name="form[amount]"
                                                                           class="form-control">
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Cheque #</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" name="form[cheque_number]"
                                                                           class="form-control">
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Image</label>
                                                                <div class="col-sm-3">
                                                                    <input type="file" name="form[image1]"
                                                                           class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                
                                                                <div class="col-sm-4">
                                                                    <textarea rows="3" cols="5" class="form-control"
                                                                              placeholder="Remarks" name="form[Remarks]"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-9">
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <button type="reset" class="btn btn-info btn-round">Reset</button>
                                                                   <button class="btn btn-primary btn-round">Save</button>
                                                                   
                                                                </div>
                                                            </div>
                                                            

                                                        </form>
                                                       
                                                       
                                                    </div>
                                                </div>
                                                <!-- Basic Form Inputs card end -->
                         
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
