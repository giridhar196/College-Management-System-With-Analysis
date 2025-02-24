<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en" class="no-focus">
<!--<![endif]-->
<script src="assets/js/plugins/ajax/jquery.min.js"></script>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <script type="text/javascript">
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>College Management system &amp; Project R-5</title>

    <meta name="description" content="College Management system  &amp; Project R-5">
    <meta name="author" content="Giridhar Addagalla Crafted with Love and Team">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="College Management system  &amp; Project R-5">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Giridhar Addagalla Crafted with Love and Team">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="assets/img/favicons/favicon-192x192.png">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Codebase framework -->
    <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>

    <div id="page-container" class="main-content-boxed">
        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="bg-image" style="background-image: url('assets/img/photos/photo34@2x.jpg');">
                <div class="row mx-0 bg-pulse-op">
                    <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                        <div class="p-30 invisible" data-toggle="appear">
                            <p class="font-size-h3 font-w600 text-white">
                                <i class="fa fa-bell"></i> You have
                                <a class="link-effect text-white-op font-w700" href="javascript:void(0)">New Features are Waiting</a>!
                            </p>
                            <p class="font-italic text-white-op">
                                Copyright &copy; by Giridhar Addagalla
                                <span class="js-year-copy">2018 </span>
                            </p>
                        </div>
                    </div>
                    <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white text-center">
                        <div class="content content-full">
                            <!-- Header -->
                            <div class="px-30 pt-10 pb-30">
                                <a class="link-effect text-pulse font-w700" href="index.html">
                                    <i class="si si-fire"></i>
                                    <span class="font-size-xl text-pulse-dark">Project</span>
                                    <span class="font-size-xl">R-5</span>
                                </a>
                                <h1 class="h3 font-w700 mt-30 mb-10">Registration</h1>
                                <h2 class="h5 font-w400 text-muted mb-30">Please enter Registration Number,Email</h2>

                                <img class="img-avatar img-avatar96" src="assets/img/avatars/avatar15.jpg" alt="">
                            </div>
                            <!-- END Header -->

                            <!-- Unlock Form -->
                            <!-- jQuery Validation (.js-validation-lock class is initialized in js/pages/op_auth_lock.js) -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <form class="js-validation-lock px-30" action="sign_up_register" method="GET">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="email" required class="form-control" id="gmail" name="gmail">
                                            <label for="lock-password">Gmail Id</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="text" required class="form-control" id="regno" name="regno">
                                            <label for="lock-password">Regd Number</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-hero btn-alt-danger">
                                        <i class="si si-lock-open mr-10"></i> Sign Up
                                    </button>
                                    <div class="mt-30">
                                        <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="login.php">
                                            <i class="fa fa-user text-muted mr-5"></i> Already ? Registered
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <!-- END Unlock Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->
    <?php include "footer.php"; ?>
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
    <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/op_auth_lock.js"></script>
</body>

</html>