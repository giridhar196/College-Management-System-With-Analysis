<?php
include "dbconnect.php";
if(isset($_GET['re'])){
    $value=$_GET['re'];
    $sql = "SELECT * FROM `tblbooks` WHERE ISBNNumber='$value'";
    $run_sql=mysqli_query($conn,$sql);  
    if (mysqli_num_rows($run_sql) > 0) {
        while($row = mysqli_fetch_assoc($run_sql)) {
           $sno = $row["id"];
           $p_category = $row["BookName"];
           $p_isbn =$row["ISBNNumber"];
           $sql_check = "SELECT BookId,RetrunStatus FROM `tblissuedbookdetails` WHERE BookId='$sno' AND RetrunStatus='1'";
           $run_sql_c=mysqli_query($conn,$sql_check); 
           if (mysqli_num_rows($run_sql_c) == 0) {
              
          echo "
          <div class='block-content'>
          <table class='table table-bordered table-vcenter'>
              <thead>
                  <tr>
                      <th class='text-center' style='width: 50px;'>#</th>
                      <th class='d-none d-sm-table-cell'>Book Name</th>
                      <th class='d-none d-sm-table-cell' >ISBN Number</th>
                      <th class='text-center' style='width: 100px;'>Actions</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                  <form method='GET' action=''>
                      <th class='text-center' scope='row'>{$sno}</th>
                      <td>{$p_category}</td>
                      <td class='d-none d-sm-table-cell'>
                          <span class='badge badge-success'>{$p_isbn}</span>
                      </td>
                      <td class='text-center'>
                          <div class='btn-group'>
                        
                              <button type='submit' name='issue_submit' class='btn btn-sm btn-secondary'  value='{$sno}' data-toggle=' modal' data-target='#exampleModal'   title='Issue'>
                                  Issue Book
                              </button>

                          </div>
                      </td>
                      </form>
                  </tr>
              </tbody>
          </table>
      </div>
      ";
     
        }else{
            echo "Book Already Issued";
        }
    }
       }
       else{
        $msg="No Book Found Check The ISBN Number";
    }
}else{
    echo"enter ISBN number";
}
if(isset($_GET['issue_submit'])){
    $rollnum=$_GET['rollnumber_hidden'];
    
echo $rollnu;
}

?>