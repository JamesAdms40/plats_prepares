<?php
//Calcul_v1
//Programme qui calcule le prix d'une commande.
//Auteur : MAISONNAVE Jean (chef de projet), Ahamendaburu Eñaut
//Date :  26/10/2018
//Declaraton des variables : Pas nécessaire sur php

//affichage du jeu de test utilisé:

echo "<br>";
echo "<b><U>Jeu de test utilisé:</U></b>";


echo "<br>4 bouillabaisses 2 pers, 1 bouillabaisse 1 pers, 3 cassoulets 4 pers.<br>";
echo "2 bouillabaisse 1 pers, 1 brandade de morue 1 pers, 4 brandades de morues 8 pers<br>";
echo "2 quiches lorraines 4 pers, 1 quiche lorraire 8 pers, 1 boeuf bourguignon 2 pers, 6 raclettes 2 pers<br>";
echo "1 raclette 8 pers, 1 raclette 4 pers<br>";
echo "4 bouillabesse 8 pers<br>";
echo "5 cassoulets 8 pers, 1 brandade de morue 2 pers<br><br>";



//déclaration des variables
//jeu de test pas pris en compte

//Matrice des commandes: colonne= contenance ; ligne= plats
$matcom[1][1]=3;
$matcom[1][2]=4;
$matcom[1][3]=0;
$matcom[1][4]=0;

$matcom[2][1]=1;
$matcom[2][2]=1;
$matcom[2][3]=0;
$matcom[2][4]=4;

$matcom[3][1]=2;
$matcom[3][2]=2;
$matcom[3][3]=2;
$matcom[3][4]=0;

$matcom[4][1]=2;
$matcom[4][2]=2;
$matcom[4][3]=0;
$matcom[4][4]=0;

$matcom[5][1]=2;
$matcom[5][2]=0;
$matcom[5][3]=6;
$matcom[5][4]=4;

$matcom[6][1]=7;
$matcom[6][2]=4;
$matcom[6][3]=1;
$matcom[6][4]=2;


//Matrice des prix: colonne= contenance ; ligne= plats
$matprix[1][1]=4;
$matprix[1][2]=6;
$matprix[1][3]=10;
$matprix[1][4]=20;

$matprix[2][1]=3;
$matprix[2][2]=5;
$matprix[2][3]=9;
$matprix[2][4]=17;

$matprix[3][1]=2;
$matprix[3][2]=4;
$matprix[3][3]=8;
$matprix[3][4]=16;

$matprix[4][1]=5;
$matprix[4][2]=9;
$matprix[4][3]=18;
$matprix[4][4]=30;

$matprix[5][1]=4;
$matprix[5][2]=9;
$matprix[5][3]=18;
$matprix[5][4]=35;

$matprix[6][1]=6;
$matprix[6][2]=12;
$matprix[6][3]=20;
$matprix[6][4]=39;


//Affichage des matrices
echo "<b><U>Matrices:</U></b>";

//Affichage de la matrice commande
echo "<br>Matrice commande<br>";
for ($i = 1; $i <= 6; $i++) {
   for ($j = 1; $j <= 4; $j++) {
   echo ' ['.$matcom[$i][$j].']  ';
}
echo "<br>";
}

//Affichage de la matrice des prix
echo "<br>Matrice prix<br>";
for ($i = 1; $i <= 6; $i++) {
   for ($j = 1; $j <= 4; $j++) {
   echo ' ['.$matprix[$i][$j].']  ';
}
echo "<br>";
}

//Calcul de la facture et affichage en matrice
echo "<br>Matrice resultat<br>";

for ($i = 1; $i <= 6; $i++) {
   for ($j = 1; $j <= 4; $j++) {
    $matresultat[$i][$j]= $matcom[$i][$j]*$matprix[$i][$j];
    echo ' ['.$matresultat[$i][$j].'] ';
}
echo "<br>";
}

// affichage resultat total
$facture=0;
for ($i = 1; $i <= 6; $i++) {

   for ($j = 1; $j <= 4; $j++) {
$facture= $facture+$matresultat[$i][$j];
}
echo "<br>";
}
echo "La facture totale s'élève à:  $facture €";

?>

Bonjour, <?php echo htmlspecialchars($_POST['commande']); ?>.

<?php

//connection parameters
$servername = "localhost";
$username = "admin";
$password = "";
$dbname = "test";

//connection

$link = mysqli_connect($servername,$username,$password,$dbname = "cuisine");

  //vérification de la connection
  if (!$link) {
      die('Erreur de connexion (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
  }

  echo "Connexion réussie";

  mysqli_close($link);

?>
