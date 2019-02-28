<?php include "header.php"; ?>
<!-- Main Container -->
<main id="main-container">
    <!-- Page Content -->
    <div class="content">
        <h2 class="content-heading">Radius</h2>



        <!-- Dynamic Table Full Pagination -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Full Radius
                    <small>Full </small>
                </h3>
            </div>

            <div class='table-responsive'>
                <div class='block-content block-content-full'>
                    <table class='table table-bordered table-striped table-vcenter js-dataTable-full-pagination'>
                        <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->
                        <thead>
                            <tr>
                                <th class='text-center' style='width: 10px;'>
                                    <i class='si si-user'></i>
                                </th>

                                <th class='text-center'></th>
                                <th>UserName</th>
                                <th class='d-none d-sm-table-cell'>Roll Number</th>
                                <th class='d-none d-sm-table-cell'>Type</th>

                                <th class='d-none d-sm-table-cell' style='width: 4%;'>Attand</th>
                                <th class='d-none d-sm-table-cell' style='width: 4%;'>Edit</th>
                                <th class='d-none d-sm-table-cell' style='width: 4%;'>Fee</th>
                                <th class='d-none d-sm-table-cell' style='width: 4%;'>store</th>
                                <th class='d-none d-sm-table-cell' style='width: 4%;'>Blog</th>
                                <th class='d-none d-sm-table-cell' style='width: 4%;'>Radius</th>
                            </tr>
                        </thead>


                        <tbody>

                            <?php 
  
$c = mysqli_query($conn, "SELECT * FROM `radius` WHERE auth_id='$oauth' AND radius_access='1'");
if(mysqli_num_rows($c) > 0){
   
     //fetch all the messages of $user_id(loggedin user) and $user_two from their conversation
     $q = mysqli_query($conn, "SELECT * FROM `radius`");
     //check their are any messages
     if(mysqli_num_rows($q) > 0){
         while ($m = mysqli_fetch_assoc($q)) {
             //format the message and display it to the user
            $id= $m['id'];
             $usernamep = $m['username'];
             $auth_iid = $m['auth_id'];
             $attandancep = $m['attandance'];
             $editp = $m['edit'];
             $storep = $m['store'];
             $feep = $m['fee'];
             $blogp = $m['blog'];
             $rad_acc=$m['radius_access'];
             
            
             $r_t = mysqli_query($conn, "SELECT * FROM `users` WHERE oauth_uid='$auth_iid'");
             $user_fetch = mysqli_fetch_assoc($r_t);
             $user_from_image = $user_fetch['picture'];
             $user_from_regno = $user_fetch['regno'];
             if($attandancep==0){
                 $logo="si si-close";
                 $colour="danger";
             }else{
                $logo="si si-check";
                $colour="primary";
             }
             if($editp==0){
                $logoe="si si-close";
                $coloure="danger";
            }else{
               $logoe="si si-check";
               $coloure="primary";
            }
            if($storep==0){
                $logos="si si-close";
                $colours="danger";
            }else{
               $logos="si si-check";
               $colours="primary";
            }
            if($blogp==0){
                $logob="si si-close";
                $colourb="danger";
            }else{
               $logob="si si-check";
               $colourb="primary";
            }
            if($rad_acc==0){
                $logoc="si si-close";
                $colourc="danger";
            }else{
               $logoc="si si-check";
               $colourc="primary";
            }
            if($feep==0){
                $logof="si si-close";
                $colourf="danger";
            }else{
               $logof="si si-check";
               $colourf="primary";
            }
echo " 

   
<tr>
<td class='text-center'>
            <img class='img-avatar img-avatar48' src='$user_from_image' alt=''>
        </td>

    <td class='text-center'>$id</td>
    <td class='font-w600'>$usernamep</td>
    <td class='font-w600'>{$user_from_regno}</td>
    <td class='d-none d-sm-table-cell'><span class='badge badge-primary'>Student</span></td>
    
    
    <td class='text-center'>
    <a  href='radius_post.php?id={$id}&button=attandance&ps={$attandancep}'>  <button type='button' class='btn btn-sm btn-circle btn-{$colour} mr-5 mb-5' data-toggle='tooltip' title='view Customer'>
           <i class='{$logo}'></i> 
        </button></a>
    </td>
    <td class='text-center'>
    <a  href='radius_post.php?id={$id}&button=edit&ps={$editp}'>  <button type='button' class='btn btn-sm btn-circle btn-{$coloure} mr-5 mb-5' data-toggle='tooltip' title='view Customer'>
            <i class='{$logoe}'></i> 
        </button></a>
    </td>
    <td class='text-center'>
    <a  href='radius_post.php?id={$id}&button=fee&ps={$feep}'>  <button type='button' class='btn btn-sm btn-circle btn-{$colourf} mr-5 mb-5' data-toggle='tooltip' title='view Customer'>
           <i class='{$logof}'></i> 
        </button></a>
    </td>
    <td class='text-center'>
    <a  href='radius_post.php?id={$id}&button=store&ps={$storep}'><button type='button' class='btn btn-sm btn-circle btn-{$colours} mr-5 mb-5' data-toggle='tooltip' title='view Customer'>
            <i class='{$logos}'></i> 
        </button></a>
    </td>
    <td class='text-center'>
    <a  href='radius_post.php?id={$id}&button=blog&ps={$blogp}'><button type='button' class='btn btn-sm btn-circle btn-{$colourb} mr-5 mb-5' data-toggle='tooltip' title='view Customer'>
            <i class='{$logob}'></i> 
        </button></a>
    </td>
    
    <td class='text-center'>
    <a  href='radius_post.php?id={$id}&button=radius_access&ps={$rad_acc}'><button type='button' class='btn btn-sm btn-circle btn-{$colourc} mr-5 mb-5' data-toggle='tooltip' title='view Customer'>
            <i class='{$logoc}'></i> 
        </button></a>
    </td>
</tr>

";
         }
     }
 }
 
 ?>
                        </tbody>

                    </table>
                    <div>
                    </div>







                </div>
                <!-- END Dynamic Table Full Pagination -->


            </div>
            <!-- END Page Content -->
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

<!-- Page JS Plugins -->
<script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/be_tables_datatables.js"></script>

</body>

</html>