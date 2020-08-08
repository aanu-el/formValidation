<!DOCTYPE html>
<html>
<head>
	<title>Welcome  </title>

	<style type="text/css">
		
		*{
			padding: 0;
			margin: 0;
			overflow-x: hidden;
		}

		body {
			background-color: <?php $bgcolor = $_POST["color"]; echo $bgcolor; ?>;
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

	.footer-container{
	padding: 10px;
	height: 30px;
	font-size: 15px;

	display: flex;
	justify-content: space-around;
}
		@media screen and (min-width: 768px) {

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


	<!-- Favourite Background color -->
<?php
	if(isset( $_POST["submit"] )){
     	$color = $_POST["favColor"];
  	 	echo "<style> body{ background: $color; } </style>";
    }
 ?>

 	<!-- form validation -->

	




  

	




<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br>



	 <div class="footer-container">
      	<div class="logo-container">
				<a href="index.html"> <img src="" alt="Our_Logo" height="20" width="150"> </a>
			</div>
          <div class="copyright" style="color: #333333;"> 2020, All Rights Reserved  </div>
          <div class="address-holder" style="color: #333333;"> 34th Avenue, Ikeja, Lagos, Nigeria </div>

      </div>


</body>
</html>