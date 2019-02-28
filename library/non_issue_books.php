<?php include "header.php";
 ?>


<?php
$i=0;
$msg='';



$sqlc = "SELECT COUNT(id) as coun FROM `tblbooks` WHERE book_issue_status='1'";
$run_sqla=mysqli_query($conn,$sqlc);  
if (mysqli_num_rows($run_sqla) > 0) {
    while($row = mysqli_fetch_assoc($run_sqla)) {
        $coup = $row["coun"];
        
    }
}else{
    $msg="No Products Click On Add Product";
}
$sql = "SELECT * FROM `tblbooks` WHERE book_issue_status='1' ";
$run_sql=mysqli_query($conn,$sql);  
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
       $sno = $row["id"];
       $p_category = $row["CatId"];
       $p_author = $row["AuthorId"];  
       $p_isbn = $row["ISBNNumber"];
       $p_bookname =$row["BookName"];
       $p_price = $row["BookPrice"];
    //    category
       $sql_cat = "SELECT * FROM `tblcategory` WHERE id='$p_category'";
    $run_sql_cat=mysqli_query($conn,$sql_cat);  
    while($row = mysqli_fetch_assoc($run_sql_cat)) {
    $p_c_category=$row["CategoryName"];
    // category
    $sql_aut = "SELECT * FROM `tblauthors` WHERE id='$p_author'";
    $run_sql_aut=mysqli_query($conn,$sql_aut);  
    while($row = mysqli_fetch_assoc($run_sql_aut)) {
    $p_a_author=$row["AuthorName"];
       $snoa[$i]=$sno;
       $pn[$i]=$p_c_category;
       $pca[$i]=$p_a_author;
       $pbna[$i]=$p_bookname;
       $pc[$i]=$p_isbn;
       $p_ri[$i]=$p_price;
       $i=$i+1;
    }
    
}
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
                        <h1 class="h2 font-w700 text-white mb-10">Manage Books Non Issue</h1>
                        <h2 class="h4 font-w400 text-white-op mb-0">currently have
                            <?php echo $coup ?> in the Books Lobby!</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->
        <!-- Breadcrumb -->
        <div class="bg-body-light border-b">
            <div class="content py-5 text-center">
                <nav class="breadcrumb bg-body-light mb-0">
                    <a class="breadcrumb-item" href="manage_book">Books List</a>
                    <span class="breadcrumb-item active">Books</span>
                </nav>
            </div>
        </div>
        <!-- END Breadcrumb -->
        <div class="content">
            <h2 class="content-heading">Overview</h2>


            <!-- Dynamic Table Full Pagination -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Book Details
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
                                    <th lass="d-none d-sm-table-cell" style="width: 5%;">Author</th>
                                    <th class="d-none d-sm-table-cell" style="width: 5%;">ISBN No</th>
                                    <th class="d-none d-sm-table-cell" style="width: 15%;">Category</th>
                                    <th class="d-none d-sm-table-cell" style="width: 15%;">Book Name</th>
                                    <th class="d-none d-sm-table-cell" style="width: 15%;">Price</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <?php for($pt=0;$pt<$coup;$pt++){
                                 
                                        ?>


                                    <td class="text-center">

                                        <?php echo $snoa[$pt]; ?>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge badge-primary">
                                            <?php echo $pca[$pt]; ?>
                                        </span>
                                    </td>

                                    <td class="d-none d-sm-table-cell">
                                        <?php echo $pc[$pt]; ?>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <?php echo $pn[$pt]; ?>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <?php echo $pbna[$pt]; ?>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <?php echo $p_ri[$pt]; ?>
                                    </td>


                                </tr>

                                <?php } ?>

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
            <!-- END Dynamic Table Full Pagination -->

        </div>
        <!-- END Page Content -->
    </main>

    <!-- END Main Container -->


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