 <?php
 include "dbconnect.php";
if(isset($_POST['submit'])){
    $cos=$_POST['count'];
     $branch_p=$_POST['branch'];
     $section_p=$_POST['section'];
     $semister_p=$_POST['sem'];
     $from=$_POST['from'];
     $to=$_POST['to'];
     $no_of_classes=$_POST['no_of_classes'];
    for($pp=1;$pp<$cos;$pp++){
        $valfi=$pp;    
        $present=$_POST["nop$valfi"];
        $student_id=$_POST["student_id$valfi"];
            $query = "INSERT INTO over_all_attandance SET semister='$semister_p',section='$section_p',branch = '$branch_p',no_of_classes='$no_of_classes',from_date='$from',no_of_classes_present='$present',to_date='$to',regdno='$student_id'";
             $run_sel_us=mysqli_query($conn,$query);
        }
    }
    header('Location: attandance_month_from.php');
?>