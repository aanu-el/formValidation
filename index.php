<!DOCTYPE html>
<html>
<head>
	<title>Eleos | Task2</title>
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="script.js"></script>

	<style type="text/css">

		*{
			padding: 0;
			margin: 0;
			overflow-x: hidden;
		}

		body {
			background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
		}

		.error {

			border: solid 1px red;
		}

		.signform {
			width: 100%;
			padding: 10px;
			margin: 10px;
			background: white;
			height: 150vh;
		} 

		nav {
			background: #333;
		}

		nav ul {
			list-style-type: none;
			padding: 0;
		}

		nav a {
			text-decoration: none;
			text-align: center;
			color:  #fff;
			display: block;
			padding: 10px 10px;
			font-size: 1.15em;
		}

nav a:hover {
	background-color: green;
}


		h2 {
					color: green;
					text-align: center;
		}

form input {
	width: 90%;
	height: 20px;
	padding: 5px;
	margin: 5px;
	border: 2px solid rgba(192, 192, 192, 0.4);
	border-radius: 10px; 
	background-color: rgba(192, 192, 192, 0.4);
	box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3), 0 7px 21px 0 rgba(0, 0, 0, 0.20);

	outline: none;
}

form select {
	width: 50%;
	height: 30px;
	padding: 5px;
	margin: 5px;
	outline: none;
	border: 2px solid rgba(192, 192, 192, 0.4);
	border-radius: 10px;
	background-color:  rgba(192, 192, 192, 0.4) ;
	box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3), 0 7px 21px 0 rgba(0, 0, 0, 0.20); 
}

#gender{
	width: 15px;
}

#male {
	width: 15px;
}

#female {
	width: 15px;
}


#submit {
	box-sizing: border-box;
  width: 100px;
  height: 40px;

  background-color: #ff9900;
  padding: 5px;
  text-align: center;
  font-weight: bold;
  font-size: 1em;
  color: white;

  border-radius: 5px;
  outline: none;
}

.red-text {
	color: red;
}

.footer-container{
	padding: 10px;
	height: 30px;
	font-size: 15px;

	display: flex;
	justify-content: space-around;
}
		@media screen and (min-width: 768px) {
			.signform {
					width: 500px;
					margin: 0 auto;
			}

			nav ul{
					display: flex;
			}

			nav li {
					flex: 1 1 0;
					justify-content: space-around;
			}

		}


	</style>
</head>
<body>

		<!-- Page header -->

	<div class="header">
		<nav>
			<ul>
				<li><a href="#">HOME</a></li>
				<li><a href="#">ABOUT</a></li>
				<li><a href="#">PORTFOLIO</a></li>
				<li><a href="#">CONTACT</a></li>
			</ul>
		</nav>
	</div>

<hr><br>

	<!-- Favourite Background color -->
