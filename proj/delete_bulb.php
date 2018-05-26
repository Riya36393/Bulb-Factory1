<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
if(isset($_GET['bid'])){
	$cid = $_GET['bid'];
	

	$conn = mysqli_connect('localhost','root','','bulbdb');

if(!$conn ) {
      die('Could not connect');
}

$sql = "DELETE FROM bulb WHERE bid='$bid'";
$retval = mysqli_query( $conn, $sql);

if(!$retval){
	die('cannot enter data');
}

mysqli_close($conn);

header('Location: disp_bulb.php');
}
?>
</head>
<body>

</body>
</html>