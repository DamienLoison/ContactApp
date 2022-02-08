<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <title>TEST | J.08/02</title>
        <meta charset="UTF-8">
    </head>
    <?php 
    $a =rand(0,3);
    $a = 2;
    echo($a);
    if ($a == 0) {
        echo '<body style="background-color:pink">';
    }
    if ($a == 1){
        echo '<body style="background-color:bisque">';
    }
    if ($a == 2){
        echo '<body style="background-color:olivedrab">';
    }
    if ($a == 3){
        echo '<body style="background-color:darkorange">';
    }
    
    ?>
    <body>
        hello !
    </body>
</html>