<?php include "header.php"; 

$buttonstate="disabled";
$teacher_id=$_GET['id'];
if($teacher_id !=''){
    $buttonstate='';
}
$date_review = date('d-m-Y H:i:s');
if(isset($_GET['submit']))
{
$teacher_id=$_GET['id'];
$review=$_GET['review'];

    $query = "INSERT INTO review_teacher SET teacher_id='$teacher_id',review='$review',created='$date_review'";
    $run_sel_us=mysqli_query($conn,$query);
}

?>

<!-- Main Container -->
<main id="main-container">
    <!-- Page Content -->
    <div class="content">
        <h2 class="content-heading">
            <button type="button" class="btn btn-sm btn-rounded btn-primary d-md-none float-right ml-5" data-toggle="class-toggle" data-target=".js-inbox-nav"
                data-class="d-none d-md-block">Teachers List</button>
            Teachers Review Panel
        </h2>
        <div class="row">
            <div class="col-md-5 col-xl-3">
                <!-- Collapsible Inbox Navigation -->
                <div class="js-inbox-nav d-none d-md-block">
                    <div class="block">


                        <ul class="nav-users">
                        <?php
                        $sql = "SELECT * FROM t_s_sem_b_section WHERE branch='$B_R_A_N_C_H'";   
                        $run_sql=mysqli_query($conn,$sql);
                        if (mysqli_num_rows($run_sql) > 0) {
                            while($row = mysqli_fetch_assoc($run_sql)) {
                              
                        echo "
                        <li>
                                <a href='review_teacher?id={$row['teacher_id']}'>
                                    <img class='img-avatar' src='assets/img/avatars/avatar8.jpg' alt=''>
                                    <i class='fa fa-circle text-success'></i> {$row['teacher_name']}
                                    <div class='font-w400 font-size-xs text-muted'>
                                        <i class='fa fa-location-arrow'></i>  Id: {$row['teacher_id']}
                                        <i class='fa fa-book'></i>  Subject: {$row['subject']}</div>
                                </a>
                            </li>";
                            }
                        }

                        ?>
                            
                        </ul>

                    </div>
                </div>
                <!-- END Collapsible Inbox Navigation -->


            </div>
            <div class="col-md-7 col-xl-9">
                <!-- Message List -->
                <div class="block">
                    <div class="block-header block-header-default">

                    </div>
                    <div class="block-content">


                        <!-- Messages -->
                        <!-- Checkable Table (.js-table-checkable class is initialized in Codebase() -> uiHelperTableToolsCheckable()) -->
                        <table class="js-table-checkable table table-hover table-vcenter">
                            <tbody>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <!-- Bootstrap Contact -->
                                        <div class="block block-themed">
                                            <div class="block-header bg-info">
                                                <h3 class="block-title">Write Review</h3>
                                                <div class="block-options">
                                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                                        <i class="si si-refresh"></i>
                                                    </button>
                                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                                </div>
                                            </div>
                                            <div class="block-content">
                                                <form action="" method="GET" >
                                                   <input type="hidden" name="id" value="<?php echo $teacher_id; ?>">
                                                    <div class="form-group row">
                                                        <label class="col-12" for="contact1-msg">Review</label>
                                                        <div class="col-12">
                                                            <textarea class="form-control" required id="review" name="review" rows="8" placeholder="Write your Review.."></textarea>
                                                            
                                                        </div>
                                                        </br>
                                                        <div class="col-12">
                                                        </br>
                                                            <button type="submit" name="submit" <?php echo $buttonstate; ?> class="btn btn-alt-info">
                                                                <i class="fa fa-send mr-5"></i> Post Review
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                       
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- END Bootstrap Contact -->
                                    </div>

                            </tbody>
                        </table>
                        
                        <!-- END Messages -->
                        </div>
                    </div>
                    <!-- END Message List -->
                </div>
            </div>
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

<!-- Page JS Code -->
<script>
    jQuery(function () {
        // Init page helpers (Table Tools helper)
        Codebase.helpers('table-tools');
    });
</script>
</body>

</html>