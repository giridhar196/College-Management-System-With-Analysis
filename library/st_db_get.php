<?php
$sel_us_prof_st = "SELECT * FROM st_db WHERE email = '".$userData['email']."'";
    $run_sel_us_st=mysqli_query($conn,$sel_us_prof_st);
    while($row = mysqli_fetch_assoc($run_sel_us_st)) {
       $bAnC=$row["branch"];
       echo $bAnC;
       echo $userData['email']; 
    }
    ?>
    <script>
        console.log("gfjsdghfjsh");
        </script>