<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<?php include_once 'header.php'; ?>


            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <!-- Invoice -->
                    <h2 class="content-heading d-print-none">
                        
                        Enter TimeTable Details To Fetch
                    </h2>
                    
                    <form  action="time_table_edit" method="post"  >
                        <div class="form-group row">
                          
                            <div class="col-6">
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
                            <div class="col-6">
                            <label for="f-sec">Section?</label>
                                <select class="form-control" id="f-sec" name="f-sec">
                                    <option value="a">a</option>
                                    <option value="b">b</option>
                                    <option value="c">c</option>
                                    <option value="d">d</option>
                                    
                                </select>
                                
                            </div>         
                        </div>
                        
                        <div class="form-group row">
                                <div class="col-12">
                                   <input type="submit" name="fetch" id="fetch" class="js-notify btn btn-lg btn-block btn-alt-primary" data-message="Please Wait Data is Getting Load!" value="Fetch TimeTable.."/>
                               
                                </div>

                            </div>
                        </form>
                       
                            <!-- Footer -->
                          
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
       <!-- Page JS Plugins -->
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
