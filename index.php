<html>
	<head>
		<title>Solari Board</title>
		<link rel="stylesheet" type="style/css" href="style.css">
	</head>
	<body>

		<form id="getMessage"> <!-- Form that collects the new message for the board -->
			<input type="text" name="New Message"><br>
			<input type="submit" value="Submit">
		</form>
		<?php /* This will be the function that shows the board */
			$newMessage = "ABCDEFGHIJK";
			$oldMessage = "RSTUVWXYZ";
			for ($count = 0 ; $count <=9 ; ++$count) {
				$topLetter = substr($newMessage, $count, 1);
				$bottomLetter = substr($oldMessage, $count, 1);
			echo "<span class='halfTile' topcontent=$topLetter bottomcontent=$bottomLetter>M</span>";
			};
			?>

		


		
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="solariboard.js"></script>
	</body>
</html>


