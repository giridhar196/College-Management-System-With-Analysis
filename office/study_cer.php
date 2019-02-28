<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<?php include_once 'header.php'; ?>



            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <!-- Invoice -->
                    <h2 class="content-heading d-print-none">
                        
                        Enter Certificate Details
                    </h2>
                    
                    <form class="js-validation-material" action="print_invoice" method="post"  >
                        <div class="form-group row">
                            <div class="col-6">
                                <label for="f-reg">Reg Number</label>
                                <input type="text" autocomplete="off" class="form-control" id="f-reg" name="f-reg" placeholder="Registration Number..">
                            </div>
                            <div class="col-6">
                                <label for="f-name">Name</label>
                                <input type="text" autocomplete="off" class="form-control" id="f-name" name="f-name"  placeholder="Enter Student Name..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                        <label for="f-branch">Branch?</label>
                            
                            
                                <select class="form-control" id="f-branch" name="f-branch">
                                    <option value="cse">CSE</option>
                                    <option value="ece">ECE</option>
                                    <option value="eee">EEE</option>
                                    <option value="mech"> MECH</option>
                                     <option value="civil">CIVIL</option>
                                </select>
                            </div>
                            
                            <div class="col-6">
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
                                   
                                    <input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg btn-block"  value="Fetch Study Certificate.."/>
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