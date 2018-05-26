<?php



?>
<!DOCTYPE html>
<html>
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
	
        <h1><img src="image/global.jpg" style="width:50px;height:50px;"> <span style="font-family: calibri; font-size: 20pt; color: #fff"><b>GLOBAL BULB FACTORY</b></span></h1>
        <div class="navbar">
  <a href="index.php">HOME</a>
  <a href="ABOUT.php">ABOUT</a>
  <a href="disp1_bulb.php">BULB_DETAILS</a>
  <a href="disp1_factory.php">FACTORY_DETAILS</a>

  <div class="dropdown">
    <button class="dropbtn">More 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="worker_profile.php">DISPLAY</a>
      <a href="logout.php">LOGOUT</a>
      
    </div>
  </div> 
</div>
<br/>
<br/>
<h1 style="color: #fff">Worker's Form</h1>
<div >
  <form width="30%"  method="post" action="worker_script.php" >
    
    <input type="text" id="ssn" name="ssn" placeholder="ssn">
    <br/>
    <input type="text" id="wname" name="wname" placeholder="worker name..">
    <br/>
    <input type="text" id="waddress" name="waddress" placeholder=" worker address..">
    <br/>
    <input type="text" id="wuname" name="wuname" placeholder="worker uname..">
    <br/>
    

   
  
    <input type="submit" value="Submit">
  </form>
</div>


</center>

</body>
</html>