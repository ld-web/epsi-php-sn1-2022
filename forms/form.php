<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css" />
  <title>Formulaire</title>
</head>

<body>
  <h1>Formulaire d'inscription à la newsletter</h1>
  <form action="enregistrement_newsletter.php">
    <div>
      <input type="email" name="userEmail" placeholder="Email..." />
    </div>
    <div>
      <!--
      <input type="checkbox" name="dataShareConsent" id="dataShareConsent" value="yes" />
      <label for="dataShareConsent">J'accepte le partage de mes données</label>
      -->
      <span>J'accepte le partage de mes données</span>
      <input type="radio" name="shareConsent" value="yes" id="dataShareYes" />
      <label for="dataShareYes">Oui</label>
      <input type="radio" name="shareConsent" value="no" id="dataShareNo" />
      <label for="dataShareNo">Non</label>
    </div>
    <div>
      <input type="submit" value="Inscription" />
    </div>
  </form>
</body>

</html>