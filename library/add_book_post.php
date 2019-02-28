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

$sql = "SELECT * FROM `tblbooks` WHERE copynumber = '$book_number'";
$run_sql=mysqli_query($conn,$sql); 
if (mysqli_num_rows($run_sql) > 0) {
    
    header('Location: add_book.php?msg=error');
}else{
$query = "INSERT INTO tblbooks SET book_status='1',CatId='$category',copynumber='$book_number',AuthorId='$author',BookName='$book',ISBNNumber='$isbn',BookPrice='$price'";
$run_sel_us=mysqli_query($conn,$query);
header('Location: add_book.php');
}

}
?>