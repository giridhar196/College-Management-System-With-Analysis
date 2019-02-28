<?php include "header.php";?>
<link rel="stylesheet" href="assets/js/plugins/select2/select2.min.css">
<link rel="stylesheet" href="assets/js/plugins/select2/select2-bootstrap.min.css">
<link rel="stylesheet" href="assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">
<link rel="stylesheet" href="assets/js/plugins/dropzonejs/min/dropzone.min.css">
<?php 
$err='';
$suc='';
$p_name='';
$p_cat='';
$p_cost='';
$p_des='';
$p_sem='';
$p_shot='';
$p_quant='1';
$icon='';
$seno='';
$btname="save";
$selected='';
if(isset($_POST['edit'])){
    $seno=$_POST['edit'];
    
   $btname="edita";
   $selected="selected";
   $sqlc = "SELECT * FROM `used_store` WHERE id='$seno'";
   $run_sqla=mysqli_query($conn,$sqlc);  
   while($row = mysqli_fetch_assoc($run_sqla)) {
    $p_name = $row["product_name"];
    $p_cat = $row["category"];  
    $p_cost = $row["price"];
   $p_des =$row['description'];
   $p_sem = $row["semister"];
   $p_shot= $row['short_desciption'];
    $p_quant = $row["quantity"];
   }


}
if(isset($_POST['edita'])){
    $sssno=$_POST['senoa'];
    $p_na=$_POST['ecom-product-name'];
    $p_cat=$_POST['example-select2'];
    $p_des=$_POST['js-ckeditor'];
    $p_shot=$_POST['ecom-product-description-short'];
    $p_stock=$_POST['ecom-product-stock'];
    $p_cost=$_POST['ecom-product-price'];
$p_sem=$_POST['semister'];
if($p_cat=="Text_Book_Material"){
    $icon="fa fa-book";
}
else{
    $icon="si si-book-open";
}
$query = "UPDATE used_store SET icon='$icon',auth = '".$userData['oauth_uid']."', nameofstudent = '".$userData['first_name']."',  email = '".$userData['email']."',  dateofpost = '".date("Y-m-d")."', created = '".date("Y-m-d H:i:s")."',regid='$R_E_I_D',product_name='$p_na',category='$p_cat',description='$p_des',regulation='R-13',short_desciption='$p_shot',branch='$B_R_A_N_C_H',semister='$p_sem',type_condition='used',price='$p_cost',quantity='$p_stock',permission='0' WHERE id='$sssno'";
    $run_sel_us=mysqli_query($conn,$query);
   $suc="sucess";
  
}



if(isset($_POST['save'])){

    $p_na=$_POST['ecom-product-name'];
    $p_cat=$_POST['example-select2'];
    $p_des=$_POST['js-ckeditor'];
    $p_shot=$_POST['ecom-product-description-short'];
    $p_stock=$_POST['ecom-product-stock'];
    $p_cost=$_POST['ecom-product-price'];
$p_sem=$_POST['semister'];
if($p_cat=="Text_Book_Material"){
    $icon="fa fa-book";
}
else{
    $icon="si si-book-open";
}

$sqlc = "SELECT * FROM `used_store` WHERE product_name='$p_na' AND category='$p_cat' AND auth='".$userData['oauth_uid']."' AND semister='$p_sem'";
    $run_sqla=mysqli_query($conn,$sqlc);  
    if (mysqli_num_rows($run_sqla) > 0) {
        $err="product";
    }else{
        echo "product came to save";
    $query = "INSERT INTO used_store SET icon='$icon',auth = '".$userData['oauth_uid']."', nameofstudent = '".$userData['first_name']."',  email = '".$userData['email']."',  dateofpost = '".date("Y-m-d")."', created = '".date("Y-m-d H:i:s")."',regid='$R_E_I_D',product_name='$p_na',category='$p_cat',description='$p_des',regulation='R-13',short_desciption='$p_shot',branch='$B_R_A_N_C_H',semister='$p_sem',type_condition='used',price='$p_cost',quantity='$p_stock',permission='0'";
    $run_sel_us=mysqli_query($conn,$query);
   
}
}
?>

<!-- Codebase framework -->
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

