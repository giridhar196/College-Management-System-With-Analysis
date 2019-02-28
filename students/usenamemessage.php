<?php
    require_once("dbconnect.php");
    if(isset($_GET['b_id'])){
        //get the conversation id and
        $conversation_id = $_GET['b_id'];
        //fetch all the messages of $user_id(loggedin user) and $user_two from their conversation
       
 
                //get name and image of $user_form from `user` table
                $user = mysqli_query($conn, "SELECT * FROM `users` WHERE regno='$conversation_id'");
                $user_fetch = mysqli_fetch_assoc($user);
                $user_form_username = $user_fetch['first_name'];
                $reg_no=$user_fetch['regno'];
                
                echo  "<div class='messageto'>
               
               {$user_form_username} {$conversation_id}
                </div>";
 
                //display the message
               
            
        }
    
 
?>
