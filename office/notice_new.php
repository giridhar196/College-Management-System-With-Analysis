<?php include "header.php"; ?>
<link rel="stylesheet" href="assets/js/plugins/select2/select2.min.css">
<link rel="stylesheet" href="assets/js/plugins/select2/select2-bootstrap.min.css">
<link rel="stylesheet" href="assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">
<link rel="stylesheet" href="assets/js/plugins/dropzonejs/min/dropzone.min.css">
<!-- Codebase framework -->
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<?php
 $msg="";
	if(isset($_POST["submit"])){
 $roll_number = $_POST["f-reg"];
 $roll_name=$_POST["f-name"];
 $branch=$_POST["f-branch"];
 $sem=$_POST["f-sem"];
 $subject=$_POST["ecom-product-description-short"];
 $message=$_POST["js-ckeditor"];
 $id_of_informer=$R_E_I_D;
 $name_poster=$userData['first_name'];
 $date = date('Y-m-d H:i:s');
 $sql = "INSERT INTO notice_board (
     regdno,
     name,
     branch,
     semister,
     posted_id,
     posted_name,
     subject,
     message,
     created
     )
    Values(
        '$roll_number',
        '$roll_name',
        '$branch',
        '$sem',
        '$id_of_informer',
        '$name_poster',
        '$subject',
        '$message',
        '$date'
        )";    
        if ($conn->query($sql) === TRUE) {
            $msg="Notice Published Sucessfully";
        } else {
            echo "Error : " . $conn->error;
        }
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
                            <?php echo $userData['first_name']; ?>
                        </h1>
                        <h2 class="h4 font-w400 text-white-op mb-0">In
                            <a class="text-primary-light link-effect" href="notice_new">Notice</a> Creation.</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->


        <!-- Breadcrumb -->
        <div class="bg-body-light border-b">
            <div class="content py-5 text-center">
                <nav class="breadcrumb bg-body-light mb-0">
                    <a class="breadcrumb-item" href="notice_display">Notice</a>
                    <a class="breadcrumb-item" href="notice_new">New Notice</a>
                    <span class="breadcrumb-item active"></span>
                </nav>
            </div>
        </div>
        <!-- END Breadcrumb -->

        <!-- Page Content -->
        <div class="content">


            <!-- Update Product -->
            <h2 class="content-heading">New Notice</h2>
            <div class="row gutters-tiny">
                <!-- Basic Info -->
                <div class="col-md-12">
                    <form action="" method="post">
                        <div class="block block-rounded block-themed">
                            <div class="block-header bg-gd-primary">
                                <h3 class="block-title">Basic Info</h3>
                                <div class="block-options">
                                    <button type="submit" name="submit" id="submit" class="btn btn-sm btn-alt-primary">
                                        <i class="fa fa-save mr-5"></i>Publish Notice
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">

                                <div class="form-group row">
                                    <div class="col-6">
                                        <p> If Identical Please Enter Roll Number</p>
                                        <label for="f-reg">Reg Number</label>
                                        <input type="text" autocomplete="off" class="form-control" id="f-reg" name="f-reg" placeholder="Registration Number..">
                                    </div>
                                    <div class="col-6">
                                        <p> If Identical Please Enter Name Number</p>
                                        <label for="f-name">Name</label>
                                        <input type="text" autocomplete="off" class="form-control" id="f-name" name="f-name" placeholder="Enter Student Name..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label for="f-branch">Branch?</label>


                                        <select class="form-control" id="f-branch" name="f-branch">
                                            <option value="cse">CSE</option>
                                            <option value="ece">ECE</option>
                                            <option value="eee">EEE</option>
                                            <option value="mech"> MECH</option>
                                            <option value="civil">CIVIL</option>
                                        </select>
                                    </div>

                                    <div class="col-6">
                                        <label for="f-sem">Semister?</label>
                                        <select class="form-control" id="f-sem" name="f-sem">
                                            <option value="all">All</option>
                                            <option value="1-1">1-1</option>
                                            <option value="1-2">1-2</option>
                                            <option value="2-1">2-1</option>
                                            <option value="2-2"> 2-2</option>
                                            <option value="3-1">3-1</option>
                                            <option value="3-2"> 3-2</option>
                                            <option value="4-1">4-1</option>
                                            <option value="4-2"> 4-2</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="ecom-product-description-short">Subject</label>
                                    <div class="col-12">
                                        <textarea class="form-control" required id="ecom-product-description-short" name="ecom-product-description-short" placeholder="Subject about the notice.."
                                            rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12">Description</label>
                                    <div class="col-12">
                                        <!-- CKEditor (js-ckeditor id is initialized in Codebase() -> uiHelperCkeditor()) -->
                                        <!-- For more info and examples you can check out http://ckeditor.com -->
                                        <textarea class="form-control" id="js-ckeditor" required name="js-ckeditor" placeholder="Main Description" rows="8"></textarea>
                                    </div>
                                    <label class="col-12">If You Want to upload Images or Document Go to Drive and upload paste the link below
                                        <a href="https://drive.google.com/drive/my-drive">Click Me</a>
                                    </label>
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