 <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>

                        <a href="#">
                            <img class="img-fluid" src="<?= base_url() ?>assets/images/logo.png" alt="M.A. Enterprises Pallet Management System" style="max-width: 39%;" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <div>
                            <ul class="nav-left">

<!--                                <li>-->
<!--                                    <a class="main-search morphsearch-search" href="#">-->
<!--                                        <!-- themify icon -->-->
<!--                                        <i class="ti-search"></i>-->
<!--                                    </a>-->
<!--                                </li>-->
                                <li>
                                    <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                                </li>
                                
                            </ul>
                            <ul class="nav-right">
<!--                                <li class="header-notification">-->
<!--                                    <a href="#!">-->
<!--                                        <i class="ti-bell"></i>-->
<!--                                        <span class="badge">5</span>-->
<!--                                    </a>-->
<!--                                    -->
<!--                                </li>-->
<!--                                <li class="header-notification">-->
<!--                                    <a href="#!" class="displayChatbox">-->
<!--                                        <i class="ti-comments"></i>-->
<!--                                        <span class="badge">9</span>-->
<!--                                    </a>-->
<!--                                </li>-->
                                <li class="user-profile header-notification">


                                    <a href="#!">
                                        <img src="<?= base_url() ?>assets/images/user.png" alt="User-Profile-Image">
                                        <span><?= $this->session->userdata['user']->Name;?></span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                    <ul class="show-notification profile-notification">
<!--                                        <li>-->
<!--                                            <a href="#!">-->
<!--                                                <i class="ti-settings"></i> Settings-->
<!--                                            </a>-->
<!--                                        </li>-->
                                        <li>
                                            <a href="<?= base_url('Logout') ?>">
                                                <i class="ti-layout-sidebar-left"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- search -->
                            <div id="morphsearch" class="morphsearch">
                                <form class="morphsearch-form">
                                    <input class="morphsearch-input" type="search" placeholder="Search..." />
                                    <button class="morphsearch-submit" type="submit">Search</button>
                                </form>
                                
                                <!-- /morphsearch-content -->
                                <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                            </div>
                            <!-- search end -->
                        </div>
                    </div>
                </div>
            </nav>