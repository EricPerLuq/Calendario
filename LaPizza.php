<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	  include_once "dades.php";
		  include_once "funcions.php";

		  $rebo_dades = ( $_SERVER['REQUEST_METHOD'] == 'POST' );
		  $inclou_massa_i_orenga = $rebo_dades &&
		                           isset( $_REQUEST['ingredients'] ) &&
		                           is_array( $_REQUEST['ingredients'] ) &&
		                           in_array( 0, $_REQUEST['ingredients'] ) &&
		                           in_array( 1, $_REQUEST['ingredients'] );


		  if ($rebo_dades && $inclou_massa_i_orenga )  {
		    //he rebut dades i estan ok
		    processar_dades( $_REQUEST['ingredients']);
		  }
		  else {
		    //no he rebut dades. O les he rebut i són erronies
		    $ingredients_anteriorment_seleccionats = array();
		    if ($rebo_dades && !$inclou_massa_i_orenga ) {
		      //si les dades són erronies renyar a l'usuari
		      renyar_usuari();
		      $ingredients_anteriorment_seleccionats = $_REQUEST['ingredients'];
		    }
		    mostrar_formulari( $ingredients_anteriorment_seleccionats );
		  }


	?>



</body>
</html>