<!-- <?php
	if(isset( $_POST["submit"] )){
     	$color = $_POST["favColor"];
  	 	echo "<style> body{ background: $color; } </style>";
    }
 ?>
 -->

 	<!-- Form Validation -->

	<?php
	$firstname = $secondname = $email = $dob = $favColor = $gender = $password = '';

	$errors = array('firstname' => '', 'secondname' => '', 'email' => '', 'dob' => '', 'favColor' => '', 'gender' => '', 'department' => '', 'password' => '');

		if(isset($_POST["submit"])){

			if(empty($_POST["firstname"])){
				$errors['firstname'] = "Please enter your First Name <br/><br/>";
			} else{
				$firstname = $_POST["firstname"];
				if(!preg_match('/^[A-Za-z\s\-]+$/' , $firstname)){
					$errors['firstname'] = "Name must be letters, spaces and hypen only";
				}
			}

			if(empty($_POST["secondname"])){
				$errors['secondname'] = "Please enter your Second Name <br/><br/>";
			} else{
				$secondname = $_POST["secondname"];
				if(!preg_match('/^[A-Za-z\s\-]+$/' , $secondname)){
					$errors['secondname'] = "Name must be letters, spaces and hypen only";
				}
			}

			if(empty($_POST["email"])){
				$errors['email'] = "Please enter your email <br/><br/>";
			} else {
				$email = $_POST["email"];
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					$errors['email'] = "Email must be a valid address";
				}
			}

			if(empty($_POST["dob"])){
				$errors['dob'] = "Please choose a Date of Birth <br/><br/>";
			} else{
				$dob = $_POST["dob"];
				echo ($_POST["dob"]);
			};

			if(empty($_POST["favColor"])){
				$errors['favColor'] = "You must selct your Favourite color <br/><br/>";
			} else{
				$favColor = $_POST["favColor"];
				echo ($_POST["favColor"]);
			};

			if(empty($_POST["gender"])){
				$errors['gender'] = "Please choose your gender <br/><br/>";
			} else {
				$gender = $_POST["gender"];
				echo $_POST["gender"];
 				}

			if(empty($_POST["department"])){
				$errors['department'] = "Please Choose your Department <br/><br/>";
			} else{
				$department = $_POST["department"];
				echo ($_POST["department"]);
			};

			if(empty($_POST["password"])){
				$errors['password'] = "Please enter a Strong Password";
			} else{
				$password = $_POST["password"];
				if(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{15,30}$/', $password)){
					$errors['password'] = "Password must at least 15 characters, must contain at least a lowercase, uppercase, number, and special characters";
				}
			}
		

				if(array_filter($errors)){
					//echo "Errors in the form";
				} else {

					$fcol = urlencode($favColor);
					header("Location: home.php?fname=$firstname&sname=$secondname&email=$email&sex=$gender&dept=$department&dateofbirth=$dob&fcolor=$fcol");
				}
			};

	?>


		<!-- Sign up Form -->

	<h2>Welcome to YoYo_Designs! Please Sign Up here:</h2><br>
	<div class="signform">

	<form name="myForm" method="post" action="index.php">
		<label for="firstname"> First Name:
			<input type="text" class="frmel" name="firstname" id="firstname" value="<?php echo $firstname; ?>">
		</label>
			<div class="red-text"><?php echo $errors['firstname']; ?> </div> <br><br>
	
		<label for="secondname"> Second Name:
			<input type="text"  class="frmel"  name="secondname" id="secondname" value="<?php echo $secondname; ?>">
		</label> 
		<div class="red-text"><?php echo $errors['secondname']; ?> </div><br><br>

		<label for="email"> Email:
			<input type="text"   class="frmel"  name="email" id="email" value="<?php echo $email; ?>">
		</label>
		<div class="red-text"><?php echo $errors['email']; ?> </div> <br><br>

		<label for="dob"> Date of Birth:
			<input type="date"  class="frmel"  name="dob" id="dob" value="<?php echo $dob; ?>">
		</label> 
		<div class="red-text"><?php echo $errors['dob']; ?></div><br><br>

		<label for="favColor"> Favourite Color:
			<input type="color"  class="frmel"  name="favColor" id="favColor" value="<?php echo $favColor; ?>">
		</label>
		<div class="red-text"><?php echo $errors['favColor']; ?></div><br><br>

		<label for="gender" id="checkboxes"> Gender:
			<input type="checkbox" name="gender" value="male" id="male" checked="true">Male
			<input type="checkbox" name="gender" value="female" id="female">Female
		</label>
		<div class="red-text"><?php echo $errors['gender']; ?> </div><br><br>

		Department:
		<select name="department"  class="frmel"  id="department"> 
			<option></option>
			<option name="department" value="it" >IT </option>
			<option name="department" value="hr" >HR </option>
			<option name="department" value="Stuff" >Stuff</option>
		</select>
		<div class="red-text"><?php echo $errors['department']; ?></div> <br/><br/>

		<label for="password"> Password:
			<input type="password"   class="frmel" id="password" name="password">
		</label>
		<div class="red-text"><?php echo $errors['password']; ?></div> <br><br>

		<input type="submit" name="submit" value="submit" id="submit">

	</form>
</div>


		<!-- Footer -->

	<div class="footer-container">
      	<div class="logo-container">
				<a href="index.html"> <img src="" alt="Our_Logo" height="20" width="150"> </a>
			</div>
          <div class="copyright" style="color: #333333;"> 2020, All Rights Reserved  </div>
          <div class="address-holder" style="color: #333333;"> 34th Avenue, Ikeja, Lagos, Nigeria </div>

      </div>

</body>
</html>