function activate(){
    /*post message via ajax*/
    $("#reply").on("click", function(){
        var message = $.trim($("#message").val()),
       
            conversation_id = $.trim($("#conversation_id").val()),
            user_form = $.trim($("#user_form").val()),
            user_to = $.trim($("#user_to").val()),
            error = $("#error");
 
        if((message != "") && (conversation_id != "") && (user_form != "") && (user_to != "")){
            error.text("Sending...");
            $.post("post_message_ajax.php",{message:message,conversation_id:conversation_id,user_form:user_form,user_to:user_to}, function(data){
                error.text(data);
                //clear the message box
                $("#message").val("");
            });
        }
    });
 user_na = $("#user_form").val();
 setInterval(function(){
        $(".display-online").load("online.php?ido_id="+user_na);
    }, 2000);
 

    //get message
    c_id = $("#conversation_id").val();
    //get new message every 2 second
    setInterval(function(){
        $(".display-message").load("get_message_ajax.php?c_id="+c_id);
    }, 2000);
    b_id = $("#user_to").val();
    setInterval(function(){
        $(".display-name").load("usenamemessage.php?b_id="+b_id);
    }, 2000);

    $(".display-message").scrollTop($(".display-message")[0].scrollHeight);
}




