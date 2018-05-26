<?php
if(isset($_GET['mssn'])){
	$cid = $_GET['mssn'];
	

	$conn = mysqli_connect('localhost','root','','bulbdb');

if(!$conn ) {
      die('Could not connect');
}

$sql = "DELETE FROM customer WHERE mssn='$mssn'";
$retval = mysqli_query( $conn, $sql);

if(!$retval){
	die('cannot enter data');
}

mysqli_close($conn);

header('Location: disp_manager.php');
}
?>