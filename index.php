<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html";charset=utf-8">
	<title> harjutus2 - PHP põhimõtted </title>
</head>
<body>
<h1> See dokument on minu esimene sskatsetus PHP-ga</h1>
<?php
	echo "Tere! " . "Siin on teine tekst<br>";
	echo "J2rgmine rida";
?>
<br>
<h2> Arvutamine</h2>
<!-- siin on HTML kommentaar-->
<p>Siin teeme erinevaid tehted</p>
	<?php echo "Nelja ja viie summa on " . (4+5); ?>
	 
	
	<?php #See on ka kommentaar.
//siin on PHP kommentaar.
		echo 4 * 5; ?>
	<br>
	<?php echo 4 / 5; ?>
	
	<h2>Muutujad</h2>
	<?php 
		$number = 5 - 4;
		$number2 =9;
		$text = "Kahe arvu summa on ";
		
		echo $text . ($number + $number2);
	?>
	
	
	
</body>
</html>