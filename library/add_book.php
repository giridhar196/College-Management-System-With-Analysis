<?php include "header.php";?>
<?php if(isset($_GET['msg'])){
$message=$_GET['msg'];
}
else{
    $message='';
} ?>

<link rel="stylesheet" href="assets/js/plugins/select2/select2.min.css">
<link rel="stylesheet" href="assets/js/plugins/select2/select2-bootstrap.min.css">
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

<!-- Main Container -->
<main id="main-container">
    <!-- Page Content -->

    <div class="content">
        <!-- Bootstrap Forms Validation -->
        <h2 class="content-heading">Add Book</h2>
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Book Lobby</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option">
                        <i class="si si-wrench"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <div class="row justify-content-center py-20">
                    <div class="col-xl-6">
                        <?php if($message !=''){
echo "<div class='col-md-12'>
<!-- Primary Alert -->
<div class='alert alert-danger alert-dismissable' role='alert'>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
    </button>
    <p class='mb-0'>Book Copy Number is already Existed Write again
        <a class='alert-link' href='javascript:void(0)'>link</a>!</p>
</div>
<!-- END Primary Alert -->
</div>
";
                        }?>
                        <form action="add_book_post" method="GET">
                            <div class="form-group row">
                                <label class="col-12" for="category_name">Book Name
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="book" autocomplete="off" required placeholder="Enter Book Name..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="category_book_number">Book Number/Copy Number
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="category_book_number" autocomplete="off" required placeholder="Enter Book Number/Copy Number..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="category">Category Name?</label>
                                <div class="col-12">
                                    <select class="form-control js-select2" id="category" name="category" size="1">

                                        <?php $sql = "SELECT * FROM `tblcategory` WHERE status='1'";
$run_sql=mysqli_query($conn,$sql);  
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
        $cat_id=$row['id'];
        $cat=$row['CategoryName'];
        echo " <option value='{$cat_id}'>{$cat}</option>";
    }
}
       ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="author">Author Name?</label>
                                <div class="col-lg-12">

                                    <select class="form-control js-select2" name="author" data-placeholder="Choose one..">


                                        <?php $sql = "SELECT * FROM `tblauthors`";
$run_sql=mysqli_query($conn,$sql);  
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
        $aut_id=$row['id'];
        $aut=$row['AuthorName'];
        echo " <option value='{$aut_id}'>{$aut}</option>";
    }
}
       ?>
                                    </select>
                                </div>
                            </div>




                            <div class="form-group row">
                                <label class="col-12" for="isbn">ISBMN NUMBER
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-12">
                                    <input type="number" class="form-control" name="isbn" autocomplete="off" required placeholder="Enter Category Name..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="price">Price
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="col-12">
                                    <input type="number" class="form-control" name="price" autocomplete="off" required placeholder="Enter Category Name..">
                                </div>
                            </div>
                            <label class="col-12" for="category_name">Book Status
                            <span class="text-danger">Book Status Will be Default 1</span>
                                </label>
                            
                            <div class="form-group row">
                                <div class="col-12">
                                    <button type="submit" name="create" class="btn btn-alt-primary">
                                        <i class="fa fa-arrow-right mr-5"></i> Create
                                    </button>

                                </div>
                            </div>

                        </form>


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


<script src="assets/js/plugins/select2/select2.full.min.js"></script>

<script>
    jQuery(function () {
        // Init page helpers (Table Tools helper)
        Codebase.helpers(['table-tools', 'select2']);
    });
</script>