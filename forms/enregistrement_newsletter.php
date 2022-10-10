<?php
var_dump($_GET);
// Si mon tableau $_GET contient une valeur
// pour userEmail, alors cela signifie que
// l'utilisateur a validé le formulaire.
// Je vais donc traiter ce formulaire
if (isset($_GET['userEmail'])) {
  // Traitement de mon formulaire
  // Par exemple, enregistrement de l'email dans une
  // base de données
  // Pour l'instant, on ne va que l'afficher à l'écran
  var_dump($_GET['userEmail']);
}
