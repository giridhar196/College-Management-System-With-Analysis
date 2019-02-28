 <!-- Modal --><?php
require_once("dbconnect.php");
if(isset($_GET['ca_id'])){
    //get the conversation id and
    $idnumber = $_GET['ca_id'];

    $sql = "SELECT * FROM `tblcategory` WHERE id='$idnumber'";
$run_sql=mysqli_query($conn,$sql);  
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
       $sno = $row["id"];
       $p_category = $row["CategoryName"];
       $p_status = $row["Status"];  
       $p_date = $row["CreationDate"];
    

 echo"
                               
                                            <div class='modal-header'>
                                                <h5 class='modal-title' id='exampleModalLabel'>Change Category Name/ Delete Category</h5>
                                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                    <span aria-hidden='true'>&times;</span>
                                                </button>
                                            </div>
                                            <div class='modal-body'>
                                            <form method='GET' action=''>
                                            <?php echo {$sno} ?>
                                                <div class='col-sm-12'>
                                                    <div class='form-group row'>
                                                        <label class='col-12' for='category_name'>Category Name</label>
                                                        <div class='col-12'>
                                                            <input type='text' class='form-control' value='{$p_category}' name='category' required placeholder='Enter Category Name..'>
                                                        </div>
                                                    </div>

                                                    <div class='form-group row'>
                                                        <div class='col-12'>
                                                            <div class='form-group'>
                                                                <label>Status</label>
                                                                <div class='col-6'>
                                                                    <label class='css-control css-control-primary css-radio'>
                                                                        <input type='radio' class='css-control-input' name='status' id='status' value='1'>
                                                                        <span class='css-control-indicator'></span> Active
                                                                    </label>
                                                                    <label class='css-control css-control-primary css-radio'>
                                                                        <input type='radio' class='css-control-input' name='status' id='status' value='0'>
                                                                        <span class='css-control-indicator'></span> In Active
                                                                    </label>
                                                   
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                    <div class='modal-footer'>
                                                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                                        <button type='submit' value='{$sno}' name='submit' class='btn btn-primary'>Ok</button>
                                                    </div>
                                                </form>
                                      ";
    }
}
 }
 
?>


