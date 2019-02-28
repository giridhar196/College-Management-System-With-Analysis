<?php
include("header.php"); ?>

 <?php if($R_E_I_D !=''){
 include "dashboard_plugs.php" ?>
<?php include "blogsql.php"; ?>
<?php 

$sql_count = "SELECT COUNT(id) as count FROM `notice_board`";
    $run_sql_count=mysqli_query($conn,$sql_count);  
    if (mysqli_num_rows($run_sql_count) > 0) {
        while($row = mysqli_fetch_assoc($run_sql_count)) {
            $co = $row["count"];
        }
    }
    else{
        $co=0;
    }?>
            
           <!-- Main Container -->
            <main id="main-container">
			<!-- Hero -->
                <div class="bg-image bg-image-bottom" style="background-image: url('assets/img/photos/photo34@2x.jpg');">
                    <div class="bg-primary-dark-op">
                        <div class="content content-top text-center overflow-hidden">
                            <div class="pt-50 pb-20">
                                <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Dashboard</h1>
                                <h2 class="h4 font-w400 text-white-op invisible" data-toggle="appear" data-class="animated fadeInUp">Welcome to your custom panel!</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->
                <!-- Page Content -->
                <div class="content">
                    <div class="row gutters-tiny invisible" data-toggle="appear">
                        <!-- Row #1 -->
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="block text-center" href="blog">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                                    <div class="ribbon-box"><?php echo $number; ?></div>
                                    <p class="mt-5">
                                        <i class="si si-book-open fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Blog</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="block text-center" href="blog_new">
                                <div class="block-content bg-gd-primary">
                                    <p class="mt-5">
                                        <i class="si si-plus fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">New Blog</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="block text-center" href="notice_display">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-sea">
                                    <div class="ribbon-box"><?php echo $notice_count ?></div>
                                    <p class="mt-5">
                                        <i class="fa fa-sticky-note fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Notice Board</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="block text-center" href="search_book">
                                <div class="block-content bg-gd-lake">
                                    <p class="mt-5">
                                        <i class="si si-magnifier fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Search Book</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="block text-center" href="#">
                                <div class="block-content bg-gd-emerald">
                                    <p class="mt-5">
                                        <i class="si si-bar-chart fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Statistics</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="block text-center" href="javascript:void(0)">
                                <div class="block-content bg-gd-corporate">
                                    <p class="mt-5">
                                        <i class="si si-settings fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Settings</p>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #1 -->
                    </div>
                    <div class="row row-deck gutters-tiny invisible" data-toggle="appear">
                        <!-- Row #2 -->
                        <div class="col-xl-4">
                            <a class="block block-transparent bg-image d-flex align-items-stretch" href="blog_story?name=<?php echo $p_idva[0]; ?>" style="background-image: url('assets/img/photos/photo24@2x.jpg');">
                                <div class="block-content block-sticky-options pt-100 bg-black-op">
                                    <div class="block-options block-options-left text-white">
                                        <div class="block-options-item">
                                            <i class="si si-book-open text-white-op"></i>
                                        </div>
                                    </div>
                                    <div class="block-options text-white">
                                        <div class="block-options-item">
                                            <i class="si si-bubbles"></i> 
                                        </div>
                                        <div class="block-options-item">
                                            <i class="si si-eye"></i> 
                                        </div>
                                    </div>
                                    <h2 class="h3 font-w700 text-white mb-5"><?php echo $p_titlea[0]; ?></h2>
                                    <h3 class="h5 text-white-op"><?php echo $p_shorta[0]; ?></h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <a class="block block-transparent bg-image d-flex align-items-stretch" href="blog_story?name=<?php echo $p_idva[1]; ?>" style="background-image: url('assets/img/photos/photo32@2x.jpg');">
                                <div class="block-content block-sticky-options pt-100 bg-primary-dark-op">
                                    <div class="block-options block-options-left text-white">
                                        <div class="block-options-item">
                                            <i class="si si-book-open text-white-op"></i>
                                        </div>
                                    </div>
                                    <div class="block-options text-white">
                                        <div class="block-options-item">
                                            <i class="si si-bubbles"></i> 
                                        </div>
                                        <div class="block-options-item">
                                            <i class="si si-eye"></i> 
                                        </div>
                                    </div>
                                    <h2 class="h3 font-w700 text-white mb-5"><?php echo $p_titlea[1]; ?></h2>
                                    <h3 class="h5 text-white-op"><?php echo $p_shorta[1]; ?></h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <a class="block block-transparent bg-image d-flex align-items-stretch" href="blog_story?name=<?php echo $p_idva[2]; ?>" style="background-image: url('assets/img/photos/photo10@2x.jpg');">
                                <div class="block-content block-sticky-options pt-100 bg-primary-op">
                                    <div class="block-options block-options-left text-white">
                                        <div class="block-options-item">
                                            <i class="si si-book-open text-white-op"></i>
                                        </div>
                                    </div>
                                    <div class="block-options text-white">
                                        <div class="block-options-item">
                                            <i class="si si-bubbles"></i> 
                                        </div>
                                        <div class="block-options-item">
                                            <i class="si si-eye"></i> 
                                        </div>
                                    </div>
                                    <h2 class="h3 font-w700 text-white mb-5"><?php echo $p_titlea[2]; ?></h2>
                                    <h3 class="h5 text-white-op"><?php echo $p_shorta[2]; ?></h3>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #2 -->
                    </div>
                    <div class="row gutters-tiny invisible" data-toggle="appear">
                        <!-- Row #3 -->
                        <div class="col-xl-8 d-flex align-items-stretch">
                            <div class="block block-themed block-mode-loading-inverse block-transparent bg-image w-100" style="background-image: url('assets/img/photos/photo34@2x.jpg');">
                                <div class="block-header bg-black-op">
                                    <h3 class="block-title">
                                        Books <small>This week</small>
                                    </h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content bg-black-op">
                                    <div class="pull-r-l">
                                        <!-- Lines Chart Container -->
                                        <canvas class="js-chartjs-dashboard-lines"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                            <div class="block block-transparent bg-primary-dark d-flex align-items-center w-100">
                                <div class="block-content block-content-full">
                                    <div class="py-15 px-20 clearfix border-black-op-b">
                                        <div class="float-right mt-15 d-none d-sm-block">
                                            <i class="si si-book-open fa-2x text-success"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-success" data-toggle="countTo" data-speed="1000" data-to="<?php echo $number; ?>">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-success-light">Articles</div>
                                    </div>
                                    <div class="py-15 px-20 clearfix border-black-op-b">
                                        <div class="float-right mt-15 d-none d-sm-block">
                                            <i class="fa fa-inr fa-2x text-danger"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-danger"><i class="fa fa-inr"></i><span data-toggle="countTo" data-speed="1000" data-to="<?php echo $fine_count; ?>">0</span></div>
                                        <div class="font-size-sm font-w600 text-uppercase text-danger-light">Fine</div>
                                    </div>
                                    <div class="py-15 px-20 clearfix border-black-op-b">
                                        <div class="float-right mt-15 d-none d-sm-block">
                                            <i class="si si-notebook fa-2x text-warning"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-warning" data-toggle="countTo" data-speed="1000" data-to="<?php echo $today_return; ?>">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-warning-light">Books Issued</div>
                                    </div>
                                    <div class="py-15 px-20 clearfix border-black-op-b">
                                        <div class="float-right mt-15 d-none d-sm-block">
                                            <i class="fa fa-sticky-note-o fa-2x text-info"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-info" data-toggle="countTo" data-speed="1000" data-to="<?php echo $notice_count; ?>">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-info-light">Notice</div>
                                    </div>
                                    <div class="py-15 px-20 clearfix">
                                        <div class="float-right mt-15 d-none d-sm-block">
                                            <i class="si si-drop fa-2x text-elegance"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-elegance" data-toggle="countTo" data-speed="1000" data-to="<?php echo $personal; ?>">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-elegance-light">Personal Notice</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Row #3 -->
                    </div>
                    <div class="row gutters-tiny invisible" data-toggle="appear">
                        <!-- Row #4 -->
                        <div class="col-md-4">
                            <div class="block block-transparent bg-default">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <i class="fa fa-location-arrow fa-4x text-default-light"></i>
                                        </div>
                                        
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-primary" href="javascript:void(0)">
                                                <i class="fa fa-cog mr-5"></i> Current Location <?php echo "{$result_ip->lat},{$result_ip->lon}";
                                    ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block block-transparent bg-info">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <i class="fa fa-clock-o fa-4x text-info-light"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600 text-white"><?php echo date('l jS \of F Y '); ?></div>
                                        <div class="text-white-op"><?php echo date('h:i:s A'); ?></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block block-transparent bg-success">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <i class="fa fa-user-o fa-4x text-success-light"></i>
                                        </div>
                                        
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">
                                                <i class="fa fa-arrow-up mr-5"></i> Student Profile Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Row #4 -->
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
<?php
$sql_ip = "SELECT * FROM `location_users` WHERE reg_id='$R_E_I_D' AND lat='$result_ip->lat' AND longi='$result_ip->lon' AND date='$da'";
$run_sql_ip=mysqli_query($conn,$sql_ip);  
if (mysqli_num_rows($run_sql_ip) > 0) {
}else{
$query_ip = "INSERT INTO location_users SET username='$N_A_M_E',lat='$result_ip->lat',longi='$result_ip->lon',reg_id='$R_E_I_D',type='$B_R_A_N_C_H',date='$da'";
$run_sel_us_ip=mysqli_query($conn,$query_ip);
}
?>


            <!-- Footer -->
           <?php include "footer.php" ?>
            <!-- END Footer -->
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
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_pages_dashboard.js"></script>
    </body>
</html>
<?php } ?>