<?php include "auth.php";
 if(isset($_GET['id'])){
$idp=$_GET['id'];
echo "data came";
$buttonname=$_GET['button'];
$val=$_GET['ps'];



 if($buttonname=='attandance'){
     $up_bt="attandance";
 }
 elseif($buttonname=='edit'){
    $up_bt="edit";
 }
 elseif($buttonname=='store'){
    $up_bt="store";
 }
 elseif($buttonname=='radius_access'){
    $up_bt="radius_access";
 }
 elseif($buttonname=='blog'){
    $up_bt="blog";
 }
 elseif($buttonname=='fee'){
    $up_bt="fee";
 }
 echo $up_bt;
 echo "</br>";
 echo $buttonname;
if($val==1){
    $val=0;

}else{
    $val=1;
}
$update_radius = "UPDATE radius SET $up_bt='$val' WHERE id='$idp' ";
	$update_radius_sq=mysqli_query($conn,$update_radius);
    header('Location: radius.php');
}


