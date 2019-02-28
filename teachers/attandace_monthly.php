<?php include "header.php"; ?>
<!-- Main Container -->
<?php
if(isset($_GET['trans'])){
$semister_monthly=$_GET['f-sem'];
$semister_section=$_GET['f-sec'];
$semister_branch=$_GET['f-bra'];
$semister_sub_type=$_GET['f-pe'];
$semister_no_of_classes=$_GET['f-classes'];
$semister_date_from=$_GET['example-daterange1'];
$semister_date_to=$_GET['example-daterange2'];
}
?>
<main id="main-container">
    <!-- Page Content -->
    <div class="content">
        <!-- Default Table Style -->


        <!-- Table Head Default -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Date
                    <?php echo $semister_date_from; echo "to"; echo $semister_date_to;?>
                </h3>
                <div class="block-options">
                    <div class="block-options-item">
                        <code>.thead-default</code>
                    </div>
                </div>
            </div>
            <div class="block-content">
                <table class="table table-vcenter" align="center">
                    <thead class="thead-default">
                        <tr>
                            <th class="text-center" style="width: 15px;">#</th>
                            <th style="width: 55%;">Name</th>
                            <th class="d-sm-table-cell" style="width: 10%;">Present</th>
                            <th class="text-center" style="width: 20%;">Total</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
$sqlc = "SELECT * FROM `students`";
$run_sqla=mysqli_query($conn,$sqlc);  
$i=1;
if (mysqli_num_rows($run_sqla) > 0) {
   
    while($row = mysqli_fetch_assoc($run_sqla)) {
        $p_idv = $row["registration_number"];
        
        
        echo " <form method='POST' action='attandance_post'>
        <input type='hidden' value='$semister_monthly' name='sem'>
        <input type='hidden' value='$semister_section' name='section'>
        <input type='hidden' value='$semister_branch' name='branch'>
        <input type='hidden' value='$semister_date_from' name='from'>
        <input type='hidden' value='$semister_date_to' name='to'>
        <input type='hidden' value='$semister_no_of_classes' name='no_of_classes'>
        <tr>
        <th class='text-center' scope='row'>{$i}</th>
        <input type='hidden' name='count' value='{$i}' >
        <td>{$p_idv}</td>
        <input type='hidden' value='{$p_idv}' name='student_id{$i}'>
        <td class='d-sm-table-cell'>
            <input type='number' required class='form-control' id='r1'  name='nop{$i}'>
        </td>
        <td class='d-sm-table-cell'>
            <input type='text' disabled class='form-control' id='total' value='out of {$semister_no_of_classes} Classes' >
        </td>
        
    </tr>
   
   ";
    $i=$i+1;
    }
    echo "
    <input type='submit' class='btn-block-option' name='submit'>
    <form>";
}  

        ?>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Table Head Default -->


        <!-- END Default Table Style -->
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