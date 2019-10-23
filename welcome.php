<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Raleway" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script type="text/javascript" src="js/jquery-3.2.1.js"> </script>
	<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</head>
<body>

	<div id = "wrapper">
		
		<header>
			<h1><a href="index.php" style="text-decoration: none">Natasha Ng</a></h1>
		</header>

		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About Me</a></li>
				<li><a href="portfolio.php">Portfolio</a>

					<ul>
						<li><a href="graphicdesign1.php">Graphic Design Year 1</a></li>
						<li><a href="graphicdesign2.php">Graphic Design Year 2</a></li>
						<li><a href="graphicdesign3.php">Graphic Design Year 3</a></li>
						<li><a href="photography.php">Photography</a></li>
						<li><a href="webdesign.php">Web Design</a></li>
					</ul>

				</li>
				<li><a href="awards.php">Awards</a></li>
				<li><a href="contact.php">Contact Me</a></li>

			</ul>
		</nav>
		<div class="clear"></div>

		<main>

			<div id = "container">
	
				<div id = "splash">		

					<h2>Thank You</h2>


					<?php
				
					$con = mysqli_connect('localhost','root','');
					mysqli_select_db($con,'bellingham');
					
					$a = $_POST['name'];
					$b = $_POST['email'];
					$c = $_POST['phone'];
					$d = $_POST['comments'];
					
					$sql = "SELECT * FROM contacts WHERE name ='$a'";
					$result = mysqli_query($con,$sql);
					$row = mysqli_fetch_array($result);
					

					if($row['email']==$b){
						$msg="User Already Exist,Please Choose Another Email";
						header("location:contact.php?msg=".$msg);
					}
					
					else{
						$qvar = "INSERT INTO contacts(name,email,phone,comments) VALUES('$a','$b','$c','$d')";
						$q=mysqli_query($con,$qvar);
						
						if($q==false){
							die("We have experienced an error. Please try again later.");
						}
					}
					
					echo "<h3 style='color:white'>Thank you $a for your feedback! I'll get in touch soon!</h3>";
				?>
					
				</div>
			</div>
		</main>

	</div>

	<div class="clear" > </div>

	<footer>
		<p>Copyright &copy; Natasha Ng 2017</p>	
	</footer>

	</div>

</body>
</html>