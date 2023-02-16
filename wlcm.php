<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:/login/signin.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;}

.icon-bar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.icon-bar a {
  float: left;
  width: 20%;
  text-align: center;
  padding: 12px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 25px;
}

.icon-bar a:hover {
  background-color: #04AA6D;
}


img.logo {
            border: 1px solid rgb(221, 221, 221);
            border-radius: 50%;
            padding: 5px;
            width: 150px;
            float: left;
        }
  
    hr { 
     display: block;
     margin-top: 25px;
     margin-bottom: 0.5em;
     margin-left: auto;
     margin-right: auto;
     border-style: ridge ;
     border-width: 5px;
     background-color: orangered;
    }
</style>
<body>
 
<div class="logo">
        <img class="logo" src="logo.jpeg" alt="missing">
        </div>
       <font size = "15" face = "Comic sans MS " color="#f89737"> <b> Chanakya Institute Of Technology</b></font> 
       <hr> 
      <h1 style="float: right; color:blueviolet; background-color: yellowgreen;">welcome - <?php echo $_SESSION['email'] ?></h1> 

<div class="icon-bar">
  <a class="active" href="#"><i class="fa fa-home"> Dashboard</i></a> 
  <a href="#"><i class="fa fa-search"></i> Activity</a> 
  <a href="#"><i class="fa fa-envelope"></i> Notices</a> 
  <a href="#"><i class="fa fa-globe"></i> Forum</a>
  <a href="/login/logout.php"><i class="fa fa-trash"></i> LOGOUT</a> 
  
</div>

</body>
</html> 
