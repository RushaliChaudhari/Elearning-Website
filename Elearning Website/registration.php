<!DOCTYPE html>
<html lang="en">
<?php

session_start(); //temp session
error_reporting(0); // hide undefine index
include("connect.php"); // connection
if (isset($_POST['submit'])) //if submit btn is pressed
{
	if (
		empty($_POST['firstname']) ||  //fetching and find if its empty
		empty($_POST['lastname']) ||
		empty($_POST['email']) ||
		empty($_POST['phone']) ||
		empty($_POST['password']) ||
		empty($_POST['cpassword']) ||
		empty($_POST['cpassword'])
	) {
		$message = "All fields must be Required!";
	} else {
		//cheching username & email if already present
		$check_username = mysqli_query($db, "SELECT username FROM reg_users where username = '" . $_POST['username'] . "' ");
		$check_email = mysqli_query($db, "SELECT email FROM reg_users where email = '" . $_POST['email'] . "' ");



		if ($_POST['password'] != $_POST['cpassword']) {  //matching passwords
			$message = "Password not match";
		} elseif (strlen($_POST['password']) < 6)  //cal password length
		{
			$message = "Password Must be >=6";
		} elseif (strlen($_POST['phone']) < 10)  //cal phone length
		{
			$message = "invalid phone number!";
		} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) // Validate email address
		{
			$message = "Invalid email address please type a valid email!";
		} elseif (mysqli_num_rows($check_username) > 0)  //check username
		{
			$message = 'username Already exists!';
		} elseif (mysqli_num_rows($check_email) > 0) //check email
		{
			$message = 'Email Already exists!';
		} else {

			//inserting values into db
			$mql = "INSERT INTO reg_users(username,f_name,l_name,email,phone,password) VALUES('" . $_POST['username'] . "','" . $_POST['firstname'] . "','" . $_POST['lastname'] . "','" . $_POST['email'] . "','" . $_POST['phone'] . "','" . md5($_POST['password']) . "')";
			mysqli_query($db, $mql);
			$success = "Account Created successfully! <p>You will be redirected in <span id='counter'>5</span> second(s).</p>
														<script type='text/javascript'>
														function countdown() {
															var i = document.getElementById('counter');
															if (parseInt(i.innerHTML)<=0) {
																location.href = 'login.php';
															}
															i.innerHTML = parseInt(i.innerHTML)-1;
														}
														setInterval(function(){ countdown(); },1000);
														</script>'";




			header("refresh:5;url = logIn.php"); // redireted once inserted success
		}
	}
}


?>


<head>
	<link href="index.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>student register</title>
</head>

<body>


	<?php
	if (empty($_SESSION["user_id"])) {
		echo '<button class="nav-item"><a href="logIn.php" class="nav-link "> login </a> </button>
							          <button class="nav-item"><a href="registration.php" class="nav-link "> signup </a> </button>
									  
							          <button class="admin_button"><a href="admin_login.php" class="admin_link"> Admin_LogIn</a> </button>';
	} else {
		echo  '<button class="nav-item"><a href="logout1.php" class="nav-link">logout</a></button>';
	}

	?>

<div class="regBg"></div>

	<div class="container">
		<ul>
			<li><a href="#" class="active">
					<span style="color:red  font-si;"><?php echo $message; ?></span>
					<span style="color:green ;">
						<?php echo $success; ?>
					</span>

				</a></li>

		</ul>

	</div>

	<div class="registercontainer">

		<form action="" method="post">

			<div class="textName">
				<input class="form-control" type="text" name="username" id="example-text-input" placeholder="UserName">
			</div>

			<div class="textName">
				<input class="form-control" type="text" name="firstname" id="example-text-input" placeholder="First Name" pattern="[a-zA-Z]+">
			</div>

			<div class="textName">
				<input class="form-control" type="text" name="lastname" id="example-text-input-2" placeholder="Last Name" pattern="[a-zA-Z]+">
			</div>

			<div class="textName">
				<input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			</div>

			<div class="textName">
				<input class="form-control" type="text" name="phone" id="example-tel-input-3" placeholder="Phone" pattern="^[0-9]{10}"> <small class="form-text text-muted">
			</div>

			<div class="textName">
				<input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
			</div>

			<div class="textName">
				<input type="password" class="form-control" name="cpassword" id="exampleInputPassword2" placeholder="Password">
			</div>

			<div class="textName">
				<input type="submit" value="Sign In" name="submit" class="btn-btn-primary">

			</div>

		</form>
	</div>




</body>

</html>