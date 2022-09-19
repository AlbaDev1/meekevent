<?php 
    require_once '../config.php'; // ajout connexion bdd 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeekEvents - Partenaires</title>
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
                
                $check = $bdd->prepare('SELECT nom, type, owner, discord FROM partners WHERE id = ?');
                $check->execute(array('1'));
                $liste = $check->fetchAll();
                $truc = $check->rowCount();
                
            ?>

                <?php
                foreach($liste as $a){
                    echo '<h1>';
                    echo $a['nom'];
                    echo '</h1>';
                    echo '<h1>';
                    echo $a['type'];
                    echo '</h1>';
                    echo '<h1>Owner : ';
                    echo $a['owner'];
                    echo '</h1>';
                    echo '<h1>Discord : ';
                    echo '<a href="https://discord.gg/6gQ24YmGTx">';
                    echo $a['discord'];
                    echo '</a></h1>';
                }
                ?>
    </div>
</div>
</body>
</html>