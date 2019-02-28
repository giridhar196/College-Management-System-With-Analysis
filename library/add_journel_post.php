<?php
include "dbconnect.php";
if(isset($_GET['create']))
{
$category=$_GET['category'];
$author=$_GET['author'];
$price=$_GET['price'];
$isbn=$_GET['isbn'];
$book=$_GET['book'];
$book_number=$_GET['category_book_number'];
$book_type=$_GET['book_type'];
$created_date=date('d-m-Y');
$sql = "SELECT * FROM `journels_gifted_reference` WHERE copynumber = '$book_number'";
$run_sql=mysqli_query($conn,$sql); 
if (mysqli_num_rows($run_sql) > 0) {
    
     header('Location: add_journel_gifted_book.php?msg=error');
}else{
$query = "INSERT INTO journels_gifted_reference SET created_date='$created_date',book_type='$book_type',book_status='1',category_name='$category',copynumber='$book_number',author_name='$author',BookName='$book',isbn_number='$isbn',book_price='$price'";
$run_sel_us=mysqli_query($conn,$query);
header('Location: add_journel_gifted_book.php');
}

}
?>
