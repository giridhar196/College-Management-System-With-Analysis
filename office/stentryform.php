<?php
require_once 'header.php';
$msg='Hi Welcome';
include("new_joining.php");

?>
 <!-- Stylesheets -->
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/sweetalert2/sweetalert2.min.css">
		<link rel="stylesheet" href="assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="assets/js/plugins/select2/select2.min.css">
        <link rel="stylesheet" href="assets/js/plugins/select2/select2-bootstrap.min.css">
        <style>
.form-control {
    text-transform: uppercase;
}
</style> 
        <!-- Codebase framework -->
       


        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <!-- Bootstrap Forms Validation -->
                    <!-- Material Forms Validation -->
                    <h2 class="content-heading">Student Entry Forms</h2>
                    <div class="block">
                    <div class="block-header bg-info">
                            <h3 class="block-title">Stay Educated Before Entering </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-6">
                                    <!-- jQuery Validation (.js-validation-material class is initialized in js/pages/be_forms_validation.js) -->
                                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <form class="js-validation-material" action="" method="post">
                                    <div class="form-group">
                                   <p> <?php echo $msg;?></p>
                                                <div class="form-material">
                                                    <input autocomplete="off" type="text" class="form-control" id="val-admnno" name="val-admnno" required="true" placeholder="Admission Number..">
                                                    <label for="val-reg-no">Admission Numbere</label>
                                                </div>
                                            </div>   
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <div class="form-material">
                                                <select class="form-control" id="val-admncategory" name="val-admncategory" style="width: 100%;" data-placeholder="Choose at least One.." >
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="management">Management</option>
                                                    <option value="conviner">Coniver</option>
                                                    <option value="spot">Spot</option>
                                                    
                                                </select>
                                                <label for="val-admncategory">Admission Category</label>
                                            </div>
                
                                    </div>
                                    <div class="col-6">
                                        <div class="form-material">
                                            <input type="text" autocomplete="off" class="js-datepicker form-control" id="example-datepicker5" name="example-datepicker5" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                            <label for="example-datepicker5">Joining Date</label>
                                        </div>
                                </div>
                                    </div>
                                        <div class="form-group row">
                                            <div class="col-6">
                                                <div class="form-material">
                                                    <input type="text" autocomplete="off" class="form-control" id="val-ehallno" name="val-ehallno" placeholder="Eamcet Hall Ticket ">
                                                    <label for="val-ehallno">Eamcet Hall Ticket Number</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                            <div class="form-material">
                                                <input type="number" class="form-control" id="val-rank" name="val-rank" placeholder="Eamcet rank ">
                                                <label for="val-ehallno">Eamcet rank</label>
                                            </div>
                                        </div>
                                            
                                        </div>
                                       
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" autocomplete="off" class="form-control" id="val-name" name="val-name" placeholder="Enter Name of the student..">
                                                <label for="val-name">Name Of The Student</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-6">
                                            <div class="form-material">
                                                <select class="form-control" id="val-bra" name="val-bra" style="width: 100%;" data-placeholder="Choose at least One.." >
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="cse">CSE</option>
                                                    <option value="ece">ECE</option>
                                                    <option value="eee">EEE</option>
                                                    <option value="mech">MECH</option>
                                                    <option value="civil">CIVIL</option>
                                                    
                                                </select>
                                                <label for="val-bra">Branch</label>
                                            </div></div>
                                        <div class="col-6">
                                                    <div class="form-material">
                                                        <input type="text" autocomplete="off" class="js-datepicker form-control" id="val-db" name="val-db" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                        <label for="val-db">Date of Birth</label>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                        <div class="col-6">
                                               
                                            <label class="css-control css-control-primary css-radio">
                                                    <label for="val-sex">Sex: </label>
                                                <input type="radio" value="male" class="css-control-input" name="val-sex" id="val-sex" checked>
                                                <span class="css-control-indicator"></span> Male
                                            </label>
                                            <label class="css-control css-control-primary css-radio">
                                                <input type="radio" value="female" class="css-control-input" id="val-sex" name="val-sex">
                                                <span class="css-control-indicator"></span> Female
                                            </label>
                                        </div></div>
                                        <div class="form-group">
                                                <div class="form-material">
                                                    <input type="text" autocomplete="off" class="form-control" id="val-regno" name="val-regno" placeholder="Registration Number..">
                                                    <label for="val-regno">Registration Numbere</label>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                                <div class="form-material">
                                                    <input type="text" autocomplete="off" class="form-control" id="val-faname" name="val-faname" placeholder="Father Name..">
                                                    <label for="val-faname">Father Name</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <div class="form-material">
                                                        <input type="text" autocomplete="off" class="form-control" id="val-faoccup" name="val-faoccup" placeholder="Father Occupation..">
                                                        <label for="val-faoccup">Father Occupation</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                        <div class="form-material">
                                                            <input type="text" autocomplete="off" class="form-control" id="val-maname" name="val-maname" placeholder="Mother Name..">
                                                            <label for="val-maname">Mother Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <div class="form-material">
                                                                <input type="text" autocomplete="off" class="form-control" id="val-maoccup" name="val-maoccup" placeholder="Mother Occupation..">
                                                                <label for="val-maoccup">Mother Occupation</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <div class="form-material">
                                                                    <textarea class="form-control" id="val-adofcom" name="val-adofcom" rows="3" placeholder="Address of communication"></textarea>
                                                                    <label for="val-adofcom">Address of communication</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <div class="form-material">
                                                                        <input type="number" autocomplete="off" class="form-control" id="val-pnc" name="val-pnc" placeholder="522001">
                                                                        <label for="val-pnc">Pin Code</label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                        <div class="form-material">
                                                                            <input type="number" autocomplete="off" class="form-control" id="val-phoneus2" name="val-phoneus2" placeholder="Phone Number">
                                                                            <label for="val-phoneus2">Phone Number</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                            <div class="form-material">
                                                                                <input type="number" autocomplete="off" class="form-control" id="val-anninc" name="val-anninc" placeholder="Annual Income Of the Family">
                                                                                <label for="val-anninc">Annual Income Of The Family</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <div class="form-material">
                                                                                    <input type="text" autocomplete="off" class="form-control" id="val-nati" name="val-nati" placeholder="Nationality/Religion">
                                                                                    <label for="val-nati">Nationality/Religion</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                    <div class="form-material">
                                                                                        <input type="number" class="form-control" id="val-adno" name="val-adno" placeholder="Aadhar Number">
                                                                                        <label for="val-adno">Aadhar Number</label>
                                                                                    </div>
                                                                                </div>
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" class="form-control" id="val-email2" autocomplete="off" name="val-email2" placeholder="Your valid email..">
                                                <label for="val-email2">Email</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="val-bdgrup" autocomplete="off" name="val-bdgrup" placeholder="Blood Group..">
                                                    <label for="val-bdgrup">Blood Group</label>
                                                </div>
                                            </div>
                                            <div class="form-material">
                                                    <select class="form-control" id="val-cate" name="val-cat" style="width: 100%;" data-placeholder="Choose at least Category.." >
                                                        <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                        <option selected value="OC">OC</option>
                                                        <option value="BC-A">BC-A</option>
                                                        <option value="BC-B">BC-B</option>
                                                        <option value="BC-C">BC-C</option>
                                                        <option value="BC-D">BC-D</option>
                                                        <option value="BC-E">BC-E</option>
                                                        <option value="SC">SC</option>
                                                        <option value="ST">ST</option>
                                                        
                                                    </select>
                                                    <label for="val-cat">Category</label>
                                                </div>
                                                <div class="form-group">
                                                        <div class="form-material">
                                                            <input type="text" autocomplete="off" class="form-control" id="val-subcast" name="val-subcast" placeholder="Sub Cast..">
                                                            <label for="val-subcast">Sub</label>
                                                        </div>
                                                    </div>
                                        <div class="form-group">
                                            <div>
                                                <label><a data-toggle="modal" data-target="#modal-terms" href="#">Terms &amp; Conditions</a> <span class="text-danger">*</span></label>
                                            </div>
                                            <label class="css-control css-control-primary css-checkbox" for="val-terms2">
                                                <input type="checkbox" class="css-control-input" id="val-terms2" name="val-terms2" value="1">
                                                <span class="css-control-indicator"></span> Declaration By Student
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-alt-primary">Submit</button>
                                        </div>
                                        
                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Material Forms Validation -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
 <!-- Terms Modal -->
 <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popin">
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
                            <h4 class="mb-10">1. Decleration</h4>
                            <p>I am abide by the rules and regulations of the institute and will not involve in anti institutional/anti social activites.</p>
                           </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-alt-primary" data-dismiss="modal">
                            <i class="fa fa-check"></i> Ok
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Terms Modal -->

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

        <!-- Page JS Plugins -->
		<script src="assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/plugins/select2/select2.full.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/additional-methods.min.js"></script>

        <!-- Page JS Code -->
        <script>
            jQuery(function () {
                // Init page helpers (Select2 plugin)
                Codebase.helpers('datepicker','select2');
            });
        </script>
        <script src="assets/js/pages/be_forms_validation.js"></script>
            <?php 
            require_once 'footer.php';
            ?>