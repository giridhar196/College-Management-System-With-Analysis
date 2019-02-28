<?php include "header.php"; ?>
<?php include "dashboard_plugs.php" ?>

<!-- Main Container -->
<main id="main-container">
    <!-- Page Content -->
   
    <div class="content">
        <div class="row gutters-tiny invisible" data-toggle="appear">
            <!-- Row #1 -->
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="manage_issue">
                    <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                        <div class="ribbon-box">
                            <?php echo $books_issued; ?>
                        </div>
                        <p class="mt-5">
                            <i class="si si-book-open fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">Issued Books Count</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="issue_book_number">
                    <div class="block-content bg-gd-primary">
                        <p class="mt-5">
                            <i class="si si-plus fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">Issue New Book</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="add_author">
                    <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-sea">
                        <div class="ribbon-box">
                            <?php echo $author_count ?>
                        </div>
                        <p class="mt-5">
                            <i class="si si-user-following fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">Add Author</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="return_book">
                    <div class="block-content bg-gd-lake">
                        <p class="mt-5">
                            <i class="fa fa-leanpub fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">Return Book</p>
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

        <!-- buttons -->

        <div class="row gutters-tiny invisible" data-toggle="appear">
            <!-- Row #1 -->
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="blog">
                    <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                        <div class="ribbon-box">
                            <?php echo $notice_count; ?>
                        </div>
                        <p class="mt-5">
                            <i class="si si-docs fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">Articles</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="add_journel_gifted_book">
                    <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-corporate">
                        <div class="ribbon-box">
                            <?php echo $message_count; ?>
                        </div>
                        <p class="mt-5">
                            <i class="fa fa-wechat fa-3x text-white-op"></i>
                        </p>
                        <p></p>
                        <p class="font-w600 text-white">Journels</p>
                    </div>
                    
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="notice_display">
                    <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-emerald">
                        <div class="ribbon-box">
                            <?php echo $notice_count ?>
                        </div>
                        <p class="mt-5">
                            <i class="fa fa-sticky-note fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">Notice Board</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="manage_book">
                    <div class="block-content bg-gd-lake">
                        <p class="mt-5">
                            <i class="si si-magnifier fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">Search Book</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="profile">
                    <div class="block-content bg-gd-sea">
                        <p class="mt-5">
                            <i class="fa fa-address-card-o fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">My Profile</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="add_category">
                    <div class="block-content bg-gd-corporate">
                        <p class="mt-5">
                            <i class="si si-list fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">Add Category</p>
                    </div>
                </a>
            </div>
            <!-- END Row #1 -->
        </div>

        <!-- buttons End -->

        <div class="row gutters-tiny invisible" data-toggle="appear">
            <!-- Row #3 -->
            <div class="col-xl-8 d-flex align-items-stretch">
                <div class="block block-themed block-mode-loading-inverse block-transparent bg-image w-100" style="background-image: url('assets/img/photos/photo34@2x.jpg');">
                    <div class="block-header bg-black-op">
                        <h3 class="block-title">
                            Issue From 
                            <?php 
                            echo $first_month_year; ?> to <?php echo $last_date_month_year; ?> 
                            <small>This Month</small>
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
                            <canvas class="js-chartjs-dashboard-lines2"></canvas>
                            
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
                            <div class="font-size-h3 font-w600 text-success" data-toggle="countTo" data-speed="1000" data-to="<?php echo $today_issue; ?>">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-success-light">Today Issues</div>
                        </div>
                        <div class="py-15 px-20 clearfix border-black-op-b">
                            <div class="float-right mt-15 d-none d-sm-block">
                                <i class="fa fa-leanpub fa-2x text-danger"></i>
                            </div>
                            <div class="font-size-h3 font-w600 text-danger">
                               
                                <span data-toggle="countTo" data-speed="1000" data-to="<?php echo $today_return; ?> ">0</span>
                            </div>
                            <div class="font-size-sm font-w600 text-uppercase text-danger-light">Today Returns</div>
                        </div>
                        <div class="py-15 px-20 clearfix border-black-op-b">
                            <div class="float-right mt-15 d-none d-sm-block">
                                <i class="si si-notebook fa-2x text-warning"></i>
                            </div>
                            <div class="font-size-h3 font-w600 text-warning" data-toggle="countTo" data-speed="1000" data-to="<?php echo $total_books ?>">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-warning-light">Total Book</div>
                        </div>
                        <div class="py-15 px-20 clearfix border-black-op-b">
                            <div class="float-right mt-15 d-none d-sm-block">
                                <i class="fa fa-leanpub fa-2x text-info"></i>
                            </div>
                            <div class="font-size-h3 font-w600 text-info" data-toggle="countTo" data-speed="1000" data-to="<?php echo $book_count; ?>">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-info-light">Currently In Library</div>
                        </div>
                        <div class="py-15 px-20 clearfix">
                            <div class="float-right mt-15 d-none d-sm-block">
                                <i class="si si-book-open fa-2x text-elegance"></i>
                            </div>
                            <div class="font-size-h3 font-w600 text-elegance" data-toggle="countTo" data-speed="1000" data-to="<?php echo $book_issue_count; ?>">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-elegance-light">Journels/Gifted Books</div>
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
                           
                                <a class="btn btn-rounded btn-alt-primary" onclick="geoFindMe()" href="javascript:void(0)">
                                    <i class="fa fa-cog mr-5"></i> Current Location
                                    <?php echo "{$result_ip->lat},{$result_ip->lon}";
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
                            <div class="font-size-h4 font-w600 text-white">
                                <?php echo date('l jS \of F Y '); ?>
                            </div>
                            <div class="text-white-op">
                                <?php echo date('h:i:s A'); ?>
                            </div>
                            
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
                                    <i class="fa fa-arrow-up mr-5"></i> Library Profile
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
<script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/be_pages_dashboard.js"></script>
</body>

</html>