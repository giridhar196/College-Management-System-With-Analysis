 <?php
 include "dbconnect.php";
if(isset($_GET['submit_cancel'])){
    $id_cancel=$_GET['submit_cancel'];
    $query_cancel = "UPDATE used_store SET sold='0' WHERE id = '$id_cancel'";
    $run_cancel=mysqli_query($conn,$query_cancel);
    header('Location: statistic_usedstore');
}
?>