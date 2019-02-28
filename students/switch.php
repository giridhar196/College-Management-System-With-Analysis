<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
    <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
    </head>
    <body>
<div class="row no-gutters items-push">
    <form action="" post="switch.php"  method="post">
                                        <div class="col-6">
                                            <label class="css-control css-control-primary css-switch">
                                                <input type="checkbox" class="css-control-input" if(val=0){
                                                    unchecked
                                                }else{
                                                    checked
                                                } onclick="javascript:location='switch.php';"/>
                                                <span class="css-control-indicator"></span> Primary
                                                <input type="button" />
                                            </label>
                                        </div>
                                        </div>
</form>
</body>
</html>