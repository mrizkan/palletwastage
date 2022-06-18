<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->view('inc/header_top.php') ; ?>

</head>

<body class="fix-menu">
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg" >
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body">
                        <form action="<?= base_url('Home/index') ?>" class="md-float-material" method="post">
                            <div class="text-center">
                                <img src="<?= base_url() ?>assets/images/auth/logo.png" alt="logo.png">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">

                                        <h3 class="text-left txt-primary">Sign In</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="input-group">
                                    <input type="text" required name="username" class="form-control" placeholder="User Name">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" required name="password" class="form-control" placeholder="Password">
                                    <span class="md-line"></span>
                                </div>
                                
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <strong class="alert-danger " > <?= @$error  ?> </strong>
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-7">
                                        <p class="text-inverse text-left m-b-0">Pallet Wastage Management System</p>
                                        <p class="text-inverse text-left"><b>Powered by <a href="http://www.rizcreation.com/" target="_blank">Riz Creation</a></b></p>
                                    </div>
                                    <div class="col-md-5">
                                        <img src="<?= base_url() ?>assets/images/auth/Logo-small-bottom1.png" alt="small-logo.png">
                                    </div>
                                </div>

                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
   

    <?php $this->view('inc/footer_below.php') ; ?>
</body>

</html>
