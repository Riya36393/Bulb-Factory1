<?php

    session_start();

if(isset($_POST['obid']) && isset($_POST['ocid'])   && isset($_POST['oquantity']) && isset($_POST['no_of_stars'])){

$obid = $_POST['obid'];
$ocid = $_POST['ocid'];
$oquantity=$_POST['oquantity'];
$no_of_stars = $_POST['no_of_stars'];



$conn=mysqli_connect('localhost','root','','bulbdb');
if(!$conn) {
      die('Could not connect');
   }
 $sql = "SELECT * FROM orders WHERE obid='$obid' and ocid='$ocid'";
  $retval = mysqli_query( $conn, $sql );
   
   if(!$retval) {
      die('Could not enter data');
   }
   
   $i=0;
      while($row = mysqli_fetch_assoc($retval)){

      $arr[$i]=$row;
      $i++;
      }

      echo $i;
      if($i>0){
         $_SESSION['obid'] = $obid;
          $_SESSION['ocid'] = $ocid;
          $_SESSION['oquantity'] = $oquantity;
          $_SESSION['no_of_stars'] = $no_of_stars;
         
          header("Location: orders.php");
       }

   $sql1 = "SELECT * FROM bulb WHERE bid = '$obid'";
  
  
  $sql2 = "SELECT * FROM customer WHERE cid = '$ocid'";
  
 
 
  
   if(mysqli_query($conn,$sql1) && mysqli_query($conn,$sql2)){
 
  

      $sql4 ="INSERT INTO orders(obid,ocid,oquantity,no_of_stars,total_price) VALUES('$obid','$ocid','$oquantity','$no_of_stars','')";

                     
       mysqli_query($conn,$sql4) ;  

  $tot="UPDATE orders SET total_price='$oquantity'*(select price from bulb where bid='$obid') where obid='$obid' and ocid='$ocid'";
  
  if(mysqli_query($conn,$tot) ){
       $q="CALL total_price_found('".$obid."','".$ocid."','".$oquantity."','".$no_of_stars."','".$tot."')";
    $r=mysqli_query($conn,$q);
       }
       echo $tot;          
          $_SESSION['obid'] = $obid;
          $_SESSION['ocid'] = $ocid;
          $_SESSION['oquantity'] = $oquantity;
          $_SESSION['no_of_stars'] = $no_of_stars;
          
         

   header("Location:orders.php");
   die();
  mysqli_close($conn);
}

}


?>