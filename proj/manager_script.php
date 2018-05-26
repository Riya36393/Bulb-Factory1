<?php

    session_start();

if(isset($_POST['mssn']) && isset($_POST['mname']) && isset($_POST['maddress']) && isset($_POST['muname'])){

$mssn = $_POST['mssn'];
$mname = $_POST['mname'];
$maddress = $_POST['maddress'];
$muname = $_POST['muname'];


$conn=mysqli_connect('localhost','root','','bulbdb');
if(!$conn) {
      die('Could not connect');
   }
 $sql = "SELECT * FROM manager WHERE mssn='$mssn'";
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
         
          $_SESSION['mssn'] = $mssn;
          $_SESSION['mname'] = $mname;
          $_SESSION['maddress'] = $maddress;
          $_SESSION['muname'] = $muname;
          header("Location: manager_profile.php");
       }
     
    
 

if($muname != $_SESSION['username'] ){
   header("Location:manager.php");
   } 
   $sql1 = "INSERT INTO manager 
      VALUES ('$mssn','$mname','$maddress','$muname')";
$retval1 = mysqli_query( $conn, $sql1 );
   
   if(!$retval1) {
      die('Could not enter data');
   }
   
  
   
   
          $_SESSION['mssn'] = $mssn;
          $_SESSION['mname'] = $mname;
          $_SESSION['maddress'] = $maddress;
          $_SESSION['muname'] = $muname;

   header("Location: manager_profile.php");
   die();
   mysqli_close($conn);
}


header("Location: maanager.php");


?>