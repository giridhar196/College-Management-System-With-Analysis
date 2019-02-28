<?php
include "header.php";
$toda='';
if(isset($_POST["trans"])){
    $class_type=$_POST["f-pe"];
    $class_semister=$_POST["f-sem"];
    $class_section=$_POST["f-sec"];
    $class_branch=$_POST["f-bra"];
$toda = date("D");
$fullday = ["Mon","Tue","Wed","Thu","Fri","Sat","Sun"];
$fulldayname = ["Monday","Tuersday","Wednesday","Thursday","Friday","Saturday","Sunday"];
$e=0;
for($e=0;$e<7;$e++){
    if($toda == $fullday[$e]){
      $toda = $fulldayname[$e];   
    }
}
$sqlc = "SELECT * FROM `time_table` WHERE branch='cse' AND semister='1-1'";
$run_sqla=mysqli_query($conn,$sqlc);  
if (mysqli_num_rows($run_sqla) > 0) {
    $l=0;
    while($row = mysqli_fetch_assoc($run_sqla)) {
        $row1 = $row["row_1"];
        $row2=$row["row_2"];
        $row3=$row["row_3"];
        $row4=$row["row_4"];
        $row5=$row["row_5"];
        $row6=$row["row_6"];
        $row7=$row["row_7"];
        $row8=$row["row_8"];
        $row9=$row["row_9"];
        $row10=$row["row_10"];
        $rowa[$l]=$row1;
        $rowb[$l]=$row2;
        $rowc[$l]=$row3;
        $rowd[$l]=$row4;
        $rowe[$l]=$row5;
        $rowf[$l]=$row6;
        $rowg[$l]=$row7;
        $rowh[$l]=$row8;
        $rowi[$l]=$row9;
        $rowj[$l]=$row10;
        $l=$l+1;
        
    }
}
for($u=0;$u<7;$u++){
    // if($toda==){}
}
}
?>





    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->

        <div class="content">
            <!-- Bootstrap Forms Validation -->
            <h2 class="content-heading">Select Attandance Manifast</h2>
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Attandance</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row justify-content-center py-20">
                        <div class="col-xl-6">

                            <form action="" method="post">

                                <div class="form-group row">

                                    <div class="col-3">
                                        <label for="f-sem">Semister?</label>
                                        <select class="form-control" id="f-sem" name="f-sem">
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
                                    <div class="col-3">
                                        <label for="f-sec">Section?</label>
                                        <select class="form-control" id="f-sec" name="f-sec">
                                            <option value="a">a</option>
                                            <option value="b">b</option>
                                            <option value="c">c</option>
                                            <option value="d">d</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label for="f-bra">Branch?</label>
                                        <select class="form-control" id="f-bra" name="f-bra">
                                            <option value="cse">CSE</option>
                                            <option value="ece">ECE</option>
                                            <option value="eee">EEE</option>
                                            <option value="mech">MECH</option>
                                            <option value="civil">Civil</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label for="f-pe">Type?</label>
                                        <select class="form-control" id="f-pe" name="f-pe">
                                            <option value="class">Class</option>
                                            <option value="lab">Lab</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <input type="submit" name="trans" id="trans" class="js-notify btn btn-lg btn-block btn-alt-primary" data-message="Please Wait Data is Getting Load!"
                                            value="Fetch Information.." />
                                    </div>
                                </div>
                            </form>
                            <?php 
