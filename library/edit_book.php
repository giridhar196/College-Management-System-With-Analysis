<!-- Modal -->
<?php
include "db_library.php";
include "dbconnect.php";
if(isset($_GET['bookid'])){
    //get the conversation id and
    $bookid=intval($_GET['bookid']);
    $sql = "SELECT tblbooks.BookName,tblbooks.book_status as book_status,tblcategory.CategoryName,tblcategory.id as cid,tblauthors.AuthorName,tblauthors.id as athrid,tblbooks.ISBNNumber,tblbooks.BookPrice,tblbooks.id as bookid from  tblbooks join tblcategory on tblcategory.id=tblbooks.CatId join tblauthors on tblauthors.id=tblbooks.AuthorId where tblbooks.id=:bookid";
    $query = $dbh -> prepare($sql);
    $query->bindParam(':bookid',$bookid,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $cnt=1;
    if($query->rowCount() > 0)
    {
    foreach($results as $result)
    {              
    ?>
    <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Books Lobby/ Delete Book</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>
    <div class='modal-body'>
        <form method='POST' action=''>
            <div class='col-sm-12'>
                <div class='form-group row'>
                    <label class='col-12' for='book'>Book Name</label>
                    <div class='col-12'>
                        <input type='text' class='form-control' value="<?php echo htmlentities($result->BookName);?>" name='book' required placeholder='Enter Book Name..'>
                    </div>
                </div>
                <input type="hidden" value="<?php echo $bookid; ?>" name="bookid">
                <div class='form-group row'>
                    <label class='col-12' for='author'>Author Name?</label>
                    <div class='col-12'>

                        <select class='form-control' name='author' data-placeholder='Choose one..'>";
                            <option value="<?php echo htmlentities($result->athrid);?>">
                                <?php echo htmlentities($athrname=$result->AuthorName);?>
                            </option>
                            <?php 
$sql2 = "SELECT * from  tblauthors ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$result2=$query2->fetchAll(PDO::FETCH_OBJ);
if($query2->rowCount() > 0)
{
foreach($result2 as $ret)
{           
if($athrname==$ret->AuthorName)
{
continue;
} else{

    ?>
                            <option value="<?php echo htmlentities($ret->id);?>">
                                <?php echo htmlentities($ret->AuthorName);?>
                            </option>

                            <?php }}} ?>
                        </select>
                    </div>
                </div>
                <div class='form-group row'>
                    <label class='col-12' for='category'>Category Name</label>
                    <div class='col-12'>

                        <select class='form-control' name='category' data-placeholder='Choose one..'>";
                            <option value="<?php echo htmlentities($result->cid);?>">
                                <?php echo htmlentities($catname=$result->CategoryName);?>
                            </option>
                            <?php 
$status=1;
$sql1 = "SELECT * from  tblcategory where Status=:status";
$query1 = $dbh -> prepare($sql1);
$query1-> bindParam(':status',$status, PDO::PARAM_STR);
$query1->execute();
$resultss=$query1->fetchAll(PDO::FETCH_OBJ);
if($query1->rowCount() > 0)
{
foreach($resultss as $row)
{           
if($catname==$row->CategoryName)
{
continue;
}
else
{
    ?>
                            <option value="<?php echo htmlentities($row->id);?>">
                                <?php echo htmlentities($row->CategoryName);?>
                            </option>
                            <?php }}} ?>
                        </select>
                    </div>
                </div>

                <div class='form-group row'>
                    <label class='col-12' for='price'>Price</label>
                    <div class='col-12'>
                        <input type='text' class='form-control' value="<?php echo htmlentities($result->BookPrice);?>" name='price' required placeholder='Enter Book Name..'>
                    </div>
                </div>

                <div class='form-group row'>
                    <label class='col-12' for='isbn'>ISBN</label>
                    <div class='col-12'>
                        <input type='text' class='form-control' value="<?php echo htmlentities($result->ISBNNumber);?>" name='isbn' required placeholder='Enter Book Name..'>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-skill">Book Status
                        <span class="text-danger">* "0="Block,"1="Alive</span>
                    </label>
                    <div class="col-lg-12">
                        <select class="form-control" id="name_of_status" name="name_of_status">
                            <option value="<?php echo htmlentities($result->book_status);?>"><?php echo htmlentities($result->book_status);?></option>
                            <?php 
$status_book=$result->book_status;
$sql3 = "SELECT * FROM book_status WHERE name_of_status != '$status_book'";
$run_sql=mysqli_query($conn,$sql3); 
while($row = mysqli_fetch_assoc($run_sql)) {
    echo "<option value='{$row['name_of_status']}'>{$row['name_of_status']}</option>";
}
    
?>
                        </select>
                    </div>
                </div>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                <button type='submit' name='submit' class='btn btn-primary'>Ok</button>
            </div>
            <?php }} ?>
        </form>
    </div>
    <?php } ?>