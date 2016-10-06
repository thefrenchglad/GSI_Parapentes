

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

  <title>Post passager</title>
</head>
<body>

  <?php
  echo $_POST{'passager_nom'};
  echo "</br>";
  echo $_POST{'passager_prenom'};
  echo "</br>";
  echo $_POST{'passager_annee'}."-".$_POST{'passager_mois'}."-".$_POST{'passager_jour'};



  ?>

</body>
</html>
