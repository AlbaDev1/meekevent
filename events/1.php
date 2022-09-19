<?php 
    require_once '../config.php'; // ajout connexion bdd 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeekEvents - Events</title>
    <link rel="stylesheet" href="../truc.css">
    <link rel="shortcut icon" type="image/png" href="../images/logo1.png"/>
</head>
<body>
<div class="banner">
<header>
        <a href="index.php"><img class="logo2" src="../images/logo3.png" alt="logo"></a>
        <nav>
            <ul class="nav__links">
                <li><a href="https://discord.gg/q43mFf5uDf">Discord</a></li>
                <li><a href="../event.php">Events</a></li>
                <li><a href="../partenaires.php">Partenaires</a></li>
            </ul>
        </nav>
        <!--<a class="cta" href="contact.php"><button>Contact</button></a>-->
        <a class="cta" href="mailto:meek@meekevent.fr"><button>Contact</button></a>
    </header>
    <div class="logo">
        <?php 
                
                $check = $bdd->prepare('SELECT Nom, Description, Host, Date FROM events WHERE id = ?');
                $check->execute(array('1'));
                $liste = $check->fetchAll();
                $truc = $check->rowCount();
                
            ?>

                <?php
                if($truc == 0){
                    echo '<h1>Il n\'y a aucun event.';
                }else{
                    echo '<h1>Events<h1>';
                    foreach($liste as $a){
                        echo '<h1>Titre : ';
                        echo $a['Nom'];
                        echo '</h1>';
                        echo '<h1>Description : ';
                        echo $a['Description'];
                        echo '</h1>';
                        echo '<h1>Host par ';
                        echo $a['Host'];
                        echo '</h1>';
                        echo '<h1>Date : ';
                        echo $a['Date'];
                    }
                }
                ?>
    </div>
</div>
</body>
</html>