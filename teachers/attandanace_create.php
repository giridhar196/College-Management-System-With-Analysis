<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<?php include_once 'header.php'; ?>


            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <!-- Invoice -->
                    <h2 class="content-heading d-print-none">
                        
                       Enter Student Attandance: 
                    </h2>
                    
                    <form class="js-validation-material" action="attandance" method="post"  >
                       
                        <div class="form-group row">
                            <div class="col-12">
                        <label for="f-branch">Branch?</label>
                            
                            
                                <select class="form-control" id="f-branch" name="f-branch">
                                    <option value="cse">CSE</option>
                                    <option value="ece">ECE</option>
                                    <option value="eee">EEE</option>
                                    <option value="mech"> MECH</option>
                                     <option value="civil">CIVIL</option>
                                </select>
                            </div>
                            
                            <div class="col-12">
                            <label for="f-sem">Semister?</label>
                                <select class="form-control" id="f-sem" name="f-sem">
                               
                                    <option value="1-1">1-1</option>
                                    <option value="1-2">1-2</option>
                                    <option value="2-1">2-1</option>
                                    <option value="2-2"> 2-2</option>
                                     <option value="3-1">3-1</option>
                                     <option value="3-2"> 3-2</option>
                                     <option value="4-1">4-1</option>
                                     <option value="4-2"> 4-2</option>
                                </select>
                                
                            </div>           
                        </div>
                        <div class="form-group row">
                                <div class="col-12">
                                <label for="f-subject">Subject?</label>
                                <input type="text" name="f-subject" id="f-subject" class="form-control" placeholder="Enter subject"/>
                                   
                                    </div>
                            </div>
                            <div class="form-group row">
                            <label class="col-12" for="f-date">Date</label>
                            <div class="col-lg-12">
                                <input type="text" class="js-masked-date form-control" id="f-date" value= "<?php echo $da ?>" name="f-date" placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                        <div class="form-group row">
                                <div class="col-12">
                                   
                                    <input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg btn-block"  value="Click To Submit Notification.."/>
                                </div>
                            </div>
                        </form>
                       
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
        <script src="assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
        <script src="assets/js/pages/be_forms_plugins.js"></script>
        <script>
            jQuery(function () {
                // Init page helpers (Select2 plugin)
                Codebase.helpers(['select2','simplemde','masked-inputs']);
            });
        </script> 
        <!-- <script src="assets/js/pages/invoice_validation.js"></script> -->
    </body>
</html>
