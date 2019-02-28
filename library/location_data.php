<?php

	$servername = "localhost";
$username = "projectcms";
$password = "123456";
$dbname = "abcdproject";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}

// Opens a connection to a MySQL server
$sqlc = "SELECT * FROM `location_users` ";
$run_sqla=mysqli_query($conn,$sqlc);  



header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
 while($row = mysqli_fetch_assoc($run_sqla)) {
  // Add to XML document node
  echo '<marker ';
  echo 'id="' . $row['id'] . '" ';
  echo 'name="' . parseToXML($row['username']) . '" ';
  echo 'address="' . parseToXML($row['date']) . '" ';
  echo 'lat="' . $row['lat'] . '" ';
  echo 'lng="' . $row['longi'] . '" ';
  echo 'type="' . $row['type'] . '" ';
  echo 'reg="' . $row['reg_id'] . '" ';
  echo '/>';
}

// End XML file
echo '</markers>';

?>