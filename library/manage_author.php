<?php include "header.php"; ?>

<script>

    function category(c_id) {
        $(".display-category").load("edit_display_author?ca_id="+c_id);
    }
  
</script>


<?php
$i=0;
$msg='';
$sqlc = "SELECT COUNT(id) as coun FROM `tblauthors`";
$run_sqla=mysqli_query($conn,$sqlc);  
if (mysqli_num_rows($run_sqla) > 0) {
    while($row = mysqli_fetch_assoc($run_sqla)) {
        $coup = $row["coun"];
    }
}else{
    $msg="No Products Click On Add Product";
}
$sql = "SELECT * FROM `tblauthors`";
$run_sql=mysqli_query($conn,$sql);  
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
       $sno = $row["id"];
       $p_category = $row["AuthorName"];
     
       $p_date = $row["creationDate"];
      

       $snoa[$i]=$sno;
       $pn[$i]=$p_category;
       
       $pc[$i]=$p_date;
      
       $i=$i+1;
    }
   }
   else{
    $msg="No Products Click On Add Product";
}
 

if(isset($_GET['submit'])){
    $snos=$_GET['submit'];
    $name_author=$_GET['author'];
    $update_user_profile = "UPDATE tblauthors SET AuthorName='$name_author' WHERE id='$snos'";
   $upd_sel_us=mysqli_query($conn,$update_user_profile);
  
}

?>
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.min.css">

    <!-- Codebase framework -->
    <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <!-- Hero -->
        <div class="bg-image" style="background-image: url('assets/img/photos/photo26@2x.jpg');">
            <div class="bg-black-op-75">
                <div class="content content-top content-full text-center">
                    <div class="py-20">
                        <h1 class="h2 font-w700 text-white mb-10">Authors Details</h1>
                        <h2 class="h4 font-w400 text-white-op mb-0">currently have
                            <?php echo $coup ?> Author Books!</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->
        <!-- Breadcrumb -->
        <div class="bg-body-light border-b">
            <div class="content py-5 text-center">
                <nav class="breadcrumb bg-body-light mb-0">
                    <a class="breadcrumb-item" href="">Authors</a>
                    <span class="breadcrumb-item active">Edit</span>
                </nav>
            </div>
        </div>
        <!-- END Breadcrumb -->
        <div class="content">
            <h2 class="content-heading">Overview</h2>

            <?php if($msg==''){?>
            <!-- Dynamic Table Full Pagination -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Author Details Details
                        <small></small>
                    </h3>
                </div>
                <div class="table-responsive">
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->

                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 5%;">P.Id</th>
                                   
                                    <th class="d-none d-sm-table-cell" style="width: 15%;">Published On</th>
                                    <th class="d-none d-sm-table-cell" style="width: 15%;">Name</th>

                                    <th class="text-center" style="width: 15%;">Change Status</th>

                                </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <?php for($pt=1;$pt<$coup;$pt++){
                                 
                                        ?>

                                
                                    <td class="text-center">

                                        <?php echo $snoa[$pt] ?>
                                    </td>
                                    
                                    <td class="d-none d-sm-table-cell">
                                        <?php echo $pc[$pt] ?>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <?php echo $pn[$pt] ?>
                                    </td>


                                    <td class="text-center">
                                        <button type="submit" name="edit" data-toggle="modal" onclick="category(<?php echo $snoa[$pt]; ?>)" data-target="#exampleModal" class="btn btn-sm btn-primary"
                                            data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-edit"></i>
                                            <i class="si si-close"></i>
                                        </button>
                                    </td>

                                </tr>

                                <?php } ?>
                               
                            </tbody>
                        </table>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="display-category" id="display-category"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Dynamic Table Full Pagination -->

        </div>
        <!-- END Page Content -->
    </main>

    <!-- END Main Container -->
    <?php
}
else{
    echo "You are not a valid user please go back";
    echo "<a href='index.php'>Click Me </a>";
    } ?>

        <p align="center" class="text-primary-light">That's all focks Breath In Breath Out......</p>
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

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_tables_datatables.js"></script>
        </body>

        </html>