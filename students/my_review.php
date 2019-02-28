<?php
include "dbconnect.php";
if(isset($_GET['review'])){
    $id=$_GET['review'];
    echo $id;
    $p_re=$_GET['suggestions'];
    echo $p_re;
    $query = "UPDATE review_book SET review='$p_re' WHERE id = '$id'";
    $run_sel_us=mysqli_query($conn,$query);
   header('Location: my_library');
}
?>
<?php
if(isset($_GET['review_get'])){
    $number=$_GET['review_get'];
    $st_id=$_GET['review_number'];
    $review='';
    $review_id='';
    $sql = "SELECT * FROM `review_book` WHERE isbn_number = '$number' AND student_id='$st_id'";
$run_sql=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($run_sql)) {
    $review=$row['review'];
    $review_id=$row['id'];
}
    echo" <form action='my_review' method='GET'>
                                    <div class='form-group row'>
                                        <label class='col-lg-12 col-form-label' for='val-suggestions'>Suggestions
                                            <span class='text-danger'>*</span>
                                        </label>
                                        <div class='col-lg-12'>
                                            <textarea class='form-control' id='val-suggestions' name='suggestions' rows='5' placeholder='What would you like to see?'>{$review}</textarea>
                                        </div>
                                    </div>
                            </div>
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                <button type='submit' value='{$review_id}' name='review' class='btn btn-primary'>Ok</button>
                            </div>
                            </form>";
}
?>