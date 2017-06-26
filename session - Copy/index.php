<?php
    session_start();
    //session_destroy();
?>
<!doctype html>
<html>
    <head>
        <title>Sessions and Cookies</title>
        <meta charset="utf-8"
    </head>
    <body>
        <h2Username><strong>Définition des sessions</strong></h2>
        <h2><strong>Définition des sessions</strong></h2>
        <?php
            echo '<pre>',print_r ($_SESSION),'</pre>';

            //Création des valeurs de session
            $_SESSION['Username']="User";
            $_SESSION['Description']="Essai";
            $_SESSION['Id']="NaN";
            $_SESSION['Pass']="hidden";

            echo '<pre>',print_r ($_SESSION),'</pre>';
        ?>
        <a href="session1.php">Check Session</a><br/>
        <a href="session_destroy.php">Stop Session</a>
    </body>
</html>