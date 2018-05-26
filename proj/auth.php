<?php

if(isset($_POST['userid']) && isset($_POST['pwd'])){

$username = $_POST['userid'];
$password = $_POST['pwd'];


	$conn=mysqli_connect('localhost','root','','bulbdb');

 if(!$conn) {
      die('Could not connect');
   }
   
   $sql = "SELECT * FROM user WHERE username='$username'";


   $retval = mysqli_query( $conn, $sql );
   
   if(!$retval) {
      die('Could not select data');
   }
   
   $row = mysqli_fetch_array($retval, MYSQLI_BOTH);

      $name=$row[0];
      $email=$row[1];
      $uname=$row[2];
      $pass=$row[3];
      $aswc=$row[4];

   
   


   if($pass == $password){
      session_start();

     $_SESSION['name'] = $name;
      $_SESSION['username'] = $uname;
      $_SESSION['aswc'] = $aswc;
      $sql1='SELECT muname from manager';
      
         $retval1 = mysqli_query( $conn, $sql1 );
   
   if(!$retval1) {
     die('Could not select data');
   }
   $i=0;
      while($row1 = mysqli_fetch_assoc($retval1)){
         $arr[$i]=$row1;
         foreach ($arr as $qwe){
          if($qwe[$i] == $username){
            header('Location:bulb.php');

          }
       }
          
         
         $i++;
         
      
      }

     if($_SESSION['aswc']=='worker')
      {
         header('Location: worker.php');
      }
      elseif($_SESSION['aswc']=='customer')
      {
         header('Location: customer.php');
      }
      else
      {
          header('Location: manager.php');
      }
      

}
mysqli_close($conn);

}



?>