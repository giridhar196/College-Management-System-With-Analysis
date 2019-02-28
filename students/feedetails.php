<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<?php include_once 'header.php'; ?>
<?php
$pre_type='';
 
   
    $pre_uni='';
    $pre_bf='';
    $pre_adm='';
    $pre_tut='';
    $pre_bud='';
    if(isset($_POST['management']))  
    { 
$sql = "SELECT * FROM `admission_fee_details` WHERE type_name='management'";
$run_sql=mysqli_query($conn,$sql);
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
    $pre_type= $row["type_name"];
    $pre_adm = $row["admission_fee"];
    $pre_bf = $row["building_fund"];
    $pre_uni = $row["university_fee"];
    $pre_tut = $row["tution_fee"];
    $pre_bud = $row["bus_fee"];
    }
}
}
if(isset($_POST['conviner']))  
{ 
$sql = "SELECT * FROM `admission_fee_details` WHERE type_name='conviner'";
$run_sql=mysqli_query($conn,$sql);
if (mysqli_num_rows($run_sql) > 0) {
while($row = mysqli_fetch_assoc($run_sql)) {
$pre_type= $row["type_name"];
$pre_adm = $row["admission_fee"];
$pre_bf = $row["building_fund"];
$pre_uni = $row["university_fee"];
$pre_tut = $row["tution_fee"];
$pre_bud = $row["bus_fee"];
}
}
}
if(isset($_POST['spot']))  
{ 
$sql = "SELECT * FROM `admission_fee_details` WHERE type_name='spot'";
$run_sql=mysqli_query($conn,$sql);
if (mysqli_num_rows($run_sql) > 0) {
while($row = mysqli_fetch_assoc($run_sql)) {
$pre_type= $row["type_name"];
$pre_adm = $row["admission_fee"];
$pre_bf = $row["building_fund"];
$pre_uni = $row["university_fee"];
$pre_tut = $row["tution_fee"];
$pre_bud = $row["bus_fee"];
}
}
}
if(isset($_POST['submit']))  
{ 
    $t_ype=$_POST['f-type'];
    $u_niversity=$_POST['f-uni'];
    $b_uilding=$_POST['f-bf'];
    $a_dmission=$_POST['f-adf'];
    $t_ution=$_POST['f-tf'];
    $b_usfee=$_POST['f-bud'];
$sql = "UPDATE admission_fee_details  SET type_name='$t_ype',
admission_fee='$a_dmission',
building_fund='$b_uilding',
university_fee='$u_niversity',
tution_fee='$t_ution',
bus_fee='$b_usfee' WHERE type_name='$t_ype'";
$run_sql=mysqli_query($conn,$sql);

}
    ?>


            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <!-- Invoice -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Fee Details....</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form action="" method="post">
                        <div class="col-12">
                                   
                                    <input type="submit" name="management" id="management" class="btn btn-alt-primary"  value="Management.."/>
                                    <input type="submit" name="spot" id="spot" class="btn btn-alt-primary"  value="Spot.."/>
                                    <input type="submit" name="conviner" id="conviner" class="btn btn-alt-primary"  value="Conviner.."/>
                                
                                </div>
</form>
                    <form class="js-validation-material" action="" method="post"  >
                    <div class="form-group row">
                                
                            </div>
                        <div class="form-group row">
                        <div class="col-12">
                                <label for="f-reg">Type</label>
                                <input type="text" autocomplete="off" class="form-control" id="f-type" name="f-type"  value="<?php echo  $pre_type ?>" >
                            </div>
                            <div class="col-12">
                                <label for="f-reg">University Fee</label>
                                <input type="number" autocomplete="off" class="form-control" id="f-uni" name="f-uni" value="<?php echo  $pre_uni ?>" >
                            </div>
                            <div class="col-12">
                                <label for="f-name">Building Fund</label>
                                <input type="number" autocomplete="off" class="form-control" id="f-bf" name="f-bf" value="<?php echo  $pre_bf ?>">
                            </div>
                            <div class="col-12">
                                <label for="f-name">Admission Fund</label>
                                <input type="number" autocomplete="off" class="form-control" id="f-adf" name="f-adf" value="<?php echo  $pre_adm ?>">
                            </div>
                            <div class="col-12">
                                <label for="f-name">Tution Fee</label>
                                <input type="number" autocomplete="off" class="form-control" id="f-tf" name="f-tf" value="<?php echo  $pre_tut ?>" >
                            </div>
                            <div class="col-12">
                                <label for="f-name">Bus Fee</label>
                                <input type="number" autocomplete="off" class="form-control" id="f-bud" name="f-bud" value="<?php echo  $pre_bud ?>" >
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <!-- Pop In Modal -->
                            <div class="block">
                               
                                <div class="block-content block-content-full">
                                    <a  data-toggle="modal" data-target="#modal-popin">Check The T&C..</a>
                                    <input type="checkbox" required name="check" id="check"/>
                                </div>
                                <div class="block-content block-content-full">
                                    
                                    <input type="submit" name="submit" id="submit" class="btn btn-primary" />
                                </div>
                            </div>
                            <!-- END Pop In Modal -->
                        </div> 
                       
                       
                        </form>

</div> 
</div>               </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

           <?php include "footer.php"?>
        </div>
        <!-- END Page Container -->
        <!-- Pop In Modal -->
        <div class="modal fade" id="modal-popin" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popin" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Terms &amp; Conditions</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                       
                        <button type="button" class="btn btn-alt-success" name="submit" id="submit" data-dismiss="modal">
                            <i class="fa fa-check"></i> Perfect
                        
                        </button>

                    </div>
                </div>
            </div>
        </div>
        <!-- END Pop In Modal -->

        <!-- Pop Out Modal -->
        <div class="modal fade" id="modal-popout" tabindex="-1" role="dialog" aria-labelledby="modal-popout" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Terms &amp; Conditions</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                            <i class="fa fa-check"></i> Perfect
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Pop Out Modal -->

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
