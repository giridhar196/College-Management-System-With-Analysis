<?php
include "dbconnect.php";
include "auth.php";
if(isset($_POST["submit"])){
 $nick = $_POST["mega-nick"]; 
 $goa = $_POST["mega-goal"];
 $pass = $_POST["mega-pass"];
 $mbio = $_POST["mega-bio"];
 $mcity = $_POST["mega-city"];
 $mvision = $_POST["mega-vision"];
 $str = $_POST["mega-strength"];
 $roa = $_POST["mega-role"];
 $hob = $_POST["mega-hobiee"];
 
	$u_p_u = "UPDATE user_profile SET nickname='$nick',achivements='$mbio',rolemodal='$roa',password='$pass',hobiees='$hob',location='$mcity',strength='$str',aim='win the nation',vision='$mvision',goal='$goa' WHERE regdno='$R_E_I_D'";
    $sql_i_p_u=mysqli_query($conn,$u_p_u);
    header('Location: profile.php');
}
?>