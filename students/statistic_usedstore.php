<?php include "header.php"; ?>
<?php
$i=0;
$msg='';
$sqlc = "SELECT COUNT(id) as coun FROM `used_store` WHERE auth = '".$userData['oauth_uid']."' AND sold='1'";
$run_sqla=mysqli_query($conn,$sqlc);  
if (mysqli_num_rows($run_sqla) > 0) {
    while($row = mysqli_fetch_assoc($run_sqla)) {
        $coup = $row["coun"];
    }
}else{
    $msg="No Products Click On Add Product";
}
$sql = "SELECT * FROM `used_store` WHERE auth = '".$userData['oauth_uid']."' AND sold='1'";
$run_sql=mysqli_query($conn,$sql);  
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
       $sno = $row["id"];
       $p_name = $row["product_name"];
       $p_cat = $row["p_by"];  
       $p_cost = $row["price"];
       $pd_post = $row["p_date"];
       $p_quant = $row["p_regid"];
       $p_status = $row["sold"];
       $deliver_status =$row["delivery_report"];
      
       $snoa[$i]=$sno;
       $pn[$i]=$p_name;
       $pca[$i]=$p_cat;
       $pc[$i]=$p_cost;
       $dt[$i]=$pd_post;
       $pq[$i]=$p_quant;  
       $p_s[$i]=$p_status;  
       $p_re[$i]=$deliver_status;     
       $i=$i+1;
    }
   }
   else{
    $msg="No Products Click On Add Product";
}

?>
    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-image" style="background-image: url('assets/img/photos/photo26@2x.jpg');">
            <div class="bg-black-op-75">
                <div class="content content-top content-full text-center">
                    <div class="py-20">
                        <h1 class="h2 font-w700 text-white mb-10">Statistics</h1>
                        <h2 class="h4 font-w400 text-white-op mb-0">You are doing great, keep it up!</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Breadcrumb -->
        <div class="bg-body-light border-b">
            <div class="content py-5 text-center">
                <nav class="breadcrumb bg-body-light mb-0">
                    <a class="breadcrumb-item" href="product_online">Used store</a>
                    <span class="breadcrumb-item active">Your Dashboard Orders</span>
                </nav>
            </div>
        </div>
        <!-- END Breadcrumb -->

        <!-- Page Content -->
        <div class="content">
            <!-- Statistics -->
            <!-- CountTo ([data-toggle="countTo"] is initialized in Codebase() -> uiHelperCoreAppearCountTo()) -->
            <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->


            <!-- Orders -->
            <div class="content-heading">

                Orders
            </div>
            <div class="block block-rounded">
                <div class="block-content bg-body-light">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                        <thead>
                            <tr>
                                <th class="text-center">P.Id</th>
                                <th>Book Name </th>
                                <th class="d-none d-sm-table-cell">Purchased On</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Reg Number</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">By</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Price</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
                                <th class="text-center" style="width: 15%;">Cancel Product</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php for($pt=0;$pt<$coup;$pt++){

if($p_re[$pt]==0){
    $button_status='';
}else{
    $button_status="disabled";
}
                       if($p_s[$pt]==1){
                                        $status_name="Out for Delivery";
                                    }else{
                                        $status_name="Canceled";
                                        $button_status="disabled";
                                    }
                                        ?>

                            <tr>
                                <td class="text-center">
                                    <?php echo $snoa[$pt]; ?>
                                </td>
                                <td class="font-w600">
                                    <?php echo $pn[$pt]; ?>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-info">
                                        <?php echo $dt[$pt]; ?>
                                    </span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-warning">
                                        <?php echo $pq[$pt]; ?>
                                    </span>
                                </td>

                                <td class="d-none d-sm-table-cell">
                                    <?php echo $pca[$pt]; ?>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-primary">
                                        <?php echo $pc[$pt]; ?>
                                    </span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-primary">
                                        <?php echo $status_name; ?>
                                    </span>
                                </td>
                                <td class="text-center">
                                    <button type="submit" <?php echo $button_status; ?> name="edit" data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-danger"
                                        value="<?php echo $snoa[$pt] ?>" data-toggle="tooltip" title="Edit Product">
                                        <i class="fa fa-window-close-o"></i>
                                    </button>
                                    <!-- <button type="button" class="btn btn-sm btn-secondary" name="delete"   value="<?php echo $snoa[$pt] ?>" data-toggle="tooltip" title="Delete">
                                            <i class="fa fa-times"></i>
                                        </button> -->

                                </td>
                            </tr>
                            <!-- MODEL -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="col-sm-9">
                                                <p> Are You Sure Do You Want To cancle the Delivery </p>
                                            </div>


                                        </div>
                                        <form method="GET" action="product_cancel">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" name="submit_cancel" id="submit_cancel" value=" <?php echo $snoa[$pt]; ?>" class="btn btn-primary">Ok</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- MODEL -->
                            <?php } ?>

                        </tbody>
                    </table>

                </div>
                <div class="block-content">


                </div>
            </div>
            <!-- END Orders -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <?php include "footer.php"; ?>
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
   