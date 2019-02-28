<?php include "header.php";?>
<script src="assets/js/plugins/ajax/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example-masked-date1').keyup(function () {
            var message = $.trim($("#example-masked-date1").val());
            var message2 = $.trim($("#example-masked-date2").val());
            var mess = message2.split("").reverse().join("");
          console.log(mess);
            if (this.value.length > 3) {
                get(message,message2);
            }
        });
        $('#example-masked-date2').keyup(function () {
            var message = $.trim($("#example-masked-date1").val());
            var message2 = $.trim($("#example-masked-date2").val());
            var mess = message2.split("").reverse().join("");
          console.log(mess);
            if (this.value.length > 3) {
                get(message,message2);
            }
        });
    });

    function get(x,y) {
        
        $(".book-details").load("fetch_by_date_table.php?re=" + x +'&re2=' + y);
    }
</script>
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.min.css">

<!-- Codebase framework -->
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

<!-- Main Container -->
<main id="main-container">
    <!-- Page Content -->
    <!-- Hero -->
    <div class="bg-image" style="background-image: url('assets/img/photos/photo26@2x.jpg');">
        <div class="bg-black-op-75">
            <div class="content content-top content-full text-center">
                <div class="py-20">
                    <h1 class="h2 font-w700 text-white mb-10">Fetch Issues Between Dates</h1>
                    <h2 class="h4 font-w400 text-white-op mb-0">currently in the Issues by Date's!</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->
    <!-- Breadcrumb -->
    <div class="bg-body-light border-b">
        <div class="content py-5 text-center">
            <nav class="breadcrumb bg-body-light mb-0">
                <a class="breadcrumb-item" href="fetch_by_date">Issues by</a>
                <span class="breadcrumb-item active">Date</span>
            </nav>
        </div>
    </div>
    <!-- END Breadcrumb -->
    <div class="content">
        <h2 class="content-heading">Overview</h2>

        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Date Range of Issues and Return's</h3>
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
                        
                            <div class="form-group row">
                                <label class="col-12" for="example-daterange1">Date Range</label>
                                <div class="col-lg-8">
                                    <div class="input-daterange input-group" data-date-format="mm/dd/yyyy" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                        <input type="text" class="js-masked-date-dash form-control" id="example-masked-date1" name="example-masked-date1" placeholder="dd-mm-yyyy">
                                        <span class="input-group-addon font-w600">to</span>
                                        <input type="text" class="js-masked-date-dash form-control" id="example-masked-date2" name="example-masked-date2" placeholder="dd-mm-yyyy">
                                    </div>
                                </div>
                            </div>


                    </div>
                    <div class="form-group ">
                        <!-- <div class="col-6">
                                <button type="submit" name="create" id="create" class="btn btn-alt-primary">
                                    <i class="fa fa-arrow-right mr-5"></i> Enter
                                </button>
                            </div> -->
                    </div>



                    </form>
                    <!-- If you put a checkbox in thead section, it will automatically toggle all tbody section checkboxes -->

                    <!-- END Page Content -->
                </div>
            </div>
        </div>

        <!-- Dynamic Table Full Pagination -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Book Details
                    <small></small>
                </h3>



            </div>
            <div class="table-responsive">
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->

                    <div class="book-details"></div>


                </div>
            </div>
        </div>
        <!-- END Dynamic Table Full Pagination -->

    </div>
    <!-- END Page Content -->
</main>

<!-- END Main Container -->


<p align="center" class="text-primary-light">That's all focks Breath In Breath Out......</p>
<?php include "footer.php" ?>

</div>
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
<script src="assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>

<!-- Page JS Plugins -->
<script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/be_tables_datatables.js"></script>
<script>
    jQuery(function () {
        // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
        Codebase.helpers(['masked-inputs']);
    });
</script>