if($toda!=''){
?>
                            <form action="attandance.php" method="post">
                                <div class="form-group row">
                                    <input type="hidden" name="h-class" value="<?php echo $class_type ?>" id="h-class">
                                    <input type="hidden" name="h-branch" value="<?php echo $class_branch ?>" id="h-branch">
                                    <input type="hidden" name="h-section" value="<?php echo $class_section ?>" id="h-section">
                                    <input type="hidden" name="h-semister" value="<?php echo $class_semister ?>" id="h-semister">
                                    <div class="col-6">
                                        <label for="f-day">Day?</label>
                                        <select class="form-control" id="f-day" name="f-day">
                                            <option value="<?php echo $toda ?>">
                                                <?php echo $toda ?>
                                            </option>
                                            <option value="<?php echo $fulldayname[0] ?>">
                                                <?php echo $fulldayname[0] ?>
                                            </option>
                                            <option value="<?php echo $fulldayname[1] ?>">
                                                <?php echo $fulldayname[1] ?>
                                            </option>
                                            <option value="<?php echo $fulldayname[2] ?>">
                                                <?php echo $fulldayname[2] ?>
                                            </option>
                                            <option value="<?php echo $fulldayname[3] ?>">
                                                <?php echo $fulldayname[3] ?>
                                            </option>
                                            <option value="<?php echo $fulldayname[4] ?>">
                                                <?php echo $fulldayname[4] ?>
                                            </option>
                                            <option value="<?php echo $fulldayname[5] ?>">
                                                <?php echo $fulldayname[5] ?>
                                            </option>
                                            <option value="<?php echo $fulldayname[6] ?>">
                                                <?php echo $fulldayname[6] ?>
                                            </option>
                                        </select>

                                    </div>

                                    <div class="col-6">
                                        <label for="f-sec">Time?</label>
                                        <select class="form-control" id="f_p_time" name="f_p_time">
                                            <option value="<?php echo $rowb[0]; ?>">
                                                <?php echo $rowb[0]; ?>
                                            </option>
                                            <option value="<?php echo $rowc[0]; ?>">
                                                <?php echo $rowc[0]; ?>
                                            </option>
                                            <option value="<?php echo $rowd[0]; ?>">
                                                <?php echo $rowd[0]; ?>
                                            </option>
                                            <option value="<?php echo $rowe[0]; ?>">
                                                <?php echo $rowe[0]; ?>
                                            </option>
                                            <option value="<?php echo $rowf[0]; ?>">
                                                <?php echo $rowf[0]; ?>
                                            </option>
                                            <option value="<?php echo $rowg[0]; ?>">
                                                <?php echo $rowg[0]; ?>
                                            </option>
                                            <option value="<?php echo $rowh[0]; ?>">
                                                <?php echo $rowh[0]; ?>
                                            </option>
                                            <option value="<?php echo $rowi[0]; ?>">
                                                <?php echo $rowi[0]; ?>
                                            </option>
                                            <option value="<?php echo $rowj[0]; ?>">
                                                <?php echo $rowj[0]; ?>
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="f-sec">Teacher?</label>
                                        <select class="form-control" id="f-d_tech" name="f-d_tech">
                                            <option value="<?php echo $rowb[8]; ?>">
                                                <?php echo $rowb[8]; ?>
                                            </option>
                                            <option value="<?php echo $rowc[8]; ?>">
                                                <?php echo $rowc[8]; ?>
                                            </option>
                                            <option value="<?php echo $rowd[8]; ?>">
                                                <?php echo $rowd[8]; ?>
                                            </option>
                                            <option value="<?php echo $rowe[8]; ?>">
                                                <?php echo $rowe[8]; ?>
                                            </option>
                                            <option value="<?php echo $rowf[8]; ?>">
                                                <?php echo $rowf[8]; ?>
                                            </option>
                                            <option value="<?php echo $rowg[8]; ?>">
                                                <?php echo $rowg[8]; ?>
                                            </option>
                                            <option value="<?php echo $rowh[8]; ?>">
                                                <?php echo $rowh[8]; ?>
                                            </option>
                                            <option value="<?php echo $rowi[8]; ?>">
                                                <?php echo $rowi[8]; ?>
                                            </option>
                                            <option value="<?php echo $rowj[8]; ?>">
                                                <?php echo $rowj[8]; ?>
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="f-sec">Subject?</label>
                                        <select class="form-control" id="f-sub" name="f-sub">
                                            <option value="<?php echo $rowb[7]; ?>">
                                                <?php echo $rowb[7]; ?>
                                            </option>
                                            <option value="<?php echo $rowc[7]; ?>">
                                                <?php echo $rowc[7]; ?>
                                            </option>
                                            <option value="<?php echo $rowd[7]; ?>">
                                                <?php echo $rowd[7]; ?>
                                            </option>
                                            <option value="<?php echo $rowe[7]; ?>">
                                                <?php echo $rowe[7]; ?>
                                            </option>
                                            <option value="<?php echo $rowf[7]; ?>">
                                                <?php echo $rowf[7]; ?>
                                            </option>
                                            <option value="<?php echo $rowg[7]; ?>">
                                                <?php echo $rowg[7]; ?>
                                            </option>
                                            <option value="<?php echo $rowh[7]; ?>">
                                                <?php echo $rowh[7]; ?>
                                            </option>
                                            <option value="<?php echo $rowi[7]; ?>">
                                                <?php echo $rowi[7]; ?>
                                            </option>
                                            <option value="<?php echo $rowj[7]; ?>">
                                                <?php echo $rowj[7]; ?>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <input type="submit" name="fetch" id="fetch" class="js-notify btn btn-lg btn-block btn-alt-primary" data-message="Please Wait Data is Getting Load!"
                                            value="Fetch Students.." />
                                    </div>
                                </div>
                            </form>
                            <?php }
                        ?>

                            <!-- If you put a checkbox in thead section, it will automatically toggle all tbody section checkboxes -->
                        </div>
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
    <script>
        jQuery(function () {
            // Init page helpers (Table Tools helper)
            Codebase.helpers('table-tools');
        });
    </script>

    </body>

    </html>