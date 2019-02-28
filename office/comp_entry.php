<?php

$msg='Hi Welcome';


?>
<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
    <script type="text/javascript">
    
</script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>College Management system  &amp; Project R-5</title>

        <meta name="description" content="College Management system  &amp; Project R-5">
        <meta name="author" content="Gstark and Team">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="College Management system  &amp; Project R-5">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="College Management system  &amp; Project R-5">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

       
    </head>
 <!-- Stylesheets -->
 <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/sweetalert2/sweetalert2.min.css">
		<link rel="stylesheet" href="assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="assets/js/plugins/select2/select2.min.css">
        <link rel="stylesheet" href="assets/js/plugins/select2/select2-bootstrap.min.css">
        <style>

</style> 
       <body>

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <!-- Bootstrap Forms Validation -->
                    <!-- Material Forms Validation -->
                    <h2 class="content-heading">Placement Entry</h2>
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
                                    <form class="js-validation-material" action="comp_entrypost" method="post">
                                    <div class="form-group">
                                   <p> <?php echo $msg;?></p>
                                               
                                            </div>   
                                    
                                        
                                       
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" autocomplete="off" class="form-control" id="val-name" name="val-name" placeholder="First Name..">
                                                <label for="val-name">First Name *</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" autocomplete="off" class="form-control" id="val-mname" name="val-mname" placeholder="Middle Name..">
                                                <label for="val-mname">Middle Name</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material">
                                                <input type="text" autocomplete="off" class="form-control" id="val-lname" name="val-lname" placeholder="Last Name..">
                                                <label for="val-lname">Last Name *</label>
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
                                                    <label for="val-regno">University Registration Number *</label>
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
                                                        <input type="text" autocomplete="off" class="form-control" id="val-10thcgpa" name="val-10thcgpa" placeholder="10th CGPA percentage..">
                                                        <label for="val-10thcgpa">10th CGPA Percentage*</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material">
                                                        <input type="text" autocomplete="off" class="form-control" id="val-10thcgpastate" name="val-10thcgpastate" placeholder="10th State..">
                                                        <label for="val-10thcgpastate">10th in State *</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material">
                                                        <input type="text" autocomplete="off" class="form-control" id="val-10thcgpacountry" name="val-10thcgpacountry" placeholder="10th Country..">
                                                        <label for="val-10thcgpacountry">10th Country*</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material">
                                                        <input type="text" autocomplete="off" class="form-control" id="val-10thcgpaboard" name="val-10thcgpaboard" placeholder="10th Board..">
                                                        <label for="val-10thcgpacountry">10th  Board (state/Central) *</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material">
                                                        <input type="text" autocomplete="off" class="form-control" id="val-10thcgpaschool" name="val-10thcgpaschool" placeholder="10th School Name..">
                                                        <label for="val-10thcgpaschool">10th School Name *</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material">
                                                        <input type="text" autocomplete="off" class="form-control" id="val-10thcgpapassing" name="val-10thcgpapassing" value="2012"  placeholder="10th year of Passing ..">
                                                        <label for="val-10thcgpapassing">10th  Year of Passing *</label>
                                                    </div>
                                                </div>
                                               
                                                <div class="form-group">
                                                    <div class="form-material">
                                                        <input type="text" autocomplete="off" class="form-control" id="val-12th" name="val-12th" placeholder="12th CGPA/Percentage..">
                                                        <label for="val-12th">12th CGPA/Percentage *</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material">
                                                        <input type="text" autocomplete="off" class="form-control" id="val-12thstate" name="val-12thstate" placeholder="12th  State..">
                                                        <label for="val-12thstate">12th Studied in State *</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material">
                                                        <input type="text" autocomplete="off" class="form-control" id="val-12thcountry" name="val-12thcountry" placeholder="12th in Country..">
                                                        <label for="val-12thcountry">12th studied in Country*</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material">
                                                        <input type="text" autocomplete="off" class="form-control" id="val-12thboard" name="val-12thboard" placeholder="12th  Board of (intermediate/CBSC)..">
                                                        <label for="val-12thboard">12th  Board *</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material">
                                                        <input type="text" autocomplete="off" class="form-control" id="val-12thcollege" name="val-12thcollege" placeholder="12th  School..">
                                                        <label for="val-12thcollege">12th  College *</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material">
                                                        <input type="text" autocomplete="off" class="form-control" id="val-12thpassing" name="val-12thpassing" value="2014" placeholder="12th  Passing..">
                                                        <label for="val-12thpassing">12th Passout Year  *</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material">
                                                        <input type="text" autocomplete="off" class="form-control" id="val-btech" name="val-btech" placeholder="btech ..">
                                                        <label for="val-btech">Btech Percentage(until) *</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material">
                                                        <input type="text" autocomplete="off" class="form-control" id="val-btechstate" name="val-btechstate" placeholder="btech  State..">
                                                        <label for="val-btechstate">Btech in State *</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material">
                                                        <input type="text" autocomplete="off" class="form-control" id="val-btechcountry" name="val-btechcountry" value="India" placeholder="btech  Country.." >
                                                        <label for="val-btechcountry">Btech  Country*</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material">
                                                        <input type="text" autocomplete="off" class="form-control" id="val-btechboard" name="val-btechboard" placeholder="btech  Board..">
                                                        <label for="val-btechboard">Btech  Board/University *</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material">
                                                        <input type="text" autocomplete="off" class="form-control" id="val-btechschool" name="val-btechschool" placeholder="btech  School.." value="Kallam Haranadhareddy Institute of Technology">
                                                        <label for="val-btechcollege">Btech  College *</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-material">
                                                        <input type="text" autocomplete="off" class="form-control" id="val-btechpassing" name="val-btechpassing" placeholder="btech  Passing.." value="2018">
                                                        <label for="val-btechpassing">Btech  Year Passing *</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <div class="form-material">
                                                    <input type="text" autocomplete="off" class="form-control" id="val-country" name="val-country" value="India" placeholder="Country..">
                                                    <label for="val-country">Country *</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <input type="text" autocomplete="off" class="form-control" id="val-state" name="val-state" placeholder="State..">
                                                    <label for="val-state">State *</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-material">
                                                    <input type="text" autocomplete="off" class="form-control" id="val-city" name="val-city" placeholder="City..">
                                                    <label for="val-city">City</label>
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
                                                <input type="text" class="form-control" id="val-email2" autocomplete="off" name="val-email2" placeholder="Your valid email..">
                                                <label for="val-email2">Email</label>
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
        <script src="assets/js/pages/intervali.js"></script>
        <!-- Page JS Code -->
        <script>
            jQuery(function () {
                // Init page helpers (Select2 plugin)
                Codebase.helpers('datepicker','select2');
            });
        </script>
        
            <?php 
            require_once 'footer.php';
            ?>