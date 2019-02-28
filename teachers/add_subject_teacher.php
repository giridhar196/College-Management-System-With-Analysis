<?php include "header.php";
$year=date("Y");?>
<?php
 include "dbconnect.php";
if(isset($_POST['submit'])){
   
     $branch_p=$_POST['branch'];
     $subject_name=$_POST['subject_name'];
     $teacher=$_POST['teacher'];
     $section=$_POST['section'];
     $semister_p=$_POST['semister'];
    $sql_teacher = "SELECT * FROM `teachers` WHERE regdno='$teacher'";
     $run_sql_teachers=mysqli_query($conn,$sql_teacher);  
     if (mysqli_num_rows($run_sql_teachers) > 0) {
         while($row = mysqli_fetch_assoc($run_sql_teachers)) {
             $name_of_teacher=$row['nameofteacher'];
         }
     }
            $query = "INSERT INTO t_s_sem_b_section SET year='$year',semister='$semister_p',section='$section',branch = '$branch_p',teacher_name='$name_of_teacher',teacher_id='$teacher',subject='$subject_name'";
             $run_sel_us=mysqli_query($conn,$query);
    }
?>



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

            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Subject To Teacher</h3>
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
                            <form action="" method="POST">
                                <div class="form-group row">
                                    <label class="col-12" for="category_name">Year
                                        <span style="color:red;">*</span>
                                    </label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="year" disabled value="<?php echo $year; ?>" placeholder="Year..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="semister">Semister
                                        <span style="color:red;">*</span>
                                    </label>
                                    <div class="col-lg-12">

                                        <select class="form-control js-select2" name="semister" data-placeholder="Choose one..">
                                            <option value="1-1">1-1</option>
                                            <option value="1-2">1-2</option>
                                            <option value="2-1">2-1</option>
                                            <option value="2-2">2-2</option>
                                            <option value="3-1">3-1</option>
                                            <option value="3-2">3-2</option>
                                            <option value="4-1">4-1</option>
                                            <option value="4-2">4-2</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="section">Section
                                        <span style="color:red;">*</span>
                                    </label>
                                    <div class="col-lg-12">

                                        <select class="form-control js-select2" name="section" data-placeholder="Choose one..">
                                            <option value="a">A</option>
                                            <option value="b">B</option>
                                            <option value="c">C</option>
                                            <option value="d">D</option>
                                        </select>
                                    </div>



                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="semister">Regulation
                                        <span style="color:red;"></span>
                                    </label>
                                    <div class="col-lg-12">

                                        <input type="text" class="form-control" name="regulation"  placeholder="Enter Semister...">
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="subject_name">Subject Name?</label>
                                    <div class="col-12">
                                        <select class="form-control js-select2" id="category" name="subject_name" size="1">

                                            <?php $sql = "SELECT * FROM `subject_name`";
$run_sql=mysqli_query($conn,$sql);  
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
        $cat_id=$row['id'];
        $cat=$row['subject_name'];
        echo " <option value='{$cat}'>{$cat}</option>";
    }
}
       ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="teacher_name">Teacher Name?</label>
                                    <div class="col-lg-12">

                                        <select class="form-control js-select2" name="teacher" data-placeholder="Choose one..">


                                            <?php $sql = "SELECT * FROM `teachers`";
$run_sql=mysqli_query($conn,$sql);  
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
        $aut_id=$row['regdno'];
        $aut=$row['nameofteacher'];
        echo " <option value='{$aut_id}'>{$aut}</option>";
    }
}
       ?>
                                        </select>
                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label class="col-12" for="branch">Branch
                                        <span style="color:red;">*</span>
                                    </label>
                                    <div class="col-lg-12">

                                        <select class="form-control js-select2" name="branch" data-placeholder="Choose one..">
                                            <option value="cse">CSE</option>
                                            <option value="ece">ECE</option>
                                            <option value="eee">EEE</option>
                                            <option value="mech">MECH</option>
                                            <option value="civil">CIVIL</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" name="submit" class="btn btn-alt-primary">
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