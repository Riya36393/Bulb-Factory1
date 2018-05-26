<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	

	$conn = mysqli_connect('localhost','root','','bulbdb');

if(!$conn ) {
      die('Could not connect');
}

$sql = "DELETE FROM factory WHERE id='$id'";
$retval = mysqli_query( $conn, $sql);

if(!$retval){
	die('cannot enter data');
}

mysqli_close($conn);

header('Location: disp_factory.php');
}
?>
</body>
</html>