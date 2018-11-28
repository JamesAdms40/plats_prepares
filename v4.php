<?php
//Calcul_v1
//Programme qui calcule le prix d'une commande.
//Auteur : Maisonave Jean (chef de projet), Ahamendaburu Eñaut
//Date :  26/10/2018
//Declaraton des variables : Pas nécessaire sur php

echo ($_POST['commande']);

//connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cuisine";

//connection

$link = mysqli_connect($servername,$username,$password,$dbname);

//vérification de la connection
if (!$link) {
  die('Erreur de connexion (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
}

echo "Connexion réussie";

$query = "SELECT id_com, bouillabesse_1 FROM commande";

if ($stmt = mysqli_prepare($link, $query)) {

  /* execute statement */
  mysqli_stmt_execute($stmt);

  /* bind result variables */
    mysqli_stmt_bind_result($stmt, $id_com, $bouillabesse_1);

  /* fetch values */
  while (mysqli_stmt_fetch($stmt)) {
      printf ("%s (%s)\n", $id_com, $bouillabesse_1);
  }

  /* close statement */
  mysqli_stmt_close($stmt);
}

mysqli_close($link);

?>
