<?php 
    require_once 'config.php'; // ajout connexion bdd 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeekEvents - Events</title>
    <link rel="stylesheet" href="event.css">
    <link rel="shortcut icon" type="image/png" href="images/logo1.png"/>
</head>
<body>
    
    <div class="banner">
    <?php include 'menu.php'; ?>
    <div class="logo">
        <?php 
                
                $check = $bdd->prepare('SELECT Nom, Description, Host, id FROM events');
                $check->execute();
                $liste = $check->fetchAll();
                $truc = $check->rowCount();
                
            ?>

<?php
                if($truc == 0){
                    echo '<h1>Il n\'y a aucun event.';
                }else{
                    echo '<h1>Events<h1>';
                    foreach($liste as $a){
                        echo '<a href="events/';
                        echo $a['id'];
                        echo '.php"><div class="events">';
                        echo '<br>';
                        echo '<br>';
                        echo '<h1>Titre : ';
                        echo $a['Nom'];
                        echo '</h1>';
                        echo '<h2>Description : ';
                        echo $a['Description'];
                        echo '</h2>';
                        echo '<h2>Host par ';
                        echo $a['Host'];
                        echo '</h2>';
                        echo '<br>';
                        echo '<br>';
                        echo '</div></a>';
                    }
                }
                            ?>
            <!--
            <br>
            <br>
            <h1>Titre</h1>
            <h2>Description</h2>
            <h2>Host par : Host</h2>
            <br>
            <br>
        </div></a>
        <a href="#"><div class="events">
            <br>
            <br>
            <h1>Titre</h1>
            <h2>Description</h2>
            <h2>Host par : Host</h2>
            <br>
            <br>
        </div></a>
-->
    </div>
</div>
</body>
<?php include 'footer.php'; ?>
</html>