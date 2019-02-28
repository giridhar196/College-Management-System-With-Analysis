<?php include "header.php";?>
<link rel="stylesheet" href="assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<main id="main-container">
    <div class="content">
        <!-- Bootstrap Forms Validation -->
        <h2 class="content-heading">Select Attandance To Date To From</h2>
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Attandance</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option">
                        <i class="si si-wrench"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <div class="row justify-content-center py-20">
                    <div class="col-xl-6">

                        <form action="attandace_monthly" method="GET">

                            <div class="form-group row">
                                <div class="col-3">
                                    <label for="f-sem">Semister?</label>
                                    <select class="form-control" id="f-sem" name="f-sem">
                                        <option value="1-1">1-1</option>
                                        <option value="1-2">1-2</option>
                                        <option value="2-1">2-1</option>
                                        <option value="2-2">2-2</option>
                                        <option value="3-1">3-1</option>
                                        <option value="3-2">3-2</option>
                                        <option value="4-1">4-1</option>
                                        <option value="4-2">4-2</option>

                                    </select>

                                </div>
                                <div class="col-3">
                                    <label for="f-sec">Section?</label>
                                    <select class="form-control" id="f-sec" name="f-sec">
                                        <option value="a">a</option>
                                        <option value="b">b</option>
                                        <option value="c">c</option>
                                        <option value="d">d</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="f-bra">Branch?</label>
                                    <select class="form-control" id="f-bra" name="f-bra">
                                        <option value="cse">CSE</option>
                                        <option value="ece">ECE</option>
                                        <option value="eee">EEE</option>
                                        <option value="mech">MECH</option>
                                        <option value="civil">Civil</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="f-pe">Type?</label>
                                    <select class="form-control" id="f-pe" name="f-pe">
                                        <option value="class">Class</option>
                                        <option value="lab">Lab</option>

                                    </select>
                                </div>
                               
                            </div>
                            <div class="col-12">
                                    <label for="f-pe">Toatal No of Classes?</label>
                                   <input type="number" required class="form-control" name="f-classes" id="f-classes"> 
                                </div>
                            <div class="form-group row-center">
                                <label class="col-12" for="example-daterange1">Date Range?</label>
                                <div class="col-lg-12">
                                    <div class="input-daterange input-group" data-date-format="mm/dd/yyyy" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                        <input type="text" required class="form-control" id="example-daterange1" name="example-daterange1" placeholder="From" data-week-start="1"
                                            data-autoclose="true" data-today-highlight="true">
                                        <span class="input-group-addon font-w700">to</span>
                                        <input type="text" required class="form-control" id="example-daterange2" name="example-daterange2" placeholder="To" data-week-start="1"
                                            data-autoclose="true" data-today-highlight="true">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input type="submit" name="trans" id="trans" class="js-notify btn btn-lg btn-block btn-alt-primary" data-message="Please Wait Data is Getting Load!"
                                        value="Fetch Student Information.." />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</main>
<?php include "footer.php" ?>
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
<script src="assets/js/pages/be_forms_plugins.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="assets/js/plugins/select2/select2.full.min.js"></script>
        <script src="assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
        <script src="assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js"></script>
        <script src="assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
        <script src="assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="assets/js/plugins/dropzonejs/min/dropzone.min.js"></script>
        <script src="assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
        <script>
            jQuery(function () {
                // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                Codebase.helpers(['notify','datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
            });
        </script>
<script>
    jQuery(function () {
        // Init page helpers (Table Tools helper)
        Codebase.helpers(['table-tools', 'datepicker']);
    });
</script>