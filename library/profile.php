<?php include "header.php" ?>

<link rel="stylesheet" href="assets/js/plugins/slick/slick.min.css">
        <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.min.css">
<div id="page-loader" class="show" >
               
                </div>
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
               
              
                <!-- User Info -->
                <div class="bg-image bg-image-bottom" style="background-image: url('assets/img/photos/photo13@2x.jpg'); "   >
                    <div class="bg-primary-dark-op py-30">
                        <div class="content content-full text-center">
                            <!-- Avatar -->
                            <div class="mb-15">
                                <a class="img-link" href="profile">
                                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="<?php echo $userData['picture'] ?>" alt="">
                                </a>
                            </div>
                            <!-- END Avatar -->

                            <!-- Personal -->
                            <h1 class="h3 text-white font-w700 mb-10"><?php echo $userData['first_name']; ?></h1>
                            <h2 class="h5 text-white-op">
                                Student <a class="text-primary-light" href="javascript:void(0)">@<?php echo $nickname ?></a>
                            </h2>
                            <!-- END Personal -->
<!-- Actions -->

 



                            <!-- END Actions -->
                            
                        </div>
                    </div>
                </div>
                <!-- END User Info -->

                <!-- Main Content -->
                <div class="content">
 <!-- Themed Rounded Blocks -->
 <h2 class="content-heading">Profile
 <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary float-right"><a href="profile_edit.php">Edit Profile..</a></button>
          
 </h2>
 
 
                    <div class="row">
                        <div class="col-md-6">
                            <div class="block block-themed block-rounded">
                                <div class="block-header">
                                    <h3 class="block-title">Primary Details</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                <p><span class="font-w600 mb-5">Name: </span ><?php echo $p_nof; ?> </p>
                                <p><span class="font-w600 mb-5">Phone: </span><?php echo $phone; ?> </p> 
                                <p><span class="font-w600 mb-5">Address: </span><?php echo $address; ?> </p> 
                                <p><span class="font-w600 mb-5">Email: </span><?php echo  $userData['email']; ?> </p>
                                <p><span class="font-w600 mb-5">Roll Number: </span><?php echo $rollnumber; ?> </p> 
                                <p><span class="font-w600 mb-5">Date Of Birth: </span><?php echo $dob; ?> </p>
                                
                                <p><span class="font-w600 mb-5">Aadhar Number: </span><?php echo $aadharnumber; ?> </p>
                                
                                <p><span class="font-w600 mb-5">Position In: </span><?php echo $b; ?> </p>
                               
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="block block-themed block-rounded">
                        <div class="block-header bg-pulse-darker">
                            <h3 class="block-title">Bio</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                <p><span class="font-w600 mb-5">Aim: </span><?php echo $aim ?> </p>
                                <p><span class="font-w600 mb-5">RoleModal: </span><?php echo $rolemodal ?> </p>
                                <p><span class="font-w600 mb-5">Location: </span><?php echo $location ?> </p>
                                <p><span class="font-w600 mb-5">Strength: </span><?php echo $strength ?> </p> 
                               
                                <p><span class="font-w600 mb-5">Achivements: </span>They Are too Big to Show Here </p> 
                                <p><span class="font-w600 mb-5">Hobes: </span><?php echo $hobiees ?></p> 
                                <p><span class="font-w600 mb-5">Achivements: </span><?php echo $location ?></p>
                                <p><span class="font-w600 mb-5">Goal: </span><?php echo $goal ?> </p>
                                <p><span class="font-w600 mb-5">Vision: </span><?php echo $vision ?></p> 
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <!-- END Themed Rounded Blocks -->
                 
                   
   
                      
                </div>
                <!-- END Main Content -->
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