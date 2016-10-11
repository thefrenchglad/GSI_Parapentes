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
  }catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
  }

  $dateVol = $_POST['vol_annee']."-".$_POST['vol_mois']."-".$_POST['vol_jour'];
  $heureDepart = $_POST['heure_depart'];
  $numParcours = $_POST['vol_num_parcours'];

  $req1 = $bdd->prepare('insert into vol(dateVol,heureDepart,numParcours) values (:numVol, :dateVol, :heureDepart, :numParcours)');
  $req1 -> execute(array('dateVol' => $dateVol, 'heureDepart' => $heureDepart, 'numParcours' => $numParcours));

  ?>

</body>
</html>
