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

  <title>Post pilote</title>
</head>
<body>

  <?php

  try{
    $bdd = new PDO('mysql:host=localhost;dbname=gsi_parapentes_bdd;charset=utf8','root','');
    echo 'Connexion réussi';
  }catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
  }

  echo $_POST{'pilote_nom'};
  echo "</br>";
  echo $_POST{'pilote_prenom'};
  echo "</br>";
  echo $_POST{'pilote_num_licence'};
  echo "</br>";
  echo $_POST{'pilote_annee'}."-".$_POST{'pilote_mois'}."-".$_POST{'pilote_jour'};
  echo "</br>";
  echo $_POST{'pilote_niveau'} ;



  ?>

</body>
</html>
