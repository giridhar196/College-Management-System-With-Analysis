
function messagenoti(x){  
 setInterval(function(){
        $(".display-message-count").load("message_count.php?re="+x);
    }, 2000);

    setInterval(function(){
        $(".notification-latest").load("view_notification.php?re="+x);
    }, 2000);
}

   