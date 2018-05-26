<?php
if(isset($_GET['cid'])){
	$cid = $_GET['cid'];
	

	$conn = mysqli_connect('localhost','root','','bulbdb');

if(!$conn ) {
      die('Could not connect');
}

$sql = "DELETE FROM customer WHERE cid='$cid'";
$retval = mysqli_query( $conn, $sql);

if(!$retval){
	die('cannot enter data');
}

mysqli_close($conn);

header('Location: disp_customer.php');
}
?>