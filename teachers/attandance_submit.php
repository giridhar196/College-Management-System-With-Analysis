<?php 
include "dbconnect.php";
include "auth.php";
date_default_timezone_set('Asia/Kolkata');
$time = date('H:i:s');
$date = date('d-m-Y ');
if(isset($_POST['present']))  
{  
for($i=0;$i<8;$i++){
$valfi=$i;
$r1=$_POST["row_id"][$valfi];
}
?>