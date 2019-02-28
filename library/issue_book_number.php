<?php
include "header.php";?>
    <script src="assets/js/plugins/ajax/jquery.min.js"></script>
    <?php
    $id='';
    $number='';
if(isset($_GET['roll_number2'])){
    $number = $_GET['roll_number2'];
$sql = "SELECT * FROM students WHERE registration_number='$number'";
$run_sql=mysqli_query($conn,$sql);  
if (mysqli_num_rows($run_sql) > 0) {
 $id="valid";
 echo $id;
}
}

?>
        <script>
            var valid_number = '<?php echo $id; ?>';
            console.log (valid_number);
            $(document).ready(function () {
                $('#roll_number2').keyup(function () {
                    if (this.value.length == 10) {
                        $('#create').click();
                    }
                });
                if (valid_number == 'valid') {
                    $('#generate').click();
                }
            });
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

                                <form action="" method="GET">
                                    <div class="form-group row">
                                        <label class="col-12" for="roll_number2">Roll Number<span class="text-danger">*<?php echo $id; ?></span></label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="roll_number2" id="roll_number2" autocomplete="off" required placeholder="Enter Roll Number..">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <button type="submit" id="create" class="btn btn-alt-primary">
                                                <i class="fa fa-arrow-right mr-5"></i> Enter
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <form action='issue_book_fetch' method='GET'>
                                    <input type="hidden" name="roll_number" value="<?php echo $number; ?> " id="roll_number">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <button type="submit" id="generate" >
                                                
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <div class="col-xl-12">
                                    <!-- Bars -->
                                    <div class="block">

                                        <div class="block-content ">
                                            <div class="row items-push-2x text-center invisible" data-toggle="appear">
                                                <div class="col-6 col-md-4">
                                                    <!-- Sparkline Bar 1 Container -->
                                                    <span class="js-slc-bar1">4,3,2,4,4,5</span>
                                                    <div class="font-w600 mt-10">
                                                        <i class="fa fa-ticket text-muted"></i> Past 7 Days Issues
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <!-- Sparkline Bar 2 Container -->
                                                    <span class="js-slc-bar2">980,1210,1350,900,500,700</span>
                                                    <div class="font-w600 mt-10">
                                                        <i class="fa fa-line-chart text-muted"></i>Past 7 Days Returns
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <!-- Sparkline Bar 3 Container -->
                                                    <span class="js-slc-bar3">8,11,9,8,7,5</span>
                                                    <div class="font-w600 mt-10">
                                                        <i class="fa fa-suitcase text-muted"></i> Past 7 Days Experted Returns
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Bars -->
                                </div>
                                <!-- If you put a checkbox in thead section, it will automatically toggle all tbody section checkboxes -->

                                <!-- END Page Content -->
                            </div>
        </main>
        <!-- END Main Container -->

        <!-- Footer -->



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
        <script src="assets/js/pages/be_comp_charts_2.js"></script>
        <script src="assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>

        <script>
            jQuery(function () {
                // Init page helpers (Table Tools helper)
                Codebase.helpers('table-tools', 'easy-pie-chart');
            });
        </script>

        </body>

        </html>