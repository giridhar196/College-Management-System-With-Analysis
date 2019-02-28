<?php include "header.php"?>

            <!-- Main Container -->
            <main id="main-container"  >
                <!-- Page Content -->
                <!-- Chat layout and demo functionality is initialized in js/pages/be_comp_chat.js -->
                <!--
                    You can use the following JS function to add a header message to a chat window:
                    BeCompChat.addHeader(chatId, chatMsg)

                    chatId         : the data-chat-id attribute of the chat window
                    chatMsg        : the header message you would like to add

                    You can use the following JS function to add a message to a chat window:
                    BeCompChat.addMessage(chatId, chatMsg, chatMsgLevel)

                    chatId         : the data-chat-id attribute of the chat window
                    chatMsg        : the message you would like to add
                    chatMsgLevel   : 'self' the user sends the message, '' empty if the user receives the message (changes its style)
                -->
                <div class="js-chat-container content content-full invisible" data-toggle="appear" data-chat-height="auto">
                    <!-- Multiple Chat (auto height) -->
                    <div class="block mb-0">
                        <ul class="js-chat-head nav nav-tabs nav-tabs-alt bg-body-light" data-toggle="tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#chat-window1">
                                    <img class="img-avatar img-avatar16" src="assets/img/avatars/avatar15.jpg" alt="">
                                    <span class="ml-5">Jeffrey</span>
                                </a>
                            </li>
                            
                            <li class="nav-item ml-auto">
                                <a class="nav-link" href="#chat-people">
                                    <i class="si si-users"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content overflow-hidden"  >
                            <!-- Chat Window #1 -->
                            <div class="tab-pane fade show active" id="chat-window1" role="tabpanel">
                                <!-- Messages (demonstration messages are added with JS code at the bottom of this page) -->
                                <div class="js-chat-talk block-content block-content-full text-wrap-break-word overflow-y-auto" id="primary" data-chat-id="1"></div>

                                <!-- Chat Input -->
                                <div class="js-chat-form block-content block-content-full block-content-sm bg-body-light">
                                    <form action="" method="post">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="fa fa-comment text-primary"></i>
                                            </span>
                                            <input class="js-chat-input form-control" type="text" name="msg" id="msg"  data-target-chat-id="1" placeholder="Type your message and hit enter..">
                                        </div>
                                    </form>
                                </div>
                                <!-- END Chat Input -->
                            </div>
                            <!-- END Chat Window #1 -->

                           

                            <!-- People -->
                            <div class="tab-pane fade fade-left" id="chat-people" role="tabpanel">
                                <div class="js-chat-people block-content block-content-full overflow-y-auto bg-pattern" style="background-image: url('assets/img/various/bg-pattern-inverse.png');">
                                    <div class="row mb-0">
                                        <div class="col-md-4">
                                            <h3 class="h1 font-w300 text-success">Online</h3>
                                            <ul class="nav-users push">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar4.jpg" alt="">
                                                        <i class="fa fa-circle text-success"></i> Lisa Jenkins
                                                        <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar15.jpg" alt="">
                                                        <i class="fa fa-circle text-success"></i> Jose Parker
                                                        <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar16.jpg" alt="">
                                                        <i class="fa fa-circle text-success"></i> Jack Estrada
                                                        <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar13.jpg" alt="">
                                                        <i class="fa fa-circle text-success"></i> Jose Parker
                                                        <div class="font-w400 font-size-xs text-muted">Web Developer</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar5.jpg" alt="">
                                                        <i class="fa fa-circle text-success"></i> Carol White
                                                        <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar13.jpg" alt="">
                                                        <i class="fa fa-circle text-success"></i> Thomas Riley
                                                        <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="h1 font-w300 text-warning">Away</h3>
                                            <ul class="nav-users mt-10 push">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar12.jpg" alt="">
                                                        <i class="fa fa-circle text-warning"></i> David Fuller
                                                        <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar16.jpg" alt="">
                                                        <i class="fa fa-circle text-warning"></i> Ryan Flores
                                                        <div class="font-w400 font-size-xs text-muted">Web Developer</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar3.jpg" alt="">
                                                        <i class="fa fa-circle text-warning"></i> Lisa Jenkins
                                                        <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar16.jpg" alt="">
                                                        <i class="fa fa-circle text-warning"></i> David Fuller
                                                        <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="h1 font-w300 text-muted">Offline</h3>
                                            <ul class="nav-users mt-10 push">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar5.jpg" alt="">
                                                        <i class="fa fa-circle text-muted"></i> Alice Moore
                                                        <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar13.jpg" alt="">
                                                        <i class="fa fa-circle text-muted"></i> Jeffrey Shaw
                                                        <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar14.jpg" alt="">
                                                        <i class="fa fa-circle text-muted"></i> Jesse Fisher
                                                        <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar12.jpg" alt="">
                                                        <i class="fa fa-circle text-muted"></i> Jose Parker
                                                        <div class="font-w400 font-size-xs text-muted">Web Developer</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar1.jpg" alt="">
                                                        <i class="fa fa-circle text-muted"></i> Amanda Powell
                                                        <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar12.jpg" alt="">
                                                        <i class="fa fa-circle text-muted"></i> Brian Stevens
                                                        <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar4.jpg" alt="">
                                                        <i class="fa fa-circle text-muted"></i> Alice Moore
                                                        <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img class="img-avatar" src="assets/img/avatars/avatar9.jpg" alt="">
                                                        <i class="fa fa-circle text-muted"></i> Jack Estrada
                                                        <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                                    </a>
                                                </li>
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
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

           <?php include "footer.php" ?>
        </div>
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

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_comp_chat.js"></script>
        <script>
 $(document).ready(function() {
 	 $("#cwindow1").load("chat.php");
   var refreshId = setInterval(function() {
      $("#cwindow1").load('chat.php?randval='+ Math.random());
   }, 9000);
   $.ajaxSetup({ cache: false });
});
</script>
<?php 
include "dbconnect.php";
$i=0;
$sql = "SELECT * FROM `comments` ";
$run_sql=mysqli_query($conn,$sql);
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
    $sub= $row["comment_subject"];
    $tex = $row["comment_text"];
    
   $subj[$i]=$sub;
   $text[$i]=$tex;
   $i++;
    }
}


    ?>
        <script>
            jQuery(function () {
                <?php for($j=0;$j<3;$j++){ ?>
    

                // Add demonstration headers and messages for Chat #1
                BeCompChat.addHeader(1, '5 hours ago');
                BeCompChat.addMessage(1, '<?php echo $subj[$j] ?>','');
               
                // Add demonstration headers and messages for Chat #2
           <?php }?>
            });
        </script>
    </body>
</html>