	
	<?php
include "dbconnect.php";

$reg=$_GET['re'];
$sql="SELECT * FROM messages WHERE user_to='$reg' GROUP BY user_from ORDER BY id DESC";
$result=mysqli_query($conn, $sql);

$response='';
while($row=mysqli_fetch_array($result)) {
	$user = $row["user_from"];
	$messages = $row["message"];
	echo "<a class='dropdown-item w-10' href='message.php?id={$user}'>
<i class='si si-user mr-1'>$user</i>
	<span><div class='text-sm-left'><i class='si si-envelope-open mr-5'></i> $messages</div></span>
</a>
<div class='dropdown-divider'></div>";

}

?>
	
	