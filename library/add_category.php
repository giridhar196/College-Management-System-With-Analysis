<?php
include "header.php";
$msg='*Enter Unique Category Name';
if(isset($_POST['create']))
{
$category=$_POST['category'];
$status=$_POST['status'];
$sql = "SELECT * FROM tblcategory WHERE CategoryName='$category'";   
$run_sql=mysqli_query($conn,$sql);  
if (mysqli_num_rows($run_sql) > 0) {
    $msg="Category Name Is Already Available Please Use The Different Name";
}else{
$query = "INSERT INTO tblcategory SET CategoryName='$category',Status='$status'";
$run_sel_us=mysqli_query($conn,$query);
}}
?>
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->

        <div class="content">
            <!-- Bootstrap Forms Validation -->
            <h2 class="content-heading">Add Category</h2>
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Category</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
               
                <div class="block-content">
                    <div class="row justify-content-center py-20">
                        <div class="col-xl-6">
                            <form action="" method="post" >
                                <div class="form-group row">
                                    <label class="col-12" for="category_name">Category Name<span class="text-danger"><?php echo $msg; ?></span></label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="category" autocomplete="off" required placeholder="Enter Category Name..">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <div class="col-6">
                                                <label class="css-control css-control-primary css-radio">
                                                    <input type="radio" class="css-control-input" name="status" id="status" value="1"  checked>
                                                    <span class="css-control-indicator"></span> Active
                                                </label>
                                                <label class="css-control css-control-primary css-radio">
                                                    <input type="radio" class="css-control-input" name="status" id="status" value="0" >
                                                    <span class="css-control-indicator"></span> In Active
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <button type="submit" name="create" class="btn btn-alt-primary">
                                                <i class="fa fa-arrow-right mr-5"></i> Create
                                            </button>
                                        </div>
                                    </div>
                            </form>


                            <!-- If you put a checkbox in thead section, it will automatically toggle all tbody section checkboxes -->
                            </div>
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
    <script>
        jQuery(function () {
            // Init page helpers (Table Tools helper)
            Codebase.helpers('table-tools');
        });
    </script>

    </body>

    </html>