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

			$expTokensBon = $expTokens;
			$healthTokensBon = $healthTokens;
			$supplyTokensBon = $supplyTokens;
	
			$goldSpent = $healthTokens / 10 + $expTokens / 2 + $supplyTokens / 25;
			
			$goldLeft = 10 - $goldSpent;
			
			if ($charType == "dwarf" OR $charType == "human") {
				$supplyTokensBon = $supplyTokensBon + 10;
			}

			if ($charType == "elf") {
				$healthTokensBon = $healthTokensBon + 5;
			}

			if ($charType == "wizard") {
				$expTokensBon = $expTokensBon + 2;
			}
			
			if ($goldSpent > 10)
			{
				print	("<h1>HEY THERE, $charName!</h1>");
				print ("<p>YOU SPENT MORE GOLD THAN YOU HAVE!</p>");
				print ("<p>GO BACK AND TRY THAT AGAIN - YOU HAVE 10 GOLD PIECES..</p>");
			}
			else
			{
				print("<h1>You have created $charName the $charType!</h1>");
				print("<p>$charName has <strong>$healthTokensBon</strong> health tokens,
							<strong>$expTokensBon</strong> experience tokens, and 
							<strong>$supplyTokensBon</strong> supply tokens.</p>");
				print("<p>You received some bonus tokens! :)</p>");	
				print("<p>You asked for $healthTokens health tokens, $expTokens experience tokens, and $supplyTokens supply tokens, but wizards receive 2 extra experience tokens, humans and dwarves receive 10 extra supply tokens, and elves receive 5 extra health tokens. You lucky $charType!</p>");						
				print("<p>$charName has spent <strong>$goldSpent</strong> gold pieces, ");
				print("and has <strong>$goldLeft</strong> gold pieces left. Spend it wisely in the future!</p>");
			}
	?>

</body>
</html>
