
<?php


session_start();

if($_SESSION['username'] == ""){

	header('Location: worker.php');
}else{
	$ssn = $_SESSION['ssn'];
	$wname = $_SESSION['wname'];
	$waddress = $_SESSION['waddress'];
	$wuname=$_SESSION['wuname'];
}

?>

<!DOCTYPE html>
<html>
<title>
Bulb Factory
</title>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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
<body> 
  <center>
  <center>
        <h1><img src="image/global.jpg" style="width:50px;height:50px;"> <span style="font-family: calibri; font-size: 20pt; color: #fff"><b>GLOBAL BULB FACTORY</b></span></h1>
        <div class="navbar">
  <a href="index.php">HOME</a>
  <a href="ABOUT.php">ABOUT</a>
  <a href="disp1_bulb.php">BULB_DETAILS</a>
  <a href="disp1_factory.php">FACTORY_DETAILS</a>
</div>
<hr/>
<h2>
<marquee  style="color: #fff" behavior="alternate">Welcome To Our Factory!!!!</marquee>
</h2>
<h1 style="color: #fff" > Worker's profile</h1>


<br/></center>


<center>
<div style="color: #fff">ssn: <?php echo $ssn; ?></div><br>
<div style="color: #fff">name: <?php echo $wname; ?></div><br>
<div style="color: #fff">address: <?php echo $waddress; ?></div><br>
<div style="color: #fff">uname: <?php echo $wuname; ?></div><br>

<br><br>
<a style="color: #fff" href="logout.php">click here to logout</a>
</center>
</body>
</html>