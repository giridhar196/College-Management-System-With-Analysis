<?php 
if(isset($_REQUEST['submit'])){
$r1=$_POST["row_3"];
echo $r1;
}
?>
<html>
<body>
<form action="new.php" method="POST">
<input type="text" id="row_3" name="row_3" />
<input type="submit" name="submit" id="submit" />
</form>
</body>
</html>