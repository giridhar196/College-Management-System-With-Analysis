<?php
include "dbconnect.php";
if(isset($_POST['allow'])){
    $sssno=$_POST['allow'];
  

   
$query = "UPDATE used_store SET  permission='1' WHERE id='$sssno'";
    $run_sel_us=mysqli_query($conn,$query);
   $suc="sucess";
  echo $suc;
  header('Location: allow_product.php');
}
if(isset($_POST['block'])){
    $sssno=$_POST['block'];
$query = "UPDATE used_store SET  permission='0' WHERE id='$sssno'";
    $run_sel_us=mysqli_query($conn,$query);
   $suc="sucess";
  echo $suc;
  echo "data came to block";
  header('Location: allow_product.php');
}
header('Location: allow_product.php');
?>