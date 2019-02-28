<?php include "header.php"; ?>
<?php
$sqlcp = "SELECT * FROM `radius` WHERE auth_id='$au_num' AND blog='1'";
$run_sqlap=mysqli_query($conn,$sqlcp);  
if (mysqli_num_rows($run_sqlap) > 0) {
    while($row = mysqli_fetch_assoc($run_sqlap)) {
        $p_status = $row["blog"];
        
    }
}else{
    $p_status = "0"; 
   
}
?>
    <?php
$i=0;
$msg='';
$sqlc = "SELECT COUNT(id) as coun FROM `blog` WHERE branch='$B_R_A_N_C_H'";
$run_sqla=mysqli_query($conn,$sqlc);  
if (mysqli_num_rows($run_sqla) > 0) {
    while($row = mysqli_fetch_assoc($run_sqla)) {
        $coup = $row["coun"];
    }
}else{
    $msg="No Products Click On Add Product";
}
$sql = "SELECT * FROM `blog` WHERE branch='$B_R_A_N_C_H'";
$run_sql=mysqli_query($conn,$sql);  
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
       $sno = $row["id"];
       $p_name = $row["title"];
       $p_cat = $row["category"];  
       $p_cost = $row["visible"];
       $pd_post = $row["dateofpost"];
       $p_quant = $row["regid"];
      $p_er=$row["permission"];

       $snoa[$i]=$sno;
       $pn[$i]=$p_name;
       $pca[$i]=$p_cat;
       $pc[$i]=$p_cost;
       $dt[$i]=$pd_post;
       $pq[$i]=$p_quant; 
       $per[$i]=$p_er;      
       $i=$i+1;
    }
   }
   else{
    $msg="No Products Click On Add Product";
}

if($p_status==1){
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
                            <h1 class="h2 font-w700 text-white mb-10">Allow / Block Blog</h1>
                            <h2 class="h4 font-w400 text-white-op mb-0">currently have
                                <?php echo $coup ?> in the catalog!</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Hero -->
            <!-- Breadcrumb -->
            <div class="bg-body-light border-b">
                <div class="content py-5 text-center">
                    <nav class="breadcrumb bg-body-light mb-0">
                        <a class="breadcrumb-item" href="blog">Blog</a>
                        <span class="breadcrumb-item active">Pages</span>
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
                        <h3 class="block-title">Blog Details
                            <small></small>
                        </h3>
                    </div>
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->
                        <form action="allow_blogsubmit" method="post">
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 5%;">P.Id</th>
                                        <th lass="d-none d-sm-table-cell" style="width: 5%;">Present Status</th>

                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Published On</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Name</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Category</th>
                                        <th class="d-none d-sm-table-cell" style="width: 10%;">Visible to</th>
                                        <th class="text-center" style="width: 15%;">Change Status</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $pt=0;
                                 for($pt>0;$pt<$coup;$pt++){
                                    if($per[$pt]==0){
                                        $button_status="Click To Allow";
                                        $button_return="allow";
                                        $button_colour="btn btn-sm btn-primary";
                                        $button_icon="si si-check";
                                    }
                                    else{
                                        $button_status="Click To Block";
                                        $button_return="block";
                                        $button_colour="btn btn-sm btn-danger";
                                        $button_icon="si si-close";
                                    }
                                        ?>

                                    <tr>
                                        <td class="text-center">

                                            <?php echo $snoa[$pt] ?>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-primary">
                                                <?php echo $per[$pt] ?>
                                            </span>
                                        </td>

                                        <td class="d-none d-sm-table-cell">
                                            <?php echo $dt[$pt] ?>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <?php echo $pn[$pt] ?>
                                        </td>

                                        <td class="d-none d-sm-table-cell">
                                            <?php echo $pca[$pt] ?>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-primary">
                                                <?php echo $pc[$pt] ?>
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <button type="submit" name="<?php echo $button_return; ?>" id="<?php echo $button_return; ?>" class="<?php echo $button_colour; ?>"
                                                value="<?php echo $snoa[$pt] ?>" data-toggle="tooltip" title="<?php echo $button_status; ?>">
                                                <i class="<?php echo $button_icon; ?>"></i>
                                            </button>


                                        </td>
                                    </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
                <!-- END Dynamic Table Full Pagination -->
                <?php }else{
    echo $msg;
} ?>
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