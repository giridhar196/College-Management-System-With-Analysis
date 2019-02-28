<?php include "dbconnect.php";

$reg=$_GET['re'];
$sql2="SELECT * FROM messages WHERE status_other = 1 AND user_to='$reg'";
$resultm=mysqli_query($conn, $sql2);
$countm=mysqli_num_rows($resultm);
print $countm;

?>
