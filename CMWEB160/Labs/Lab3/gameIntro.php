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

		$totalGold = $healthTokens/10 + $expTokens/2 + $supplyTokens/25;

		print ("<h1>You have created $charName the $charType!</h1><br>");
		print ("<h2>You began this quest with 10 gold pieces</h2><br>");

		print ("<h2>$charName desires: $healthTokens health tokens</h2>");
		print ("<h2>$charName desires: $expTokens experience tokens</h2>");
		print ("<h2>$charName desires: $supplyTokens supply tokens<h2><br>");

		print ("<h2>Your total cost is $totalGold gold pieces!</h2>");
	?>

</body>
</html>
