<?php
if(isset($_POST['name'])&& isset($_POST['email'])&&isset($_POST['password']) && isset($_POST['conf_pass']) && isset($_POST['as'])){

$name = $_POST['name'];
$email=$_POST['email'];
$pass = $_POST['password'];
$conf = $_POST['conf_pass'];
$as=$_POST['as'];

if($pass != $conf){
	header("Location: index.php");
}else{

	$conn=mysqli_connect('localhost','root','','bulbdb');

 if(!$conn) {
      die('Could not connect');
   }
   
   $sql = "INSERT INTO user 
      (name,email,username,password,aswc) 
      VALUES ('$name','$email','','$pass','$as')";


   $retval = mysqli_query( $conn, $sql );
   
   if(!$retval) {
      die('Could not enter data2');
   }
   


   $q="select username from user where name='$name'";
   $p=mysqli_query($conn,$q);
   $row1=mysqli_fetch_array($p);
  $unn=$row1['username'];
   
   mysqli_close($conn);

   header("Location: login.php?un='$unn'");
   die();
}
header("Location: login.php");
}
?>

