<?php

    session_start();

if(isset($_POST['bid']) && isset($_POST['bname']) && isset($_POST['quantity']) && isset($_POST['price'])){

$bid = $_POST['bid'];
$bname = $_POST['bname'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];


$conn=mysqli_connect('localhost','root','','bulbdb');
if(!$conn) {
      die('Could not connect');
   }
 $sql = "SELECT * FROM bulb WHERE bid='$bid'";
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
         
          $_SESSION['bid'] = $bid;
          $_SESSION['bname'] = $cname;
          $_SESSION['quantity'] = $quantity;
          $_SESSION['price'] = $price;
          header("Location: disp_bulb.php");
       }
     
    
 

   $sql1 = "INSERT INTO bulb
      VALUES ('$bid','$bname','$quantity','$price')";
$retval1 = mysqli_query( $conn, $sql1 );
   
   if(!$retval1) {
      die('Could not enter data');
   }
   
  
   
   
          $_SESSION['bid'] = $bid;
          $_SESSION['bname'] = $bname;
          $_SESSION['quantity'] = $quantity;
          $_SESSION['price'] = $price;

   header("Location:disp_bulb.php");
   die();
   mysqli_close($conn);
}


header("Location: bulb.php");


?>