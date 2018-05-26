<?php

    session_start();

if(isset($_POST['ssn']) && isset($_POST['wname']) && isset($_POST['waddress']) && isset($_POST['wuname'])){

$ssn = $_POST['ssn'];
$wname = $_POST['wname'];
$waddress = $_POST['waddress'];
$wuname = $_POST['wuname'];


$conn=mysqli_connect('localhost','root','','bulbdb');
if(!$conn) {
      die('Could not connect');
   }
 $sql = "SELECT * FROM worker WHERE ssn='$ssn'";
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
         
          $_SESSION['ssn'] = $ssn;
          $_SESSION['wname'] = $wname;
          $_SESSION['waddress'] = $waddress;
          $_SESSION['wuname'] = $wuname;
          header("Location: worker_profile.php");
       }
     
    
 

if($wuname != $_SESSION['username'] ){
   header("Location:worker.php");
   } 
   $sql1 = "INSERT INTO worker 
      VALUES ('$ssn','$wname','$waddress','$wuname')";
$retval1 = mysqli_query( $conn, $sql1 );
   
   if(!$retval1) {
      die('Could not enter data');
   }
   
  
   
   
          $_SESSION['ssn'] = $ssn;
          $_SESSION['wname'] = $wname;
          $_SESSION['waddress'] = $waddress;
          $_SESSION['wuname'] = $wuname;

   header("Location: worker_profile.php");
   die();
   mysqli_close($conn);
}


header("Location: worker.php");


?>