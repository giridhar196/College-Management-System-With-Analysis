<?php 
include "dbconnect.php";
include "auth.php";
date_default_timezone_set('Asia/Kolkata');
$time = date('H:i:s');
$date = date('d-m-y ');
if(isset($_POST['row_id1']))  
{  
for($i=0;$i<7;$i++){
$valfi=$i;
$r1=$_POST["row_id"][$valfi];
$r2=$_POST["row_2"][$valfi];
$r3=$_POST["row_3"][$valfi];
$r4=$_POST["row_4"][$valfi];
$r5=$_POST["row_5"][$valfi];
$r6=$_POST["row_6"][$valfi];
$r7=$_POST["row_7"][$valfi];
$r8=$_POST["row_8"][$valfi];
$r9=$_POST["row_9"][$valfi];

$sqlupdate_table="UPDATE time_table SET row_2='$r2',row_3='$r3',row_4='$r4',row_5='$r5',row_6='$r6',row_7='$r7',row_8='$r8',row_9='$r9',updatedtime='$time',updateddate='$date',updatedby='$N_A_M_E' WHERE id='$r1'";
$result_update_table=mysqli_query($conn,$sqlupdate_table);

}
}
header('Location: time_table_fetch.php');

?>