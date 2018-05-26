<?php
if(isset($_GET['ssn'])){
	$ssn = $_GET['ssn'];
	

	$conn = mysqli_connect('localhost','root','','bulbdb');

if(!$conn ) {
      die('Could not connect');
}

$sql = "DELETE FROM worker WHERE ssn='$ssn'";
$retval = mysqli_query( $conn, $sql);

if(!$retval){
	die('cannot enter data');
}

mysqli_close($conn);

header('Location: worker1_profile.php');
}
?>