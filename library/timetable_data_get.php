<?php 
include "dbconnect.php";
$allow='';
if(isset($_POST['f-sem']))  
{  
    $allow="allow";
$s_e_m=$_POST['f-sem'];
$sql = "SELECT * FROM `time_table` WHERE branch='$B_R_A_N_C_H' AND semister='$s_e_m'";
$run_sql=mysqli_query($conn,$sql);
$i=0;
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
        $row_id=$row["id"];
    $row1= $row["row_1"];
    $row2 = $row["row_2"];
    $row3 = $row["row_3"];
    $row4 = $row["row_4"];
    $row5 = $row["row_5"];
    $row6 = $row["row_6"];
    $row7 = $row["row_7"];
    $row8 = $row["row_8"];
    $row9 = $row["row_9"];
    $row_arrid[$i] = $row_id;
    $row_ar1[$i] = $row1;
    $row_ar2[$i] = $row2;
    $row_ar3[$i] = $row3;
    $row_ar4[$i] = $row4;
    $row_ar5[$i] = $row5;
    $row_ar6[$i] = $row6;
    $row_ar7[$i] = $row7;
    $row_ar8[$i] = $row8;
    $row_ar9[$i] = $row9;
    $i++;
    }
}
}

    ?>