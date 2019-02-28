<?php include "header.php" ?>

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
                <form action="be_forms_premade.html" method="post" onsubmit="return false;">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="mega-firstname">Firstname</label>
                                    <input type="text" class="form-control form-control-lg" id="mega-firstname" name="mega-firstname" placeholder="Enter your firstname..">
                                </div>
                                <div class="col-6">
                                    <label for="mega-lastname">Lastname</label>
                                    <input type="text" class="form-control form-control-lg" id="mega-lastname" name="mega-lastname" placeholder="Enter your lastname..">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="mega-lastname">Username</label>
                                    <input type="text" class="form-control form-control-lg" id="mega-username" name="mega-username" placeholder="Enter your username..">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="mega-bio">Bio</label>
                                    <textarea class="form-control form-control-lg" id="mega-bio" name="mega-bio" rows="22" placeholder="Enter a few details about yourself.."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="mega-city">Where do you live?</label>
                                    <input type="text" class="form-control form-control-lg" id="mega-city" name="mega-city" placeholder="Enter your location..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="mega-skills">Skills</label>
                                    <select class="form-control" id="mega-skills" name="mega-skills" size="7" multiple>
                                        <option value="1">HTML</option>
                                        <option value="2">CSS</option>
                                        <option value="3">JavaScript</option>
                                        <option value="4">PHP</option>
                                        <option value="5">Ruby</option>
                                        <option value="6">Photoshop</option>
                                        <option value="7">Illustrator</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="mega-age">Age</label>
                                    <input type="text" class="form-control form-control-lg" id="mega-age" name="mega-age" placeholder="Enter your age..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Gender</label>
                                <div class="col-12">
                                    <label class="css-control css-control-primary css-radio mr-10">
                                        <input type="radio" class="css-control-input" name="mega-gender-group">
                                        <span class="css-control-indicator"></span> Female
                                    </label>
                                    <label class="css-control css-control-primary css-radio">
                                        <input type="radio" class="css-control-input" name="mega-gender-group">
                                        <span class="css-control-indicator"></span> Male
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-alt-primary">
                                <i class="fa fa-check mr-5"></i> Complete Profile
                            </button>
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
<?php include"footer.php" ?>
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
</body>

</html>