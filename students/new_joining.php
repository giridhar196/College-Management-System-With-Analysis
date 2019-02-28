
<?php
	if(isset($_POST["submit"])){
    $adm_no = $_POST["val-admnno"];
    $branche = $_POST["val-bra"];
    $regi_no = $_POST["val-regno"];
    $dt_joi = $_POST["example-datepicker5"];
    $adm_category = $_POST["val-admncategory"];
    $ea_hall = $_POST["val-ehallno"];
    $ea_rank = $_POST["val-rank"];
    $na_stu = $_POST["val-name"];
    $d_o_b = $_POST["val-db"];
    $s_e_x = $_POST["val-sex"];
    $fat_name = $_POST["val-faname"];
    $fat_occu = $_POST["val-faoccup"];
    $mot_name = $_POST["val-maname"];
    $mot_occup = $_POST["val-maoccup"];
    $add_of = $_POST["val-adofcom"];
    $pin_code = $_POST["val-pnc"];
    $cell_no = $_POST["val-phoneus2"];
    $ann_incme = $_POST["val-anninc"];
    $nat = $_POST["val-nati"];
    $aa_no = $_POST["val-adno"];
    $e_ma = $_POST["val-email2"];
    $b_g = $_POST["val-bdgrup"];
    $cat_go = $_POST["val-cat"];
    $sub_cas = $_POST["val-subcast"];
    $date = date('Y-m-d H:i:s');
    $sql = "SELECT admnno FROM `st_db` WHERE admnno='$adm_no'";
    $run_sql=mysqli_query($conn,$sql);
    if (mysqli_num_rows($run_sql) == 0) {
    $sql = "SELECT * FROM `admission_fee_details` WHERE type_name='management'";
    $run_sql=mysqli_query($conn,$sql);
    if (mysqli_num_rows($run_sql) > 0) {
        while($row = mysqli_fetch_assoc($run_sql)) {
        $u_f= $row["university_fee"];
        $a_f = $row["admission_fee"];
        $b_uf = $row["building_fund"];
        $t_f = $row["tution_fee"];
    $sql = "INSERT INTO st_db (
         branch,
         admnno,
        admncat,
        eamcetht,
        eamcetrank,
        nameofstudent,
        dob,
        sex,
        faname,
        faoccu,
        maname,
        maoccu,
        address,
        pincode,
        cellno,
        annualincome,
        nationality,
        aadharno,
        email,
        bloodgroup,
        category,
        regdno,
        dateofjoining,
        sub_cast,
        universityfee,
        admission,
        buildingfund,
        tutionfee,
        semister,
         created    
    )
    Values(
        '$branche',
        '$adm_no',
        '$adm_category',
        '$ea_hall',
        '$ea_rank',
        '$na_stu',
        '$d_o_b',
        '$s_e_x',
        '$fat_name',
        '$fat_occu',
        '$mot_name',
        '$mot_occup',
        '$add_of',
        '$pin_code',
        '$cell_no',
        '$ann_incme',
        '$nat',
        '$aa_no',
        '$e_ma',
        '$b_g',
        '$cat_go',
        '$regi_no',
        '$dt_joi',
        '$sub_cas',
        '$u_f',
        '$a_f',
        '$b_uf',
        '$t_f',
        '1-1',
        '$date'
)";
    
if ($conn->query($sql) === TRUE) {
    $msg="sucess";
} else {
    echo "Error : " . $conn->error;
}

    }}else{
        $msg="there is an error in fee details please contact admin";
    }
   
$conn->close();
    }else{
        $msg="error in admission number";
    }
  
    
    }
?>