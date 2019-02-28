 <?php     
            $ye = '2018';
            $mo = '1';
            $avg_pre = 1;
            $avg_previous =1;
            $avg_presweek=5;
            $avg_previous_week=1;
            $new_inc=1;
          $sql =  "SELECT ROUND(AVG(amount)) as avgpre,SUM(price) as total FROM transaction WHERE MONTH(created)=$mo AND year(created)=$ye";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $t_month = $row["total"];
           $avg_pre = $row["avgpre"];
           
              }
            }        
          $sql =  "SELECT ROUND(AVG(amount)) as avgprevi FROM transaction WHERE MONTH(created)=12 AND year(created)=2017";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
          
           $avg_previous = $row["avgprevi"];
           
              }
            }
            $ot_month = average_calculate ( $avg_pre,$avg_previous );
            $avg_out = $ot_month[0];
            $clnam =  $ot_month[1];
            $maincla_mon = $ot_month[2];

         ?>

<?php 
$currweek = date('W');
$pre_week = $currweek-1;
$sql =  "SELECT  ROUND(AVG(amount)) as avgthis_week ,SUM(price) as total FROM `transaction` WHERE year(created)=$ye AND WEEK(created)=$currweek";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $t_week = $row["total"];
 $avg_presweek = $row["avgthis_week"];
 
    }
  }        
$sql =  "SELECT   ROUND(AVG(amount)) as avgprevious_week  FROM `transaction` WHERE year(created)=$ye AND WEEK(created)=$pre_week";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {

 $avg_previous_week = $row["avgprevious_week"];
 
    }
  }
  $ot_week = average_calculate ( $avg_presweek,$avg_previous_week );
  $avg_week = $ot_week[0];
  $clnam_week =  $ot_week[1];
  $maincla_week = $ot_week[2];
?>

<?php
function average_calculate ( $ab,$cd )
{
  if($ab >= $cd){
    $new_inc = $ab - $cd;
    $new_avg = (($new_inc/$cd)*100);
    $val1 = ROUND($new_avg);
     $val2 = "fa fa-caret-up";
     $val3= "font-w600 text-success";
    return  [$val1,$val2,$val3];
  } 
  else{
     $new_inc = $ab - $cd;
    $new_avg = (($new_inc/$cd)*100);
    $val1 = ROUND($new_avg);
    $val2 = "fa fa-caret-down";
    $val3 = "font-w600 text-danger";
   return  [$val1,$val2,$val3];
  
    }
 



  }


  ?>
<!-- STUDENTS COUNT -->
<?php     
           
          $sql =  "SELECT COUNT(sno) as t_students FROM st_db";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $c_students = $row["t_students"];
          
           
              }
            }        
         ?>
         <!-- STUDENT COUNT CLOSE -->
         <!-- SALES COUNT THIS YEAR -->
         <?php     
           
          $sql =  "SELECT COUNT(id) as sales_count,SUM(amount) as sales_cost FROM transaction WHERE year(created)";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $s_count = $row["sales_count"];
              $s_sales_cost =$row["sales_cost"];
           
              }
            }        
         ?>
         <!-- SALES COUNT THIS YEAR CLOSE -->
         