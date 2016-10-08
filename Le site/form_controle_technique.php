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

  <title>Controle technique</title>
</head>
<body>

  <?php include("menu.php"); ?>

  <section class="form_container" id="form_ct_container">
    <h1>Controle technique</h1>

    <!--si value == oui alors la pièce est ok, sinon elle est défectueuse-->

    <form class ="form" action="post_controle_technique.php" method="post">
      <div>
          <label class="label_ct_top" for="oui">Aile :</label>
          <input type="radio" name="ct_aile" value="1" id="oui" checked="checked" /> <label for="oui">Oui</label>
          <input type="radio" name="ct_aile" value="0" id="non" /> <label for="non">Non</label>
      </div>
      <div>
        <label class="label_ct_top" for="oui">Suspentes :</label>
          <input type="radio" name="ct_suspentes" value="1" id="oui" checked="checked" /> <label for="oui">Oui</label>
          <input type="radio" name="ct_suspentes" value="0" id="non" /> <label for="non">Non</label>
      </div>
      <div>

        <label class="label_ct_top"  for="oui">Freins :</label>
          <input type="radio" name="ct_freins" value="1" id="oui" checked="checked" /> <label for="oui">Oui</label>
          <input type="radio" name="ct_freins" value="0" id="non" /> <label for="non">Non</label>
      </div>
      <div>
        <label class="label_ct_top" for="oui">Sellette :</label>
          <input type="radio" name="ct_sellette" value="1" id="oui" checked="checked" /> <label for="oui">Oui</label>
          <input type="radio" name="ct_sellette" value="0" id="non" /> <label for="non">Non</label>
      </div>
      <div>
        <label class="label_ct_top" for="oui">Trim :</label>
          <input type="radio" name="ct_trim" value="1" id="oui" checked="checked" /> <label for="oui">Oui</label>
          <input type="radio" name="ct_trim" value="0" id="non" /> <label for="non">Non</label>
      </div>
      <div>
        <label class="label_ct_top" for="oui">Accélérateur :</label>
          <input type="radio" name="ct_accelerateur" value="1" id="oui" checked="checked" /> <label for="oui">Oui</label>
          <input type="radio" name="ct_accelerateur" value="0" id="non" /> <label for="non">Non</label>
      </div>

      <div class="button">
        <button class="form_button" type="submit">Envoyer</button>
      </div>
    </form>


  </section>




</body>
</html>
