<?php
// Ligne 3 et ligne 4 = instructions
// echo est une fonction fournie par PHP
// Elle permet d'ajouter du contenu à la réponse
// envoyée au client.
// On peut donc y intégrer du code HTML.
echo "<p>Hello world!</p>";
// echo "Ceci est ma deuxième ligne, elle ne s'affichera pas car elle est commentée";

$name = "Lucas"; // Variable de type string
// Apostrophes (ou guillemets simples) :
// PHP n'interprète pas le nom des variables
// On est obligé d'utiliser l'opérateur
// de concaténation
echo '<p>' . $name . '</p>';
// Guillemets :
// Je peux intégrer un nom de variable
// entre guillemets. Il sera interprété
// par PHP
echo "<p>$name</p>" . strtoupper($name);

// Types de données :
// entier = int
// nombres à virgule = float
// booléen = bool (true ou false)
// Tableaux = array

$age = 46; // int
// var_dump affiche de manière brute, à l'écran,
// la donnée demandée
// A ne pas utiliser en production, c'est-à-dire
// chez un client
// Vous l'utiliserez uniquement lors de vos développements
var_dump($age);
echo $age;

$price = 564.8; // float
$isAuthorized = false; // bool

// Les trois lignes suivantes sont équivalentes
$age = $age + 1;
$age += 1;
$age++;
var_dump($age);

// Entre les parenthèses, j'évalue une expression
// L'expression ici, est $isAuthorized == true
// Différence entre "=" qui est l'opérateur d'affectation
// et "==" qui est l'opérateur de comparaison
if ($isAuthorized == true) {
  echo "<p>Vous êtes autorisé</p>";
} else {
  echo "<p>Vous n'êtes pas autorisé</p>";
}

// On peut enlever le "== true"
// car $isAuthorized est un booléen
if ($isAuthorized) {
  echo "<p>Vous êtes autorisé</p>";
} else {
  echo "<p>Vous n'êtes pas autorisé</p>";
}

// Autre exemple de condition if
if ($age >= 18) {
  echo "<p>Vous êtes majeur</p>";
} else {
  echo "<p>Vous n'êtes pas majeur</p>";
}

// Opérateur ternaire
echo ($age >= 18) ? "<p>Vous êtes majeur</p>" : "<p>Vous n'êtes pas majeur</p>";

// Constante
const MA_CONSTANTE = 4;
const TVA_RATE = 19.6;

$priceHT = 15;
$priceTTC = $priceHT * (1 + TVA_RATE / 100);
echo "<p>Mon prix de base (hors taxe) est : $priceHT €</p>";
echo "<p>Mon prix TTC est : $priceTTC €</p>";
