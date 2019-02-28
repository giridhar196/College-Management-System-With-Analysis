 <?php 
 include"dbconnect.php";
 $i=0; 
    $sql_profile = "SELECT * FROM `library_user`";
    $run_sql_profile=mysqli_query($conn,$sql_profile); 
    if (mysqli_num_rows($run_sql_friends) > 0) {
        while($row = mysqli_fetch_assoc($run_sql_profile)) {
      $name = $row["nameofstudent"];
     $phone=$row["cellno"];
     $address=$row["address"];
     $email=$row["email"];
     $rollnumber=$row["regdno"];
    
     $dob=$row["dob"];
     $aadharnumber=$row["aadharno"];
    
     $branch=$row["branch"];
        }
    }
    ?>