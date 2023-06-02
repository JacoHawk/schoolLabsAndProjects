<!--	Author:
		Date:
		File:	currency.php
		Purpose:
		
-->

<html>
<head>
	<title>Currency Converter</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>

	<?php
		$country = $_POST['country'];

		print("<h1>Currency Converter: $country</h1>");

		if ($country == "Chile")
		{
				$currency = "PESO";
				$conversionFactor = 496.831;
		}
		elseif ($country == "Egypt")
		{
				$currency = "POUND";
				$conversionFactor = 5.520;
		}
		elseif ($country == "Italy")
		{
				$currency = "EURO";
				$conversionFactor = 0.6778;
		}
		elseif ($country == "Japan")
		{
				$currency = "YEN";
				$conversionFactor =  108.645;
		}
		elseif ($country == "Spain")
		{
				$currency =  "EURO";
				$conversionFactor = 0.6778;
		}

		print("<table border=1 >");
		print("<tr><th>U.S. Dollars</th><th>$currency</th></tr>");

		for ($count= 100; $count <= 1000; $count = $count + 100)
		{
			$conv= $count * $conversionFactor;
			number_format($conv, 2);
			print ("<tr>");
			print ("<td>$count</td>");
			print ("<td>");
			print number_format($conv,2);
			print ("</td>");
			print ("</tr>");
		}

		print("</table>")

	?>

</body>
</html>
