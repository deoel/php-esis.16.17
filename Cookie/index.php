<?php
    setcookie('pays', 'USA', time()+3600);
?>
<!doctype html>
<html>
    <head>
        <title>Sessions And Cookies</title>
        <meta charset="utf-80">
    </head>
    <body>
        <h2>Let's start !</h2>
        <p>Discover cookies !</p>
        <?php
            echo 'Pays: ', $_COOKIE['pays'];
        ?>
    </body>
</html>