<?php include "header.php"; ?>

<?php
$i=0;
$msg='';
$sqlc = "SELECT COUNT(id) as coun FROM `blog` WHERE auth = '".$userData['oauth_uid']."'";
$run_sqla=mysqli_query($conn,$sqlc);  
if (mysqli_num_rows($run_sqla) > 0) {
    while($row = mysqli_fetch_assoc($run_sqla)) {
        $coup = $row["coun"];
    }
}else{
    $msg="No Products Click On Add Product";
}
$sql = "SELECT * FROM `blog` WHERE auth = '".$userData['oauth_uid']."'";
$run_sql=mysqli_query($conn,$sql);  
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
       $sno = $row["id"];
       $p_name = $row["title"];
       $p_cat = $row["category"];  
       $p_cost = $row["visible"];
       $pd_post = $row["short_desciption"];
       $p_quant = $row["dateofpost"];
      

       $snoa[$i]=$sno;
       $pn[$i]=$p_name;
       $pca[$i]=$p_cat;
       $pc[$i]=$p_cost;
       $dt[$i]=$pd_post;
       $pq[$i]=$p_quant;       
       $i=$i+1;
    }
   }
   else{
    $msg="No Products Click On Add Product";
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
                        <h1 class="h2 font-w700 text-white mb-10">Blog</h1>
                        <h2 class="h4 font-w400 text-white-op mb-0">You currently have
                            <?php echo $coup ?> in the Blog!</h2>
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
                    <span class="breadcrumb-item active">My Blog's</span>
                </nav>
            </div>
        </div>
        <!-- END Breadcrumb -->
        <div class="content">
            <h2 class="content-heading">Overview</h2>
            <div class="row gutters-tiny">
                <!-- All Products -->
                <div class="col-md-6 col-xl-6">
                    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full block-sticky-options">
                            <div class="block-options">
                                <div class="block-options-item">
                                    <i class="fa fa-circle-o fa-2x text-info-light"></i>
                                </div>
                            </div>
                            <div class="py-20 text-center">
                                <div class="font-size-h2 font-w700 mb-0 text-info" data-toggle="countTo" data-to="<?php echo $coup ?>">0</div>
                                <div class="font-size-sm font-w600 text-uppercase text-muted">All Blogs</div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- END All Products -->






                <!-- Add Product -->
                <div class="col-md-6 col-xl-6">
                    <a class="block block-rounded block-link-shadow" href="blog_new">
                        <div class="block-content block-content-full block-sticky-options">
                            <div class="block-options">
                                <div class="block-options-item">
                                    <i class="fa fa-archive fa-2x text-success-light"></i>
                                </div>
                            </div>
                            <div class="py-20 text-center">
                                <div class="font-size-h2 font-w700 mb-0 text-success">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <div class="font-size-sm font-w600 text-uppercase text-muted">New Blog</div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- END Add Product -->
            </div>
            <?php if($msg==''){?>
            <!-- Dynamic Table Full Pagination -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Product Details
                        <small></small>
                    </h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->
                    <form action="blog_edit" method="GET">
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                            <thead>
                                <tr>
                                    <th class="text-center">P.Id</th>
                                    <th>Title</th>
                                    <th class="d-none d-sm-table-cell">Short_description</th>
                                    <th class="d-none d-sm-table-cell" style="width: 15%;">Date Of Posted</th>
                                    <th class="d-none d-sm-table-cell" style="width: 15%;">Category</th>
                                    <th class="d-none d-sm-table-cell" style="width: 15%;">Visible to</th>
                                    <th class="text-center" style="width: 15%;">Edit Product</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php for($pt=0;$pt<$coup;$pt++){
                                        ?>

                                <tr>
                                    <td class="text-center">
                                        <?php echo $snoa[$pt] ?>
                                    </td>
                                    <td class="font-w600">
                                        <?php echo $pn[$pt] ?>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <?php echo $dt[$pt] ?>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <?php echo $pq[$pt] ?>
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
                                        <button type="submit" name="edit"  class="btn btn-sm btn-secondary" value="<?php echo $snoa[$pt] ?>" data-toggle="tooltip"
                                            title="Edit Product">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-secondary" name="delete"  value="<?php echo $snoa[$pt] ?>" data-toggle="tooltip" title="Delete">
                                            <i class="fa fa-times"></i>
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