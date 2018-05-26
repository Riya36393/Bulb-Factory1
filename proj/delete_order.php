
<?php
session_start();

if(isset($_GET['obid']) && isset($_GET['ocid'])){
	$obid = $_GET['obid'];
	$ocid = $_GET['ocid'];

	$conn = mysqli_connect('localhost','root','','bulbdb');

if(!$conn ) {
      die('Could not connect');
}

   
$sql = "DELETE FROM orders WHERE obid ='$obid' and ocid ='$ocid'";
$retval = mysqli_query( $conn, $sql);

if(!$retval){
	die('cannot enter data');
}


if($_SESSION['cuname']==$_SESSION['username']){

header("Location:orders.php");
	
}

mysqli_close($conn);
}else{
	header("Location:disp_order.php");
}

?>


