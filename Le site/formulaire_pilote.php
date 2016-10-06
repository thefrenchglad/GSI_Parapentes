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

  <title>Menu</title>
</head>
<body>

  <?php include("menu.php"); ?>

  <section class="form_container">
    <h1>Nouveau Pilote</h1>

    <form class ="form" action="pilote_post.php" method="post">
      <div>
        <label for="prenom">Prenom</label>
        <input type="text" id="prenom" name="pilote_prenom" />
      </div>

      <div>
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="pilote_nom" />
      </div>

      <div>
        <label for="Date de naissance">Date de naissance</label>
        <input type="text" id="date_naissance" name="pilote_date" />
      </div>

      <div>
        <label for="Numéro de licence">Numéro de licence</label>
        <input type="text" id="num_licence" name="pilote_num_licence" />
      </div>

      <div class="button">
        <button class="form_button" type="submit">Envoyer</button>
      </div>
    </form>


  </section>




</body>
</html>
