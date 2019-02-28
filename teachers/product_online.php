<?php include "header.php"; ?>
<!-- Codebase framework -->

<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<!-- Main Container -->
<?php
$mess='';
$i=0;
$sqlc = "SELECT COUNT(id) as coun FROM `used_store` WHERE branch = '$B_R_A_N_C_H' AND quantity !='0' AND permission != '0'";
$run_sqla=mysqli_query($conn,$sqlc);  
if (mysqli_num_rows($run_sqla) > 0) {
    while($row = mysqli_fetch_assoc($run_sqla)) {
        $coup = $row["coun"];
    }
}else{
    
    $mess="Sorry No One Added Products! May Be You are the First Try me";
}
$sql = "SELECT * FROM `used_store` WHERE branch = '$B_R_A_N_C_H' AND quantity !='0' AND permission != '0'";
$run_sql=mysqli_query($conn,$sql);  
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
       $sno = $row["id"];
       $p_name = $row["product_name"];
       $p_cat = $row["category"];  
       $p_cost = $row["price"];
       $pd_post = $row["dateofpost"];
       $p_quant = $row["quantity"];
       $p_sem = $row["semister"];
       $rg = $row["regid"];
      $ic = $row["icon"];

       $snoa[$i]=$sno;
       $pn[$i]=$p_name;
       $pca[$i]=$p_cat;
       $pc[$i]=$p_cost;
       $dt[$i]=$pd_post;
       $pq[$i]=$p_quant;
       $ps[$i]=$p_sem;
       $prg[$i]=$rg;
       $ico[$i]=$ic;
       
       $i=$i+1;
    }
   }
   else{
    $mess="Sorry No One Added Products! May Be You are the First Try me";
}
?>
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Files Filtering -->
            <h2 class="content-heading">Products
                <small>Used Store</small>
            </h2>
            <!-- Content Filtering (.js-filter class is initialized in Codebase() -> uiHelperContentFilter()) -->
            <!-- You can set the animation duration through data-speed="speed_in_ms" -->
            <?php echo $mess;
            if($mess==''){
                ?>

            <div class="js-filter" data-speed="400" data-numbers="true">
                <div class="p-10 bg-white push">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" data-category-link="all">
                                <i class="fa fa-fw fa-file-text-o mr-5"></i> All
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-category-link="1-1">
                                <i class="fa fa-fw fa-file-text-o mr-5"></i> 1-1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-category-link="1-2">
                                <i class="fa fa-fw fa-file-text-o mr-5"></i> 1-2
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-category-link="2-1">
                                <i class="fa fa-fw fa-file-text-o mr-5"></i> 2-1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-category-link="2-2">
                                <i class="fa fa-fw fa-file-text-o mr-5"></i> 2-2
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-category-link="3-1">
                                <i class="fa fa-fw fa-file-text-o mr-5"></i> 3-1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-category-link="3-2">
                                <i class="fa fa-fw fa-file-text-o mr-5"></i> 3-2
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-category-link="4-1">
                                <i class="fa fa-fw fa-file-text-o mr-5"></i> 4-1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-category-link="4-2">
                                <i class="fa fa-fw fa-file-text-o mr-5"></i> 4-2
                            </a>
                        </li>
                    </ul>
                </div>





                <div class="row">
                    <?php $c_p=0;
                for($c_p=0;$c_p<$coup;$c_p++){
                ?>
                    <div class="col-md-6 col-xl-3" data-toggle="click-ripple" data-category="<?php echo $ps[$c_p];?>">
                        <a class="block block-rounded block-link-shadow" href="view_product?id=<?php echo $snoa[$c_p];?>">
                            <div class="block-content block-content-full text-center">
                                <div class="item item-circle bg-warning-light text-warning mx-auto my-20">
                                    <i class="<?php echo $ico[$c_p];?>"></i>
                                </div>
                                <div class="font-size-lg">
                                    <?php echo $pn[$c_p]; ?>
                                </div>
                                <div class="font-size-sm">Sem:
                                    <?php echo $ps[$c_p]; ?>
                                </div>
                                <div class="font-size-sm text-muted">By :
                                    <?php echo $prg[$c_p]; ?> |
                                    <b>
                                        <i class="fa fa-inr" aria-hidden="true"></i>
                                        <?php echo $pc[$c_p]; ?>
                                    </b>
                                </div>
                                <div class="font-size-sm text-muted">.</div>
                                
                            </div>
                        </a>
                    </div>



                    <?php }?>

                </div>
            </div>
            <p align="center" class="text-primary-light">That's all focks Breath In Breath Out......</p>
            <?php  }else{
    echo $mess;
} ?>
            <!-- END Files Filtering -->
        </div>
        <!-- END Page Content -->
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
    <script src="assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>

    <script>
        jQuery(function () {
            // Init page helpers (Content Filtering helper)
            Codebase.helpers(['content-filter', 'notify']);
        });
    </script>