<?php 
    require_once 'config.php'; // ajout connexion bdd 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeekEvents - Partenaires</title>
    <link rel="stylesheet" href="event.css">
    <link rel="shortcut icon" type="image/png" href="images/logo1.png"/>
</head>
<body>
    
    <div class="banner">
    <?php include 'menu.php'; ?>
    <div class="logo">
        <?php 
                
                $check = $bdd->prepare('SELECT nom, type, owner, id FROM partners');
                $check->execute();
                $liste = $check->fetchAll();
                $truc = $check->rowCount();
                
            ?>

<?php
                if($truc == 0){
                    echo '<h1>Nous n\'avons aucun partenaire.';
                }else{
                    echo '<h1>Partenaires<h1>';
                    foreach($liste as $a){
                        echo '<a href="partners/';
                        echo $a['id'];
                        echo '.php"><div class="events">';
                        echo '<br>';
                        echo '<br>';
                        echo '<h1>Nom : ';
                        echo $a['nom'];
                        echo '</h1>';
                        echo '<h2>Type : ';
                        echo $a['type'];
                        echo '</h2>';
                        echo '<h2>Owner : ';
                        echo $a['owner'];
                        echo '</h2>';
                        echo '<br>';
                        echo '<br>';
                        echo '</div></a>';
                    }
                }
            ?>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>