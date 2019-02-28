<?php
include "dbconnect.php";
if(isset($_GET['re']))  
{  
    $name=$_GET['re'];
$sql = "SELECT * FROM `tblbooks` WHERE BookName LIKE '$name%'";
$run_sql=mysqli_query($conn,$sql);
echo " <div class='block-content'>
<table class='table table-bordered table-vcenter'>
    <thead>
        <tr>
            <th class='text-center' style='width: 50px;'>#</th>
            <th>Book Name</th>
            <th>Book Number</th>
            <th>ISBN Number</th>
            <th>Book Status</th>
            <th class='text-center' style='width: 100px;'>Actions</th>
        </tr>
    </thead>
    <tbody>";
   
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
      
        if($row['book_issue_status']==1){
            $book_status="Not Issued";
        }else{
            $book_status="Issued";
        }
       
        
        echo "
       
                <tr>
                <form method='GET' action=''>
                    <th class='text-center' scope='row'>{$row['id']}</th>
                    <td>{$row['BookName']}</td>
                    <td >
                        <span class='badge badge-success'>{$row['ISBNNumber']}</span>
                    </td>
                    <td >
                        <span class='badge badge-primary'>{$row['copynumber']}</span>
                    </td>
                    <td >
                    <span class='badge badge-info'>{$book_status}</span>
                </td>
                    <td class='text-center'>
                        <div class='btn-group'>
                      
                            <button type='button' name='check_review' class='btn btn-sm btn-secondary' value='{$row['ISBNNumber']}'  data-toggle='modal' onclick='review($row[ISBNNumber])' data-target='#exampleModal'   title='Review'>
                                Check Book 
                            </button>

                        </div>
                    </td>
                    </form>
                </tr>
                
           
    ";
    }
    echo "</tbody>
    </table>
    </div>";
}
 
}

if(isset($_GET['rew']))  
{  
    $rew=$_GET['rew'];
    $j=0;
$sql_review = "SELECT * FROM `review_book` WHERE isbn_number='$rew'";
$run_sql_review=mysqli_query($conn,$sql_review);
if (mysqli_num_rows($run_sql_review) > 0) {
   
    while($row = mysqli_fetch_assoc($run_sql_review)) {
echo "<blockquote class='blockquote'>
<p>{$row['review']}</p>
<footer class='blockquote-footer'>{$row['student_id']}</footer>
</blockquote>";

}

}

}



?>
