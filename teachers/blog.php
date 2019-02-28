<?php include "header.php"; ?>
<?php include "blogsql.php"; ?>
    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/slick/slick.min.css">
    <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.min.css">

    <!-- Codebase framework -->
    <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
    <link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.min.css">



    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-primary">
            <div class="bg-pattern bg-black-op-25" style="background-image: url('assets/img/various/bg-pattern.png');">
                <div class="content content-top text-center">
                    <div class="py-50">
                        <h1 class="font-w700 text-white mb-10">Blog</h1>
                        <h2 class="h4 font-w400 text-white-op">Our latest news and learning articles.</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->





        <!-- Blog and Sidebar -->
        <div class="content">

            <div class="row items-push py-30">
                <!-- Posts -->
                
                <div class="col-xl-8" >
                    <?php 
                    if($message==''){                           
                            for($pp=0;$pp<$number;$pp++) { ?>
                    <div class="mb-50" >
                        <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                            <a class="img-link" href="blog_story?name=<?php echo $p_idva[$pp] ; ?>">
                                <img class="img-fluid" src="<?php echo $p_heada[$pp]; ?>" alt="">
                            </a>
                        </div>
                        <h3 class="h4 font-w700 text-uppercase mb-5">
                            <?php echo $p_titlea[$pp]; ?>
                        </h3>
                        <div class="text-muted mb-10">
                            <span class="mr-15">
                                <i class="fa fa-fw fa-calendar mr-5"></i>
                                <?php echo $p_dopa[$pp]; ?>
                            </span>
                            <a class="text-muted mr-15" href="be_pages_generic_profile.html">
                                <i class="fa fa-fw fa-user mr-5"></i>
                                <?php echo $p_bya[$pp]; ?>
                            </a>
                            <a class="text-muted" href="javascript:void(0)">
                                <i class="fa fa-fw fa-tag mr-5"></i>
                                <?php echo $p_categorya[$pp]; ?>
                            </a>
                        </div>
                        <p>
                            <?php echo $p_shorta[$pp]; ?>
                        </p>
                        <a class="link-effect font-w600" href="blog_story?name=<?php echo $p_idva[$pp] ; ?>">Read More..</a>
                    </div>

                    <?php } ?>
                    <nav class="clearfix push">
                        <a class="btn btn-secondary min-width-100 float-right" href="javascript:void(0)">
                            Next
                            <i class="fa fa-arrow-right ml-5"></i>
                        </a>
                        <a class="btn btn-secondary min-width-100 float-left" href="javascript:void(0)">
                            <i class="fa fa-arrow-left mr-5"></i> Prev
                        </a>
                    </nav>
                    <hr class="d-xl-none">
                    <?php } ?>
                    <?php echo $message; ?>
                </div>
                <!-- END Posts -->

                <!-- Sidebar -->
                <div class="col-xl-4">

                    <!-- Categories -->
                    <div class="block block-transparent">
                        <div class="block-header">
                            <h3 class="block-title text-uppercase">
                                <i class="fa fa-fw fa-list mr-5"></i> Categories
                            </h3>
                        </div>
                        <div class="block-content">
                        <ul class="nav nav-pills flex-column push">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center justify-content-between active" href="blog">
                                        <span>
                                            <i class="fa fa-fw fa-star mr-5"></i> Home</span>

                                    </a>
                                </li>
                            <ul class="nav nav-pills flex-column push">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center justify-content-between " href="blog?category=news">
                                        <span>
                                            <i class="fa fa-fw fa-star mr-5"></i> News</span>

                                    </a>
                                </li>
                               
                               
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center justify-content-between active " href="blog?category=tutorials">
                                        <span>
                                            <i class="fa fa-fw fa-pencil mr-5"></i> Tutorials</span>
                                        
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center justify-content-between " href="blog?category=guides">
                                        <span>
                                            <i class="fa fa-fw fa-book mr-5"></i> Guides</span>
                                       
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center justify-content-between active" href="blog?category=updates">
                                        <span>
                                            <i class="fa fa-fw fa-newspaper-o mr-5"></i> Updates</span>
                                       
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Categories -->

                   
                </div>
                <!-- END Sidebar -->
            </div>
        </div>
        <!-- END Blog and Sidebar -->


    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <?php include "footer.php"; ?>
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

    <!-- Page Plugins -->
    <script src="assets/js/plugins/slick/slick.min.js"></script>

    <!-- Page JS Code -->
    <script>
        jQuery(function () {
            // Init page helpers (Slick Slider plugin)
            Codebase.helpers('slick');
        });
    </script>
    </body>

    </html>