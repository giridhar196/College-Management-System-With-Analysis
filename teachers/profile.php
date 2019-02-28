<?php include "header.php" ?>
<?php include "friends.php" ?>
<link rel="stylesheet" href="assets/js/plugins/slick/slick.min.css">
        <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.min.css">
<div id="page-loader" class="show" >
               
                </div>
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
               
              
                <!-- User Info -->
                <div class="bg-image bg-image-bottom" style="background-image: url('uploads/<?php echo $pic ?>');  background-repeat: no-repeat; background-position: center; "   >
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
                            <h1 class="h3 text-white font-w700 mb-10">Giridhar</h1>
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
                                <p><span class="font-w600 mb-5">Name: </span ><?php echo $name; ?> </p>
                                <p><span class="font-w600 mb-5">Phone: </span><?php echo $phone; ?> </p> 
                                <p><span class="font-w600 mb-5">Address: </span><?php echo $address; ?> </p> 
                                <p><span class="font-w600 mb-5">Email: </span><?php echo $email; ?> </p>
                                <p><span class="font-w600 mb-5">Roll Number: </span><?php echo $rollnumber; ?> </p> 
                                <p><span class="font-w600 mb-5">Date Of Birth: </span><?php echo $dob; ?> </p>
                                <p><span class="font-w600 mb-5">Admission Number: </span><?php echo $admnno; ?> </p>
                                <p><span class="font-w600 mb-5">Aadhar Number: </span><?php echo $aadharnumber; ?> </p>
                                <p><span class="font-w600 mb-5">Semister: </span><?php echo $semister; ?> </p>
                                <p><span class="font-w600 mb-5">Branch: </span><?php echo $branch; ?> </p>
                               
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
                                <p><span class="font-w600 mb-5">Loacation: </span><?php echo $location ?> </p>
                                <p><span class="font-w600 mb-5">Strength: </span><?php echo $strength ?> </p> 
                                <p><span class="font-w600 mb-5">Skills: </span><?php echo $skills ?> </p> 
                                <p><span class="font-w600 mb-5">Achivements: </span>xyz@sfs.dfd </p> 
                                <p><span class="font-w600 mb-5">Hobes: </span><?php echo $hobiees ?></p> 
                                <p><span class="font-w600 mb-5">Achivements: </span><?php echo $location ?></p>
                                <p><span class="font-w600 mb-5">Goal: </span><?php echo $goal ?> </p>
                                <p><span class="font-w600 mb-5">Vision: </span><?php echo $vision ?></p> 
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <!-- END Themed Rounded Blocks -->
                 
                    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
        <?php
	}
	?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" />
	<button type="submit" name="btn-upload">upload</button>
	</form>
                   

    

        
                    <!-- Co Students -->
                    <h2 class="content-heading">
                        <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary float-right">View More..</button>
                        <i class="si si-users mr-5"></i> Co Students
                    </h2> 
                    <div class="col-md-12">
                            <!-- Slider with Multiple Slides/Avatars -->
                            <div class="block">
                               
                                <div class="block-content">
                                    <div class="js-slider text-center" data-autoplay="true" data-dots="true" data-arrows="true" data-slides-to-show="<?php echo $cv ?>">
                                    <?php  for($j=0;$j<$cou; $j++){?>
                                      
                                      <div class="col-md-6 col-xl-3">
                                      <div class="block block-rounded text-center">
                                          <div class="block-content block-content-full">
                                              <img class="img-avatar" src="<?php echo $rg_pro[$j] ?>" alt="">
                                          </div>
                                          <div class="block-content block-content-full block-content-sm bg-body-light">
                                              <div class="font-w600 mb-5"><?php echo $un_arr[$j] ;?></div>
                                              <div class="font-size-sm text-muted"><?php echo $rg_arr[$j]; ?></div>
                                          </div>
                                          <div class="block-content block-content-full">
                                              <a class="btn btn-rounded btn-alt-success" href="profile.php">
                                                  <i class="fa fa-envelope-o mr-5"></i>Message
                                              </a>
                                              <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                                                  <i class="fa fa-user-circle mr-5"></i>Profile
                                              </a>
                                          </div>
                                      </div>
                                     
                                  </div>
                    <?php } ?>
                                </div>
								</div>
                            <!-- END Slider with Multiple Slides/Avatars -->
                     
					</div>
	</div>
                   
                    <!-- END Avatar Sliders -->
                    
                    <!-- Co Students-->

                    <!-- Articles -->
                    <h2 class="content-heading">
                        <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary float-right">View More..</button>
                        <i class="si si-note mr-5"></i> Articles
                    </h2>
                    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <p class="font-size-sm text-muted float-sm-right mb-5"><em>3 hours ago</em></p>
                            <h4 class="font-size-default text-primary mb-0">
                                <i class="fa fa-newspaper-o text-muted mr-5"></i> 5 things I've learned working from home
                            </h4>
                        </div>
                    </a>
                    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <p class="font-size-sm text-muted float-sm-right mb-5"><em>2 days ago</em></p>
                            <h4 class="font-size-default text-primary mb-0">
                                <i class="fa fa-newspaper-o text-muted mr-5"></i> Vue.js or React.js? Let's dive in!
                            </h4>
                        </div>
                    </a>
                    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <p class="font-size-sm text-muted float-sm-right mb-5"><em>1 week ago</em></p>
                            <h4 class="font-size-default text-primary mb-0">
                                <i class="fa fa-newspaper-o text-muted mr-5"></i> 10 important things I wish I knew
                            </h4>
                        </div>
                    </a>
                    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <p class="font-size-sm text-muted float-sm-right mb-5"><em>2 weeks ago</em></p>
                            <h4 class="font-size-default text-primary mb-0">
                                <i class="fa fa-newspaper-o text-muted mr-5"></i> Bringing your productivity back
                            </h4>
                        </div>
                    </a>
                    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <p class="font-size-sm text-muted float-sm-right mb-5"><em>1 month ago</em></p>
                            <h4 class="font-size-default text-primary mb-0">
                                <i class="fa fa-newspaper-o text-muted mr-5"></i> Creating a super smooth CSS animation
                            </h4>
                        </div>
                    </a>
                    <!-- END Articles -->
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