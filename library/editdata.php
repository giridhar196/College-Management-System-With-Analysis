<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
<?php
/**
 *
 for display full info. and edit data
 */

// start again
require('dbconnect.php');
if(isset($_REQUEST['id'])){
    $id=intval($_REQUEST['id']);
    $sql="select * from st_db WHERE sno=$id";
    $run_sql=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($run_sql)){
        $per_sno=$row[0];
        $per_admno=$row[2];
        $per_admncat=$row[4];
        $per_jdate=$row[24];
        $per_ehall=$row[5];
        $per_erank=$row[6];
        $per_nofs=$row[7];
        $per_branch=$row[1];
        $per_dob=$row[8];
        $per_sex=$row[9];
        $per_regno=$row[3];
        $per_faname=$row[10];
        $per_foccup=$row[11];
        $per_mname=$row[12];
        $per_addre=$row[14];
        $per_pin=$row[15];
        $per_phone=$row[16];
        $per_anninc=$row[17];
        $per_nat=$row[18];
        $per_adn=$row[19];
        $per_email=$row[20];
        $per_bg=$row[21];
        $per_ccast=$row[22];
        $per_sub=$row[23];
        $per_regul=$row[25];
    }//end while
?>
    <form class="form-horizontal" method="post">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Student</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtid">ID</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtid" name="txtid" value="<?php echo $per_sno;?>" readonly>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtadmno">Admission Number</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtadmn" name="txtadmn" value="<?php echo $per_admno;?>">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtcate">Admission Category</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtcate" name="txtcate" value="<?php echo $per_admncat;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtjdate">Joining Date</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtjdate" name="txtjdate" value="<?php echo $per_jdate;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtehall">Eamcet Hall Ticket</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtehall" name="txtehall" value="<?php echo $per_ehall;?>">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txterank">Eamcet Rank</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="txterank" name="txterank" value="<?php echo $per_erank;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtnofs">Name Of The Student</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtnofs" name="txtnofs" value="<?php echo $per_nofs;?>">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtbranch">Branch</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtbranch" name="txtbranch" value="<?php echo $per_branch;?>">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtdob">Date Of The Birth</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtdob" name="txtdob" value="<?php echo $per_dob;?>">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtsex">Sex</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtsex" name="txtsex" value="<?php echo $per_sex;?>">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtregno">Reg Number</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtregno" name="txtregno" value="<?php echo $per_regno;?>">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtfname">Father Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtfname" name="txtfname" value="<?php echo $per_faname;?>">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtfoccup">Father Occupation</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtfoccup" name="txtfoccup" value="<?php echo $per_foccup;?>">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtmname">Mother Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtmname" name="txtmname" value="<?php echo $per_mname;?>">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtadd">Address</label>
                            <div class="col-sm-6">
                                <input type="textarea" rows="2" class="form-control" id="txtadd" name="txtadd" value="<?php echo $per_addre;?>">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtpin">Pin Code</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="txtpin" name="txtpin" value="<?php echo $per_pin;?>">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtphone">Phone Number</label>
                            <div class="col-sm-6">
                                <input type="number"  class="form-control" id="txtphone" name="txtphone" value="<?php echo $per_phone;?>">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtann">Annual Income</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="txtann" name="txtann" value="<?php echo $per_anninc;?>">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtnat">Nationality</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtnat" name="txtnat" value="<?php echo $per_nat;?>">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtadn">Aadhar</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="txtadn" name="txtadn" value="<?php echo $per_adn;?>">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtemail">Email</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="txtemail" name="txtemail" value="<?php echo $per_email;?>">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtbg">Blood Group</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtbg" name="txtbg" value="<?php echo $per_bg;?>">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtcatc">Category</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtcatc" name="txtcatc" value="<?php echo $per_ccast;?>">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-4 control-label" for="txtsub">Sub Cast</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtsub" name="txtsub" value="<?php echo $per_sub;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtregu">Regulation</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtregu" name="txtregu" value="<?php echo $per_regul;?>">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
               
                <button type="submit" class="btn btn-primary" name="btnEdit">Save</button>
            </div>
        </div>
    </form>
<?php
}//end if
?>









