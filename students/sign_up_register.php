<?php include "dbconnect.php";
if(isset($_GET['gmail'])){
    $email=$_GET['gmail'];
    $reg=$_GET['regno'];
    $sql_branch = "SELECT * FROM `st_db` WHERE email='$email' AND regdno='$reg'";
$run_sql_branch=mysqli_query($conn,$sql_branch);  
if (mysqli_num_rows($run_sql_branch) > 0) {
    header('Location: login.php');
}
else{
    $sql_radius = "INSERT INTO st_db (email,regdno) VALUES ('$email','$reg')";  
    $run_sql_radius=mysqli_query($conn,$sql_radius);  
    header('Location: login.php');
}



}
?>