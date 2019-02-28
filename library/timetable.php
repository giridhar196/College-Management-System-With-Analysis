<?php include_once 'header.php'; ?>
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<?php include_once 'timetable_data_get.php'; ?>
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <!-- Invoice -->
                    <h2 class="content-heading d-print-none">
                        
                        Enter TimeTable Details To Fetch
                    </h2>
                    
                    <form  action="" method="post"  >
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
                       


<?php 
if($allow == 'allow'){ ?>


                        <div class="table-responsive">          
  <table class="table table-hover">
    <thead>
      <tr>
        <th  class="text-center ">DAY</th>
        <th class="text-center">Period1</th>
        <th class="text-center">Period2</th>
        <th class="text-center">Period3</th>
        <th class="text-center">Period4</th>
        <th class="text-center">Period5</th>
        <th class="text-center">Period6</th>
        <th class="text-center">Period7</th>
        <th class="text-center">Period8</th>
        
      </tr>
    </thead>
    <tbody>
        <?php 
        for($j=0;$j<7;$j++){
            ?>
      <tr>
      <td class="font-weight-bold" ><span class="text-center "><p class="text-uppercase"   ><?php echo $row_ar1[$j] ?></p></span></td>
       
        <td class="text-center" ><span class="font-weight-bold"> <?php echo $row_ar2[$j]?></span></td>
        <td class="text-center" ><span class="font-weight-bold"><?php echo $row_ar3[$j]?></span></td>
        <td class="text-center" ><span class="font-weight-bold"> <?php echo $row_ar4[$j]?></span></td>
        <td class="text-center" ><span class="font-weight-bold"> <?php echo $row_ar5[$j]?></span></td>
        <td class="text-center" ><span class="font-weight-bold"> <?php echo $row_ar6[$j]?></span></td>
        <td class="text-center" ><span class="font-weight-bold"> <?php echo $row_ar7[$j]?></span></td>
        <td class="text-center" ><span class="font-weight-bold"> <?php echo $row_ar8[$j]?></span></td>
        <td class="text-center" ><span class="font-weight-bold"> <?php echo $row_ar9[$j]?></span></td>
        
    </tr>
      <?php 
        
    }
  
   
     ?>
     
    
    </tbody>
                             
  </table>
  </div>
  <?php } ?>
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
