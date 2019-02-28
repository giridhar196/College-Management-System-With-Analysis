<?php
include "dbconnect.php";

$sql = "SELECT * FROM `tblcategory`";
$run_sql=mysqli_query($conn,$sql);  
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
       $sno = $row["id"];
       $p_category = $row["CategoryName"];
       $p_status = $row["Status"];  
       $p_date = $row["CreationDate"];
     echo" 
    
     <td class='text-center'>
 
         <?php echo {$sno} ?>
     </td>
     <td class='d-none d-sm-table-cell'>
         <span class='badge badge-primary'>
            {$p_status}
         </span>
     </td>
 
     <td class='d-none d-sm-table-cell'>
         {$p_date}
     </td>
     <td class='d-none d-sm-table-cell'>
         {$p_category}
     </td>
 
 
     <td class='text-center'>
         <button type='submit' name='edit' data-toggle='modal' onclick='category({$sno})' data-target='#exampleModal' class='btn btn-sm btn-primary'
             data-toggle='tooltip' title='Edit'>
             <i class='fa fa-edit'></i>
             <i class='si si-close'></i>
         </button>
     </td>
 

";



     
    }
   } 
?>