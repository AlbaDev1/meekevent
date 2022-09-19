<!-- meek@meekevent.fr -->
<html>
<head>
    <title>MeekEvents - Contact</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="shortcut icon" type="image/png" href="../images/logo1.png"/>
    <script src="https://kit.fontawesome.com/2c4da08f37.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="banner">
    <?php include 'menu.php'; ?>
    <div class="contact-box">
        <form>
            <div class="row">
                <div class="input-group">
                    <input type="text" id="pseudo" required>
                    <label for="pseudo"><i class="fa-solid fa-user"></i> Ton pseudo</label>
                </div>
                <div class="input-group">
                    <input type="email" id="email" required>
                    <label for="email"><i class="fa-solid fa-envelope"></i> Ton email</label>
                </div>
            </div>
            <div class="input-group">
                <input type="text" id="subject" required>
                <label for="subject"><i class="fa-solid fa-magnifying-glass"></i> Le sujet</label>
            </div>
            <div class="input-group">
                <textarea id="message" rows="8" required></textarea>
                <label for="message"><i class="fa-solid fa-comments"></i> Ton message</label>
            </div>
            <div class="status">

            </div>
            <button type="submit" class="submit">ENVOYER <i class="fa-solid fa-paper-plane"></i></button>
            <a href="mailto:meek@meekevent.fr"><button type="button">Mail</button></a>
        </form>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>