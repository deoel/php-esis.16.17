<?php
    setcookie('pays', 'Zaire', time()+3600);
    setcookie('homeland', 'Israel', time()+60*3,null,null,false,true);
?>
<!doctype html>
<html>
    <head>
        <title>Cookies 1</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Let's discover cookies !</h>
        <?php
            echo '<strong>Pays: </strong>', $_COOKIE['pays'], '<br>';
            echo '<strong>Homeland: </strong>', $_COOKIE['homeland'];
        ?>
    </body>
</html>