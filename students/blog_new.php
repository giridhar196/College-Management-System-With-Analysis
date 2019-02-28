<?php include "header.php"; ?>
<link rel="stylesheet" href="assets/js/plugins/select2/select2.min.css">
<link rel="stylesheet" href="assets/js/plugins/select2/select2-bootstrap.min.css">
<link rel="stylesheet" href="assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">
<link rel="stylesheet" href="assets/js/plugins/dropzonejs/min/dropzone.min.css">
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
                        <a class="text-primary-light link-effect" href="#">Blog</a> Creation.</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Breadcrumb -->
    <div class="bg-body-light border-b">
        <div class="content py-5 text-center">
            <nav class="breadcrumb bg-body-light mb-0">
                <a class="breadcrumb-item" href="#">e-Blog</a>
                <a class="breadcrumb-item" href="#">New Blog</a>
                <span class="breadcrumb-item active"></span>
            </nav>
        </div>
    </div>
    <!-- END Breadcrumb -->

    <!-- Page Content -->
    <div class="content">


        <!-- Update Product -->
        <h2 class="content-heading">Write New Post</h2>
        <div class="row gutters-tiny">
            <!-- Basic Info -->
            <div class="col-md-12">
                <form action="blog_save" method="post">
                    <div class="block block-rounded block-themed">
                        <div class="block-header bg-gd-primary">
                            <h3 class="block-title">Basic Info</h3>
                            <div class="block-options">
                                <button type="submit" name="save" id="save" class="btn btn-sm btn-alt-primary">
                                    <i class="fa fa-save mr-5"></i>Save
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full">

                            <div class="form-group row">
                                <label class="col-12" for="ecom-product-name">Tile</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="ecom-product-name" name="ecom-product-name" placeholder="Tile Name....">
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
                                        <option value="technology" selected>Technology</option>
                                        <option value="tutorials">Tutorials</option>
                                        <option value="guides">Guides</option>
                                        <option value="updates">Updates</option>
                                        <option value="news">News</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="example-select2">Visible To</label>
                                <div class="col-12">
                                    <!-- Select2 (.js-select2 class is initialized in Codebase() -> uiHelperSelect2()) -->
                                    <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                    <select class="js-select2 form-control" id="example-visible" name="example-visible" style="width: 100%;" data-placeholder="Choose one..">
                                        <option></option>
                                        <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        <option value="<?php echo $b; ?>">Only For
                                            <?php echo $b; ?>
                                        </option>
                                        <option value="all" selected>All</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Description</label>
                                <div class="col-12">
                                    <!-- CKEditor (js-ckeditor id is initialized in Codebase() -> uiHelperCkeditor()) -->
                                    <!-- For more info and examples you can check out http://ckeditor.com -->
                                    <textarea class="form-control" id="js-ckeditor" name="js-ckeditor" placeholder="Main Description" rows="8"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="ecom-product-description-short">Short Description</label>
                                <div class="col-12">
                                    <textarea class="form-control" id="ecom-product-description-short" name="ecom-product-description-short" placeholder="Description visible on preview.."
                                        rows="6"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="ecom-product-stock">Header Image Link</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-fw fa-unlink"></i>
                                        </span>
                                        <input type="url" class="form-control" id="ecom-product-stock" name="ecom-product-stock" placeholder="http://www.googleimage.com/image.php">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="ecom-product-meta-tags">Tags</label>
                                <div class="col-12">
                                    <!-- jQuery Tags Input (.js-tags-input class is initialized in Codebase() -> uiHelperTagsInput()) -->
                                    <!-- For more info and examples you can check out https://github.com/xoxco/jQuery-Tags-Input -->
                                    <input type="text" class="js-tags-input form-control" data-height="34px" id="ecom-product-meta-tags" name="ecom-product-meta-tags"
                                        placeholder="Meta Tags">
                                    <div class="form-text text-muted font-size-sm text-right">Choose the best ones!</div>
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
</body>

</html>