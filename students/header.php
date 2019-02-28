<?php   
require_once "dbconnect.php";
require_once "auth.php";
if($R_E_I_D !=''){

?>
<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en" class="no-focus">
<!--<![endif]-->
<script>
function updateOnlineStatus()
{
    document.getElementById("status").innerHTML = "User is online";
}

function updateOfflineStatus()
{
    location.reload();
}

window.addEventListener('online',  updateOnlineStatus);
window.addEventListener('offline', updateOfflineStatus);
</script>

<head>
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
    <style>
        #notification-count {
            position: absolute;
            left: 0px;
            top: 0px;
            font-size: 0.8em;
            color: #de5050;
            font-weight: bold;
        }

        .notification-latest {
            max-height: 400px;
            overflow-y: scroll;
            width: 500px;

        }

        .display-online2 {
            height: 400px;
            overflow-y: scroll;
        }
    </style>

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Codebase framework -->
    <link rel="manifest" href="/manifest.json">
    <script src="assets/js/plugins/ajax/jquery.min.js"></script>
    <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
    <script type="text/javascript" src="assets/js/messagecount.js"></script>
    <script>
        var meco = '<?php echo $R_E_I_D; ?>';
        messagenoti(meco);
    </script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script src="jquery.min.js"></script>


    <script type="text/javascript">
          $(document).ready(function () {
            var reid = '<?php echo $R_E_I_D; ?>';
     $(".display-online2").load("online.php?ido_id="+reid);
   

          

            //Disable part of page
            $("#id").on("contextmenu", function (e) {
                return false;
            });
        });
    </script>
</head>

