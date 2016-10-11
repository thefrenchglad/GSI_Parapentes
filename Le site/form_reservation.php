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

  <title>Formulaire réservation</title>
</head>
<body>

  <?php include("menu.php"); ?>

  <section class="form_container">
    <h1>Nouvelle réservation</h1>
      
    <form class ="form" action="post_reservation.php" method="post">
        
      <div>
        <label class="only_integer" for="prix">Prix de la réservation</label>
        <input placeholder="123456" type="text" id="prix" name="prix" />
      </div>
        
      <div>
        <label class="only_integer" for="Numéro de vol">Numéro de vol</label>
        <input placeholder="123456" type="text" id="num_vol" name="reservation_num_vol" />
      </div>

      <div>
        <label class="only_integer" for="Numéro de pilote">Numéro de pilote</label>
        <input placeholder="123456" type="text" id="num_pilote" name="reservation_num_pilote" />
      </div>

      <div>
        <label class="only_integer" for="Numéro de passager">Numéro de passager</label>
        <input placeholder="123456" type="text" id="num_passager" name="reservation_num_passager" />
      </div>
        
      <div>
        <label for="casque">Casque</label>
        <input type="checkbox" id="casque" name="casque"/>
      </div>

      <div class="button">
        <button class="form_button" type="submit">Envoyer</button>
      </div>
    </form>


  </section>




</body>
</html>
