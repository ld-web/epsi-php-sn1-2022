<?php

// PDO : PHP Data Objects
// DSN : Data Source Name
// 1 - Etablissement de la connexion à la BDD
$pdo = new PDO(
  "mysql:host=127.0.0.1;dbname=epsi-sn1-2022;charset=utf8mb4",
  "root",
  "mysqltests"
);
var_dump($pdo);

// 2 - Création d'un Statement : je passe une requête SQL à la BDD
$stmt = $pdo->query("SELECT * FROM users");
var_dump($stmt);

// 3 - Je vais lire mes résultats dans mon Statement
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($users);
