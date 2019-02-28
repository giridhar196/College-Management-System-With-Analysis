<?php
include_once 'dbconnect.php';
if(isset($_POST['btn-upload']))
{    
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);


	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}

	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="UPDATE users SET timelinepic='$final_file'";
		$run_sql=mysqli_query($conn,$sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='profile.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='profile.php?fail';
        </script>
		<?php
	}
}
?>