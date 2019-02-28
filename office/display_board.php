<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<?php include_once 'header.php'; ?>
<?php 
$sql_count = "SELECT COUNT(id) as count FROM `notice_board` LIMIT 5";
    $run_sql_count=mysqli_query($conn,$sql_count);  
    if (mysqli_num_rows($run_sql_count) > 0) {
        while($row = mysqli_fetch_assoc($run_sql_count)) {
            $co = $row["count"];
        }
    }
    else{
        $co=0;
    }
 $sql_stud = "SELECT * FROM `notice_board`";
    $run_sql_stud=mysqli_query($conn,$sql_stud);  
    if (mysqli_num_rows($run_sql_stud) > 0) {
        while($row = mysqli_fetch_assoc($run_sql_stud)) {
            $date = $row["created"];
            $postedname = $row["posted_name"];
            $subj = $row["subject"];
            $msg = $row["message"];
            $dat[]=$date;
            $po_name[]=$postedname;
            $su[]=$subj;
            $ms[]=$msg;

        }
    }
    ?>
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">College Notice Board</h3>
                        </div>
                        <div class="block-content">
                        <?php for($i=0;$i<$co;$i++){
                            ?>
                       
                            <div class="block-header block-header-default">
                            <h3 class="block-title text-uppercase"><?php echo $su[$i] ?></h3>  
                            <div class="block-options">
                            <span class="badge badge-info"><?php echo $dat[$i] ?></span>
                            </div>
                            </div>
                            <div class="block-content">
                        <strong class="font-w700 text-black text-uppercase mb-0">Posted By: <?php echo $po_name[$i] ?></strong>
                            <p><?php echo $ms[$i] ?></p>
                            </div>
                            <?php  } ?>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

           <?php include "footer.php"?>
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
           
    </body>
</html>
