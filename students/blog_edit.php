<?php include "header.php"; ?>
<link rel="stylesheet" href="assets/js/plugins/select2/select2.min.css">
<link rel="stylesheet" href="assets/js/plugins/select2/select2-bootstrap.min.css">
<link rel="stylesheet" href="assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">
<link rel="stylesheet" href="assets/js/plugins/dropzonejs/min/dropzone.min.css">
<!-- Codebase framework -->
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<?php
if(isset($_GET['edit'])){
    $title_name="Edit Your Blog";
    $id=$_GET['edit'];
}
?>
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
                            <a class="text-primary-light link-effect" href="blog">Blog</a> Edit.</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->
        <!-- Breadcrumb -->
        <div class="bg-body-light border-b">
            <div class="content py-5 text-center">
                <nav class="breadcrumb bg-body-light mb-0">
                    <a class="breadcrumb-item" href="blog">e-Blog</a>
                    <a class="breadcrumb-item" href="edit_blog">Edit Blog</a>
                    <span class="breadcrumb-item active"></span>
                </nav>
            </div>
        </div>
        <!-- END Breadcrumb -->
        <!-- Page Content -->
        <div class="content">
            <!-- Update Product -->
            <h2 class="content-heading">
                <?php echo $title_name; echo " id"; echo $id; ?>
            </h2>
            <div class="row gutters-tiny">
                <!-- Basic Info -->
                <div class="col-md-12">

                    <?php 
                   
                    if(isset($_GET['edit'])){
                        $id=$_GET['edit'];
                        $sqlc = "SELECT * FROM `blog` WHERE id='$id'";
                        $run_sqla=mysqli_query($conn,$sqlc); 
                        if (mysqli_num_rows($run_sqla) > 0) {
                            while($row = mysqli_fetch_assoc($run_sqla)) { 
                                $sno = $row["id"];
                                $p_name = $row["title"];
                                $p_cat = $row["category"];  
                                $p_cost = $row["visible"];
                                $p_description = $row["description"];
                                $pd_post = $row["short_desciption"];
                                $p_quant = $row["dateofpost"];
                                $url = $row["header_link"];
                                $tags = $row["tags"];
                                
                    echo " <form action='blog_save' method='GET'>
                    <div class='block block-rounded block-themed'>
                        <div class='block-header bg-gd-primary'>
                            <h3 class='block-title'>Basic Info</h3>
                            <div class='block-options'>
                                <button type='submit' name='edit' value='$sno' id='edit' class='btn btn-sm btn-alt-primary'>
                                    <i class='fa fa-save mr-5'></i>Save
                                </button>
                            </div>
                        </div>
                        <div class='block-content block-content-full'>

                            <div class='form-group row'>
                                <label class='col-12' for='ecom-product-name'>Tile</label>
                                <div class='col-12'>
                                    <input type='text' class='form-control' id='ecom-product-name' value='$p_name' name='ecom-product-name' placeholder='Tile Name....'>
                                </div>
                            </div>
                            <div class='form-group row'>
                                <label class='col-12' for='example-select2'>Category</label>
                                <div class='col-12'>
                                    <select class='js-select2 form-control' id='example-select2' name='example-select2' style='width: 100%;' data-placeholder='Choose one..'>
                                        <option></option>
                                        <option value='$p_cat' selected>$p_cat</option>

                                        <option value='technology'>Technology</option>
                                        <option value='tutorials'>Tutorials</option>
                                        <option value='guides'>Guides</option>
                                        <option value='updates'>Updates</option>
                                        <option value='news'>News</option>
                                    </select>
                                </div>
                            </div>
                            <div class='form-group row'>
                           
                                <label class='col-12' for='example-select2'>Visible To</label>
                                <div class='col-12'>
                                    <select class='js-select2 form-control' id='example-visible' name='example-visible' style='width: 100%;' data-placeholder='Choose one..'>
                                        <option></option>
                                        <option selected value='$p_cost'> $p_cost
                                        </option>
                                        <option value='linked'>Linked</option>
                                        <option value='year'>Year</option>
                                        <option value='all'>All</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class='form-group row'>
                                <label class='col-12'>Description</label>
                                <div class='col-12'>
                                    <textarea class='form-control' id='js-ckeditor' name='js-ckeditor'  placeholder='Main Description' rows='8'>$p_description</textarea>
                                </div>
                            </div>
                            <div class='form-group row'>
                                <label class='col-12' for='ecom-product-description-short'>Short Description</label>
                                <div class='col-12'>
                                    <textarea class='form-control' id='ecom-product-description-short' name='ecom-product-description-short'  placeholder='Description visible on preview..'
                                        rows='6'>$pd_post</textarea>
                                </div>
                            </div>
                            <div class='form-group row'>
                                <label class='col-12' for='ecom-product-stock'>Header Image Link</label>
                                <div class='col-sm-12'>
                                    <div class='input-group'>
                                        <span class='input-group-addon'>
                                            <i class='fa fa-fw fa-unlink'></i>
                                        </span>
                                        <input type='url' class='form-control' id='ecom-product-stock' name='ecom-product-stock' value='$url' placeholder='http://www.googleimage.com/image.php'>
                                    </div>
                                </div>
                            </div>
                            <div class='form-group row'>
                                <label class='col-12' for='ecom-product-meta-tags'>Tags</label>
                                <div class='col-12'>
                                    <input type='text' class='js-tags-input form-control' data-height='34px' id='ecom-product-meta-tags' value='$tags' name='ecom-product-meta-tags'
                                        placeholder='Meta Tags'>
                                    <div class='form-text text-muted font-size-sm text-right'>Choose the best ones!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>";
                 }
                }
            }
                ?>

                </div>
                <!-- END Basic Info -->
            </div>
            <!-- END Update Product -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <?php include "footer.php"; ?>
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

    <!-- Page JS Code -->
    <script>
        jQuery(function () {
            // Init page helpers (CKEditor + BS Maxlength + Select + Tags Inputs plugins)
            Codebase.helpers(['ckeditor', 'maxlength', 'select2', 'tags-inputs']);
        });
    </script>