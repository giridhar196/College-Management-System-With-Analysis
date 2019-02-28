<?php include  "header.php"; ?>
<script src="assets/js/plugins/ajax/jquery.min.js"></script>

<style>
 .display-online {
        height: 390px;
        overflow-y: scroll;
    }
   
    .display-message {
        height: 390px;
        overflow-y: scroll;
    }
</style>


<script>
 setTimeout(
            function () {
                var elem = document.getElementById('display-message');
                elem.scrollTop = elem.scrollHeight;

            },
            3000);
    function submit() {
        setTimeout(
            function () {
                var elem = document.getElementById('display-message');
                elem.scrollTop = elem.scrollHeight;

            },
            3000);
    }
    
    $(document).ready(function () {
   $("#message").keyup(function(event) {
   console.log("data key reaches");
    if (event.keyCode === 13) {
        $("#reply").click();
    }
});
 });
 
 
 
 
 
</script>

<main id="main-container">

<div class="bg-primary">
                    <div class="bg-pattern bg-black-op-25" style="background-image: url('assets/img/various/bg-pattern.png');">
                        <div class="content text-center">
                            <div class="pt-50 pb-20">
                                
                            </div>
                        </div>
                    </div>
                </div>
    <?php
                //check $_GET['id'] is set
                if(isset($_GET['id'])){
                    $user_two =  $_GET['id'];
                    
                    //check $user_two is valid
                   
                    $sql_stud =  "SELECT `id` FROM `users` WHERE regno='$R_E_I_D' AND regno!='$user_two'";
                    $run_sql_stud=mysqli_query($conn,$sql_stud);  
                    
                    if (mysqli_num_rows($run_sql_stud) == 1) {
                    //valid $user_two
                    while($row = mysqli_fetch_assoc($run_sql_stud)) {
                        $p_regid = $row["id"];
                   
                   
                    }
                        //check $user_id and $user_two has conversation or not if no start one
                        $conver = mysqli_query($conn, "SELECT * FROM `conversation` WHERE (user_one='$R_E_I_D' AND user_two='$user_two') OR (user_one='$user_two' AND user_two='$R_E_I_D')");
 
                        //they have a conversation
                        if(mysqli_num_rows($conver) == 1){
                          
                            //fetch the converstaion id
                            $fetch = mysqli_fetch_assoc($conver);
                            $conversation_id = $fetch['id'];
                           
                        }else{ //they do not have a conversation
                            //start a new converstaion and fetch its id
                           
                            $q = mysqli_query($conn, "INSERT INTO `conversation` VALUES ('','$R_E_I_D','$user_two')");
                            $conversation_id = mysqli_insert_id($conn);
                            
                          
                        }
                    }else{
                        echo "no user";
                        // die("Invalid $_GET ID.");
                    }
                }else {
                    die("Click On the Person to start Chating.<a href='message.php?id=148x1a0501'>Click");
                }
            ?>
            
        <div class="js-chat-container content content-full invisible" data-toggle="appear" data-chat-height="auto">
            <!-- Multiple Chat (auto height) -->
            <div class="block mb-0">
                <ul class="js-chat-head nav nav-tabs nav-tabs-alt bg-body-light" data-toggle="tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#chat-window1">

                            <div class="display-name" id="display-name"></div>
                           
                        </a>
                    </li>

                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="#chat-people">
                            <i class="si si-users"></i>
                        </a>
                    </li>
                </ul>
                <div class="tab-content overflow-hidden">

                    <!-- /display message -->
                    <!-- Chat Window #1 -->
                    <div class="tab-pane fade show active" id="chat-window1" role="tabpanel">
                        <input type="hidden" id="conversation_id" value="<?php echo $conversation_id; ?>">
                        <input type="hidden" id="user_form" value="<?php echo $R_E_I_D; ?>">
                        <input type="hidden" id="user_to" value="<?php echo $user_two; ?>">
                       
                            <div class="display-message block-content block-content-full text-wrap-break-word overflow-y-auto" id="display-message"></div>
                        
                        <div class="js-chat-form block-content block-content-full block-content-sm bg-body-light">
                            <div class="input-group">
                                <input class="form-control" id="message" name="message" type="text" data-target-chat-id="4" placeholder="Type your message..">

                                <span class="input-group-btn">
                                    <button type="button" onclick="submit();" id="reply" class="btn btn-secondary">
                                        <i class="fa fa-arrow-right"></i>
                                    </button>
                                </span>

                            </div>
                        </div>
                        <span id="error"></span>
                        <!-- END Chat Input -->
                    </div>
                    <!-- END Chat Window #1 -->



                    <!-- People -->
                    <div class="tab-pane fade fade-left" id="chat-people" role="tabpanel">
                        <div class="js-chat-people block-content block-content-full overflow-y-auto bg-pattern" style="background-image: url('assets/img/various/bg-pattern-inverse.png');">
                            <div class="row mb-0">
                                <div class="col-md-12">
                                    
                                    <ul class="nav-users push">
                                        <div class="display-online" id="display-online"></div>
                                    </ul>
                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- END People -->
                </div>
            </div>
            <!-- END Multiple Chat (auto height) -->
        </div>
        <!-- <p class="ml-50 bg-primary-lighter text-primary-darker">Hi Hello </p> -->
        <!-- END Page Content -->
</main>
<!-- END Main Container -->
<?php include "footer.php"; ?>

<!-- END Page Container -->

<!-- Codebase Core JS -->

<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/core/jquery.slimscroll.min.js"></script>
<script src="assets/js/core/jquery.scrollLock.min.js"></script>
<script src="assets/js/core/jquery.appear.min.js"></script>
<script src="assets/js/core/jquery.countTo.min.js"></script>
<script src="assets/js/core/js.cookie.min.js"></script>
<script src="assets/js/codebase.js"></script>

<script src="assets/js/script.js"></script>
<script>
activate();
</script>