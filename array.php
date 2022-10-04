<?php
// array = tableau
// Tableau : suite de valeurs accolées sous forme de collection.
// Opérateur des tableaux : []
// Dans ce cas, si les index ne sont pas indiqués,
// alors PHP les crée et les affecte automatiquement.
// Alors :
// - Le premier index vaut toujours 0
// - Les index suivants sont incrémentés de 1 à chaque fois
//     Clés :  0  1  2
$monTableau = [1, 2, 7];

// Afficher le nombre d'éléments de mon tableau
$totalMonTableau = count($monTableau);
echo "monTableau contient " . $totalMonTableau . " éléments";

var_dump($monTableau);

// On va utiliser les crochets pour accéder en lecture ou en écriture à un élément de mon tableau
echo "Valeur : " . $monTableau[2];
$monTableau[2] = 45;
var_dump($monTableau[2]);

// Dans un tableau, je peux définir mes propres clés
$monTableau[8] = "test";
var_dump($monTableau);

// Le type d'une clé peut être int ou string
$monTableau["hello"] = "coucou";
$monTableau["isAuthorized"] = false;
var_dump($monTableau);


// Quels sont les différents types de boucles en PHP ?
// 1 - Qu'est-ce qu'une boucle (loop) en algorithmique
// 2 - question initiale
// Clés : 0  1  2   3   4
$array = [1, 5, 6, 12, 98];

// while : tant que
echo "<h2>Boucle while</h2>";
$i = 0; // Instruction d'initialisation
while ($i <= 4) { // Condition de maintien
  echo $array[$i] . "<br />";
  $i++; // Instruction de pas (ou d'itération)
}

// for
echo "<h2>Boucle for</h2>";
// Boucle for : 3 éléments séparés par un point-virgule ';'
// Instruction d'initialisation (valeur de départ)
// Condition de maintien
// Instruction de pas (ou d'itération)
for ($i = 0; $i <= 4; $i++) {
  echo "i vaut " . $i . "<br />";
  echo $array[$i] . "<br />";
}

// do...while : pas de vérification de la condition de maintien avant la fin de la première itération
echo "<h2>Boucle do...while</h2>";
$i = 0; // Instruction d'initialisation
do {
  echo $array[$i] . "<br />";
  $i++; // Instruction de pas (ou d'itération)
} while ($i <= 4); // Condition de maintien

// foreach : pour chaque élément de $tableau en tant que $variable
echo "<h2>Boucle foreach</h2>";
var_dump($array);
foreach ($array as $element) {
  echo $element . "<br />";
}

// Syntaxe alternative de foreach
foreach ($array as $key => $value) {
  echo "Clé : $key<br />";
  echo "Valeur : $value<br />";
}

// Dans un tableau, on peut définir des clés personnalisées
$user = [
  "name" => "Bobby",
  "age" => 87,
  "active" => true
  //...
];

var_dump($user);

echo $user['name'];
