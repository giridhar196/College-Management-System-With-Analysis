<?php include "header.php"; ?>
<link rel="stylesheet" href="assets/js/plugins/magnific-popup/magnific-popup.min.css">
<script src="assets/js/plugins/ajax/jquery.min.js"></script>
<?php
$ps=$_GET['name'];
$sqlc = "SELECT * FROM `blog` WHERE id='$ps'";
$run_sqla=mysqli_query($conn,$sqlc);  
if (mysqli_num_rows($run_sqla) > 0) {
    $l=0;
    while($row = mysqli_fetch_assoc($run_sqla)) {
        $p_regid = $row["regid"];
        $p_title = $row["title"];
        $p_category = $row["category"];
        $p_desc = $row["description"];
        $p_visible = $row["visible"];
        $p_short = $row["short_desciption"];
        $p_head = $row["header_link"];
        $p_dop = $row["dateofpost"];
        $p_by = $row["p_by"];
        $p_per = $row["permission"];
        $p_created = $row["created"];
      
    }
}?>


<!-- Codebase framework -->
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

            <!-- Main Container -->
           
            <main  id="main-container">
               
                
                <!-- Hero -->
                <div class="bg-image" style="background-image: url('<?php echo $p_head; ?>');">
                    <div class="bg-black-op-75">
                        <div class="content content-top text-center">
                            <div class="py-100">
                                <h1 class="font-w700 text-white mb-10"><?php echo $p_title; ?></h1>
                                <h2 class="h4 font-w400 text-white-op"><?php echo $p_short; ?></h2>
                                <div class="font-size-md text-muted">
                                    <a class="text-body-bg-dark" id="demo" href="be_pages_generic_profile.html"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->
                
                <!-- Story -->
                <div class="content content-full nice-copy-story">
                    <div class="row justify-content-center py-30">
                        <div class="col-lg-8">
                            <?php echo $p_desc; ?>
                            <!-- Simple Gallery (.js-gallery class is initialized in Codebase() -> uiHelperMagnific()) -->
                           
                            </div>  
                    </div>
                    
                    
                    
                    
                    <textarea name='roll_number2' id='roll_number2'><?php echo $p_desc; ?></textarea>

<script>
var data_before=$.trim($("#roll_number2").val());

var form = new FormData();
    form.append("text", data_before);
    form.append("api_key", "gPw3BuhG7HKkKUj9aKKlDi6yjWLoBfvwGcHklczO2kY");

    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "http://apis.paralleldots.com/v3/emotion",
        "method": "POST",
        "headers": {},
        "processData": false,
        "contentType": false,
        "mimeType": "multipart/form-data",
        "data": form
    }
    $.ajax(settings).done(function (response) {
        console.log(response);
       document.getElementById("output").innerHTML = response;
    });
</script>
                    
                    
              
              <h3 class="h4">Sentimental Analysis Result For This Blog</h3>
                            <div class="pull-r-l">
                                <div class="content content-full bg-body-light mb-50">
                                  <p class="text-primary-dark" id="output"> 
                                    <div ></div>
                                   </p>
                                </div>
                            </div>

              
              
                    <div class="row justify-content-center py-30">
                    <div class="col-lg-8 clearfix">
                        <button type="button" class="btn btn-rounded btn-secondary float-right">
                            <i class="fa fa-share-alt text-primary mr-5 "></i> Share
                        </button>
                        <button type="button" class="btn btn-rounded btn-secondary mr-5">
                            <i class="fa fa-heart text-danger mr-5 "></i> Reccomend
                        </button>
                    </div>
                </div>
                </div>
                <!-- END Story -->

               
            </main>
            <!-- END Main Container -->

           <?php include "footer.php"; ?>
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

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/magnific-popup/magnific-popup.min.js"></script>

        <!-- Page JS Code -->
        <script>
            var i = 0;
        var txt = '<?php echo $p_by; ?> : <?php echo $p_dop; ?>';
        var speed = 50;
        
        window.onload = function typeWriter() {
            if (i < txt.length) {
                document.getElementById("demo").innerHTML += txt.charAt(i);
                i++;
                setTimeout(typeWriter, speed);
            }
        }
       
    </script>
        <script>
            jQuery(function () {
                // Init page helpers (Magnific Popup plugin)
                Codebase.helpers('magnific-popup');
            });
        </script>
    