<!-- Main Container -->
<main id="main-container">
    <!-- Hero -->
    <div class="bg-image" style="background-image: url('assets/img/photos/photo8@2x.jpg');">
        <div class="bg-black-op-75">
            <div class="content content-top content-full text-center">
                <div class="py-20">
                    <h1 class="h2 font-w700 text-white mb-10">
                        <?php echo $userData['first_name'] ?>
                    </h1>
                    <h2 class="h4 font-w400 text-white-op mb-0">In
                        <a class="text-primary-light link-effect" href="be_pages_ecom_products.html">Products</a> category.</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Breadcrumb -->
    <div class="bg-body-light border-b">
        <div class="content py-5 text-center">
            <nav class="breadcrumb bg-body-light mb-0">
                <a class="breadcrumb-item" href="be_pages_ecom_dashboard.html">e-Commerce</a>
                <a class="breadcrumb-item" href="be_pages_ecom_products.html">Products</a>
                <span class="breadcrumb-item active">
                    <?php echo $userData['first_name'] ?> Self Products</span>
            </nav>
        </div>
    </div>
    <!-- END Breadcrumb -->

    <!-- Page Content -->
    <div class="content">


        <!-- Update Product -->
        <h2 class="content-heading"> Product </h2>
        <?php if($suc != ''){
            ?>
        <div class="col-md-12">
            <!-- Success Alert -->
            <div class="alert alert-success alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="alert-heading font-size-h4 font-w400">Success</h3>
                <p class="mb-0">This is a successful message That Your product has been updated Click
                    <a class="alert-link" href="product">link</a>!</p>
            </div>
            <!-- END Success Alert -->
        </div>
        <?php } ?>
        <?php if($err != ''){
            ?>

        <div class="col-md-12">
            <!-- Danger Alert -->
            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="alert-heading font-size-h4 font-w400">Error</h3>
                <p class="mb-0">Product is already Available on Your Name
                    <a class="alert-link" href="javascript:void(0)">link</a>!</p>
            </div>
            <!-- END Danger Alert -->
        </div>
        <?php } ?>
        <?php if($btname=='edita'){
    ?>
        <div class="col-md-12">
            <!-- Warning Alert -->
            <div class="alert alert-warning alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="alert-heading font-size-h4 font-w400">Warning</h3>
                <p class="mb-0">This is a warning message You are in editing page
                    <a class="alert-link" href="javascript:void(0)">link</a>!</p>
            </div>
            <!-- END Warning Alert -->
        </div>
        <?php
}    ?>
            <div class="row gutters-tiny">
                <!-- Basic Info -->
                <div class="col-md-12">
                    <form class="js-validation-bootstrap" action="" method="post">
                        <div class="block block-rounded block-themed">
                            <div class="block-header bg-gd-primary">
                                <h3 class="block-title">Basic Info</h3>
                                <div class="block-options">

                                    <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-alt-primary">
                                        <i class="fa fa-save mr-5"></i>Save
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <input type="hidden" name="senoa" id="senoa" value="<?php echo $seno ?>">
                                <div class="form-group row">
                                    <label class="col-12" for="ecom-product-name">Name</label>
                                    <div class="col-12">
                                        <input type="text" value="<?php echo $p_name ?>" class="form-control" id="ecom-product-name" name="ecom-product-name" placeholder="Product Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="example-select2">Category</label>
                                    <div class="col-12">
                                        <!-- Select2 (.js-select2 class is initialized in Codebase() -> uiHelperSelect2()) -->
                                        <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                        <select class="js-select2 form-control" id="example-select2" name="example-select2" style="width: 100%;" data-placeholder="Choose one..">
                                            <option></option>
                                            <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                            <option value="Text_Book_Material">Text Book Material</option>
                                            <option value="Normal_Material">Normal Material</option>
                                            <option <?php echo $selected ?> value="
                                                <?php echo $p_cat ?>">
                                                <?php echo $p_cat ?>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="example-select2">Semister</label>
                                    <div class="col-12">
                                        <!-- Select2 (.js-select2 class is initialized in Codebase() -> uiHelperSelect2()) -->
                                        <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                        <select class="js-select2 form-control" id="semister" name="semister" style="width: 100%;" data-placeholder="Choose one..">
                                            <option></option>
                                            <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                            <option value="1-1">1-1</option>
                                            <option value="1-2">1-2</option>
                                            <option value="2-1">2-1</option>
                                            <option value="2-2">2-2</option>
                                            <option value="3-1">3-1</option>
                                            <option value="3-2">3-2</option>
                                            <option value="4-1">4-1</option>
                                            <option value="4-2">4-2</option>
                                            <option <?php echo $selected ?> value="
                                                <?php echo $p_sem ?>">
                                                <?php echo $p_sem ?>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12">Description</label>
                                    <div class="col-12">
                                        <!-- CKEditor (js-ckeditor id is initialized in Codebase() -> uiHelperCkeditor()) -->
                                        <!-- For more info and examples you can check out http://ckeditor.com -->
                                        <textarea class="form-control" id="js-ckeditor" name="js-ckeditor" placeholder="Main Description" rows="8">
                                            <?php echo $p_des ?> </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="ecom-product-description-short">Short Description</label>
                                    <div class="col-12">
                                        <textarea class="form-control" id="ecom-product-description-short" name="ecom-product-description-short" placeholder="Description visible on preview.."
                                            rows="6">
                                            <?php echo $p_shot ?>
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="ecom-product-stock">Stock</label>
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw fa-archive"></i>
                                            </span>
                                            <input type="number" value="<?php echo $p_quant ?>" class="form-control" id="ecom-product-stock" name="ecom-product-stock"
                                                placeholder="0" value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="ecom-product-price">Price</label>
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw fa-usd"></i>
                                            </span>
                                            <input type="number" value="<?php echo $p_cost ?>" class="form-control" id="ecom-product-price" name="ecom-product-price"
                                                placeholder="Price in India..">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="<?php echo $btname ?>" id="<?php echo $btname ?>" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- END Basic Info -->


            </div>
            <!-- END Update Product -->
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->

<!-- Footer -->
<?php include "footer.php"?>
<!-- END Footer -->
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

<!-- Page JS Plugins -->
<script src="assets/js/plugins/ckeditor/ckeditor.js"></script>
<script src="assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="assets/js/plugins/select2/select2.full.min.js"></script>
<script src="assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
<script src="assets/js/plugins/dropzonejs/min/dropzone.min.js"></script>
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/js/plugins/jquery-validation/additional-methods.min.js"></script>
<script src="assets/js/pages/product_store_validation.js"></script>
<!-- Page JS Code -->
<script>
    jQuery(function () {
        // Init page helpers (CKEditor + BS Maxlength + Select + Tags Inputs plugins)
        Codebase.helpers(['ckeditor', 'maxlength', 'select2', 'tags-inputs']);
    });
</script>
<!-- <script src="assets/js/pages/product_store_validation.js"></script> -->
</body>

</html>