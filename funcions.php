<?php

//funció que processa les dades.
function   processar_dades($ingredients) {

  //variable global amb tots els ingredients que
  //pot portar una pizza amb el seu codi.
  global $possibles_ingredients;

  $preu_total = 5.0;

  //Preparo llista amb tot el que conté la pizza
  $ingredients_solicitats = "";
  foreach ($ingredients as $value) {
    $ingredients_solicitats = $ingredients_solicitats.
                              "<li>".
                              $possibles_ingredients[$value].
                              "</li>";
    $preu_total += 0.5;
  }

  //preparo missatge del processament
  $texte = "<h1>Has demanat una pizza amb els següents ingredients</h1>
            <ul>
               $ingredients_solicitats
            </ul>
            <h3>El preu total de la pizza eś $preu_total</h3>
            ";

  //pinto resultats
  echo $texte;
}

function   mostrar_formulari( $ingredients ) {

  //variable global amb tots els ingredients que
  //pot portar una pizza amb el seu codi.
  global $possibles_ingredients;

  //preparo les opcions de la 'select'
  $ingredients_options = "";
  foreach ($possibles_ingredients as $key => $value) {

    $selected = "";
    //ingredients que l'usuari ja havia seleccionat
    if ( in_array($key, $ingredients) ) {
      $selected = " selected ";
    }
    //alguns ingredients han de quedar seleccionats sempre
    if ( $key==0 || $key==1 ) {
      $selected = " selected ";
    }

    $ingredients_options = $ingredients_options .
                           "<option value='$key' $selected>$value</option>";
  }

  //preparo el formulari
  $formulari = "
    <form method='post' action=''>
       <select  multiple name='ingredients[]'>
            $ingredients_options
       </select>
       <br>
       <input type='submit' value='demanar pizza'>
    </form>
  ";

  //pinto tot
  echo $formulari;

}

function renyar_usuari() {
  echo "<h4>Una bona pizza ha d'incloure massa i orenga</h4>";
}

?>