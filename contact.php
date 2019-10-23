<!DOCTYPE html>
<html>
<head>
	<title>Contact Me</title>

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

					<h2>Contact Me</h2>	

					<p>
						Please reach out to me if you have any questions, comments, or concerns! Any feedback for how I can improve would be greatly appreciated!
					</p>

					<div class="formContainer">

						<table>
			
							<form name="myForm" action="welcome.php" method="post" onsubmit="return valid();">

									<tr>
										<td><label>Name</label></td>
										<td><input type="text" id="txtName" name="name"></td>
									</tr>

									<tr>
										<td><label>Email</label></td>
										<!--<td><input type="text" id="email" name="email"></td>-->
										<td><input type="email" id="email" name="email"></td>
									</tr>	

									<tr>
										<td><label>Phone</label></td>
										<td><input type="text" id="phone" name="phone"></td>
									</tr>

									<tr>
										<td><label>Comments</label></td>
										<td><textarea name="comments" id="comments" style="height: 100px" placeholder="Leave your comment here."></textarea></td>
									</tr>

									<tr>
										<td></td>
										<td><input type="submit" name="Submit" style="float: right"></td>
									</tr>

								</form>
						</table>						
					</div>					

				</div>
			</div>
		</main>

		<div class="clear" > </div>

		<footer>
			<p>Copyright &copy; Natasha Ng 2017</p>
		</footer>

	</div>

</body>
</html>