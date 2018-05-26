<?php


session_start();

if($_SESSION['username'] == ""){

	header('Location: worker.php');
}else{
	$ssn = $_SESSION['ssn'];
	$name = $_SESSION['name'];
	$address = $_SESSION['address'];
	$uname=$_SESSION['uname'];
}

?>

<!DOCTYPE html>
<html>
<title>
Bulb Factory
</title>
<head>
<style>
p { 
    word-spacing: 30px;
    background-color:rgb(255, 153, 51);
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
    background-color: #f2ff4f;
    color: black;
    padding: 10px 10px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
	width:40%;
    border-radius: 5px;
    background-color: rgb(255, 153, 51);
    padding: 20px;
}
</style>
</head>
<body  style="background-color:rgb(128, 64, 0)">
<center>
<h1><img src="image/global.jpg" style="width:50px;height:50px;"> <span style="font-family: calibri; font-size: 14pt; color: #fff"><b>GLOBAL BULB FACTORY</b></span></h1>
<nav>

<p>
<a style="color: #fff" href="index.php">HOME</a>
<a style="color: #fff" href="ABOUT.php">ABOUT</a>
<a style="color: #fff" href="disp_bulb.php">BULB_DETAILS</a>
<a style="color: #fff" href="disp_factory.php">FACTORY_DETAILS</a>
</p>
<br/>
</nav>
<hr/>
<h2>
<marquee  style="color: #fff" behavior="alternate">Welcome To Our Factory!!!!</marquee>
</h2>
<h2 style="color: #fff" >profile</h2>


<br/></center>
<a  style="color: #fff" href="disp_worker.php">DISPLAY</a>

<center>
<div style="color: #fff">ssn: <?php echo $ssn; ?></div><br>
<div style="color: #fff">name: <?php echo $name; ?></div><br>
<div style="color: #fff">address: <?php echo $address; ?></div><br>
<div style="color: #fff">uname: <?php echo $uname; ?></div><br>

<br><br>
<a style="color: #fff" href="logout.php">click here to logout</a>
</center>
</body>
</html>