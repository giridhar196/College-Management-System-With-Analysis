<?php
include "header.php";?>
    <script src="assets/js/plugins/ajax/jquery.min.js"></script>
    <?php 
   
if(isset($_GET['roll_number'])){
    $rollnu=$_GET['roll_number'];

}
?>
    <script>
        $(document).ready(function () {
            var nu = "<?php echo $rollnu; ?>";
            previous(nu);
            submit(nu);
            $('#book_isbn_number').keyup(function () {
                var message = $.trim($("#book_isbn_number").val());
                if (this.value.length > 3) {
                    get(message);
                }
            });
        });

        function get(x) {
            $(".book-details").load("ge_book_getails.php?re=" + x);
        }

        function submit(z) {
            $(".fetch-submit").load("already_issued_books.php?submit=" + z);
        }

        function previous(y) {
            setInterval(function () {
                $(".fetch-details").load("already_issued_books.php?re=" + y);
            }, 2000);
        }
    </script>
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->

        <div class="content">
            <!-- Bootstrap Forms Validation -->
            <h2 class="content-heading">Issue Book</h2>
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Issue</h3>
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
                                        <input type="text" class="form-control" name="book_isbn_number" id="book_isbn_number" autocomplete="off" required placeholder="Enter ISBN Number..">

                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-6">
                                        <button type="submit" name="create2" id="create2" class="btn btn-alt-primary">
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
            <!-- Bordered Table -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Already Issued Books</h3>
                    <div class="block-options">

                    </div>
                </div>

                <div class="block-content">


                    <div class="fetch-details"></div>


                </div>
            </div>
            <!-- END Bordered Table -->

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

    </body>

    </html>