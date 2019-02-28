<?php include "header.php" ?>
<?php 
if($R_E_I_D !=''){
$i=0;
$sql_count = "SELECT COUNT(id) as count FROM `notice_board` WHERE regdno='' AND branch='$b'";
    $run_sql_count=mysqli_query($conn,$sql_count);  
    if (mysqli_num_rows($run_sql_count) > 0) {
        while($row = mysqli_fetch_assoc($run_sql_count)) {
            $co = $row["count"];
        }
    }
    else{
        $co=0;
    }
 $sql_stud = "SELECT * FROM `notice_board` WHERE regdno='' AND branch='$b' ORDER BY id DESC";
    $run_sql_stud=mysqli_query($conn,$sql_stud);  
    if (mysqli_num_rows($run_sql_stud) > 0) {
        while($row = mysqli_fetch_assoc($run_sql_stud)) {
            $date = $row["created"];
            $postedname = $row["posted_name"];
            $subj = $row["subject"];
            $msg = $row["message"];
            $pri = $row["priority"];
            $mod = $row["moderate"];
            $pos = $row["posted_position"];
            $dat[$i]=$date;
            $po_name[$i]=$postedname;
            $su[$i]=$subj;
            $posi[$i]=$pos;
            $prio[$i]=$pri;
            $moder[$i]=$mod;
            $ms[$i]=$msg;
$i=$i+1;
        }
    }
    ?>
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                 <!-- Hero -->
                <div class="bg-image" style="background-image: url('assets/img/photos/photo26@2x.jpg');">
                    <div class="bg-black-op-75">
                        <div class="content content-top content-full text-center">
                            <div class="py-20">
                                <h1 class="h2 font-w700 text-white mb-10">Notice Board</h1>
                                <h2 class="h4 font-w400 text-white-op mb-0">Currently processing</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->
                <div class="content">
                    <nav class="breadcrumb bg-white push">
                        <a class="breadcrumb-item" href="notice_new">New Notice</a>
                        <span class="breadcrumb-item active">Notice Board</span>
                    </nav>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Notice Board</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <!-- Intro Category -->
                            <table class="table table-striped table-borderless table-vcenter">
                                <thead class="thead-default">
                                    <tr>
                                    <th colspan="1"></th>
                                        <th >Content</th>
                                        <th class="d-none d-md-table-cell text-center" style="width: 90px;">Priority</th>
                                        
                                        <th class="d-none d-md-table-cell" style="width: 180px;">Post Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php for($j=0;$j<$co;$j++){
                            ?>
                                    <tr>
                                        <td class="text-center" style="width: 65px;">
                                            <i ></i>
                                        </td>
                                        <td>
                                            <a class="font-size-h5 font-w600" href=""><?php echo $su[$j] ?></a>
                                            <div class="text-muted my-5"><?php echo $ms[$j]; ?></div>
                                            <div class="font-size-sm text-muted">
                                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)"><?php echo $moder[$j] ?></a></em>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)"><?php echo $prio[$j] ?></a>
                                        </td>
                                       
                                        <td class="d-none d-md-table-cell">
                                            <span class="font-size-sm">by <a href="be_pages_generic_profile.html"><?php echo $po_name[$j] ?></a><br>on <em><?php echo $dat[$j] ?></em></span>
                                        </td>
                                    </tr>
                                    
                                <?php } ?>     
                                </tbody>
                            </table>
                            <!-- END Intro Category -->

                           

                           
                        </div>
                    </div>
                    <!-- END Categories Block -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
           <?php include "footer.php" ?>
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
   <?php } ?>