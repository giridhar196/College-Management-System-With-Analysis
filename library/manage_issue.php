<?php include "header.php";
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
                    <h1 class="h2 font-w700 text-white mb-10">Over All Issued Books</h1>
                    <h2 class="h4 font-w400 text-white-op mb-0">Issued Books Lobby!</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->
    <!-- Breadcrumb -->
    <div class="bg-body-light border-b">
        <div class="content py-5 text-center">
            <nav class="breadcrumb bg-body-light mb-0">
                <a class="breadcrumb-item" href="#">Over All Issue</a>
                <span class="breadcrumb-item active">Issued</span>
            </nav>
        </div>
    </div>
    <!-- END Breadcrumb -->
    <div class="content">
        <h2 class="content-heading">Overview</h2>


        <!-- Dynamic Table Full Pagination -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Book Issue Details <span class="text-danger">"0="Returned,"1="Issued</span>
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
                                <th class="d-none d-sm-table-cell" style="width: 5%;">Book Id</th>
                                <th >Student Id</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Issued Date</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Expected Return</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Return Date</th>
                                <th>Return Status</th>
                                <th >Book Name</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php

                                $sql = "SELECT * FROM `tblissuedbookdetails`";
                                $run_sql=mysqli_query($conn,$sql);  
                                if (mysqli_num_rows($run_sql) > 0) {
                                    while($row = mysqli_fetch_assoc($run_sql)) {
                                        $book_id=$row['BookId'];
                                        $sql_name = "SELECT * FROM `tblbooks` WHERE id='$book_id'";
                                $run_sql_name=mysqli_query($conn,$sql_name);  
                                if (mysqli_num_rows($run_sql_name) > 0) {
                                    while($name = mysqli_fetch_assoc($run_sql_name)) {
                                        
                                        
echo" <tr> 
<td class='text-center'>

{$row['id']} 
</td>
<td class='d-none d-sm-table-cell'>
<span class='badge badge-primary'>
    {$row['BookId']} 
</span>
</td>

<td >
{$row['StudentID']} 
</td>
<td class='d-none d-sm-table-cell'>
{$row['issued_date']} 
</td>
<td class='d-none d-sm-table-cell'>
{$row['expected_return']} 
</td>
<td class='d-none d-sm-table-cell'>
{$row['ReturnDate']} 
</td>
<td >
{$row['RetrunStatus']} 
</td>
<td >
{$name['BookName']} 

</td>

</tr> ";

                  }}   }} ?>
                                </tr>
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