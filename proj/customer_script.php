<?php

  session_start();  

if(isset($_POST['cid']) && isset($_POST['cname']) && isset($_POST['caddress']) && isset($_POST['cuname'])){

$cid = $_POST['cid'];
$cname = $_POST['cname'];
$caddress = $_POST['caddress'];
$cuname = $_POST['cuname'];


$conn=mysqli_connect('localhost','root','','bulbdb');
if(!$conn) {
      die('Could not connect');
   }
 $sql = "SELECT * FROM customer WHERE cid='$cid'";
  $retval = mysqli_query( $conn, $sql );
   
   if(!$retval) {
      die('Could not select data');
   }
   
   $i=0;
      while($row = mysqli_fetch_assoc($retval)){

      $arr[$i]=$row;
      $i++;
      }

      echo $i;
      if($i>0){
         
          $_SESSION['cid'] = $cid;
          $_SESSION['cname'] = $cname;
          $_SESSION['caddress'] = $caddress;
          $_SESSION['cuname'] = $cuname;
          echo $_SESSION['cuname'];
          header("Location: customer_profile.php");
       }
     
    
 

if($cuname != $_SESSION['username'] ){
   header("Location:customer.php");
   } 
   $sql1 = "INSERT INTO customer 
      VALUES ('$cid','$cname','$caddress','$cuname')";
$retval1 = mysqli_query( $conn, $sql1 );
   
   if(!$retval1) {
      die('Could not enter data');
   }
   
  
   
   
          $_SESSION['cid'] = $cid;
          $_SESSION['cname'] = $cname;
          $_SESSION['caddress'] = $caddress;
          $_SESSION['cuname'] = $cuname;

   header("Location:customer_profile.php");
   die();
   mysqli_close($conn);
}


header("Location: customer.php");


?>