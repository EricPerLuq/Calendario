<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 

/*$text = $_REQUEST['mytext'];
$radio=$_REQUEST['myradio'];
$checkbox=$_REQUEST['mycheckbox[]'];
$select=$_REQUEST['myselect'];
$textarea=$_REQUEST['mytextarea'];


echo 'Text es: '.$tex
echo 'Radio es: '.$radio.'<br>';
foreach ($checkbox as $clave=>$value){
	echo 'Checkbox es: '.$clave.'<br>';}

echo 'Select es: '.$select.'<br>';
echo 'Text area es: '.$textarea.'<br>';


print_r($text.'<br>');
print_r($radio.'<br>');
print_r($checkbox);
print_r('<br>'.$select.'<br>');
print_r($textarea);

*/

foreach ($_REQUEST as $key => $value) {
	
	if (gettype($value)=="array") {
		foreach ($value as $res) {
		echo $res.'<br>';	}
	}else{
		echo $key. $value."<br>";
	}
}
	

?>


</body>
</html>