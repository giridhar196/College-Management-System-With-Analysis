<?php include "header.php"; ?>
<?php include "dashboard_plugs.php" ?>
<?php include "blogsql.php"; ?>

            <!-- Main Container -->
            <main id="main-container">
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
                                    <p class="font-w600 text-white">New Article</p>
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
                            <a class="block text-center" href="be_pages_generic_search.html">
                                <div class="block-content bg-gd-lake">
                                    <p class="mt-5">
                                        <i class="si si-magnifier fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Search</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="block text-center" href="be_comp_charts.html">
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
                                        Library <small>Issues</small>
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
                                        <div class="font-size-sm font-w600 text-uppercase text-success-light">Blog</div>
                                    </div>
                                    <div class="py-15 px-20 clearfix border-black-op-b">
                                        <div class="float-right mt-15 d-none d-sm-block">
                                            <i class="fa fa-inr fa-2x text-danger"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-danger"></i><span data-toggle="countTo" data-speed="1000" data-to="<?php echo $fine_count; ?>">0</span></div>
                                        <div class="font-size-sm font-w600 text-uppercase text-danger-light"><i class="fa fa-inr"></i>Fine</div>
                                    </div>
                                    <div class="py-15 px-20 clearfix border-black-op-b">
                                        <div class="float-right mt-15 d-none d-sm-block">
                                            <i class="si si-notebook fa-2x text-warning"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-warning" data-toggle="countTo" data-speed="1000" data-to="<?php echo $today_return ?>">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-warning-light">Books Issued</div>
                                    </div>
                                    <div class="py-15 px-20 clearfix border-black-op-b">
                                        <div class="float-right mt-15 d-none d-sm-block">
                                            <i class="si si-users fa-2x text-info"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-info" data-toggle="countTo" data-speed="1000" data-to="260">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-info-light">Online</div>
                                    </div>
                                    <div class="py-15 px-20 clearfix">
                                        <div class="float-right mt-15 d-none d-sm-block">
                                            <i class="si si-drop fa-2x text-elegance"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-elegance" data-toggle="countTo" data-speed="1000" data-to="9">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-elegance-light">Colour Themes</div>
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
                                                <i class="fa fa-arrow-up mr-5"></i> Facuilty Profile
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