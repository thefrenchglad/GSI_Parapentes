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

  <title>Formulaire parapente</title>
</head>
<body>

  <section class="form_container">
    <h1>Nouveau passager</h1>

    <form class ="form" action="post_parapente.php" method="post">
      <div>
        <label for="nom">Nom modèle</label>
        <input placeholder="parapente2000" type="text" id="nom" name="parapente_nom" />
      </div>

      <div>
        <label for="num">Numero</label>
        <input placeholder="123456789" type="text" id="num" name="parapente_numero" />
      </div>
      <div>
        <label>Fournisseur</label>
        <select name="parapente_fournisseur">
          <option value="Niviuk">Niviuk</option>
          <option value="Advance">Advance</option>
          <option value="Ozone">Ozone</option>
          <option value="Swing">Swing</option>
        </select>
      </div>

      <div class="button">
        <button class="form_button" type="submit">Envoyer</button>
      </div>
    </form>


  </section>




</body>
</html>
