<?php

    session_start();

if(isset($_POST['id']) && isset($_POST['location']) && isset($_POST['name']) && isset($_POST['mgrssn']) && isset($_POST['fbid'])){

$id = $_POST['id'];
$location = $_POST['location'];
$name = $_POST['name'];
$mgrssn = $_POST['mgrssn'];
$fbid = $_POST['fbid'];


$conn=mysqli_connect('localhost','root','','bulbdb');
if(!$conn) {
      die('Could not connect');
   }
 $sql = "SELECT * FROM factory WHERE id='$id'";
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
         
          $_SESSION['id'] = $id;
          $_SESSION['location'] = $location;
          $_SESSION['name'] = $name;
          $_SESSION['mgrssn'] = $mgrssn;
          $_SESSION['fbid'] = $fbid;
         header("Location: disp_factory.php");
       }

  
  /* $result = mysqli_query($conn,$sql1);
   $num = mysqli_num_rows($result);*/

  
  $sql2 = "SELECT * FROM bulb WHERE bid = '$fbid'";
 /* $result1 = mysqli_query($conn,$sql2);
  $num1 = mysqli_num_rows($result1);

echo $num;
echo $num1;*/

  
   if(mysqli_query($conn,$sql2)){
      
      $sql3="INSERT INTO factory(id,location,name,mgrssn,fbid) 
                     VALUES('$id','$location','$name','$mgrssn','$fbid')";
       mysqli_query($conn,$sql3) ;             
          $_SESSION['id'] = $id;
          $_SESSION['location'] = $location;
          $_SESSION['name'] = $name;
          $_SESSION['mgrssn'] = $mgrssn;
          $_SESSION['fbid'] = $fbid;
    

  header("Location:disp_factory.php");
   die();
   mysqli_close($conn);
}

}
header("Location: factory.php");


?>