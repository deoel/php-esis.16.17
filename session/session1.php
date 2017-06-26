<?php
    session_start();
?>
<!doctype html>
<html>
    <head>
        <title>Sessions 1</title>
        <meta charset="utf-8"
    </head>
    <body>
        <h2><strong>Récuperation des donneées de la sessions</strong></h2>
        <?php
            echo '<pre><strong>Id: </strong>',$_SESSION['Id'],'</pre>';
            echo '<pre><strong>Username: </strong>',$_SESSION['Username'],'</pre>';
            echo '<pre><strong>Description: </strong>',$_SESSION['Description'],'</pre>';
        ?>
    </body>
</html>