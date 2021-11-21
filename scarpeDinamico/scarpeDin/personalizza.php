<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scelta colore</title>
</head>
<body>
<form action="index.php" method="POST">

    <h3>Scelta colore: </h3>

    <?php
    $colore=array("green","blue","yellow","white","pink","red");

    for ($i=0; $i<sizeof($colore);$i++){
        echo "<input type=radio name=colore value=$colore[$i]> $colore[$i] <br>";
    }

    ?>

    <p>
        <input type="submit" name="button" id="button" value="Cambia Colore">
    </p>

    <p></p>
</form>
</body>
</html>


