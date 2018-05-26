<?php
error_reporting(0);
$conn=mysqli_connect('localhost','root','','bulbdb');

if(!$conn ) {
      die('Could not connect');
   }
   
   $sql = 'SELECT * FROM customer';
   $retval = mysqli_query( $conn, $sql );
   if(! $retval) {
      die('Could not fetch data');
   }

 mysqli_close($conn);
   


?>

<!DOCTYPE html>
<html>
<head>
	<title>fetch</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 60%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: rgb(120, 204, 183);}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: rgb(64, 114, 102);
    color: white;
}
p { 
    word-spacing: 30px;
    background-color:rgb(62, 239, 195);
    padding:10px; 
    font-size: 20pt
}
input[type=text], select {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 20%;
    background-color: rgb(9, 229, 176);
    color: black;
    padding: 10px 10px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: rgb(64, 114, 102);
}

div {
  width:30%;
    border-radius: 5px;
    background-color: rgb(120, 204, 183);
    padding: 20px
}
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
    width:90%;
    height:20px;
}

.navbar a {
    
    float: left;
    font-size: 20px;
    color: white;
    text-align: left;
    padding:  20px 20px;
    padding-top: 3px;
    padding-left: 30px;
    padding-right: 20px;

     
    text-decoration: none;
    justify-content: space-around;
}

.dropdown {
    float: right;
    overflow: hidden;
    width:6%;
    height:10px;
     padding: 10px;
     padding-bottom: : 5px;
}

.dropdown .dropbtn {
    float: center;
    font-size: 15px;    
    border: none;
    outline: none;
    color: white;
    padding-bottom : 5px;
    background-color: inherit;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: rgb(64, 114, 102);
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    
    max-width: 100px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 3px;
    text-decoration: none;
    display: block;
    text-align: left;
    font-size: 15px;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
body {
    background-image: url("image/3.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>
<center>
  <h1><img src="image/global.jpg" style="width:50px;height:50px;"> <span style="font-family: calibri; font-size: 20pt; color: #fff"><b>GLOBAL BULB FACTORY</b></span></h1>
        <div class="navbar">
  <a href="index.php">HOME</a>
  <a href="ABOUT.php">ABOUT</a>
  <a href="login.php">MANAGER</a>

  <div class="dropdown">
    <button class="dropbtn">More 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="disp_manager.php">MANAGER</a>
     
      <a href="Factory.php">FACTORY</a>
      <a href="bulb.php">BULB</a>
      <a href="disp_worker.php">WORKER</a>
      <a  href="disp_order.php">ORDERS</a>
       <a href="logout.php">LOGOUT</a>
    </div>
  </div> 
</div>
<br/>
<br/>


<h1 style="color: #fff">CUSTOMER DETAILS</h1>
 

<table id="customers">
  
<tbody>
  
<th>Customer_Id</th>
<th>Customer_Name</th>
<th>Customer_Address</th>
<th>Customer_Username</th>
<th>Delete</th>
</tbody>

<?php ; while($row=mysqli_fetch_array($retval)) {; ?>
<tr>
<td><?php echo $row['cid']; ?></td> 
<td><?php echo $row['cname']; ?></td>
<td><?php echo $row['caddress']; ?></td>
<td><?php echo $row['cuname']; ?></td>
<td><?php echo " <a href='delete_customer.php?cid=".$row['cid']."'>delete</a><br>"; ?></td>

</tr>
<?php } ?>
</tbody>

</table>
</center>
	

</body>
</html>