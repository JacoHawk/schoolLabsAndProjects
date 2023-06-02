<!DOCTYPE html>
<!--Author:
	Date:
	File:	  find-character.php
	Purpose:
	
-->

<html>
<head>
	<title>Find a Character</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php

		$searchName = $_POST['searchName'];
		$notFound = true;
		
		$charFile = fopen("characters.txt", "r");
		$nextLine = fgets ($charFile);

		while (!feof($charFile) )
		{
			list($charName, $charType, $healthTokens, $expTokens, $supplyTokens) 
								= explode (",", $nextLine);

			if ($searchName == $charName)
			{
				print ("<h1>$charName the $charType</h1>");
				print ("<p>$charName has $healthTokens health tokens,
							$expTokens experience tokens,
							and $supplyTokens supply tokens,</p>");

				$notFound = false;
			}

			$nextLine = fgets ($charFile);
		}
		
		fclose ($charFile);

		if ($notFound == true) 
		{
			print ("<h1>$searchName Not Found</h1>");
			print ("<p>SORRY! $searchName does not appear to exist!</p>");
		}
	?>
</body>
</html>
