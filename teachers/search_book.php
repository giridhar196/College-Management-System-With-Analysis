<?php include "header.php";?>

<script src="assets/js/plugins/ajax/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $('#book_isbn_number').keyup(function () {
            var message = $.trim($("#book_isbn_number").val());
            if (this.value.length > 1) {
                get(message);
            }
        });
    });

    function review(z) {
        console.log(z);

        $(".book-review").load("ge_book_details.php?rew=" + z);
    }

    function get(x) {
        $(".book-details").load("ge_book_details.php?re=" + x);
    }
</script>
<!-- Main Container -->
<main id="main-container">
    <!-- Page Content -->

    <div class="content">
        <!-- Bootstrap Forms Validation -->
        <h2 class="content-heading">Find Book</h2>
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Find Book</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option">
                        <i class="si si-wrench"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <div class="row justify-content-center py-20">
                    <div class="col-xl-6">

                        <form action="" method="GET">

                            <div class="form-group ">
                                <label class="col-12" for="book_id">Name</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="book_isbn_number" id="book_isbn_number" autofocus autocomplete="off" required placeholder="Enter Book Name..">
                                </div>
                            </div>
                            <div class="book-details"></div>
                        </form>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class='modal-dialog modal-lg' role='document'>

                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title' id='exampleModalLabel'>Review on book</h5>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                    <!-- Blockquotes -->
                                    <div class="block">
                                        <div class="block-header block-header-default">
                                            <h3 class="block-title">Different Reviews</h3>
                                        </div>
                                        <div class="block-content">
                                            <div class="book-review"></div>
                                        </div>
                                    </div>
                                    <!-- END Blockquotes -->
                                </div>
                            </div>

                        </div>
                        <!-- If you put a checkbox in thead section, it will automatically toggle all tbody section checkboxes -->

                        <!-- END Page Content -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Bordered Table -->

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