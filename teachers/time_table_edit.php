<?php   
include "auth.php";
include "timetable_data_get.php";

?>

<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
    <script type="text/javascript">
    
</script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>College Management system  &amp; Project R-5</title>

        <meta name="description" content="College Management system  &amp; Project R-5">
        <meta name="author" content="Gstark and Team">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="College Management system  &amp; Project R-5">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="College Management system  &amp; Project R-5">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->
</head><!-- Stylesheets -->
        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<body>
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <nav class="breadcrumb bg-white push">
                        <a class="breadcrumb-item" href="time_table_fetch">Time Table</a>
                        <span class="breadcrumb-item active">Edit Table</span>
                    </nav>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Time Table<small>Edit</small></h3>
                        </div>
                        <div class="block-content">
                        <form  method="POST" id="table_edit_post" action="table_post">
                        <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th  class="text-center ">DAY</th>
        <th class="text-center">Period1</th>
        <th class="text-center">Period2</th>
        <th class="text-center">Period3</th>
        <th class="text-center">Period4</th>
        <th class="text-center">Period5</th>
        <th class="text-center">Period6</th>
        <th class="text-center">Period7</th>
        <th class="text-center">Period8</th>
        
      </tr>
    </thead>
    <tbody>
        <?php 
        for($j=0;$j<7;$j++){
            ?>
      <tr>
      <input type="hidden" class="form-control form-control-lg" id="row_id" name="row_id[]"  value="<?php echo $row_arrid[$j]?>" >
        <td class="font-weight-bold" ><span class="text-center "><p class="text-uppercase"   ><?php echo $row_ar1[$j] ?></p></span></td>
       
        <td><input type="text" class="form-control form-control-lg" id="row_2" name="row_2[]"  value="<?php echo $row_ar2[$j]?>" ></td>
        <td><input type="text" class="form-control form-control-lg" id="row_3" name="row_3[]" value="<?php echo $row_ar3[$j]?>"></td>
        <td><input type="text" class="form-control form-control-lg" id="row_4" name="row_4[]" value="<?php echo $row_ar4[$j]?>"></td>
        <td><input type="text" class="form-control form-control-lg" id="row_5" name="row_5[]" value="<?php echo $row_ar5[$j]?>"></td>
        <td><input type="text" class="form-control form-control-lg" id="row_6" name="row_6[]" value="<?php echo $row_ar6[$j]?>"></td>
        <td><input type="text" class="form-control form-control-lg" id="row_7" name="row_7[]" value="<?php echo $row_ar7[$j]?>"></td>
        <td><input type="text" class="form-control form-control-lg" id="row_8" name="row_8[]" value="<?php echo $row_ar8[$j]?>"></td>
        <td><input type="text" class="form-control form-control-lg" id="row_9" name="row_9[]" value="<?php echo $row_ar9[$j]?>"></td>
        
    </tr>
      <?php 
        
    }
  
   
     ?>
     
    
    </tbody>
                             
  </table>
  <div class="form-group row">
                                <div class="col-12">
  <input type="submit" id="row_id1" name="row_id1" value="Click To Update" class="js-notify btn btn-lg btn-block btn-alt-primary" data-message="Data Uploaded Sucessfully" value="Fetch TimeTable.."/>
      
</div></div>
  </div>
                             
                       
                        </div>
                        
        </form>
                    </div>
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
           <!-- Page JS Plugins -->
      

    </body>
</html>
