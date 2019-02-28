<?php include "header.php"; 

$buttonstate="disabled";
$teacher_id=$_GET['id'];

$sqlc = "SELECT * FROM `review_teacher` WHERE teacher_id='$teacher_id'";
$run_sqla=mysqli_query($conn,$sqlc);  
if (mysqli_num_rows($run_sqla) > 0) {
    while($row = mysqli_fetch_assoc($run_sqla)) {
        $review_teacher = $row["review"];
        echo "<input type='hidden' id='review_hiddden' value= $review_teacher>";
       
    }
}

?>
<script src="assets/js/plugins/ajax/jquery.min.js"></script>

<!-- Main Container -->
<main id="main-container">
    <!-- Page Content -->
    <div class="content">
        <h2 class="content-heading">
            <button type="button" class="btn btn-sm btn-rounded btn-primary d-md-none float-right ml-5" data-toggle="class-toggle" data-target=".js-inbox-nav"
                data-class="d-none d-md-block">Teachers List</button>
            Teachers Review Analysis </h2>
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
                                <a href='analysis_review?id={$row['teacher_id']}'>
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
                                                <h3 class="block-title">Analysis Review</h3>
                                                <div class="block-options">
                                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                                        <i class="si si-refresh"></i>
                                                    </button>
                                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                                </div>
                                            </div>
                                            <div class="block-content">

                                                <input type="hidden" name="teacher_id" value="<?php echo $teacher_id; ?>">
                                                <div class="form-group row">
                                                    <label class="col-12" for="contact1-msg">Review Analysis</label>
                                                    <div class="col-12">
                                                        <textarea class="form-control" id="review" name="review" rows="8" placeholder="Write your Review..">
                                                            <?php echo $review_teacher; ?>
                                                        </textarea>

                                                    </div>
                                                    </br>

                                                </div>
                                                <div class="form-group row">

                                                </div>

                                            </div>
                                        </div>
                                        <!-- END Bootstrap Contact -->
                                    </div>

                            </tbody>
                        </table>
                       

                        </div>
                    </div>
                    
                    <!-- END Message List -->
                </div>
                <script>
                            var data_before = $.trim($("#review_hiddden").val());

                            var form = new FormData();
                            form.append("text", data_before);
                            form.append("api_key", "gPw3BuhG7HKkKUj9aKKlDi6yjWLoBfvwGcHklczO2kY");

                            var settings = {
                                "async": true,
                                "crossDomain": true,
                                "url": "http://apis.paralleldots.com/v3/emotion",
                                "method": "POST",
                                "headers": {},
                                "processData": false,
                                "contentType": false,
                                "mimeType": "multipart/form-data",
                                "data": form
                            }
                            $.ajax(settings).done(function (response) {
                                console.log(response);
                                document.getElementById("output").innerHTML = response;
                            });
                        </script>
                        <!-- END Messages -->


                        <h3 class="h4">Sentimental Analysis Result For Teacher Review</h3>
                        <div class="pull-r-l">
                            <div class="content content-full bg-body-light mb-50">
                                <p class="text-primary-dark" id="output">
                                    <div></div>
                                </p>
                            </div>
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