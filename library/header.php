<?php   
require_once "dbconnect.php";
require_once "auth.php";
?>
<?php include "dashboard_plugs.php" ?>
<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!-->

<html lang="en" class="no-focus">
<!--<![endif]-->

<head>

    
    <script type="text/javascript">
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>College Management system &amp; Project R-5</title>

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
</head>

<body>

    <div id="page-container" class="sidebar-o side-overlay-hover side-scroll page-header-modern main-content-boxed">
        <!-- Side Overlay-->
        <aside id="side-overlay">
            <!-- Side Overlay Scroll Container -->
            <div id="side-overlay-scroll">
                <!-- Side Header -->
                <div class="content-header content-header-fullrow">
                    <div class="content-header-section align-parent">
                        <!-- Close Side Overlay -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <!-- END Close Side Overlay -->

                        <!-- User Info -->
                        <div class="content-header-item">
                            <a class="img-link mr-5" href="profile">
                                <img class="img-avatar img-avatar32" src="<?php echo $userData['picture'] ?>" alt="">
                            </a>
                            <a class="align-middle link-effect text-primary-dark font-w600" href="profile">
                                <?php echo $userData['first_name'] ?>
                            </a>
                        </div>
                        <!-- END User Info -->
                    </div>
                </div>
                <!-- END Side Header -->
                <input type="hidden" id="reg_hidden" value="<?php echo $R_E_I_D; ?>">
                <!-- Side Content -->
                <div class="content-side">

                    <!-- Mini Stats -->
                    <div class="block pull-r-l">
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="row">
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Over All Budget</div>
                                    <div class="font-size-h4">460</div>
                                </div>
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Issues</div>
                                    <div class="font-size-h4">728</div>
                                </div>
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Fines</div>
                                    <div class="font-size-h4">$7,860</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Mini Stats -->



                    <!-- Activity -->
                    <div class="block pull-r-l">
                        <div class="block-header bg-body-light">
                            <h3 class="block-title">
                                <i class="fa fa-fw fa-clock-o font-size-default mr-5"></i>Library Index
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <ul class="list list-activity">
                                <li>
                                    <i class="si si-wallet text-success"></i>
                                    <div class="font-w600">Today Issues</div>
                                    <div>
                                        <a href="javascript:void(0)"><?php echo $today_issue; ?></a>
                                    </div>

                                </li>
                                <li>
                                    <i class="si si-close text-danger"></i>
                                    <div class="font-w600">Today Return</div>
                                    <div>
                                        <a href="javascript:void(0)"><?php echo $today_return; ?></a>
                                    </div>

                                </li>
                                <li>
                                    <i class="si si-pencil text-info"></i>
                                    <div class="font-w600">Total Book</div>
                                    <div>
                                        <a href="javascript:void(0)">
                                           <?php echo $total_books ?>
                                        </a>
                                    </div>

                                </li>
                                <li>
                                    <i class="si si-plus text-success"></i>
                                    <div class="font-w600">Currently In Library</div>
                                    <div>
                                        <a href="javascript:void(0)"><?php echo $book_count; ?></a>
                                    </div>

                                </li>
                                <li>
                                    <i class="si si-wrench text-warning"></i>
                                    <div class="font-w600">Total Issues</div>
                                    <div>
                                        <a href="javascript:void(0)"><?php echo $book_issue_count; ?></a>
                                    </div>

                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- END Activity -->
                </div>
                <!-- END Side Content -->
            </div>
            <!-- END Side Overlay Scroll Container -->
        </aside>
        <!-- END Side Overlay -->


        <nav id="sidebar">
            <!-- Sidebar Scroll Container -->
            <div id="sidebar-scroll">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow px-15">
                        <!-- Mini Mode -->
                        <div class="content-header-section sidebar-mini-visible-b">
                            <!-- Logo -->
                            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">c</span>
                                <span class="text-primary">b</span>
                            </span>
                            <!-- END Logo -->
                        </div>
                        <!-- END Mini Mode -->

                        <!-- Normal Mode -->
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">

                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Sidebar -->

                            <!-- Logo -->
                            <div class="content-header-item">
                                <a class="link-effect font-w700" href="index">
                                    <i class="si si-fire text-primary"></i>
                                    <span class="font-size-xl text-dual-primary-dark">Project</span>
                                    <span class="font-size-xl text-primary">R-5</span>
                                </a>
                            </div>
                            <!-- END Logo -->
                        </div>
                        <!-- END Normal Mode -->
                    </div>
                    <!-- END Side Header -->

                    <!-- Side User -->
                    <div class="content-side content-side-full content-side-user px-10 align-parent">
                        <!-- Visible only in mini mode -->
                        <div class="sidebar-mini-visible-b align-v animated fadeIn">
                            <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar15.jpg" alt="">
                        </div>
                        <!-- END Visible only in mini mode -->

                        <!-- Visible only in normal mode -->
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="profile">
                                <img class="img-avatar" src="<?php echo $userData['picture'] ?>" alt="">
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="profile">
                                        <?php echo $userData['first_name'] ?>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                    <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                        <i class="si si-drop"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark" href="logout">
                                        <i class="si si-logout"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Visible only in normal mode -->
                    </div>
                    <!-- END Side User -->

                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">

                            <a href="index">
                                <i class="si si-cup"></i>
                                <span class="sidebar-mini-hide">Dashboard</span>
                            </a>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                    <i class="fa fa-sticky-note"></i>
                                    <span class="sidebar-mini-hide">Notice Board</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="notice_new">Create a Notice </a>
                                    </li>
                                    <li>
                                        <a href="notice_display">View Notice Board</a>
                                    </li>
                                    <li>
                                        <a href="personal_notice_display">Personal Notice Board</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                    <i class="si si-list"></i>
                                    <span class="sidebar-mini-hide">Category</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="add_category">Add Category </a>
                                    </li>
                                    <li>
                                        <a href="manage_category">Manage Category</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                    <i class="si si-user"></i>
                                    <span class="sidebar-mini-hide">Authors</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="add_author">Add Author </a>
                                    </li>
                                    <li>
                                        <a href="manage_author">Manage Author</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                    <i class="si si-notebook"></i>
                                    <span class="sidebar-mini-hide">Books</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="add_book">Add Book </a>
                                    </li>
                                    <li>
                                        <a href="add_journel_gifted_book">Add Journel/Reference Book </a>
                                    </li>
                                    <li>
                                        <a href="manage_book">Manage Book</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="timetable">
                                    <i class="fa fa-table "></i>
                                    <span class="sidebar-mini-hide">Time Table</span>
                                </a>
                            </li>

                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                    <i class="si si-book-open"></i>
                                    <span class="sidebar-mini-hide">Issue Book</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="issue_book_number">Issue New Book </a>
                                    </li>
                                    <li>
                                        <a href="manage_issue">Manage Issue</a>
                                    </li>
                                    <li>
                                        <a href="non_issue_books">Non Issued Books</a>
                                    </li>
                                </ul>
                            </li>

                            <a href="fetch_by_date">
                                <i class="si si-calendar"></i>
                                <span class="sidebar-mini-hide">Issue By Calender</span>
                            </a>
                            <a href="return_book">
                                <i class="fa fa-leanpub"></i>
                                <span class="sidebar-mini-hide">Return Book</span>
                            </a>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                    <i class="si si-folder-alt"></i>
                                    <span class="sidebar-mini-hide">Other</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="radio">Radio</a>
                                    </li>
                                    <li>
                                        <a href="timeline">TimeLine </a>
                                    </li>
                                    <li>
                                        <a href="blog">Blog</a>
                                    </li>
                                    <li>
                                        <a href="profile">Profile</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </div>
            <!-- END Sidebar Scroll Container -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="content-header-section">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                        <i class="fa fa-navicon"></i>
                    </button>
                    <!-- END Toggle Sidebar -->

                   

                    <!-- Layout Options (used just for demonstration) -->
                    
                   
                    <!-- Color Themes (used just for demonstration) -->
                    <!-- Themes functionality initialized in Codebase() -> uiHandleTheme() -->
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-themes-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-paint-brush"></i>
                        </button>
                        <div class="dropdown-menu min-width-150" aria-labelledby="page-header-themes-dropdown">
                            <h6 class="dropdown-header text-center">Color Themes</h6>
                            <div class="row no-gutters text-center mb-5">
                                <div class="col-4 mb-5">
                                    <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-4 mb-5">
                                    <a class="text-elegance" data-toggle="theme" data-theme="assets/css/themes/elegance.min.css" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-4 mb-5">
                                    <a class="text-pulse" data-toggle="theme" data-theme="assets/css/themes/pulse.min.css" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-4 mb-5">
                                    <a class="text-flat" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-4 mb-5">
                                    <a class="text-corporate" data-toggle="theme" data-theme="assets/css/themes/corporate.min.css" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-4 mb-5">
                                    <a class="text-earth" data-toggle="theme" data-theme="assets/css/themes/earth.min.css" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            
                        </div>
                    </div>
                    <!-- END Color Themes -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="content-header-section">
                    <!-- User Dropdown -->
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <?php echo $userData['first_name'] ?>
                            <i class="fa fa-angle-down ml-5"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                            <a class="dropdown-item" href="profile">
                                <i class="si si-user mr-5"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>

                            <!-- Toggle Side Overlay -->
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                           
                            <!-- END Side Overlay -->

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout">
                                <i class="si si-logout mr-5"></i> Sign Out
                            </a>
                        </div>
                    </div>
                    <!-- END User Dropdown -->

                    <!-- Toggle Side Overlay -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                        <i class="fa fa-tasks"></i>
                    </button>
                    <!-- END Toggle Side Overlay -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            

            <!-- Header Loader -->
            <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-primary">
                <div class="content-header content-header-fullrow text-center">
                    <div class="content-header-item">
                        <i class="fa fa-sun-o fa-spin text-white"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->