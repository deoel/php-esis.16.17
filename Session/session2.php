<?php
    session_start();
?>
<!doctype html>
<html>
    <head>
        <title>Sessions 2</title>
        <meta charset="utf-8"
    </head>
    <body>
        <h2><strong>Récuperation des donneées de la sessions</strong></h2>
        <h2><strong>Sans lien</strong></h2>
        <?php
            echo '<pre><strong>Username</strong>',$_SESSION['Username'],'</pre>';

            echo '<pre><strong>Description</strong>',$_SESSION['Pass'],'</pre>';
            
            $_SESSION['Pays']="Zaire";
        ?>
    </body>
</html>