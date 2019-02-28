<?php 
    require_once("dbconnect.php");
    if(isset($_GET['c_id'])){
        //get the conversation id and
        $conversation_id = $_GET['c_id'];
        //fetch all the messages of $user_id(loggedin user) and $user_two from their conversation
        $q = mysqli_query($conn, "SELECT * FROM `messages` WHERE conversation_id='$conversation_id'");
        //check their are any messages
        if(mysqli_num_rows($q) > 0){
            while ($m = mysqli_fetch_assoc($q)) {
                //format the message and display it to the user
                $user_form = $m['user_from'];
                $user_to = $m['user_to'];
                $message = $m['message'];
                $time_g = $m['time_date'];
                
                //get name and image of $user_form from `user` table
                $user = mysqli_query($conn, "SELECT * FROM `user_profile` WHERE regdno='$user_form'");
                $user_fetch = mysqli_fetch_assoc($user);
                $user_form_username = $user_fetch['name'];
             
              $user_message_update = "UPDATE messages SET status_other='0' WHERE user_from='$user_to' AND user_to='$user_form'";
                $user_message_update_submit = mysqli_query($conn,$user_message_update);
             
             
              if($user_to!=$user_form){
                  $colour="text-left w-55 p-10 bg-primary-lighter text-primary-darker rounded";
                  $namecolour="font-size-sm font-italic text-muted text-center mt-20 mb-10";
              }
              else{
                  $colour="text-right w-30 p-10 bg-body-light text-primary-darker-right rounded";
                  $namecolour="font-size-sm font-italic text-muted text-right mt-20 mb-10";
              }
            //    <p class="ml-50 bg-primary-lighter text-primary-darker">Hi Hello </p>
                //display the message
                
       
                echo "
                            <div class='rounded font-w600 p-10 mb-10 animated'>
                           
                                <div class='text-con'>
                                    <a class='$namecolour' href='#''>{$user_form_username} ({$time_g})</a>
                                    <p class='$colour'>{$message}</p>
                                </div>
                            </div>
                           ";
 
            }
        }else{
            echo "No Messages";
        }
    }


 
?>

