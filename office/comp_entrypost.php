<?php
include "dbconnect.php";
	if(isset($_POST["submit"])){
        $name = $_POST["val-name"]; 
        $middlename = $_POST["val-mname"]; 
        $lastname = $_POST["val-lname"]; 
        $branch = $_POST["val-bra"]; 
        $dateofbirth = $_POST["val-db"]; 
        $sex = $_POST["val-sex"]; 
        $registrationnumber = $_POST["val-regno"]; 
        $fathername = $_POST["val-faname"]; 
        $fatheroccupation = $_POST["val-faoccup"]; 
        $tenthcgpa = $_POST["val-10thcgpa"]; 
        $tenthcgpastate = $_POST["val-10thcgpastate"]; 
        $tenthcgpacountry = $_POST["val-10thcgpacountry"]; 
        $tenthcgpaboard = $_POST["val-10thcgpaboard"]; 
        $tenthcgpaschool = $_POST["val-10thcgpaschool"]; 
        $tenthcgpayear = $_POST["val-10thcgpapassing"]; 
        $x11per = $_POST["val-12th"]; 
        $x11state = $_POST["val-12thstate"]; 
        $x11country = $_POST["val-12thcountry"]; 
        $x11board = $_POST["val-12thboard"]; 
        $x11college = $_POST["val-12thcollege"]; 
        $x11passingyear = $_POST["val-12thpassing"]; 
        $btechpercentage = $_POST["val-btech"]; 
        $btechstate = $_POST["val-btechstate"]; 
        $btechcountry = $_POST["val-btechcountry"]; 
        $btechboard = $_POST["val-btechboard"]; 
        $btechschool = $_POST["val-btechschool"]; 
        $btechpassingyear = $_POST["val-btechpassing"]; 
        $country = $_POST["val-country"]; 
        $state = $_POST["val-state"]; 
        $city = $_POST["val-city"]; 
        $address = $_POST["val-adofcom"]; 
        $pincoad = $_POST["val-pnc"]; 
        $phone = $_POST["val-phoneus2"]; 
        $email = $_POST["val-email2"]; 
      
    $date = date('Y-m-d H:i:s');    
   $sql = "INSERT INTO inter SET  val_name='$name' ,val_mname='$middlename' ,val_lname='$lastname' ,val_bra='$branch' ,val_db='$dateofbirth' ,val_sex='$sex' ,val_regno='$registrationnumber' ,val_faname='$fathername' ,val_faoccup='$fatheroccupation' ,val_10thcgpa='$tenthcgpa' ,val_10thcgpastate='$tenthcgpastate' ,val_10thcgpacountry='$tenthcgpacountry' ,val_10thcgpaboard='$tenthcgpaboard' ,val_10thcgpaschool='$tenthcgpaschool' ,val_10thcgpapassing='$tenthcgpayear' ,val_12th='$x11per' ,val_12thstate='$x11state' ,val_12thcountry='$x11country' ,val_12thboard='$x11board' ,val_12thcollege='$x11college' ,val_12thpassing='$x11passingyear' ,val_btech='$btechpercentage' ,val_btechstate ='$btechstate' ,val_btechcountry='$btechcountry' ,val_btechboard='$btechboard' ,val_btechschool='$btechschool' ,val_btechpassing='$btechpassingyear' ,val_country='$country' ,val_state='$state' ,val_city='$city' ,val_adofcom='$address' ,val_pnc='$pincoad' ,val_phoneus2='$phone' ,val_email2='$email',datee='$date'";
    
    $upd_sel_us=mysqli_query($conn,$sql);
     echo "thank you for Uploading";
    }
   
   
    ?> 