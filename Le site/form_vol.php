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

  <title>Formulaire vol</title>
</head>
<body>

  <?php include("menu.php"); ?>

  <section class="form_container">
    <h1>Nouveau Vol</h1>
      
    <form class ="form" action="post_vol.php" method="post">
        
      <div class="date_container">
        <label for="Date de vol">Date du vol</label>
        <div class="date_sub_container">
          <input placeholder="10" type="text" id="jour" name="vol_jour" />
          <input placeholder="10" type="text" id="mois" name="vol_mois" />
          <input placeholder="2016" type="text" id="annee" name="vol_annee" />
        </div>
      </div>

      <div>
        <label class="only_integer" for="heure">Heure de départ</label>
        <input placeholder="00" type="text" id="heure" name="heure_depart" />
      </div>

      <div>
        <label class="only_integer" for="Numéro de parcours">Numéro de parcours</label>
        <input placeholder="123456" type="text" id="num_parcours" name="vol_num_parcours" />
      </div>

      <div class="button">
        <button class="form_button" type="submit">Envoyer</button>
      </div>
    </form>


  </section>




</body>
</html>
