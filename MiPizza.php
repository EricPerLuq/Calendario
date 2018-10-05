<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<input type="checkbox" name="massa"/>Massa <br>	
	<input type="checkbox" name="orenga"/>Orenga<br>
	<input type="checkbox" name="tomaquet"/>Tomaquet<br>
	<input type="checkbox" name="formatge"/>Formatge<br>
	<input type="checkbox" name="bacon"/>Bacon<br>
	<input type="checkbox" name="peperoni"/>Peperoni<br>
	<input type="submit" name="submit">
</form>
<?php 
	$preu=0.0;
	if ($_POST[massa]== false || $_POST[orenga]==false) {
		echo "Sense massa y orenga no hi ha pizza";
		$_POST[massa]=true;
		$_POST[orenga]=true;
	}else{
		$preu=$preu+5;
		
	}
	if($_POST[tomaquet]==true){
		$preu=$preu+0.5;
	}
	if($_POST[formatge]==true) {
		$preu=$preu+0.5;

	}
	if($_POST[bacon]==true) {
		$preu=$preu+0.5;

	}
	if($_POST[peperoni]==true) {
		$preu=$preu+0.5;

	}
	if(isset($_POST["submit"]) && $_POST[massa]== true && $_POST[orenga]==true){
	echo $preu;
	}
	



 ?>

</body>
</html>