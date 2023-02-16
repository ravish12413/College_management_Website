
<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$usrnm = $_POST["fname"] ?? "";
 $email = $_POST["smail"] ?? "";
 $cntct = $_POST["cntct"] ?? "";
 $addr= $_POST["addr"] ?? "";

 $sql="INSERT INTO `enquire` ( `fname`, `smail`, `cntct`, `address`) 
            VALUES ( '$usrnm', '$email', '$cntct', '$addr')";
if (mysqli_query($conn, $sql)) {
  echo "enquiry submitted sucessfully";
} else {
  //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//mysqli_close($conn);

?>




<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
.container {  
    padding: 50px;  
  background-color: lightblue;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  

img {
  border: 1px solid #ddd;
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
</head>  
<body>
  
<a href="demo.html"><img src="logo.jpeg" alt="missing"></a>
   <font size = "15" face = "Comic sans MS " color="#f89737"> <b> Chanakya Institute Of Technology</b></font> 
   <hr>

<form action="enroll.php" method="POST">  
  <div class="container">  
  <center>  <h1> Student enquiry
    
   
  Form</h1> </center>  
  <hr>  
  <label> Firstname </label>   
<input type="text" name="fname" placeholder= "Firstname" size="15" required />   
<label> Lastname: </label>   
<input type="text" name="ln" placeholder="Middlename" size="15"  />   
<!-- <label> Lastname: </label>    
<input type="text" name="lastname" placeholder="Lastname" size="15"required />    -->
<div>  
<label>    
Course :  
</label>   
  
<select>  
<option value="Course">Course</option>  
<option value="BCA">CSE</option>  
<option value="BBA">CSE(DS)</option>  

<option value="B.Tech">CSE(AI & ML)</option>  
<option value="MBA">Mechatronics</option>  
<option value="MCA">CSE(IOT)</option>  
<option value="M.Tech">CSE(Cybersecurity)</option>  
</select>  
</div>  
<div>  
<label>   
Gender :  
</label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
  
</div>  
<label>   
Phone :  
</label>  
<input type="text" name="country code" placeholder="Country Code"  value="+91" size="2"/>   
<input type="text" name="cntct" placeholder="phone no." size="10"/ required>   
Current Address :  
<input type="text" name="addr" placeholder="viil/city name,po,ps,dist.,state"   size="40"/>   
 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter unique Email" name="smail" required>  
<!--   
    <label for="psw"><b>Password</b></label>  
    <input type="password" placeholder="Enter Password" name="psw" required>  
  
    <label for="psw-repeat"><b>Re-type Password</b></label>  
    <input type="password" placeholder="Retype Password" name="psw-repeat" required>   -->
    <button type="submit" class="registerbtn">Enquire</button>    
</form>  
</body>  
</html>  
