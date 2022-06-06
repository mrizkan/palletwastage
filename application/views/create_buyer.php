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
                                        <?php $this->view('inc/success_notification.php'); ?>
                                        <div class="page-header-title">
                                            <h4>Buyer Registration Form</h4>
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
                                                        <h5>Fill Buyer Details</h5>
                                                        
                                                        <div class="card-header-right">
                                                            <i class="icofont icofont-rounded-down"></i>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="card-block">

                                                        <form action="" method="post" enctype="multipart/form-data">
                                                            <div class="form-group row">
                                                                <label class="col-sm-1 col-form-label">Name</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" name="form[Name]"
                                                                           required class="form-control" value="<?=
                                                                    isset($records->Name)
                                                                        ?$records->Name:''; ?>">
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Contact
                                                                    Person</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" name="form[ContactPerson]"
                                                                            class="form-control" value="<?=
                                                                    isset($records->ContactPerson)
                                                                        ?$records->ContactPerson:''; ?>">
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">E-mail</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" name="form[Email]"
                                                                            class="form-control" value="<?=
                                                                    isset($records->Email)
                                                                        ?$records->Email:''; ?>">
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-1 col-form-label">Contact 01</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" name="form[Contact1]"
                                                                            class="form-control" value="<?=
                                                                    isset($records->Contact1)
                                                                        ?$records->Contact1:''; ?>">
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Contact 02</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" name="form[Contact2]"
                                                                            class="form-control" value="<?=
                                                                    isset($records->Contact2)
                                                                        ?$records->Contact2:''; ?>">
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Contact 03</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" name="form[Contact3]"
                                                                            class="form-control" value="<?=
                                                                    isset($records->Contact3)
                                                                        ?$records->Contact3:''; ?>">
                                                                </div>
                                                                
                                                                
                                                                
                                                            </div>
                                                            <div class="form-group row">

                                                                <label class="col-sm-1 col-form-label">Address</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" name="form[Address]"
                                                                            class="form-control" value="<?=
                                                                    isset($records->Address)
                                                                        ?$records->Address:''; ?>">
                                                                </div>
                                                                
                                                                
                                                                <div class="col-sm-4">
                                                                    <textarea rows="3" cols="5" class="form-control" name="form[Remarks]"
                                                                              placeholder="Remarks"><?=
                                                                        isset($records->Remarks)
                                                                            ?$records->Remarks:''; ?></textarea>
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


                                                            <?= form_close() ?>
                                                       
                                                       
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
