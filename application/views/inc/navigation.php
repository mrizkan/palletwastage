<nav class="pcoded-navbar" pcoded-header-position="relative">
                    <div class="pcoded-inner-navbar">
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="<?= base_url('Dashboard') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-home"></i></span>
                                    <span class="pcoded-mtext">Home</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>

                            </li>

                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="fa fa-male"></i></span>
                                    <span class="pcoded-mtext">Buyers</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="<?= base_url('Buyer/Create_Buyer') ?>">
                                            <span class="pcoded-micon"><i class="ti-file"></i></span>
                                            <span class="pcoded-mtext">Insert Buyers</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= base_url('Buyer/index') ?>">
                                            <span class="pcoded-micon"><i class="ti-layout-list-post"></i></span>
                                            <span class="pcoded-mtext">Manage Buyers</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>

                            </li>

                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="icofont icofont-jail"></i></span>
                                    <span class="pcoded-mtext">Pallets</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="<?= base_url('Manufacture/addnew') ?>">
                                            <span class="pcoded-micon"><i class="ti-file"></i></span>
                                            <span class="pcoded-mtext">Add Pallets</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= base_url('Manufacture/manage') ?>">
                                            <span class="pcoded-micon"><i class="ti-layout-list-post"></i></span>
                                            <span class="pcoded-mtext">Manage Pallets</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>

                            </li>


                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="fa fa-check-square-o"></i></span>
                                    <span class="pcoded-mtext">P.O</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="<?= base_url('Order/add') ?>">
                                            <span class="pcoded-micon"><i class="ti-file"></i></span>
                                            <span class="pcoded-mtext">Add P.O</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= base_url('Order/manage_po') ?>">
                                            <span class="pcoded-micon"><i class="ti-layout-list-post"></i></span>
                                            <span class="pcoded-mtext">Manage P.O.</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>

                            </li>

                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="fa fa-ambulance"></i></span>
                                    <span class="pcoded-mtext">Delivery</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="" style="display:none;">
                                        <a href="<?= base_url('Delivery/deliverybulk') ?>">
                                            <span class="pcoded-micon"><i class="ti-file"></i></span>
                                            <span class="pcoded-mtext">Bulk Delivery</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>

                                    </li>
                                    <li class="">
                                        <a href="<?= base_url('Delivery/index') ?>">
                                            <span class="pcoded-micon"><i class="ti-file"></i></span>
                                            <span class="pcoded-mtext">Add Delivery</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>

                                    </li>
                                    <li class="">
                                        <a href="<?= base_url('Delivery/viewdelivery') ?>">
                                            <span class="pcoded-micon"><i class="ti-file"></i></span>
                                            <span class="pcoded-mtext">View Delivery</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>

                                    </li>

                                    <li class="">
                                        <a href="<?= base_url('ReturnItems/index') ?>">
                                            <span class="pcoded-micon"><i class="ti-file"></i></span>
                                            <span class="pcoded-mtext">Return</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>

                                    </li>


                                </ul>
                            </li>

                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="icofont icofont-document-search"></i></span>
                                    <span class="pcoded-mtext">Reports</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="<?= base_url('History') ?>">
                                            <span class="pcoded-micon"><i class="ti-file"></i></span>
                                            <span class="pcoded-mtext">History</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                </ul>
                            </li>


                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="ti-settings"></i></span>
                                    <span class="pcoded-mtext">Settings</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="<?= base_url('Size/Create_Size') ?>">
                                            <span class="pcoded-micon"><i class="ti-file"></i></span>
                                            <span class="pcoded-mtext">Sizes</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=""   style="display: none">
                                        <a href="<?= base_url('History') ?>">
                                            <span class="pcoded-micon"><i class="ti-file"></i></span>
                                            <span class="pcoded-mtext">Company Settings</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=""   style="display: none">
                                        <a href="<?= base_url('Bank/manage_bank') ?>">
                                            <span class="pcoded-micon"><i class="ti-file"></i></span>
                                            <span class="pcoded-mtext">Bank Settings</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                </ul>
                            </li>


                        </ul>
                    </div>
                </nav>