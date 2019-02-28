<?php
$cat="";
$message='';

$sqlc = "SELECT * FROM `blog` WHERE permission ='0' ORDER BY id DESC";
$run_sqla=mysqli_query($conn,$sqlc);  
$l=0;
echo $cat;
if (mysqli_num_rows($run_sqla) > 0) {
    while($row = mysqli_fetch_assoc($run_sqla)) {
        $p_idv = $row["id"];
        $p_title = $row["title"];
        $p_category = $row["category"];
        $p_visible = $row["visible"];
        $p_short = $row["short_desciption"];
        $p_head = $row["header_link"];
        $p_dop = $row["dateofpost"];
        $p_by = $row["p_by"];
        $p_per = $row["permission"];
        $p_idva[$l]=$p_idv;
        $p_titlea[$l]=$p_title;
        $p_categorya[$l]=$p_category;
        $p_visiblea[$l]=$p_visible;
        $p_shorta[$l]=$p_short;
        $p_heada[$l]=$p_head;
        $p_dopa[$l]=$p_dop;
        $p_bya[$l]=$p_by;
        $l=$l+1;
    }
}
else{
    $message="No Posts Found";
}
$sqlco = "SELECT COUNT(*) AS cou FROM `blog` WHERE permission ='0'";
$run_sqlac=mysqli_query($conn,$sqlco);  

if (mysqli_num_rows($run_sqlac) > 0) {
    while($row = mysqli_fetch_assoc($run_sqlac)) {
        $number=$row['cou'];
    }
}
else{
    $message="No Posts Found";
}
if(isset($_GET['category']))  {
    $cat=$_GET['category'];
    $sqlc = "SELECT * FROM `blog` WHERE category = '$cat' AND permission ='0' ORDER BY id DESC";
    $run_sqla=mysqli_query($conn,$sqlc);  
    $l=0;
    echo $cat;
    if (mysqli_num_rows($run_sqla) > 0) {
        while($row = mysqli_fetch_assoc($run_sqla)) {
            $p_idv = $row["id"];
            $p_title = $row["title"];
            $p_category = $row["category"];
            $p_visible = $row["visible"];
            $p_short = $row["short_desciption"];
            $p_head = $row["header_link"];
            $p_dop = $row["dateofpost"];
            $p_by = $row["p_by"];
            $p_per = $row["permission"];
            $p_idva[$l]=$p_idv;
            $p_titlea[$l]=$p_title;
            $p_categorya[$l]=$p_category;
            $p_visiblea[$l]=$p_visible;
            $p_shorta[$l]=$p_short;
            $p_heada[$l]=$p_head;
            $p_dopa[$l]=$p_dop;
            $p_bya[$l]=$p_by;
            $l=$l+1;
        }
    }
    else{
        $message="No Posts Found";
    }
    $sqlco = "SELECT COUNT(*) AS cou FROM `blog` WHERE category = '$cat' AND permission ='0'";
        $run_sqlac=mysqli_query($conn,$sqlco);  
    
    if (mysqli_num_rows($run_sqlac) > 0) {
        while($row = mysqli_fetch_assoc($run_sqlac)) {
            $number=$row['cou'];
        }
    }
    else{
        $message="No Posts Found";
    }
}
?>
