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

  $prix = $_POST['prix'];
  $numVol = $_POST['reservation_num_vol'];
  $numPilote = $_POST['reservation_num_pilote'];
  $numPassager = $_POST['reservation_num_passager'];
  $casque = $_POST['casque'];
  if (isset($_POST['casque']))
     $casque = 1;
  else
     $casque = 0;

  $req1 = $bdd->prepare('insert into vol(prix,casque,numPilote,numPassager,numVol) values (:prix, :casque, :numPilote, :numPassager, :numVol)');
  $req1 -> execute(array('prix' => $prix, 'casque' => $casque, 'numPilote' => $numPilote, 'numPassager' => $numPassager, 'numVol' => $numVol));

  ?>

</body>
</html>
