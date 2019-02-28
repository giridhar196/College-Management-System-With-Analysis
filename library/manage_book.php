<?php include "header.php";
 ?>

<script>

    function category(c_id) {
        $(".display-category").load("edit_book?bookid="+c_id);
    }
  
</script>

<?php
include "db_library.php";
if(isset($_POST['submit']))
{
$bookname=$_POST['book'];
$category=$_POST['category'];
$author=$_POST['author'];
$isbn=$_POST['isbn'];
$price=$_POST['price'];
$book_status=$_POST['name_of_status'];
$bookid=($_POST['bookid']);
$sql="update  tblbooks set BookName=:bookname,book_status=:book_status,CatId=:category,AuthorId=:author,ISBNNumber=:isbn,BookPrice=:price where id=:bookid";
$query = $dbh->prepare($sql);
$query->bindParam(':bookname',$bookname,PDO::PARAM_STR);
$query->bindParam(':book_status',$book_status,PDO::PARAM_STR);
$query->bindParam(':category',$category,PDO::PARAM_STR);
$query->bindParam(':author',$author,PDO::PARAM_STR);
$query->bindParam(':isbn',$isbn,PDO::PARAM_STR);
$query->bindParam(':price',$price,PDO::PARAM_STR);
$query->bindParam(':bookid',$bookid,PDO::PARAM_STR);
$query->execute();
// header('Location: manage_book.php');
}
?>
<?php
$i=0;
$msg='';
$sqlc = "SELECT COUNT(id) as coun FROM `tblbooks`";
$run_sqla=mysqli_query($conn,$sqlc);  
if (mysqli_num_rows($run_sqla) > 0) {
    while($row = mysqli_fetch_assoc($run_sqla)) {
        $coup = $row["coun"];
    }
}else{
    $msg="No Products Click On Add Product";
}
$sql = "SELECT * FROM `tblbooks`";
$run_sql=mysqli_query($conn,$sql);  
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
       $sno = $row["id"];
       $p_category = $row["CatId"];
       $p_author = $row["AuthorId"];  
       $p_isbn = $row["ISBNNumber"];
       $p_bookname =$row["BookName"];
       $p_price = $row["BookPrice"];
       $p_book_status = $row["book_status"];
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
       $p_b_s[$i]=$p_book_status;
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
                        <h1 class="h2 font-w700 text-white mb-10">Manage Books</h1>
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

            <?php if($msg==''){?>
            <!-- Dynamic Table Full Pagination -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Book Details<span class="text-danger">"0="Block,"1="Alive</span>
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
                                    <th  style="width: 5%;">Author</th>
                                    <th  style="width: 5%;">ISBN No</th>
                                    <th  style="width: 15%;">Category</th>
                                    <th  style="width: 15%;">Book Name</th>
                                    <th style="width: 15%;">Price</th>
                                    <th  style="width: 15%;">Book Status</th>
                                    <th class="text-center" style="width: 15%;">Change Status</th>

                                </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <?php for($pt=0;$pt<$coup;$pt++){
                                 
                                        ?>

                                
                                    <td class="text-center">

                                        <?php echo $snoa[$pt]; ?>
                                    </td>
                                    <td >
                                        <span class="badge badge-primary">
                                            <?php echo $pca[$pt]; ?>
                                        </span>
                                    </td>

                                    <td \>
                                        <?php echo $pc[$pt]; ?>
                                    </td>
                                    <td >
                                        <?php echo $pn[$pt]; ?>
                                    </td>
                                    <td >
                                        <?php echo $pbna[$pt]; ?>
                                    </td>
                                    <td >
                                        <?php echo $p_ri[$pt]; ?>
                                    </td>
                                    <td>
                                        <?php echo $p_b_s[$pt]; ?>
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
       