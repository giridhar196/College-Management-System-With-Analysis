<?php
include "header.php";
 $pre='P';
$co=0;


/**
 * 
 * @var mixed
 */
$sqlc = "SELECT COUNT(id) as coun FROM `students`";
$run_sqla=mysqli_query($conn,$sqlc);  
if (mysqli_num_rows($run_sqla) > 0) {
    while($row = mysqli_fetch_assoc($run_sqla)) {
        /**
         * 
         * @var mixed
         */
        $co = $row["coun"];
    }
}

$i=0;
 $sql = "SELECT * FROM `students`";
 $run_sql=mysqli_query($conn,$sql);  
 if (mysqli_num_rows($run_sql) > 0) {
     while($row = mysqli_fetch_assoc($run_sql)) {
        $sno = $row["id"];
        $regdno = $row["registration_number"];
       

        $snoa[$i]=$sno;
        
        $regdnoa[$i]=$regdno;
        
        $i=$i+1;
     }
    }

?>
    <?php
 /**
  * 
  * @var mixed
  */
 if(isset($_POST['fetch']))  {
     $class=$_POST['h-class'];
     $branch=$_POST['h-branch'];
     $section=$_POST['h-section'];
     $semister=$_POST['h-semister'];
     $day=$_POST['f-day'];
     $tim =$_POST['f_p_time'];
     $teacher =$_POST['f-d_tech'];
     $subject =$_POST['f-sub'];
    
 }
?>
       
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="block-content">
                 <!-- Checkable Table (.js-table-checkable class is initialized in Codebase() -> uiHelperTableToolsCheckable()) -->
                
                 <div class="block">
                     <div class="block-header block-header-default">
                         <h3 class="block-title">
                             <code>Attandance is For
                            <?php echo $class; echo $semister; echo $section; echo $subject; echo $tim;  ?></code>

                         </h3>
                     </div>
                     <div class="block-content">
                         <!-- If you put a checkbox in thead section, it will automatically toggle all tbody section checkboxes -->
                         <form  action="attandance_post" method="post" >
                         <input type="hidden" value="<?php echo $class ?>" name="class_name" id="class_name" >
                            <input type="hidden" value="<?php echo $semister ?>" name="semister_name" id="semister_name" >
                            <input type="hidden" value="<?php echo $section ?>" name="section_name" id="section_name" >
                            <input type="hidden" value="<?php echo $tim ?>" name="subject_time" id="subject_time" >
                            <input type="hidden" value="<?php echo $day ?>" name="day_name" id="day_name" >
                            <input type="hidden" value="<?php echo $teacher ?>" name="teacher_name" id="teacher_name" >
                            <input type="hidden" value="<?php echo $branch ?>" name="branch_name" id="branch_name" >
                            <input type="hidden" value="<?php echo $co ?>" name="countstudents" id="countstudents" >
                            <input type="hidden" value="<?php echo $subject ?>" name="subject_name" id="subject_name" >
                            
                            
                         <table class="js-table-checkable table table-hover">
                             <thead>
                                 <tr>
                                     <th class="text-center" style="width: 70px;">
                                         <label class="css-control css-control-primary css-checkbox py-0">
                                             <input type="checkbox" class="css-control-input" id="check-all" name="check-all">
                                             <span class="css-control-indicator"></span>
                                         </label>
                                     </th>
                                     <th>Name</th>
                                     
                                     <th class="d-none d-sm-table-cell">Date</th>
                               </tr>
                             </thead>
                             <tbody>
                                 <?php  $cc=0;
                                 for($cc=0;$cc<$co;$cc++){
                                     ?>
                                
                                
                                 <tr>
                                     <td class="text-center">
                                         <label class="css-control css-control-primary css-checkbox">
                                         <input type="hidden" name="row_1[]" id="row_1" value="a">  
                                         <input type="checkbox" class="css-control-input" id="row_1" value="p" onclick="sel()" name="row_1[]">
                                          
                                             <span class="css-control-indicator"></span>
                                         </label>
                                     </td>
                                     <td>
                                         <p class="font-w600 mb-10"><?php echo $regdnoa[$cc] ?> </p>
                                         <input type="hidden" value="<?php echo $regdnoa[$cc] ?>" name="roll[]" id="roll" >
                                         <p class="text-muted mb-0">Customer details and further information</p>
                                     </td>
                                     
                                     <td class="d-none d-sm-table-cell">
                                         <em class="text-muted">November 9, 2017 13:17</em>
                                     </td>
                                 </tr>
                               <?php  } ?>
                             </tbody>
                         </table>
                         <input type="submit" name="present" id="present" value="submit" >
                                 </form>
                     </div>
                 </div>
                 <!-- END Checkable Table -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->



            <?php include "footer.php" ?>
            </div>
            <!-- END Page Container -->
            <script>
                function sel() {
                    alert("status changed");


                }
            </script>



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
            <script src="assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
            <script src="assets/js/plugins/sweetalert2/es6-promise.auto.min.js"></script>
            <script src="assets/js/plugins/sweetalert2/sweetalert2.min.js"></script>

            <!-- Page JS Code -->
            <script src="assets/js/pages/be_ui_activity.js"></script>
            <script>
                jQuery(function () {
                    // Init page helpers (BS Notify Plugin)
                    Codebase.helpers('notify');
                });
            </script>
            <script>
                jQuery(function () {
                    // Init page helpers (Table Tools helper)
                    Codebase.helpers('table-tools');
                });
            </script>

            </body>

            </html>