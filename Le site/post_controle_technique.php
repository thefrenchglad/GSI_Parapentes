

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

  <title>Post controle technique</title>
</head>
<body>

  <?php

  try{
    $bdd = new PDO('mysql:host=localhost;dbname=gsi_parapentes_bdd;charset=utf8','root','');
  }catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
  }

  // $etat_XXX '= 1' si la piece est ok ou '= 0' sinon
  $etat_aile = intval($_POST['ct_aile']);
  $etat_suspentes = intval($_POST['ct_suspentes']);
  $etat_freins = intval($_POST['ct_freins']);
  $etat_sellette = intval($_POST['ct_sellette']);
  $etat_trim = intval($_POST['ct_trim']);
  $etat_accelerateur = intval($_POST['ct_accelerateur']);

  //ce qui suit est hors de ma portée
  $req1 = $bdd->prepare('?');
  $req1 -> execute(?);


  ?>

</body>
</html>
