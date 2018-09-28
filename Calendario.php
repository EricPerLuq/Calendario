<!DOCTYPE html>
<html>
<head>
	<title>Calendario</title>
	<h1>Calendario</h1>
	<link rel="stylesheet" type="text/css" href="Calendario.css">
</head>
<body>
<table>
	<tr>
		<td>Dilluns</td>
		<td>Dimarts</td>
		<td>Dimecres</td>
		<td>Dijous</td>
		<td>Divendres</td>
		<td>Dissabte</td>
		<td>Diumenge</td>
	</tr>
	<?php
	$filas=6;
	$columnas=7;
	$num=1;
	$pos=1;

	$today= strtolower(date('d',strtotime('today')));
		
		for($i=0; $i<$filas ;$i++){
			echo "<tr>";

			for($a=0; $a <$columnas; $a++){
			
				if ($pos==5) {
					if($num<=31){
						if($num!=$today){
						echo "<td>$num</td>";
						}
						else{
							echo "<td><font color='red'>$num</font></td>";
						}
					}
					$num+=1;
				}else{
					echo "<td></td>";
						$pos++;}
				
			}
		
			echo "</tr>";
		}	 
	?>
</table>
</body>
</html>

