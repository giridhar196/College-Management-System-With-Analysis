<?php include "header.php"; ?>
<?php
$error='';
if(isset($_GET['id']))  
{
    $ps=$_GET['id'];

$sql = "SELECT * FROM `used_store` WHERE id = '$ps' AND quantity != '0'";
$run_sql=mysqli_query($conn,$sql);  
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
       $sno = $row["id"];
       $p_name = $row["product_name"];
       $p_cat = $row["category"];  
       $p_cost = $row["price"];
       $pd_post = $row["dateofpost"];
       $p_quant = $row["quantity"];
       $p_sem = $row["semister"];
       $p_des =$row["description"];
       $p_sdesc=$row["short_desciption"];
       $rg = $row["regid"];
      $ic = $row["icon"];
      $se_name=$row["nameofstudent"];
      $per=$row["permission"];
  
      
    }
}else{
$error="Product Sold";
}
}
if(isset($_POST['submit'])){
if($per=='0'){
    $query = "UPDATE used_store SET p_auth = '".$userData['oauth_uid']."',p_phone='$p_number',p_regid='$R_E_I_D', p_by = '".$userData['first_name']."',  p_email = '".$userData['email']."',  p_date = '".date("Y-m-d")."',quantity='0' WHERE id='$sno'";
    $run_sel_us=mysqli_query($conn,$query);
   $msg="sucess";
}else{
    $msg="Sorry The Product Does not have Permissions";
}
if($msg=="sucess"){
$to = $userData['email'];
$subject = "Order Placed At KHIT USED STORE";
// Get HTML contents from file
$htmlContent = file_get_contents("email_order.php?id=7&name=giri&pn=book&cost=50&by=giridhar");

// Set content-type for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: store.order@khitguntur' . "\r\n";

// Send email
if(mail($to,$subject,$htmlContent,$headers)):
	$successMsg = 'Email has sent successfully.';
else:
	$errorMsg = 'Some problem occurred, please try again.';
endif;
}
}
      ?>
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/slick/slick.min.css">
    <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.min.css">
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        
        <?php echo $error;
        if($error==''){ 
        if($msg!='sucess'){?>
        <div class="content">
            <h2 class="content-heading">
                <?php echo $p_name; ?>
                <small>by
                    <?php echo $se_name ?>
                </small>
            </h2>
            <div class="block">

                <!-- Project -->
                <div class="block-content block-content-full">
                    <div class="row py-20">
                        <div class="col-sm-6 invisible" data-toggle="appear">
                            <!-- Image Slider (.js-slider class is initialized in Codebase() -> uiHelperSlick()) -->
                            <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->

                            <!-- END Image Slider -->

                            <!-- Project Info -->
                            <table class="table table-striped table-borderless mt-20">
                                <tbody>
                                    <tr>
                                        <td class="font-w600">Product Name</td>
                                        <td>
                                            <?php echo $p_name; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-w600">Seller Roll Number</td>
                                        <td>
                                            <?php echo $rg; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-w600">Cost</td>
                                        <td>
                                            <?php echo $p_cost; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-w600">Category</td>
                                        <td>
                                            <?php echo $p_cat; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-w600">Semister</td>
                                        <td>
                                            <?php echo $p_sem; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-warning btn-lg btn-block" data-toggle="click-ripple">Click to buy</button>
                            <!-- END Project Info -->
                        </div>
                        <div class="col-sm-6 nice-copy">
                            <!-- Project Description -->
                            <h3 class="mb-10">Description</h3>
                            <p>
                                <?php echo $p_des; ?>
                            </p>
                            <h3 class="mt-20 mb-10">Short Description</h3>
                            <p>
                                <?php echo $p_sdesc; ?>
                            </p>
                            <!-- END Project Description -->
                            <!-- <div class="col-1g-12 col-xl-4"> -->

                            <!-- </div> -->
                        </div>


                    </div>
                </div>
                <!-- END Project -->



                <!-- Testimonial -->
                <div class="bg-image" style="background-image: url('assets/img/photos/photo30@2x.jpg');">
                    <div class="block-content block-content-full bg-primary-dark-op text-center">
                        <div class="py-30 invisible" data-toggle="appear">
                            <div class="py-10">
                                <img class="img-avatar img-avatar96 img-avatar-thumb" src="assets/img/avatars/avatar10.jpg" alt="">
                            </div>
                            <div class="row justify-content-center py-10">
                                <div class="col-md-8">
                                    <div class="mb-10">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
                                    <h3 class="font-w700 text-white mb-10"> Mark Twain
                                        <i class="fa fa-thumbs-up"></i>
                                    </h3>
                                    <p class="font-size-lg text-body-bg-dark">“Good friends, good books, and a sleepy conscience: this is the ideal life.” </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Testimonial -->
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Conform Order</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-sm-3">
                            <img src="assets/img/icons8-shop-50.png" alt="Kiwi standing on oval">
                        </div>
                        <div class="col-sm-9">
                            <p> Click On Ok To Place The order </p>
                        </div>


                    </div>
                    <form method="POST" action="">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" id="submit" class="btn btn-primary">Ok</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
        <?php }} ?>
        
    </main>
    <!-- END Main Container -->

    <?php include "footer.php"; ?>
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

    <!-- Page Plugins -->
    <script src="assets/js/plugins/slick/slick.min.js"></script>

    <!-- Page JS Code -->
    <script>
        jQuery(function () {
            // Init page helpers (Slick Slider plugin)
            Codebase.helpers('slick');
        });
    </script>
    </body>

    </html>