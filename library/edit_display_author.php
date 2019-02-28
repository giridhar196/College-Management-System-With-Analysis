 <!-- Modal --><?php
require_once("dbconnect.php");
if(isset($_GET['ca_id'])){
    //get the conversation id and
    $idnumber = $_GET['ca_id'];

    $sql = "SELECT * FROM `tblauthors` WHERE id='$idnumber'";
$run_sql=mysqli_query($conn,$sql);  
if (mysqli_num_rows($run_sql) > 0) {
    while($row = mysqli_fetch_assoc($run_sql)) {
       $sno = $row["id"];
       $p_author = $row["AuthorName"];
      
       $p_date = $row["creationDate"];
    

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
                                                        <label class='col-12' for='author'>Author Name</label>
                                                        <div class='col-12'>
                                                            <input type='text' class='form-control' value='{$p_author}' name='author' required placeholder='Enter Author Name..'>
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


