<?php
//Include GP config file && User class
include_once 'gpConfig.php';
include_once 'User.php';

if(isset($_GET['code'])){
	$gClient->authenticate($_GET['code']);
    $_SESSION['token'] = $gClient->getAccessToken();
    
	header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}
if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}
if ($gClient->getAccessToken()) {
	//Get user profile data from google
	$gpUserProfile = $google_oauthV2->userinfo->get();	
	//Initialize User class
	$user = new User();
	//Insert or update user data to the database
    $gpUserData = array(
        'oauth_provider'=> 'google',
        'oauth_uid'     => $gpUserProfile['id'],
        'first_name'    => $gpUserProfile['given_name'],
        'last_name'     => $gpUserProfile['family_name'],
        'email'         => $gpUserProfile['email'],
        'gender'        => $gpUserProfile['gender'],
        'locale'        => $gpUserProfile['locale'],
        'picture'       => $gpUserProfile['picture'],
        'link'          => $gpUserProfile['link']
    );
    $userData = $user->checkUser($gpUserData);
	//Storing user data into session
	$_SESSION['userData'] = $userData;
	//Render facebook profile data
    if(!empty($userData)){
        $output = '<h1>Google+ Profile Details </h1>';
        $output .= '<img src="'.$userData['picture'].'" width="300" height="220">';
        $output .= '<br/>Google ID : ' . $userData['oauth_uid'];
        $output .= '<br/>Name : ' . $userData['first_name'].' '.$userData['last_name'];
        $output .= '<br/>Email : ' . $userData['email'];
        $output .= '<br/>Gender : ' . $userData['gender'];
        $output .= '<br/>Locale : ' . $userData['locale'];
        $output .= '<br/>Logged in with : Google';
        $output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Google+ Page</a>';
        $output .= '<br/>Logout from <a href="logout.php">Google</a>'; 
    }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }
} else {
	$authUrl = $gClient->createAuthUrl();
	header('Location: login.php');
	$output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="images/glogin.png" alt=""/></a>';
}
?>
    <?php 
require_once "dbconnect.php";

 $ipaddress = $_SERVER['REMOTE_ADDR'];
 $page = "http://".$_SERVER['HTTP_HOST']."".$_SERVER['PHP_SELF'];
//  $referrer = $_SERVER['HTTP_REFERER'];
 $datetime = date("F j, Y, g:i a");
 $useragent = $_SERVER['HTTP_USER_AGENT'];

$au_num=$userData['oauth_uid'];

$sql_oa = "SELECT * FROM `users` WHERE  oauth_uid='$au_num'";
$run_sql_oa=mysqli_query($conn,$sql_oa);  
while($row = mysqli_fetch_assoc($run_sql_oa)) {
    $oauth = $row["oauth_uid"];
    $R_E_I_D=$row["regno"];
    $t_m=$row["terms"];
     
}
$first_month_year=date("01-m-Y");
$last_date_month_year=date("31-m-Y");
if($R_E_I_D!=''){
    date_default_timezone_set('Asia/Kolkata');
        $date = date('d-m-Y H:i:s');
        $da = date('d-m-Y');
        $time = date ('H:i');
	$sel_us_prof = "SELECT * FROM user_profile WHERE regdno='$R_E_I_D' ";
    $run_sel_us=mysqli_query($conn,$sel_us_prof);
    while($row = mysqli_fetch_assoc($run_sel_us)) {
        $B_R_A_N_C_H=$row["branch"];
        $N_A_M_E=$row["name"];
        $vision=$row["vision"];
        $location=$row["location"];
        $hobiees=$row["hobiees"];
        $goal=$row["goal"];
        $password=$row["password"];
        $aim=$row["aim"];
        $achivements=$row["achivements"];
       
        $nickname=$row["nickname"];
        $rolemodal=$row["rolemodal"];
        $strength=$row["strength"];
        $p_number=$row["phonenumber"];
    }
    $ip = $_SERVER['REMOTE_ADDR'];
    
$result_ip = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
$lat_ip=$result_ip->lat;
$long_ip=$result_ip->lon;
$st_emailid=$userData['email'];
$sql_branch = "SELECT * FROM `library_user` WHERE email='$st_emailid'";
$run_sql_branch=mysqli_query($conn,$sql_branch);  
if (mysqli_num_rows($run_sql_branch) > 0) {
    while($row = mysqli_fetch_assoc($run_sql_branch)) {
        $b=$row['branch'];
        $pos=$row['position'];
        $p_nof= $row["nameofstudent"];
     $phone=$row["cellno"];
     $address=$row["address"];
     $rollnumber=$row["regdno"];
     $dob=$row["dob"];
     $aadharnumber=$row["aadharno"];    
    }
}


	if (mysqli_num_rows($run_sel_us) > 0) {
	$update_user_profile = "UPDATE user_profile SET lat='$lat_ip',branch='$b',longi='$long_ip',status='1',google_id='$au_num',ip_address='$ipaddress',update_date='$date' WHERE regdno='$R_E_I_D'";
	$upd_sel_us=mysqli_query($conn,$update_user_profile);
}
else {
    
   $emai = $userData['email'];
   $fna = $userData['first_name'];
    $sql = "INSERT INTO user_profile (
    regdno,
    emailid,
    branch,
    name,
    status,
    update_date,
    ip_address,
    lat,
    longi,
    google_id
    )
     Values(
        '$R_E_I_D',
         '$emai',
         '$b',
         '$fna',
         '1',
         '$date',
         '$ipaddress',
         '$lat_ip',
         '$long_ip',
         '$au_num'
         )";
    $ins_sel_us=mysqli_query($conn,$sql);
}
}

else{
    header('Location: login.php');
}


?>