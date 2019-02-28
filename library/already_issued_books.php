<?php
include "dbconnect.php";
if(isset($_GET['re'])){
    $value=$_GET['re'];
    $sql = "SELECT  tblissuedbookdetails.BookId,tblbooks.id,tblbooks.BookName as bookname,tblissuedbookdetails.expected_return as return_exp,tblissuedbookdetails.IssuesDate as issued   FROM `tblissuedbookdetails` INNER JOIN `tblbooks` ON tblissuedbookdetails.BookId=tblbooks.id WHERE tblissuedbookdetails.RetrunStatus='1' AND tblissuedbookdetails.StudentID='$value' ";
    $run_sql=mysqli_query($conn,$sql);  
    echo " <table class='table table-bordered table-vcenter'>
    <thead>
        <tr>
            <th class='text-center'>Book Id</th>
            <th class='d-none d-sm-table-cell'>Book Name</th>
            <th class='d-none d-sm-table-cell'>Issued date</th>
            <th class='d-none d-sm-table-cell'>Expected Return date</th>
            <th class='text-center'>Actions</th>
        </tr>
    </thead>";
    if (mysqli_num_rows($run_sql) > 0) {
      
        while($row = mysqli_fetch_assoc($run_sql)) {
           $sno = $row["id"];
           $p_book_id = $row["BookId"];
           $p_book_name = $row["bookname"];
           $p_exp_return = $row["return_exp"];
           $p_issued_date =$row["issued"];



          echo "
         <tbody>
              <tr>
                  <th class='text-center' scope='row'>{$p_book_id}</th>
                  <td>{$p_book_name}</td>
                  <td class='d-none d-sm-table-cell'>
                      <span class='badge badge-success'>{$p_issued_date}</span>
                  </td>
                  <td class='d-none d-sm-table-cell'>
                  <span class='badge badge-success'>{$p_exp_return}</span>
              </td>
                  <td class='text-center'>
                      <div class='btn-group'>
                          <button type='button' class='btn btn-sm btn-secondary' data-toggle='tooltip' title='Edit'>
                              <i class='fa fa-pencil'></i>
                          </button>
                          <button type='button' class='btn btn-sm btn-secondary' data-toggle='tooltip' title='Delete'>
                              <i class='fa fa-times'></i>
                          </button>
                      </div>
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
