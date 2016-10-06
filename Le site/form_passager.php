<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="css/style-menu.css">
  <link rel="stylesheet" href="css/knacss.css">
  <link rel="stylesheet" href="css/form.css">
  <link href="https://fonts.googleapis.com/css?family=Pavanam" rel="stylesheet">

  <title>Formulaire passager</title>
</head>
<body>

  <?php include("menu.php"); ?>

  <section class="form_container">
    <h1>Nouveau passager</h1>

    <form class ="form" action="post_passager.php" method="post">
      <div>
        <label for="prenom">Prenom</label>
        <input placeholder="Jean" type="text" id="prenom" name="passager_prenom" />
      </div>

      <div>
        <label for="nom">Nom</label>
        <input placeholder="Neymar" type="text" id="nom" name="passager_nom" />
      </div>

      <div class="date_container">
        <label for="Date de naissance">Date de naissance</label>
        <div class="date_sub_container">
          <input placeholder="01" type="text" id="jour" name="passager_jour" />
          <input placeholder="02" type="text" id="mois" name="passager_mois" />
          <input placeholder="1983" type="text" id="annee" name="passager_annee" />
        </div>
      </div>

      <div class="button">
        <button class="form_button" type="submit">Envoyer</button>
      </div>
    </form>


  </section>




</body>
</html>
