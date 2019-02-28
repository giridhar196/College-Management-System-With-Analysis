
<?php
include "auth.php";
if(isset($_POST['save'])){
    $p_na=$_POST['ecom-product-name'];
    $p_cat=$_POST['example-select2'];
    $p_des=$_POST['js-ckeditor'];
    $p_vis=$_POST['example-visible'];
    $p_shot=$_POST['ecom-product-description-short'];
    $p_link=$_POST['ecom-product-stock'];
    $p_meta=$_POST['ecom-product-meta-tags'];
    $query = "INSERT INTO blog SET auth = '".$userData['oauth_uid']."', p_by='".$userData['first_name']."', p_email = '".$userData['email']."',  dateofpost = '".date("Y-m-d")."', created = '".date("Y-m-d H:i:s")."',regid='$R_E_I_D',title='$p_na',category='$p_cat',description='$p_des',visible='$p_vis',short_desciption='$p_shot',header_link='$p_link',branch='$b'";
    $run_sel_us=mysqli_query($conn,$query);
    header('Location: blog_my');
}
if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $p_na=$_GET['ecom-product-name'];
    $p_cat=$_GET['example-select2'];
    $p_des=$_GET['js-ckeditor'];
    $p_vis=$_GET['example-visible'];
    $p_shot=$_GET['ecom-product-description-short'];
    $p_link=$_GET['ecom-product-stock'];
    $p_meta=$_GET['ecom-product-meta-tags'];
    $tags=$_GET['ecom-product-meta-tags'];

    $query = "UPDATE blog SET title='$p_na',category='$p_cat',description='$p_des',visible='$p_vis',short_desciption='$p_shot',header_link='$p_link',permission='0',tags='$tags' WHERE id='$id' ";
    $run_sel_us=mysqli_query($conn,$query);
    header('Location: blog_my');
}
?>
