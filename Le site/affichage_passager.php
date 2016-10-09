<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Table Style</title>
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">

  <link rel="stylesheet" href="css/style-menu.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/tableau.css" media="screen" title="no title" charset="utf-8">

</head>

<body>


  <?php
    try{
      $bdd = new PDO('mysql:host=localhost;dbname=gsi_parapentes_bdd;charset=utf8','root','');
    }catch(Exception $e){
      die('Erreur : ' . $e->getMessage());
    }

    $req1 = $bdd->prepare('SELECT * FROM Passager');
    $req1 -> execute();

    $result = $req1->fetchall();

    print_r($result);



/*  $prenom = array("ernest","jean","alexis","chuck");
  $nom = array("apikachu","neymar","petit","norris");
  $personne = array($prenom,$nom);
  foreach ($prenom as $key => $value) {

  }*/

   ?>


  <table class="table-fill">
    <thead>
      <tr>
        <th class="text-left">Mois</th>
        <th class="text-left">Poney</th>
      </tr>
    </thead>
    <tbody class="table-hover">
      <tr>
        <td class="text-left">Janvier</td>
        <td class="text-left">5000000</td>
      </tr>
      <tr>
        <td class="text-left">Fevrier</td>
        <td class="text-left">100000000</td>
      </tr>
      <tr>
        <td class="text-left">Mars</td>
        <td class="text-left">5</td>
      </tr>
      <tr>
        <td class="text-left">Avril</td>
        <td class="text-left">1111111111</td>
      </tr>
      <tr>
        <td class="text-left">Mai</td>
        <td class="text-left">0,97978685</td>
      </tr>
    </tbody>
  </table>


</body>
