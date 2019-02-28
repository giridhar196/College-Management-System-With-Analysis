<?php
include "dbconnect.php";
if(isset($_GET['re'])){
    $value=$_GET['re'];
    $value2=$_GET['re2'];
    echo $value;
    echo $value2;
   
    $sql = "SELECT  tblissuedbookdetails.issued_date as issued_original_date,tblissuedbookdetails.BookId,tblbooks.id,tblbooks.ISBNNumber as isbn,tblbooks.copynumber as booknumber,tblbooks.BookName as bookname,tblissuedbookdetails.return_date as return_date,tblissuedbookdetails.expected_return as return_exp,tblissuedbookdetails.IssuesDate as issued   FROM `tblissuedbookdetails` INNER JOIN `tblbooks` ON tblissuedbookdetails.BookId=tblbooks.id WHERE issued_date BETWEEN '$value' AND '$value2'";
    $run_sql=mysqli_query($conn,$sql);  
    echo " <table class='table table-bordered table-vcenter'>
    <thead>
        <tr>
            <th class='text-center'>Book Id</th>
            <th >Book Name</th>
            <th >Issued date</th>
            <th>ISBN Number</th>
            <th>Book Copy  Number</th>
            <th >Return Date</th>
            
        </tr>
    </thead>";
    if (mysqli_num_rows($run_sql) > 0) {
      
        while($row = mysqli_fetch_assoc($run_sql)) {
           $sno = $row["id"];
           $p_book_id = $row["BookId"];
           $p_book_name = $row["bookname"];
           $p_exp_return = $row["return_exp"];
           $p_issued_date =$row["issued"];
           $p_original_date= $row['issued_original_date'];
           $p_return_date = $row['return_date'];
$p_isbn_number = $row['isbn'];
$p_copy_number = $row['booknumber'];


          echo "
         <tbody>
              <tr>
                  <th class='text-center' scope='row'>{$p_book_id}</th>
                  <td>{$p_book_name}</td>
                  <td >
                      <span class='badge badge-success'>{$p_original_date}</span>
                  </td>
                  <td >
                  <span >{$p_isbn_number}</span>
              </td>
              <td >
                  <span >{$p_copy_number}</span>
              </td>
              <td >
              <span class='badge badge-success'>{$p_return_date}</span>
          </td>
              </tr>
              </tbody>
             

         ";
        } 
       }
       
     
       else{
        $msg="No Book Found Check The ISBN Number";
    }echo" </table>";
}


?>