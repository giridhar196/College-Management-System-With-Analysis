<?php include "header.php" ?>

<link rel="stylesheet" href="assets/js/plugins/sweetalert2/sweetalert2.min.css">

<div id="page-loader" class="show"></div>
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <!-- Mega Form -->
                    <h2 class="content-heading">Profile Edit</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Stay Educate While Edit this</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form action="profile_edit_update.php" method="post" >
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group row">
                                            <div class="col-6">
                                                <label for="mega-nick">Nickname</label>
                                                <input type="text" class="form-control form-control-lg" id="mega-nick" name="mega-nick"  value="<?php echo $nickname ?>" placeholder="Enter your firstname..">
                                            </div>
                                            <div class="col-6">
                                                <label for="mega-goal">Goal</label>
                                                <input type="text" class="form-control form-control-lg" id="mega-goal" name="mega-goal" value="<?php echo $goal ?>" placeholder="Enter your Goal..">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-pass">Security Password</label>
                                                <input type="text" class="form-control form-control-lg" id="mega-pass" name="mega-pass" value="<?php echo $password ?>" placeholder="Enter your Security Password..">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-bio">Achivements</label>
                                                <textarea class="form-control form-control-lg" id="mega-bio" name="mega-bio" value="<?php echo $achivements?>" rows="26" placeholder="Enter a few details about yourself.."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-5">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-city">Where do you live?</label>
                                                <input type="text" class="form-control form-control-lg" value="<?php echo $location ?>" id="mega-city" name="mega-city" placeholder="Enter your location..">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-vision">Vision?</label>
                                                <input type="text" class="form-control form-control-lg"  value="<?php echo $vision ?>" id="mega-vision" name="mega-vision" placeholder="Enter your Vision..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-skills">Skills</label>
                                                <select class="form-control" id="mega-skills" name="mega-skills" size="7" multiple>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                            <label for="mega-strength">Strength</label>
                                            <input type="text" class="form-control form-control-lg" value="<?php echo $strength ?>" id="mega-strength" name="mega-strength" placeholder="Enter your Strength..">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                            <label for="mega-hobiee">Hobiee</label>
                                            <input type="text" class="form-control form-control-lg" value="<?php echo $hobiees ?>" id="mega-hobiee" name="mega-hobiee" placeholder="Enter your Strength..">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-12">
                                            <label for="mega-role">Role Model</label>
                                            <input type="text" class="form-control form-control-lg" id="mega-role" value="<?php echo $rolemodal  ?>" name="mega-role" placeholder="Enter your Role Model..">
                                       </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                              
                                    <div class="form-group row">
                                        <div class="col-12">
                                    <button type="submit" name="submit" id="submit" class="js-swal-success btn btn-alt-primary">
                                            <i class="fa fa-check mr-5"></i> Complete Profile
                                    </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Mega Form -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

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
       
       
       
        <script src="assets/js/pages/be_ui_activity.js"></script>
        <script src="assets/js/plugins/sweetalert2/es6-promise.auto.min.js"></script>
        <script src="assets/js/plugins/sweetalert2/sweetalert2.min.js"></script>
       
       
        <!-- Codebase Core JS -->
        
    </body>
</html>