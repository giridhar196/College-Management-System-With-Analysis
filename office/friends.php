 <?php 
 include"dbconnect.php";
 $i=0;
 $sql_friends_count = "SELECT COUNT(id) as co FROM `users`";
 $run_sql_friends_count=mysqli_query($conn,$sql_friends_count); 
 if (mysqli_num_rows($run_sql_friends_count) > 0) {
     while($row = mysqli_fetch_assoc($run_sql_friends_count)) {
   $cou = $row["co"];
 
     }
     
     if($cou == 1){
         $cv = 1;
     }
     else{
         $cv=3;
     }
 }
 
 $sql_friends = "SELECT * FROM `users` ";
    $run_sql_friends=mysqli_query($conn,$sql_friends); 
    if (mysqli_num_rows($run_sql_friends) > 0) {
        while($row = mysqli_fetch_assoc($run_sql_friends)) {
      $uname = $row["first_name"];
     $fr_regdno=$row["regno"];
     $img=$row["picture"];
     $un_arr[$i]=$uname;
     $rg_arr[$i]=$fr_regdno;
     $rg_pro[$i]=$img;
       $i=$i+1;
        }
    }
    $sql_profile = "SELECT * FROM `st_db` WHERE regdno='$R_E_I_D'";
    $run_sql_profile=mysqli_query($conn,$sql_profile); 
    if (mysqli_num_rows($run_sql_friends) > 0) {
        while($row = mysqli_fetch_assoc($run_sql_profile)) {
      $name = $row["nameofstudent"];
     $phone=$row["cellno"];
     $address=$row["address"];
     $email=$row["email"];
     $rollnumber=$row["regdno"];
     $admnno=$row["admnno"];
     $dob=$row["dob"];
     $aadharnumber=$row["aadharno"];
     $semister=$row["semister"];
     $branch=$row["branch"];
        }
    }
    ?>