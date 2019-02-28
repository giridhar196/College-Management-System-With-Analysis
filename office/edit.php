<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        div.background {background-color: #F6F6F5;}
        
        </style>
    <meta charset="UTF-8">
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>College Management system  &amp; Project R-5</title>

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
        
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
    <!-- bootstrap Lib -->
    <script src="assets/js/plugines/edit/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- datatable lib -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    
</head>
<body>
<div class="background">
    <div class="container">
    
       <h1></h1><hr/>
       <a class="img-link" href="index">
       <input type="button" class="btn btn-primary btn-xs" value="Back" />
        </a>
       <hr/>

        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
            <th>ID</th>
            <th>Branch</th>
            <th>Admi-No</th>
            <th>Reg-No</th>
            <th>Action</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>Branch</th>
                <th>Admi-No</th>
                <th>Reg-No</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>

        <!--create modal dialog for display detail info for edit on button cell click-->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div id="content-data"></div>
            </div>
        </div>
    </div>

    <br/>
    <br/>
    <br/>
    
    <br/>
    <br/>
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
    </div>
</body>
</html>

<?php
require('dbconnect.php');
if(isset($_POST['btnEdit'])){
    $new_txtid=mysqli_real_escape_string($conn,$_POST['txtid']);
    $new_txtadmn=mysqli_real_escape_string($conn,$_POST['txtadmn']);
    $new_txtcate=mysqli_real_escape_string($conn,$_POST['txtcate']);
    $new_txtjdate=mysqli_real_escape_string($conn,$_POST['txtjdate']);
    $new_txtehall=mysqli_real_escape_string($conn,$_POST['txtehall']);
    $new_txterank=mysqli_real_escape_string($conn,$_POST['txterank']);
    $new_txtnofs=mysqli_real_escape_string($conn,$_POST['txtnofs']);
    $new_txtbranch=mysqli_real_escape_string($conn,$_POST['txtbranch']);
    $new_txtdob=mysqli_real_escape_string($conn,$_POST['txtdob']);
    $new_txtsex=mysqli_real_escape_string($conn,$_POST['txtsex']);
    $new_txtregno=mysqli_real_escape_string($conn,$_POST['txtregno']);
    $new_txtfname=mysqli_real_escape_string($conn,$_POST['txtfname']);
    $new_txtfoccup=mysqli_real_escape_string($conn,$_POST['txtfoccup']);
    $new_txtmname=mysqli_real_escape_string($conn,$_POST['txtmname']);
    $new_txtadd=mysqli_real_escape_string($conn,$_POST['txtadd']);
    $new_txtpin=mysqli_real_escape_string($conn,$_POST['txtpin']);
    $new_txtphone=mysqli_real_escape_string($conn,$_POST['txtphone']);
    $new_txtann=mysqli_real_escape_string($conn,$_POST['txtann']);
    $new_txtnat=mysqli_real_escape_string($conn,$_POST['txtnat']);
    $new_txtadn=mysqli_real_escape_string($conn,$_POST['txtadn']);
    $new_txtbg=mysqli_real_escape_string($conn,$_POST['txtbg']);
    $new_txtcatc=mysqli_real_escape_string($conn,$_POST['txtcatc']);
    $new_txtsub=mysqli_real_escape_string($conn,$_POST['txtsub']);
    $new_txtregu=mysqli_real_escape_string($conn,$_POST['txtregu']);
    $new_txtemail=mysqli_real_escape_string($conn,$_POST['txtemail']);    
    $sqlupdate="UPDATE st_db SET admnno='$new_txtadmn',
admncat='$new_txtcate',
dateofjoining='$new_txtjdate',
eamcetht='$new_txtehall',
eamcetrank='$new_txterank',
nameofstudent='$new_txtnofs',
branch='$new_txtbranch',
dob='$new_txtdob',
sex='$new_txtsex',
regdno='$new_txtregno',
faname='$new_txtfname',
faoccu='$new_txtfoccup',
maname='$new_txtmname',
address='$new_txtadd',
pincode='$new_txtpin',
cellno='$new_txtphone',
annualincome='$new_txtann',
nationality='$new_txtnat',
aadharno='$new_txtadn',
bloodgroup='$new_txtbg',
category='$new_txtcatc',
sub_cast='$new_txtsub',
regulation='$new_txtregu',
email='$new_txtemail'
                WHERE sno='$new_txtid'";
    $result_update=mysqli_query($conn,$sqlupdate);
    if($result_update){
        echo '<script>window.location.href="edit.php"</script>';
    }
    else{
        echo '<script>alert("Update Failed")</script>';
    }
}
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $sqldelete="DELETE FROM st_db WHERE sno='$id'";
    $result_delete=mysqli_query($conn,$sqldelete);
    if($result_delete){
        echo'<script>window.location.href="edit.php"</script>';
    }
    else{
        echo'<script>alert("Delete Failed")</script>';
    }
}
?>

