<!-- <?php
include_once 'dbconnect.php';
$sql_stud = "SELECT * FROM `st_db` WHERE regdno='148x1a0532'";
$run_sql_stud=mysqli_query($conn,$sql_stud);  
if (mysqli_num_rows($run_sql_stud) > 0) {
    while($row = mysqli_fetch_assoc($run_sql_stud)) {
         $type = $row["admncat"];
         $uni_fee=$row["universityfee"];
         $bu_fu=$row["buildingfund"];
         $tu_fee=$row["tutionfee"];
         $ad_fee=$row["admission"];
// GET DATA FROM FEE MODULE
$i=0;
$type0='universityfee';
$type1='busfee';
$type4='buildingfund';
 $type2='tutionfee';
$type3='admissionfee';

for ($jm=0;$jm<5;$jm++){
    $sql_invoice = "SELECT * FROM `transaction` WHERE categoryfor='${"type$jm"}' AND semister='1-1' OR semister='1-2' AND regdno='148x1a0532'";
    $run_sql_invoice=mysqli_query($conn,$sql_invoice); 
    
    if (mysqli_num_rows($run_sql_invoice) > 0) {
       
        while($row = mysqli_fetch_assoc($run_sql_invoice)) {
      $sem = $row["semister"];
       $cate = $row["categoryfor"];
       $ordid = $row["order_id"];
       $crtd = $row["created"];
       $amt = $row["amount"];
       
     
      $cr[$i]=$cate;
       $or[$i]=$ordid;
       $semi[$i]=$sem;
       $crt[$i]=$crtd;
       $am[$i]=$amt;
       $i=$i+1;
        }
    }

}
    
}
} 
    
    // echo $am_[0]type[0];
?>
  
<?php  
 $tot_uf=0;
 $tot_bf=0;
 $tot_buf=0;
 $tot_af=0;
 $tot_tf=0;
for ($j=0;$j<4;$j++){
    echo $j;
    echo $cr[$j];
    echo $semi[$j];
    echo $or[$j];
    echo $crt[$j];
    echo $am[$j];
    if($cr[$j]==$type0){
        $tot_uf=$tot_uf+$am[$j];
    }
   if($cr[$j]==$type1){
       $tot_bf=$tot_bf+$am[$j];
   }
   if($cr[$j]==$type2){
    $tot_buf=$tot_buf+$am[$j];
}
if($cr[$j]==$type2){
    $tot_tf=$tot_tf+$am[$j];
}
    
    echo '</br>';
}
echo $tot_uf;
echo '</br>';
echo $tot_bf;
echo '</br>';
echo $tot_buf;
echo '</br>';
echo $tot_tf;
   
?> -->
<?php 
include "dbconnect.php";
$i=0;
$sql = "SELECT * FROM `comments` ";
$run_sql=mysqli_query($conn,$sql);
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
    $sub= $row["comment_subject"];
    $tex = $row["comment_text"];
    
   $subj[$i]=$sub;
   $text[$i]=$tex;
   $i++;
    }
}


    ?>
    <?php 
   if(isset($_POST["submit"])){
       $comm=$_POST[""];
     $query = "INSERT into `comments` (comment_subject) VALUES ('$comm')";
     $result = mysqli_query($conn,$query);
   }
     ?>