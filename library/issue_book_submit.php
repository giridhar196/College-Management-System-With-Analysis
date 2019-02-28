<?php 
include "dbconnect.php";
$date = isset($_GET['date']) ? $_GET['date'] : date('d-m-Y');
$next_date = date('d-m-Y', strtotime($date .' +15 day'));
$issued_date_date=date('d-m-Y');
if(isset($_GET['issue_submit'])){
    $rollnu=$_GET['roll_number'];
    $book_number=$_GET['book_isbn_number'];
    $book_id=$_GET['issue_submit'];
    $query = "INSERT INTO tblissuedbookdetails SET BookId='$book_id',StudentID='$rollnu',issued_date='$issued_date_date',expected_return='$next_date',RetrunStatus='1'";
$run_sel_us=mysqli_query($conn,$query);
$query_update = "UPDATE tblbooks SET book_issue_status='0' WHERE id='$book_id'";
$run_sel_update=mysqli_query($conn,$query_update);
header('Location: issue_book_fetch?roll_number='.$rollnu);
}

if(isset($_GET['return_submit'])){
    $rollnu=$_GET['roll_number'];
    $book_number=$_GET['book_isbn_number'];
    $book_id=$_GET['return_submit'];
    $query = "UPDATE tblissuedbookdetails SET RetrunStatus='0',return_date='$issued_date_date' WHERE BookId='$book_id'";
$run_sel_us=mysqli_query($conn,$query);
$query_update = "UPDATE tblbooks SET book_issue_status='1' WHERE id='$book_id'";
$run_sel_update=mysqli_query($conn,$query_update);
header('Location: return_book');
}
?>