<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<?php include_once 'header.php'; ?>

<?php

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
$u_f=0;
$type0='universityfee';
$type1='busfee';
$type2='tutionfee';
$type3='admissionfee';
$type4='buildingfund';
$countn=0;
$tot_uf=0;
$tot_bf=0;
$tot_bulf=0;
$tot_af=0;
$tot_tf=0;
$uni_fee=0;
$bu_fu=0;
$tu_fee=0;
$ad_fee=0;
if(isset($_POST["submit"])){

   
    $ye_ar = $_POST["f-sem"];
    if($ye_ar=='1styear'){
        $sm1='1-1';
        $sm2='1-2';
    }
    if($ye_ar=='2ndyear'){
        $sm1='2-1';
        $sm2='2-2';
    }
    if($ye_ar=='3rdyear'){
        $sm1='3-1';
        $sm2='3-2';
    }
    if($ye_ar=='4thyear'){
        $sm1='4-1';
        $sm2='4-2';
    }
    $sql_stud = "SELECT * FROM `st_db` WHERE regdno='$R_E_I_D'";
    $run_sql_stud=mysqli_query($conn,$sql_stud);  
    if (mysqli_num_rows($run_sql_stud) > 0) {
        while($row = mysqli_fetch_assoc($run_sql_stud)) {
             $type = $row["admncat"];
             $uni_fee=$row["universityfee"];
             $bu_fu=$row["buildingfund"];
             $tu_fee=$row["tutionfee"];
             $ad_fee=$row["admission"];
             $name= $row["nameofstudent"];
             $addr = $row["address"];
             $phone = $row["cellno"];
             $mail = $row["email"];
    
             $sql_count = "SELECT COUNT(id) as cc FROM `transaction` WHERE semister='$sm1' OR semister='$sm2' AND regdno='$R_E_I_D'";
             $run_sql_count=mysqli_query($conn,$sql_count); 
             if (mysqli_num_rows($run_sql_count) > 0) {
                 while($row = mysqli_fetch_assoc($run_sql_count)) {   
                    $countn = $row["cc"];  
                 }
                }    
             // GET DATA FROM FEE MODULE
    for ($jm=0;$jm<5;$jm++){
        $sql_invoice = "SELECT * FROM `transaction` WHERE categoryfor='${"type$jm"}' AND semister='$sm1' OR semister='$sm2' AND regdno='$R_E_I_D'";
        $run_sql_invoice=mysqli_query($conn,$sql_invoice); 
        if (mysqli_num_rows($run_sql_invoice) > 0) {
            while($row = mysqli_fetch_assoc($run_sql_invoice)) {
                
                
               
          $sem = $row["semister"];
           $cate = $row["categoryfor"];
           $ordid = $row["order_id"];
           $crtd = $row["created"];
           $amt = $row["amount"];
           
          $cr[$i]=$cate;
           $or[$i]=$ordid;
           $semi[$i]=$sem;
           $crt[$i]=$crtd;
           $am[$i]=$amt;
           $i=$i+1;
            }
            $msg="Thankyou For Your Transactions";
        }
    
    }
        
    }
    }
}
    ?>
            <!-- Main Container -->
            <main id="main-container">
			<div class="bg-image bg-image-bottom" style="background-image: url('assets/img/photos/photo34@2x.jpg');">
                    <div class="bg-primary-dark-op">
                        <div class="content content-top text-center overflow-hidden">
                            <div class="pt-50 pb-20">
                                <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Invoice</h1>
                                <h2 class="h4 font-w400 text-white-op invisible" data-toggle="appear" data-class="animated fadeInUp">Welcome to Invoice Panel!</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Content -->
                <div class="content">
                    <!-- Invoice -->
                    <h2 class="content-heading d-print-none">
                        
                        Enter Invoice Details
                    </h2>
                    
                    <form class="js-validation-material" action="" method="post"  >
                        <div class="form-group row">
                            
                            <div class="col-12">
                            <label for="f-sem">Semister?</label>
                                <select class="form-control" id="f-sem" name="f-sem">
                                    <option value="1styear">1St Year</option>
                                    <option value="2ndyear">2nd Year</option>
                                    <option value="3rdyear">3rd Year</option>
                                    <option value="4thyear">4th Year</option>
                                    
                                </select>
                                
                            </div>         
                        </div>
                        
                        <div class="form-group row">
                                <div class="col-12">
                                   
                                    <input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg btn-block"  value="Fetch Invoice.."/>
                                </div>
                            </div>
                        </form>
                        <!-- invoice -->
                        
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
                                    <?php  
                                                for ($j=0;$j<$countn;$j++){
                                                
                                               ?>
                                        <tr>
                                            <td class="text-center"><?php echo $j;?></td>
                                          
                                            <td>
                                               
                                                <p class="font-w600 mb-5"><?php echo $cr[$j]; ?> </p>
                                          
                                               
                                                <div class="text-muted">Date: <?php  echo $crt[$j];  ?></div>
                                                <div class="text-muted">ID: <?php  echo $or[$j]; ?> Semister:<?php echo $semi[$j]?></div>
                                            </td>
                                            <td class="text-right"><?php  echo $am[$j]; ?>
                                        </td>
                                        </tr>
                                            <?php
                                            if($cr[$j]==$type0){
                                                $tot_uf=$tot_uf+$am[$j];
                                            }
                                           if($cr[$j]==$type1){
                                               $tot_bf=$tot_bf+$am[$j];
                                           }
                                          
                                        if($cr[$j]==$type2){
                                            $tot_tf=$tot_tf+$am[$j];
                                        }
                                        if($cr[$j]==$type3){
                                            $tot_af=$tot_af+$am[$j];
                                        }
                                        if($cr[$j]==$type4){
                                            $tot_bulf=$tot_bulf+$am[$j];
                                        }

                                    }
                                         ?>
                                       
                                       <tr class="table-warning">
                                            <td  colspan="2" class="font-w700 text-uppercase text-left">University Fee  (Total-Paid): <?php echo str_repeat("&nbsp;", 60); ?>   <?php echo $uni_fee ?>-<?php echo $tot_uf; ?>=</td>
                                            <td class="font-w700 text-right"> <i class="fa fa-inr">/-<?php echo $ui=$uni_fee-$tot_uf ?></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" class="font-w700 text-uppercase text-left">Tution Fee  (Total-Paid): <?php echo str_repeat("&nbsp;", 68); ?>   <?php echo $tu_fee ?>-<?php echo $tot_tf ?>=</td>
                                            <td class="font-w700 text-right"> <i class="fa fa-inr">/-<?php echo $tf=$tu_fee-$tot_tf ?></td>
                                        </tr>
                                        <tr  class="table-warning">
                                            <td colspan="2" class="font-w700 text-uppercase text-left">Building Fund  (Total-Paid): <?php echo str_repeat("&nbsp;", 60); ?>   <?php echo  $bu_fu ?>-<?php echo $tot_bulf ?>=</td>
                                            <td class="font-w700 text-right"> <i class="fa fa-inr">/-<?php echo $bf=$bu_fu-$tot_bulf ?></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" class="font-w700 text-uppercase text-left">Admission Fee  (Total-Paid): <?php echo str_repeat("&nbsp;", 60); ?>   <?php echo  $ad_fee ?>-<?php echo $tot_af ?>=</td>
                                            <td class="font-w700 text-right"> <i class="fa fa-inr">/-<?php echo $af=$ad_fee-$tot_af ?></td>
                                        </tr>
                                        <tr  class="table-warning" >
                                            <td colspan="2" class="font-w700 text-uppercase text-left">Remaining Due  <?php echo str_repeat("&nbsp;", 60); ?> </td>
                                            <td class="font-w700 text-right"> <i class="fa fa-inr">/-<?php echo $af+$bf+$tf+$ui  ?></td>
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
<script type = "text/javascript">  
    window.onload = function () {  
        document.onkeydown = function (e) {  
            
            return (e.which || e.keyCode) != 116;  
            
        };  
    }  
</script>  
<script type=”text/javascript”>

function printDiv(block){

var printContents = document.getElementById(block).innerHTML;

var originalContents = document.body.innerHTML;

document.body.innerHTML = printContents;

window.print();

document.body.innerHTML = originalContents;

}

</script>