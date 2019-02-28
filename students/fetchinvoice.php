<!-- <?php  
include_once 'dbconnect.php';

$msg='';
$sql = "SELECT * FROM `st_db` WHERE branch='cse' AND regdno='148X1A0532'";
$run_sql=mysqli_query($conn,$sql);
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
    $name= $row["nameofstudent"];
    $addr = $row["address"];
    $phone = $row["cellno"];
    $mail = $row["email"];
$i=0;
    $sql = "SELECT * FROM `transaction` WHERE categoryfor='University' AND semister='1-1' OR semister='1-2' AND regdno='148x1a0532'";
    $run_sql=mysqli_query($conn,$sql);  
    if (mysqli_num_rows($run_sql) > 0) {
        while($row = mysqli_fetch_assoc($run_sql)) {
      
       $cate = $row["categoryfor"];
       $ordid = $row["order_id"];
       $crtd = $row["created"];
       $amt = $row["amount"];
       $am[$i]=$amt;
       $i=$i+1;
        }
          $tot=0;
        for ($j=0;$j<$i;$j++){
            $tot=$tot+$am[$j];
        }
       
        $abc = "SELECT * FROM `st_db` WHERE  regdno='148x1a0532'";
        $run_abc=mysqli_query($conn,$abc);  
        while($row = mysqli_fetch_assoc($run_abc)) {
         $u_f = $row["universityfee"];
         echo "total:  ";
         echo $u_f;
         echo "</br> remaining: ";
         $res_ult=$u_f-$tot;
         echo $res_ult;
        }
        
    }
   
    
}
$msg = "Bill Entered Successfully on order id";
}


?>  -->
<?php 
include_once 'auth.php';
include_once 'dbconnect.php';
$au_num=$userData['oauth_uid'];
$sql_oa = "SELECT * FROM `users` WHERE  oauth_uid='$au_num'";
$run_sql_oa=mysqli_query($conn,$sql_oa);  
while($row = mysqli_fetch_assoc($run_sql_oa)) {
    $u_f = $row["oauth_uid"];
}
?>