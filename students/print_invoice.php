<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

<?php
include_once 'dbconnect.php';
$msg='';
$name="Student Name";
$mail="st@email";
$addr="student '</br>' Address";
$phone="9100938562";
$count=0;
$crtd="date";
$ordid="Order Number";
$cate="Category";
$i=0;
if(isset($_POST['submit']))  
{  
    $ent_reg=$_POST["f-reg"];
    $ent_branch=$_POST["f-branch"];
    $ent_sem=$_POST["f-sem"];
$sql = "SELECT * FROM `st_db` WHERE branch='$ent_branch' AND regdno='$ent_reg'";
$run_sql=mysqli_query($conn,$sql);
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
    $name= $row["nameofstudent"];
    $addr = $row["address"];
    $phone = $row["cellno"];
    $mail = $row["email"];
   
    $sql = "SELECT * FROM `transaction` WHERE categoryfor='University' AND semister='1-1' OR semister='1-2' AND regdno='148x1a0532'";
    $run_sql=mysqli_query($conn,$sql);  
    if (mysqli_num_rows($run_sql) > 0) {
        $count+1;
        
        while($row = mysqli_fetch_assoc($run_sql)) {
            $cate = $row["categoryfor"];
            $ordid = $row["order_id"];
            $crtd = $row["created"];
            $amt= $row["amount"];
           
            $ar[$i]=$cate;
            $am[$i]=$amt;
            $i=$i+1;
             }
             
         }
         $msg="Thank you very much for your Fee Payment.";
        
}
$msg = "No Transaction Found in that Semister Please Check Semister ";
}
}
$msg= "Sample Invoice Genetrator";

?>


            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <!-- Invoice -->
                    
                    
                        <h2 class="content-heading d-print-none">
                        
                        Invoice
                    </h2>
                        <div class="block">
                        
                        <div class="block-header block-header-default">
                            <h3 class="block-title">#INV0015</h3>
                            <div class="block-options">
                                <!-- Print Page functionality is initialized in Codebase() -> uiHelperPrint() -->
                                <button type="button" class="btn-block-option" onclick="Codebase.helpers('print-page');">
                                    <i class="si si-printer"></i> Print Invoice
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <!-- Invoice Info -->
                            <div class="row my-20">
                                <!-- College Info -->
                                <div class="col-6">
                                    <p class="h3">KHIT</p>
                                    <address>
                                        Guntur<br>
                                        GUNTUR, CHOWLEDVARAM<br>
                                        ANDHARE, 522009 <br>
                                        kase@gmail.com
                                    </address>
                                </div>
                                <!-- END Company Info -->

                                <!-- Client Info -->
                                <div class="col-6 text-right">
                                    <p class="h3"><?php echo $name;?></p>
                                    <address>
                                        <?php echo $addr; ?><br>
                                       
                                            <?php echo $phone; ?></br>
                                        
                                        <?php echo $mail;?>
                                    </address>
                                </div>
                                <!-- END Client Info -->
                            </div>
                            <!-- END Invoice Info -->

                            <!-- Table -->
                            <div class="table-responsive push">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 60px;"></th>
                                            <th>Fee Type</th>
                                            
                                            
                                            <th class="text-right" style="width: 120px;">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php   $tot=0;
                                                for ($j=0;$j<$i;$j++){
                                                   
                                               ?>
                                        <tr>
                                            <td class="text-center"><?php echo $j;?></td>
                                          
                                            <td>
                                               
                                                <p class="font-w600 mb-5"><?php echo $ar[$j]; ?> </p>
                                          
                                               
                                                <div class="text-muted">Date<?php echo $crtd; ?></div>
                                            </br></td>
                                            <td class="text-right"><?php echo $am[$j] ?>
                                        </td>
                                        </tr>
                                            <?php
                                          
                                        $tot=$tot+$am[$j]; } ?>
                                       
                                        
                                        <tr class="table-warning">
                                            <td colspan="2" class="font-w700 text-uppercase text-right">Total Paid</td>
                                            <td class="font-w700 text-right"><?php echo $tot ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Table -->

                            <!-- Footer -->
                            <p class="text-muted text-center"><?php echo $msg;?></p>
                            <!-- END Footer -->
                        </div>
                    </div>
                    <!-- END Invoice -->
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
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/additional-methods.min.js"></script>
        <script>
            jQuery(function () {
                // Init page helpers (Select2 plugin)
                Codebase.helpers('select2');
            });
        </script>
        <script src="assets/js/pages/invoice_validation.js"></script>
    </body>
</html>
<script type=”text/javascript”>

function printDiv(block){

var printContents = document.getElementById(block).innerHTML;

var originalContents = document.body.innerHTML;

document.body.innerHTML = printContents;

window.print();

document.body.innerHTML = originalContents;

}

</script>