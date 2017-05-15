<?php
    session_start();
?>
<!doctype html>
<html>
    <head>
        <title>Sessions 3</title>
        <meta charset="utf-8"
    </head>
    <body>
        <h1>Get from session data created from another page !</h1>
        <strong>Pays: </strong>
        <?php
            echo $_SESSION['Pays'],'</pre>';
        ?>
    </body>
</html>