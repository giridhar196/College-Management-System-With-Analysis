<?php
include "header.php";
$rollnu='';?>
    <script src="assets/js/plugins/ajax/jquery.min.js"></script>
   
    <script>
        $(document).ready(function () {
            $('#book_isbn_number').keyup(function () {
                var message = $.trim($("#book_isbn_number").val());
                if (this.value.length > 3) {
                    get(message);
                }
            });
        });

        function get(x) {
            console.log(x);
            $(".book-details").load("return_book_fetch.php?re=" + x);
        }

    </script>
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->

        <div class="content">
            <!-- Bootstrap Forms Validation -->
            <h2 class="content-heading">Return Book</h2>
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Return</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row justify-content-center py-20">
                        <div class="col-xl-6">

                            <form action="issue_book_submit" method="GET">
                                <input type='hidden' value='<?php echo $rollnu;?>' name='roll_number'>
                                <div class="form-group ">
                                    <label class="col-12" for="book_id">Book Id</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="book_isbn_number" id="book_isbn_number" autocomplete="off" required placeholder="Enter Book Number..">

                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-6">
                                        <button type="submit" name="create" id="create" class="btn btn-alt-primary">
                                            <i class="fa fa-arrow-right mr-5"></i> Enter
                                        </button>
                                    </div>
                                </div>
                                <div class="book-details"></div>

                                
                            </form>
                            <!-- If you put a checkbox in thead section, it will automatically toggle all tbody section checkboxes -->

                            <!-- END Page Content -->
                        </div>
                    </div>
                </div>
            </div>
            

    </main>
    <!-- END Main Container -->

    <!-- Footer -->



    <?php include "footer.php" ?>

    <!-- END Page Container -->



    <!-- Codebase Core JS -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/core/jquery.slimscroll.min.js"></script>
    <script src="assets/js/core/jquery.scrollLock.min.js"></script>
    <script src="assets/js/core/jquery.appear.min.js"></script>
    <script src="assets/js/core/jquery.countTo.min.js"></script>
    <script src="assets/js/core/js.cookie.min.js"></script>
    <script src="assets/js/codebase.js"></script>
    <script>
        jQuery(function () {
            // Init page helpers (Table Tools helper)
            Codebase.helpers('table-tools');
        });
    </script>
