<?php  
include_once 'dbconnect.php';

$msg='';
if(isset($_POST['submit']))  
{   
    $name=$_POST['f-name'];  
    $roll=$_POST['f-reg'];  
    $sql = "INSERT INTO transactionid (name,regdno) VALUES ('$name','$roll')";  
    $run_sql=mysqli_query($conn,$sql);  
   $id=mysqli_insert_id($conn);
for($i = 0; $i<count($_POST['f-purpose']); $i++)  
{  
    $date = date('Y-m-d ');
$sql = "INSERT INTO transaction  
SET
order_id = '{$id}',      
categoryfor = '{$_POST['f-purpose'][$i]}',  
branch = '{$_POST['f-branch']}', 
semister = '{$_POST['f-sem']}',  
price = '{$_POST['price'][$i]}',  
regdno = '{$_POST['f-reg']}',
created = '$date',  
amount = '{$_POST['amount'][$i]}'";   
$run_sql=mysqli_query($conn,$sql);  
$msg = "Bill Entered Successfully on order id";
} 

} 

?> 
 <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<?php include 'header.php';?>        <!-- END Stylesheets -->
    </head>
    <body>
     

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    
                
                    <!-- Contact Forms -->
                    <h2 class="content-heading">Contact Forms</h2>
                    <div>
                        <div>
                            <!-- Bootstrap Contact -->
                            <div class="block block-themed">
                                <div class="block-header bg-info">
                                    <h3 class="block-title">Bootstrap</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle"  data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                <span ><?php echo $msg; ?></span>
                                    <form action="" method="post" >
                                        <div class="form-group row">
                                            <div class="col-6">
                                                <label for="f-reg">Reg Number</label>
                                                <input type="text" class="form-control" id="f-reg" name="f-reg" placeholder="Registration Number..">
                                            </div>
                                            <div class="col-6">
                                                <label for="f-name">Name</label>
                                                <input type="text" class="form-control" id="f-name" name="f-name" placeholder="Enter Student Name..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-6">
                                        <label for="f-branch">Branch?</label>
                                            
                                            
                                                <select class="form-control" id="f-branch" name="f-branch">
                                                    <option value="cse">CSE</option>
                                                    <option value="ece">ECE</option>
                                                    <option value="eee">EEE</option>
                                                    <option value="mech"> MECH</option>
													 <option value="civil">CIVIL</option>
                                                </select>
                                            </div>
                                            
                                            <div class="col-6">
                                            <label for="f-sem">Semister?</label>
                                                <select class="form-control" id="f-sem" name="f-sem">
                                                    <option value="1-1">1-1</option>
                                                    <option value="1-2">1-2</option>
                                                    <option value="2-1">2-1</option>
                                                    <option value="2-2"> 2-2</option>
													 <option value="3-1">3-1</option>
                                                     <option value="3-2"> 3-2</option>
													 <option value="4-1">4-1</option>
                                                     <option value="4-2"> 4-2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <table class="table table-bordered table-hover">  
                        <thead>  
                            
                            <th>No</th>  
                            <th>Fee Type</th>  
                             
                            <th>Amount</th>  
                             
                            <th>Total</th>  
                            <th><input type="button" value="+" id="add" class="btnbtn-primary"></th>  
                        </thead>  
                        <tbody class="detail">  
                            <tr>  
                                <td class="no">1</td>  
                                <td> <select class="form-control" id="f-purpose" name="f-purpose[]">
                                                    <option value="admissionfee">Admission Fee</option>
                                                    <option value="tutionfee">tutionfee</option>
                                                    <option value="buildingfund">Building Fund</option>
                                                    <option value="universityfee">University Fee</option>
                                                    <option value="examfee"> Exam Fee</option>
													 <option value="supplyfee">Supply Fee</option>
													 <option value="fine">Fine</option>
													  <option value="Other">Other</option>
                                                </select></td>
                                
                                <td><input type="text" class="form-control price" name="price[]"></td>  
                                 
                                <td><input type="text"  class="form-control amount" name="amount[]"></td>  
                                <td><a href="#" class="remove">Delete</td>  
</tr>  
</tbody>  
<tfoot>  
  
<th></th>  
<th></th>  
<th></th>  
<th style="text-align:center;" class="total">0<b></b></th>
  
</tfoot>  
  
</table>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" name="submit" id="submit" class="btn btn-alt-info">
                                                    <i class="fa fa-inr"></i> Paid.....
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Bootstrap Contact -->
                        </div>
                       
				   </div>
                    <!-- END Contact Forms -->

                    
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

          <?php include 'footer.php' ?>
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>
    </body>
</html>
<script type="text/javascript">  

$(function()  
{  
$('#add').click(function()  
{  
addnewrow();  
});  
$('body').delegate('.remove','click',function()  
{  
$(this).parent().parent().remove();  
});  
$('body').delegate('.quantity,.price,.discount','keyup',function()  
{  
var tr=$(this).parent().parent();  
var qty=tr.find('.quantity').val();  
var price=tr.find('.price').val();  
  
var dis=tr.find('.discount').val();  
var amt =(qty * price)-(qty * price *dis)/100;  
tr.find('.amount').val(price);  
total();  
});  
});  
function total()  
{  
var t=0;  
$('.amount').each(function(i,e)   
{  
var amt =$(this).val()-0;  
t+=amt;  
});  
$('.total').html(t);  
}  
function addnewrow()   
{  
var n=($('.detail tr').length-0)+1;  
var tr = '<tr>'+  
'<td class="no">'+n+'</td>'+ 
'<td> <select class="form-control" id="f-purpose" name="f-purpose[]"> <option value="Main_Fee">Main_Fee</option> <option value="Bus_Fee">Bus_Fee</option> <option value="University">University</option> <option value="Bulding_Fund"> Bulding_Fund</option> <option value="Supply_Fee">Supply_Fee</option> <option value="Fine">Fine</option> <option value="Other">Other</option> </select></td>'+ 

'<td><input type="text" class="form-control price" name="price[]"></td>'+  

'<td><input type="text" class="form-control amount"  name="amount[]"></td>'+  
'<td><a href="#" class="remove">Delete</td>'+  
'</tr>';  
$('.detail').append(tr);   
}  
</script>  