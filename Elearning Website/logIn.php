<!DOCTYPE html>
<html lang="en" >

<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            
        <title>student register</title>
        <link href="index.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  
  
</head>

<body>
<?php
include("connect.php"); //INCLUDE CONNECTION
error_reporting(0); // hide undefine index errors
session_start(); // temp sessions
if(isset($_POST['submit']))   // if button is submit
{
	$username = $_POST['username'];  //fetch records from login form
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"]))   // if records were not empty
     {
	$loginquery ="SELECT * FROM reg_users WHERE username='$username' && password='".md5($password)."'"; //selecting matching records
	$result=mysqli_query($db, $loginquery); //executing
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row))  // if matching records in the array & if everything is right
								{
                                    	$_SESSION["user_id"] = $row['u_id']; // put user id into temp session
										 header("refresh:1;url=home.php"); // redirect to index.php page
	                            } 
							else
							    {
                                      	$message = "Invalid Username or Password!"; // throw error
                                }
	 }
	
	
}
?>
  
  <div class="log_nav ">
    
    <button class="nav-item">
      <a class="nav-link" href="registration.php">Register</a>
    </button>

    <button class="nav-item">
      <a class="nav-link" href="logIn.php">Login</a>
    </button>

    <button class="nav-item">
      <a class="nav-link" href="logout1.php">Logout</a>
    </button>
  </div>

  <div class="loginBg">
     <h1>Welcome back to Learnio</h1>
     <h3>Log in and discover a greate amount of opportunities...!</h3>
   </div>

   <div class="registercontainer1">
    <div class="registercontainer2">
    
	  <span style="color:red;"><?php echo $message; ?></span> 
   <span style="color:green;"><?php echo $success; ?></span>
    <form action="" method="post">
      <input type="text" class="form-control1" placeholder="Username"  name="username"/>
      <input type="password" class="form-control1" placeholder="Password" name="password"/>
      <input type="submit" id="buttn" class="btn-btn-primary1" name="submit" value="login" />
    </form>
  </div>
  
   </div>

</body>

</html>