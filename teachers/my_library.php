<?php include "header.php"; ?>

<?php
$i=0;
$msg='';


?>
<script>
    function get(x) {
        var y = '<?php echo $R_E_I_D; ?>';
        console.log(y);
        $(".review_get").load("my_review.php?review_get=" + x +'&review_number=' + y);
    }
</script>
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
                    <h1 class="h2 font-w700 text-white mb-10">My Library Usage</h1>
                    <h2 class="h4 font-w400 text-white-op mb-0"></h2>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->
    <!-- Breadcrumb -->
    <div class="bg-body-light border-b">
        <div class="content py-5 text-center">
            <nav class="breadcrumb bg-body-light mb-0">
                <a class="breadcrumb-item" href="my_library">Library Usage</a>
                <span class="breadcrumb-item active">Usage</span>
            </nav>
        </div>
        <!-- Dynamic Table Full Pagination -->
    </div>
    <!-- END Breadcrumb -->
    <div class="content">
        <h2 class="content-heading">Overview</h2>

        <?php if($msg==''){?>
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Product Details
                    <small></small>
                </h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->

                <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                    <thead>
                        <tr>
                            <th class="text-center">P.Id</th>
                            <th>Book Name</th>
                            <th class="d-none d-sm-table-cell">Issued Date</th>
                            <th class="d-none d-sm-table-cell">Expected Return</th>
                            <th class="d-none d-sm-table-cell">Return Date</th>
                            <th class="d-none d-sm-table-cell">Fine</th>
                            
                            <th class="d-none d-sm-table-cell">Fine Status</th>
                            <th class="text-center" style="width: 15%;">Add/Edit Review</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php $sql = "SELECT tblissuedbookdetails.isbn_number as isbn_number,tblissuedbookdetails.fine_status as fine_status,tblissuedbookdetails.id as id,tblissuedbookdetails.issued_date as issued_date,tblissuedbookdetails.BookId,tblissuedbookdetails.expected_return as expected_return,tblbooks.BookName as bookname,tblissuedbookdetails.return_date as return_date,tblissuedbookdetails.fine as fine FROM `tblissuedbookdetails` INNER JOIN `tblbooks` ON tblissuedbookdetails.BookId=tblbooks.id WHERE tblissuedbookdetails.StudentID='$R_E_I_D'";
$run_sql=mysqli_query($conn,$sql);  
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
      echo "  <tr>
        <td class='text-center'>
           {$row['id']}
        </td>
        <td class='font-w600'>
        {$row['bookname']}
        </td>
        <td class='d-none d-sm-table-cell'>
        {$row['issued_date']}
        </td>
        <td class='d-none d-sm-table-cell'>
        {$row['expected_return']}
        </td>

        <td class='d-none d-sm-table-cell'>
        {$row['return_date']}
        </td>
        <td class='d-none d-sm-table-cell'>
            <span class='badge badge-primary'>
            {$row['fine']}
            </span>
        </td>
        <td class='d-none d-sm-table-cell'>
        {$row['fine_status']}
        </td>
        
        <td class='text-center'>
            <button type='button' name='edit' class='btn btn-sm btn-primary' onclick='get({$row['isbn_number']})' data-toggle='modal' data-target='#exampleModal'  data-toggle='tooltip'
                title='Edit Product'>
                <i class='fa fa-edit'></i>
            </button>
        </td>
    </tr>
   ";
      
    }
   }
   else{
    $msg="No Products Click On Add Product";
}
                                        ?>
                    </tbody>
                </table>

            </div>
        </div>
        <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Review on book</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='col-sm-12'>
                        <div class="review_get"></div>
                    </div>
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