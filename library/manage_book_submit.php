<?php
include "db_library.php";
if(isset($_POST['submit']))
{
$bookname=$_POST['bookname'];
$category=$_POST['category'];
$author=$_POST['author'];
$isbn=$_POST['isbn'];
$price=$_POST['price'];
$book_status=$_POST['name_of_status'];
$bookid=intval($_GET['bookid']);
$sql="update  tblbooks set BookName=:bookname,book_status=:book_status,CatId=:category,AuthorId=:author,ISBNNumber=:isbn,BookPrice=:price where id=:bookid";
$query = $dbh->prepare($sql);
$query->bindParam(':bookname',$bookname,PDO::PARAM_STR);
$query->bindParam(':book_status',$bookname,PDO::PARAM_STR);
$query->bindParam(':category',$category,PDO::PARAM_STR);
$query->bindParam(':author',$author,PDO::PARAM_STR);
$query->bindParam(':isbn',$isbn,PDO::PARAM_STR);
$query->bindParam(':price',$price,PDO::PARAM_STR);
$query->bindParam(':bookid',$bookid,PDO::PARAM_STR);
$query->execute();
// header('Location: manage_book.php');
}
?>