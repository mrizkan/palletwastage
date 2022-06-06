<script type="text/javascript">
                                        
                                        $(document).ready(function() {
                                        $('.js-example-basic-multiple').select2();
                                                });

                                        // trying to implement the delete sweet alert in common way in footer
                                        $('.delete').on('click',function (e) {
                                            e.preventDefault();
                                            var self = $(this);
                                            console.log(self.data('title'));
                                            Swal.fire({
                                                title: 'Are you sure?',
                                                text: "You won't be able to revert this!",
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Yes, delete it!',
                                                closeOnConfirm: false
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    Swal.fire(
                                                        'Deleted!',
                                                        'Your file has been deleted.',
                                                        'success',
                                                    )
                                                    //if click success only below link will execute
                                                    location.href = self.attr('href');
                                                }
                                            })

                                        })



    
                                    </script>

<!-- Required Jquery -->
    <script type="text/javascript" src="<?= base_url() ?>bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?= base_url() ?>bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?= base_url() ?>bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>bower_components/modernizr/js/css-scrollbars.js"></script>
    <!-- classie js -->
    <script type="text/javascript" src="<?= base_url() ?>bower_components/classie/js/classie.js"></script>
    <!-- pnotify js -->
    <script type="text/javascript" src="<?= base_url() ?>bower_components/pnotify/js/pnotify.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>bower_components/pnotify/js/pnotify.desktop.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>bower_components/pnotify/js/pnotify.buttons.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>bower_components/pnotify/js/pnotify.confirm.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>bower_components/pnotify/js/pnotify.callbacks.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>bower_components/pnotify/js/pnotify.animate.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>bower_components/pnotify/js/pnotify.history.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>bower_components/pnotify/js/pnotify.mobile.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>bower_components/pnotify/js/pnotify.nonblock.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/pages/pnotify/notify.js"></script>

    <!-- data-table js -->
    <script src="<?= base_url() ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js"></script>
    <script src="<?= base_url() ?>assets/pages/data-table/extensions/buttons/js/jszip.min.js"></script>
    <script src="<?= base_url() ?>assets/pages/data-table/extensions/buttons/js/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js"></script>
    <script src="<?= base_url() ?>bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Syntax highlighter prism js -->
    <script type="text/javascript" src="<?= base_url() ?>assets/pages/prism/custom-prism.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="<?= base_url() ?>bower_components/i18next/js/i18next.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

    <!-- Select 2 js -->

    <script type="text/javascript" src="<?= base_url() ?>bower_components/select2/js/select2.full.min.js"></script>

    <!-- Multiselect js -->
    <script type="text/javascript" src="<?= base_url() ?>bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js">
    </script>
    <script type="text/javascript" src="<?= base_url() ?>bower_components/multiselect/js/jquery.multi-select.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.quicksearch.js"></script>
    <!-- Custom js -->
    <script src="<?= base_url() ?>assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js"></script>

   
    <script type="text/javascript" src="<?= base_url() ?>assets/js/script.js"></script>
     <script type="text/javascript" src="<?= base_url() ?>assets/pages/advance-elements/select2-custom.js"></script>

    <script src="<?= base_url() ?>assets/js/pcoded.min.js"></script>
    <script src="<?= base_url() ?>assets/js/menu/menu-hori-fixed.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.mousewheel.min.js"></script>