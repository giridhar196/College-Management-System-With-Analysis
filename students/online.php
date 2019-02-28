<script>
console.log("hi");
</script>

<?php include "dbconnect.php";
  if(isset($_GET['ido_id'])){ 
  $na=$_GET['ido_id'];
        //fetch all the messages of $user_id(loggedin user) and $user_two from their conversation
        $q = mysqli_query($conn, "SELECT * FROM `users` WHERE regno!='$na'");
        //check their are any messages
        if(mysqli_num_rows($q) > 0){
            while ($m = mysqli_fetch_assoc($q)) {
                //format the message and display it to the user
                $user_form = $m['first_name'];
                $user_to = $m['regno'];
                $message = $m['picture'];
   echo "             
<ul class='nav-users push'>
    <li>
        <a href='message.php?id={$user_to}'>
            <img class='img-avatar' src='{$message}'alt='>
            <i class='fa fa-circle text-success'></i> {$user_form}
            <div class='font-w400 font-size-xs text-muted'>{$user_to}</div>
        </a>
    </li>
</ul>";
            }
        }
    }