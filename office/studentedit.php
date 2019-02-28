
<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Edit </title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- datatable lib -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

           </head>
    <body>
       
        <div id="page-container" class="sidebar-inverse side-scroll page-header-fixed page-header-inverse main-content-boxed">
            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="content-header content-header-fullrow bg-black-op-10">
                            <div class="content-header-section text-center align-parent">
                               
                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                                <!-- END Close Sidebar -->

                                <!-- Logo -->
                                <div class="content-header-item">
                                    <a class="link-effect font-w700" href="index.html">
                                        <i class="si si-fire text-primary"></i>
                                        <span class="font-size-xl text-dual-primary-dark">Project</span><span class="font-size-xl text-primary">R-5</span>
                                    </a>
                                </div>
                                <!-- END Logo -->
                            </div>
                        </div>
                        <!-- END Side Header -->

                        <!-- Side Main Navigation -->
                        <div class="content-side content-side-full">
                            <!--
                            Mobile navigation, desktop navigation can be found in #page-header

                            If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                            -->
                            <ul class="nav-main">
                                <li>
                                    <a class="active" href="bd_dashboard.html"><i class="si si-compass"></i>Dashboard</a>
                                </li>
                                <li class="nav-main-heading">Layout</li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i>Variations</a>
                                    <ul>
                                        <li>
                                            <a href="bd_variations_hero_simple_1.html">Hero Simple 1</a>
                                        </li>
                                       
                                    </ul>
                                </li>
                             
                                <li>
                                    <a href="index"><i class="si si-action-undo"></i>Go Back</a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Side Main Navigation -->
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
                        <!-- Logo -->
                        <div class="content-header-item">
                            <a class="link-effect font-w700 mr-5" href="index.html">
                                <i class="si si-fire text-primary"></i>
                                <span class="font-size-xl text-dual-primary-dark">Project</span><span class="font-size-xl text-primary">R-5</span>
                            </a>
                        </div>
                        <!-- END Logo -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Middle Section -->
                    <div class="content-header-section d-none d-lg-block">
                        <!-- Header Navigation -->
                        <!--
                        Desktop Navigation, mobile navigation can be found in #sidebar

                        If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                        If your sidebar menu includes headings, they won't be visible in your header navigation by default
                        If your sidebar menu includes icons and you would like to hide them, you can add the class 'nav-main-header-no-icons'
                        -->
                        <ul class="nav-main-header">
                            <li>
                                <a class="active" href="bd_dashboard.html"><i class="si si-compass"></i>Dashboard</a>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i>Variations</a>
                                <ul>
                                    <li>
                                        <a href="bd_variations_hero_simple_1.html">Hero Simple 1</a>
                                    </li>
                                   
                                    
                                </ul>
                            </li>
                           
                            <li>
                                <a href="be_pages_dashboard.html"><i class="si si-action-undo"></i>Go Back</a>
                            </li>
                        </ul>
                        <!-- END Header Navigation -->
                    </div>
                    <!-- END Middle Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- Color Themes + A few of the many header options (used just for demonstration) -->
                        <!-- Themes functionality initialized in Codebase() -> uiHandleTheme() -->
                        <div class="btn-group ml-5" role="group">
                           
                            <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-themes-dropdown">
                               
                                
                                
                            </div>
                        </div>
                        <!-- END Color Themes + A few of the many header options -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                       
                        <!-- END Open Search Section -->

                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->
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
           
           





            <main id="main-container">
            <!-- Page Content -->
            <div class="content content-full">
                <div class="row gutters-tiny invisible" data-toggle="appear">
         <div class="container">
        
        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Salary</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Salary</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>
        </main>
        <!--create modal dialog for display detail info for edit on button cell click-->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div id="content-data"></div>
            </div>
        </div>
    </div>
</div></div>
    </div>

    <script>
        $(document).ready(function(){
            var dataTable=$('#example').DataTable({
                "processing": true,
                "serverSide":true,
                "ajax":{
                    url:"fetch.php",
                    type:"post"
                }
            });
        });
    </script>
    <!--script js for get edit data-->
    <script>
        $(document).on('click','#getEdit',function(e){
            e.preventDefault();
            var per_id=$(this).data('id');
            //alert(per_id);
            $('#content-data').html('');
            $.ajax({
                url:'editdata.php',
                type:'POST',
                data:'id='+per_id,
                dataType:'html'
            }).done(function(data){
                $('#content-data').html('');
                $('#content-data').html(data);
            }).fial(function(){
                $('#content-data').html('<p>Error</p>');
            });
        });
    </script>

        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <!-- <script src="assets/js/core/jquery.min.js"></script> -->
        <script src="assets/js/core/popper.min.js"></script>
        <!-- <script src="assets/js/core/bootstrap.min.js"></script> -->
        <!-- <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script> -->
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <!-- <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script> -->
        <script src="assets/js/codebase.js"></script>

       
    </body>
</html>
<?php
$con=mysqli_connect('localhost','root','','test');
if(isset($_POST['btnEdit'])){
    $new_id=mysqli_real_escape_string($con,$_POST['txtid']);
    $new_name=mysqli_real_escape_string($con,$_POST['txtname']);
    $new_salary=mysqli_real_escape_string($con,$_POST['txtsalary']);
    $new_age=mysqli_real_escape_string($con,$_POST['txtage']);
	$new_branch=mysqli_real_escape_string($con,$_POST['branch']);
    $sqlupdate="UPDATE tbPerson SET name='$new_name',
                salary='$new_salary',age='$new_age',
				branch='$new_branch'
                WHERE id='$new_id'";
    $result_update=mysqli_query($con,$sqlupdate);
    if($result_update){
        echo '<script>window.location.href="index.php"</script>';
    }
    else{
        echo '<script>alert("Update Failed")</script>';
    }
}
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $sqldelete="DELETE FROM tbPerson WHERE id='$id'";
    $result_delete=mysqli_query($con,$sqldelete);
    if($result_delete){
        echo'<script>window.location.href="index.php"</script>';
    }
    else{
        echo'<script>alert("Delete Failed")</script>';
    }
}
?>
