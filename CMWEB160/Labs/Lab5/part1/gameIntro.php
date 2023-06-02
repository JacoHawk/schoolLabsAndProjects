<!--Author:
	Date:
	File:	gameIntro.php
	Purpose:Chapter 5 Exercise
-->


<html>
<head>
	<title>gameIntro</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<?php

			$charName = $_POST['charName'];
			$charType = $_POST['charType'];
			$healthTokens = $_POST['healthTokens'];
			$expTokens = $_POST['expTokens'];
			$supplyTokens = $_POST['supplyTokens'];
			$password = $_POST['password'];

				$goldSpent = $healthTokens / 10 + $expTokens / 2 + $supplyTokens / 25;
			
				if (strtolower($password) == "php123")
				{
					print("<h1>You have created $charName the $charType!</h1>");
					print("<p>$charName has $healthTokens health tokens,
							$expTokens experience tokens, and 
							$supplyTokens supply tokens.</p>");
					print("<p>$charName has spent $goldSpent gold pieces.</p>");
				}
				else
					print("<p>That password is Not correct! Please try again.</p>");


	?>

</body>
</html>
