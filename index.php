<!DOCTYPE html>
<html>
<head>

	<title>xkcd Password Generator</title>
	<meta charset='utf-8'>
	
	<link rel='stylesheet' href='css\bootstrap.min.css' type='text/css'>
	<link rel='stylesheet' href='css\custom.css' type='text/css'>

	<?php require 'logic.php'; ?>

	<meta name='viewport' content='width=device-width, initial-scale=1'>
		
</head>
<body>


	<div class='container'>
		<h1>xkcd Password Generator</h1>
	
		<p class='password'>
			<?php echo $password ?></p>
		
		<form action='index.php' method='POST'>
			<p class='options'>
			
				<label for='number_of_words'># of Words</label>
				<input maxlength=1 type='text' name='number_of_words' id='number_of_words' value=''>  (Max 9)
				<br>
					
				<input type='checkbox' name='add_number' id='add_number' > 
				<label for='add_number'>Add a number</label>
				<br>
				<input type='checkbox' name='add_symbol' id='add_symbol' > 
				<label for='add_symbol'>Add a symbol</label>
			</p>
		
			<input type='submit' class='btn btn-default' value='Gimme Another'>
					
		</form>
		
		<p class='details'>
			<a href='http://xkcd.com/936/'>xkcd password strength</a><br>
		
			<a href='http://xkcd.com/936/'>
				<img class='comic' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
			</a>
			<br>
		</p>
			
	</div>
	
	<script src='//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>
	
</body>
</html>