<?php  
include_once 'header.php';
include_once 'dbconnect.php';

$msg='';
$i=0;


    $sql = "SELECT * FROM `st_db`";
    $run_sql=mysqli_query($conn,$sql);  
    if (mysqli_num_rows($run_sql) > 0) {
        while($row = mysqli_fetch_assoc($run_sql)) {
      
            $cate = $row["admnno"];
            $ordid = $row["nameofstudent"];
            $regd = $row["regdno"];
            $amt= $row["branch"];
           
            $ar[$i]=$cate;
            $am[$i]=$amt;
            $re[$i]=$regd;
            $i=$i+1;
        }
    }
  


?> 

<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
       
        <!-- Stylesheets -->
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.min.css">

        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content"> <form class="js-validation-material" action="" method="post"  >
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
                                   
                                    <input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg btn-block"  value="Get Sample Details.."/>
                                </div>
                            </div>
                        </form>
                    
                   
                    <!-- Dynamic Table Full Pagination -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Dynamic Table <small>Full pagination</small></h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th style="width: 15%;">Name</th>
                                        <th class="d-none d-sm-table-cell" >Registration</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Branch</th>
                                        <th class="text-center" style="width: 15%;">Profile</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php   
                                                for ($j=0;$j<$i;$j++){
                                                   
                                               ?>
                                    <tr>
                                        <td class="text-center"><?php echo $j;?></td>
                                        <td class="font-w600"><?php echo $ar[$j]; ?></td>
                                        <td class="d-none d-sm-table-cell">
                                           <?php echo $re[$j] ?>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                        <span class="badge badge-primary">  <?php echo $am[$j]?></span>
                                    </td>
                                       
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                        <?php
                                          
                                        } ?>
                                </tbody>
                            </table>
                            <div class="form-group row">
                                <div class="col-12">
                                  
                                </div>
                                
                            </div>
                             
                            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg btn-block"  value="Download Excel.."/>
                        </div>
                    </div>
                    <!-- END Dynamic Table Full Pagination -->

            
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            
        </div>
        <!-- END Page Container -->
        <?php include_once 'footer.php';?>
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
        <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_tables_datatables.js"></script>
    </body>
</html>