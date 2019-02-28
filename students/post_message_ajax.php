<?php  require_once("dbconnect.php");
    //post message
    if(isset($_POST['message'])){
        $message = $_POST['message'];
        $conversation_id = $_POST['conversation_id'];
        $user_form = $_POST['user_form'];
        $user_to = $_POST['user_to'];
 
        //decrypt the conversation_id,user_from,user_to
       $predat=date ('l jS \of F Y h:i:s A');
      $update_message_name = "UPDATE user_profile SET last_message='$user_to' WHERE regdno='$user_form'";
	$update_name=mysqli_query($conn,$update_message_name);
//  echo $message;
//  echo '</br>';
//  echo $conversation_id;
//  echo '</br>';
//  echo $user_form;
//  echo '</br>';
//  echo $user_to;
        //insert into `messages`
        $q = mysqli_query($conn, "INSERT INTO `messages` VALUES ('','$conversation_id','$user_form','$user_to','$message','$predat','$time','0','1')");
        if($q){
            echo "Posted";
        }else{
            echo "Error";
        }
    }
?>