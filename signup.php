<?php
 $showAlert=false;
 $showError=false;
if($_SERVER['REQUEST_METHOD']=="POST"){

 include 'partials/_dbconnect.php';
 $usrnm = $_POST["usrnm"];
 $email = $_POST["email"];
 $tel = $_POST["tel"];
 $psw= $_POST["psw"];
 $cpsw= $_POST["cpsw"];
 $dob= $_POST["dob"];

 //$exists=false;
    $existsql="SELECT * FROM signup WHERE email='$email' ";
    $result= mysqli_query($conn, $existsql);
    $numExistRows = mysqli_num_rows($result);
    
    if($numExistRows > 0){
        //$exists=true;
        $showError = " email already registered";

    }
    else{
        //$exists=false;
            
        if($psw == $cpsw)
         
        {   
            //$hash = password_hash($psw, PASSWORD_DEFAULT);
            $sql="INSERT INTO `signup` ( `Usrnm`, `email`, `tel`, `psw`, `dob`) 
            VALUES ( '$usrnm', '$email', '$tel', '$psw', '$dob')";
            $result = mysqli_query($conn, $sql);
            if($result){
                $showAlert = true;
            }
        }
        else{
            
            $showError = "Password doesn't  matched";

            }
     }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  border-radius: 50%;
  height: 200px;;
}


.btn:hover {
  opacity: 1;
}

</style>
</head>
<body>
<div class="farm">
<?php
if($showAlert){
echo '
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Sucess!</strong> You can now login
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
<form action="signup.php"  method="POST" style="max-width:500px;margin:auto">
  <div class="imgcontainer">
    <a href="demo.html"><img src="logo.jpeg" alt="Avatar" class="avatar"></a>
  </div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm" required>
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" required>
  </div>
  <div class="input-container">
    <i class="fa fa-phone  icon"></i>
    <input class="input-field" type="tel" placeholder="Contact NO." name="tel" required>
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw" required>
  </div>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Confirm Password" name="cpsw" required>
  </div>
  <div class="input-container">
    <i class="fa fa-calendar icon"></i>
    <input class="input-field" type="date" placeholder="DOB" name="dob">
  </div>

  <button type="submit" class="btn">Register</button>
  <div class="login">Already Registered? <a href="signin.php">Login</a> </div>
</form>
</div>

</body>
</html>
