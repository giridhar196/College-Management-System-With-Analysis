<?php   
require_once "dbconnect.php";
require_once "auth.php";
if(isset($_POST['submit'])){
  $fname=$userData['first_name'];
  $email=$userData['email'];
  $gender=$userData['gender'];
  $oauth=$userData['oauth_uid'];
$address=$_POST['wizard-validation-material-bio'];
$location=$_POST['wizard-validation-material-location'];
$blood=$_POST['wizard-validation-material-blood'];
$branch=$_POST['wizard-validation-material-branch'];
$sem=$_POST['wizard-validation-material-semister'];
$sec=$_POST['wizard-validation-material-section'];
$reg=$_POST['wizard-validation-material-regdno'];
$dateof=$_POST['example-masked2-date1'];
$phone=$_POST['example-masked2-phone'];
$reglu=$_POST['wizard-validation-material-regulation'];
$query = "UPDATE st_db SET branch='$branch',cellno='$phone',regulation='$reglu',nameofstudent='$fname', admncat='spot',email = '$email', created = '".date("Y-m-d H:i:s")."',regdno='$reg',bloodgroup='$blood', universityfee='2500',admission='900',address='$address',dob='$dateof',semister='$sem',buildingfund='1000',tutionfee='0',position='student' WHERE email='$email'";
$run_sel_us=mysqli_query($conn,$query);
$qu_up = "UPDATE users SET terms='1' WHERE oauth_uid='$oauth'";
$run_up=mysqli_query($conn,$qu_up);
header('Location: index.php');
}

?>