<body>

    <div id="page-container" class="sidebar-mini sidebar-o sidebar-inverse side-scroll page-header-fixed page-header-glass page-header-inverse main-content-boxed">
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
                                <img class="img-avatar img-avatar32" src="<?php echo $userData['picture']?>" alt="">
                            </a>
                            <a class="align-middle link-effect text-primary-dark font-w600" href="profile">
                                <?php echo $userData['first_name']?>
                            </a>
                        </div>
                        <!-- END User Info -->
                    </div>
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="content-side">
                   
                    
                    <!-- Friends -->
                    <div class="block pull-r-l">
                        <div class="block-header bg-body-light">
                            <h3 class="block-title">
                                <i class="fa fa-fw fa-users font-size-default mr-5"></i>Friends</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <ul class="nav-users push">
                                <div class="display-online2" id="display-online2"></div>
                            </ul>
                        </div>
                    </div>
                    <!-- END Friends -->

                    <!-- Activity -->
                    <div class="block pull-r-l">
                        <div class="block-header bg-body-light">
                            <h3 class="block-title">
                                <i class="fa fa-fw fa-clock-o font-size-default mr-5"></i>Activity
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
                                    <div class="font-w600">+$29 New sale</div>
                                    <div>
                                        <a href="javascript:void(0)">Admin Template</a>
                                    </div>
                                    <div class="font-size-xs text-muted">5 min ago</div>
                                </li>
                                <li>
                                    <i class="si si-close text-danger"></i>
                                    <div class="font-w600">Project removed</div>
                                    <div>
                                        <a href="javascript:void(0)">Best Icon Set</a>
                                    </div>
                                    <div class="font-size-xs text-muted">26 min ago</div>
                                </li>
                                <li>
                                    <i class="si si-pencil text-info"></i>
                                    <div class="font-w600">You edited the file</div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-file-text-o"></i> Docs.doc
                                        </a>
                                    </div>
                                    <div class="font-size-xs text-muted">3 hours ago</div>
                                </li>
                                <li>
                                    <i class="si si-plus text-success"></i>
                                    <div class="font-w600">New user</div>
                                    <div>
                                        <a href="javascript:void(0)">StudioWeb - View Profile</a>
                                    </div>
                                    <div class="font-size-xs text-muted">5 hours ago</div>
                                </li>
                                <li>
                                    <i class="si si-wrench text-warning"></i>
                                    <div class="font-w600">App v5.5 is available</div>
                                    <div>
                                        <a href="javascript:void(0)">Update now</a>
                                    </div>
                                    <div class="font-size-xs text-muted">8 hours ago</div>
                                </li>
                                <li>
                                    <i class="si si-user-follow text-pulse"></i>
                                    <div class="font-w600">+1 Friend Request</div>
                                    <div>
                                        <a href="javascript:void(0)">Accept</a>
                                    </div>
                                    <div class="font-size-xs text-muted">1 day ago</div>
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

        <!-- Sidebar -->
        <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
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
                                <span class="text-dual-primary-dark">R</span>
                                <span class="text-primary">5</span>
                            </span>
                            <!-- END Logo -->
                        </div>
                        <!-- END Mini Mode -->

                        <!-- Normal Mode -->
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
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
                            <img class="img-avatar img-avatar32" src="<?php echo $userData['picture']?>" alt="">
                        </div>
                        <!-- END Visible only in mini mode -->

                        <!-- Visible only in normal mode -->
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="profile">
                                <img class="img-avatar" src="<?php echo $userData['picture']?>" alt="">
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="profile">
                                        <?php echo $userData['first_name']?>
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
                            <li class="open">
                                <a href="index">
                                    <i class="si si-cup"></i>
                                    <span class="sidebar-mini-hide">Dashboard</span>
                                </a>

                            </li>
                            <a href="#">
                                <i class="fa fa-history"></i>
                                <span class="sidebar-mini-hide">Timeline</span>
                            </a>
                            <a href="profile">
                                <i class="fa fa-user-circle "></i>
                                <span class="sidebar-mini-hide">Profile</span>
                            </a>
                            
                            <a href="st_invoice">
                                <i class="fa fa-file-text-o"></i>
                                <span class="sidebar-mini-hide">Invoice</span>
                            </a>
                            <a href="message?id=<?php echo $p_last_message; ?>">
                                <i class="fa fa-wechat"></i>
                                <span class="sidebar-mini-hide">Chat</span>
                            </a>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                    <i class="si si-notebook"></i>
                                    <span class="sidebar-mini-hide">My Library</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="search_book">Search For Book </a>
                                    </li>
                                    <li>
                                        <a href="my_library">My Issue/Reviews</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                    <i class="fa fa-sticky-note"></i>
                                    <span class="sidebar-mini-hide">Notice Board</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="notice_display">General Notice </a>
                                    </li>
                                    <li>
                                        <a href="personal_notice_display">Personal Notice</a>
                                    </li>
                                </ul>
                            </li>
                            <a href="blog">
                                <i class="fa fa-linkedin-square"></i>
                                <span class="sidebar-mini-hide">Blog</span>
                            </a>
                            <a href="radio">
                                <i class="si si-control-play"></i>
                                <span class="sidebar-mini-hide">Radio</span>
                            </a>
                            <a href="product_online">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="sidebar-mini-hide">Used Store</span>
                            </a>

                            <li class="nav-main-heading">
                                <span class="sidebar-mini-visible">UI</span>
                                <span class="sidebar-mini-hidden">User Interface</span>
                            </li>
                            <a href="#">
                                <i class="fa fa-table "></i>
                                <span class="sidebar-mini-hide">Time Table</span>
                            </a>
                            
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                    <i class="si si-handbag"></i>
                                    <span class="sidebar-mini-hide">My Store</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="statistic_usedstore">Dashboard</a>
                                    </li>


                                    <li>
                                        <a href="product">Products</a>
                                    </li>
                                    <li>
                                        <a href="product_edit">New Product </a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                    <i class="fa fa-newspaper-o"></i>
                                    <span class="sidebar-mini-hide">My Blog</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="blog_my">My Blogs</a>
                                    </li>
                                    <li>
                                        <a href="blog_new">Create New Post</a>
                                    </li>

                                </ul>
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

                    <!-- Open Search Section -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                        <i class="fa fa-search"></i>
                    </button>
                    <!-- END Open Search Section -->

                    <!-- Layout Options (used just for demonstration) -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-options-dropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-wrench"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="page-header-options-dropdown">
                            <h6 class="dropdown-header">Header</h6>
                            <button type="button" class="btn btn-sm btn-block btn-alt-secondary" data-toggle="layout" data-action="header_fixed_toggle">Fixed Mode</button>
                            <button type="button" class="btn btn-sm btn-block btn-alt-secondary d-none d-lg-block mb-10" data-toggle="layout" data-action="header_style_classic">Classic Style</button>
                            <div class="d-none d-xl-block">
                                <h6 class="dropdown-header">Main Content</h6>
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="content_layout_toggle">Toggle Layout</button>
                            </div>

                        </div>
                    </div>
                    <!-- END Layout Options -->
                    <!-- Chatting -->
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-options-dropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span id="notification-count">
                                <div class="display-message-count" id="display-message-count"></div>
                            </span>
                            <i class="fa fa-wechat"></i>

                        </button>
                        <div class="dropdown-menu min-width-150">
                            <div class="notification-latest" id="notification-latest"></div>


                        </div>
                    </div>
                    <!-- chatting -->
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
                            <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_toggle">Sidebar Style</button>

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
                            <?php echo $userData['first_name']?>
                            <i class="fa fa-angle-down ml-5"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                            <a class="dropdown-item" href="profile">
                                <i class="si si-user mr-5"></i> Profile
                            </a>

                            <a class="dropdown-item" href="st_invoice">
                                <i class="si si-note mr-5"></i> Invoices
                            </a>
                            <div class="dropdown-divider"></div>

                            <!-- Toggle Side Overlay -->
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                            <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                <i class="si si-wrench mr-5"></i> Settings
                            </a>
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
        <?php } ?>