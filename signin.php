<?php
$login=false;
$showError=false;
if($_SERVER['REQUEST_METHOD']=="POST"){
    
    include 'partials/_dbconnect.php';
    $email = $_POST["email"];
    $psw= $_POST["psw"];
 

 
$sql= " Select * from signup WHERE  email = '$email' AND psw = '$psw' ";
$result = mysqli_query($conn, $sql);
$num= mysqli_num_rows($result);
if($num==1){
    //while($row= mysqli_fetch_assoc($result)){
       // if(password_verify($psw, $row['psw'])){ 
          $login = true;
          session_start();
          $_SESSION['loggedin']=true;
          $_SESSION['email']=$email;
          header("location: /login/wlcm.php");
    //   }
    //     else{
            
    //         $showError = "invalid Credential";

    //     }
    //}
}   
   
   else{
       
    $showError = "invalid Credential";

   }
 
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=email], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  border-radius: 50%;
  height: 200px;;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<?php
if($login){
echo '
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Sucess!</strong> You are loggedin.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>    
  </button>
</div>';
}
if($showError){
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error</strong>'. $showError.'
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>    
      </button>
    </div>';
    }
?>



<form action="/login/signin.php" method="post">
  <div class="imgcontainer">
    <a href="demo.html"><img src="logo.jpeg" alt="Avatar" class="avatar"></a>
  </div>

  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="email" placeholder="Enter e-mail" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">NEW <a href="signup.php">SIGNUP</a></span>
  </div>
</form>

</body>
</html>
