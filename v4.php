<?php
//Calcul_v4
//Programme qui calcule le prix d'une commande.
//Auteurs : Maisonave Jean (chef de projet), Ahamendaburu Eñaut
//Date :  28/11/2018
//Declaraton des variables : Pas nécessaire sur php

//connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cuisine";

//Connexion

$link = mysqli_connect($servername,$username,$password,$dbname);

//vérification de la connexion
if (!$link) {
  die('Erreur de connexion (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
}

echo "Connexion réussie <br>";

$query = "SELECT * FROM commande WHERE id_com =".$_POST["commande"];

if ($stmt = mysqli_prepare($link, $query)) {

  /* exécution de la requète */
  mysqli_stmt_execute($stmt);
  /* assemblage des résultats */
    mysqli_stmt_bind_result($stmt, $id_com, $bouillabesse_1,$bouillabesse_2,$bouillabesse_4,$bouillabesse_8,$cassoulet_1,$cassoulet_2,$cassoulet_4,$cassoulet_8,$brandade_de_morue_1,$brandade_de_morue_2,$brandade_de_morue_4,$brandade_de_morue_8,$quiche_lorraine_1,$quiche_lorraine_2,$quiche_lorraine_4,$quiche_lorraine_8,$boeuf_bourguignon_1,$boeuf_bourguignon_2,$boeuf_bourguignon_4,$boeuf_bourguignon_8,$raclette_1,$raclette_2,$raclette_4,$raclette_8);

  /* affichage des résultats */
  while (mysqli_stmt_fetch($stmt)) {
      echo "<style>table, th, td {border: 1px solid #ddd; padding: 8px;}</style>";
      echo "<h4> N° de la commande : ",$id_com,"</h4><br>";
      echo "<table><tr><td>Recette</td>";
      echo "<td colspan=\"4\">Bouillabaisse</td>";
      echo "<td colspan=\"4\">Cassoulet</td>";
      echo "<td colspan=\"4\">Brandade de mourue</td>";
      echo "<td colspan=\"4\">Quiche lorraine</td>";
      echo "<td colspan=\"4\">Boeuf bourguignon</td>";
      echo "<td colspan=\"4\">Raclette</td></tr>";
      echo "<tr><th>Contenance</th>";
      echo "<th>",$bouillabesse_1,"</th>";
      echo "<th>",$bouillabesse_2,"</th>";
      echo "<th>",$bouillabesse_4,"</th>";
      echo "<th>",$bouillabesse_8,"</th>";
      echo "<th>",$cassoulet_1,"</th>";
      echo "<th>",$cassoulet_2,"</th>";
      echo "<th>",$cassoulet_4,"</th>";
      echo "<th>",$cassoulet_8,"</th>";
      echo "<th>",$brandade_de_morue_1,"</th>";
      echo "<th>",$brandade_de_morue_2,"</th>";
      echo "<th>",$brandade_de_morue_4,"</th>";
      echo "<th>",$brandade_de_morue_8,"</th>";
      echo "<th>",$quiche_lorraine_1,"</th>";
      echo "<th>",$quiche_lorraine_2,"</th>";
      echo "<th>",$quiche_lorraine_4,"</th>";
      echo "<th>",$quiche_lorraine_8,"</th>";
      echo "<th>",$boeuf_bourguignon_1,"</th>";
      echo "<th>",$boeuf_bourguignon_2,"</th>";
      echo "<th>",$boeuf_bourguignon_4,"</th>";
      echo "<th>",$boeuf_bourguignon_8,"</th>";
      echo "<th>",$raclette_1,"</th>";
      echo "<th>",$raclette_2,"</th>";
      echo "<th>",$raclette_4,"</th>";
      echo "<th>",$raclette_8,"</th></tr></table>";
  }

  /* fermeture du statement */
  mysqli_stmt_close($stmt);
}
/*fermeture de la connexion*/
mysqli_close($link);

?>
