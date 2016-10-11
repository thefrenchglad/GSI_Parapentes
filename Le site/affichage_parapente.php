<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Table Style</title>
    <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">

    <link rel="stylesheet" href="css/style-menu.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/tableau.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/form.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/affichage.css" media="screen" title="no title" charset="utf-8">
</head>

<body>

<?php include("menu.php") ?>

<div class="table_form_container">

    <?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=gsi_parapentes_bdd;charset=utf8','root','');
    }catch(Exception $e){
        die('Erreur : ' . $e->getMessage());
    }

    $req1 = $bdd->prepare('SELECT nomParapente, immatriculation, fournisseur, nbPlace FROM parapente');
    $req1 -> execute();
    $result = $req1->fetchall();


    $t_head = array("Nom", "Immatriculation", "Fournisseur", "Nombre de place");

    ?>

    <div class="table_container">

        <table>




            <?php
            $i = 0;
            for ($i=0; $i < sizeof($t_head); $i++) {
                echo '<th>'.$t_head[$i]."</th>";
            }
            $j = sizeof($result);
            foreach ($result as $row_key => $row_value) {
                echo "<tr>";
                echo '<td>'.$row_value['nomParapente'].'</td>';
                echo '<td>'.$row_value['immatriculation'].'</td>';
                echo '<td>'.$row_value['fournisseur'].'</td>';
                echo '<td>'.$row_value['nbPlace'].'</td>';

                echo "</tr>";
            }
            ?>

        </table>

    </div>


    <section class="form_container">
        <h1>Nouveau parapente</h1>

        <form class ="form" action="affichage_parapente.php" method="post">
            <div>
                <label for="nom">Nom modèle</label>
                <input placeholder="parapente2000" type="text" id="nom" name="parapente_nom" />
            </div>

            <div>
                <label for="num">Immatriculation</label>
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

            <div>
                <label>Nombre de places</label>
                <select name="nb_place">
                    <option value="1">1</option>
                    <option value="2">2</option>

                </select>
            </div>

            <div class="button">
                <button class="form_button" type="submit">Envoyer</button>
            </div>
        </form>


    </section>
</div>

<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=gsi_parapentes_bdd;charset=utf8','root','');
}catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
}

if(isset($_POST['parapente_nom'])AND(isset($_POST['parapente_numero']))AND(isset($_POST['parapente_fournisseur']))AND(isset($_POST['nb_place']))) {
    $nom_parapente = $_POST['parapente_nom'];
    $immat = $_POST['parapente_numero'];
    $fournisseur = $_POST['parapente_fournisseur'];
    $nbPlace = $_POST['nb_place'];

    //Je comprends pas la base
    $req1 = $bdd->prepare('insert into parapente(nomParapente,immatriculation,fournisseur,nbPlace) values (:nom, :immat, :fournisseur, :nbPlace)');
    $req1->execute(array('nom' => $nom_parapente, 'immat' => $immat, 'fournisseur' => $fournisseur, 'nbPlace' => $nbPlace));
}



?>

</body>