<?php
require('database.php');
$selezioni = array();
$pezzi = array();
$prezzi = array();
$iva = $_POST["iva"] / 100;
$totale = 0;
$totaleConIva = 0;

foreach ($_POST as $key => $value) {
    if (isset($key) && $value == "on") {
        $selezioni[$key] = $value;
    }
}

foreach ($selezioni as $key => $value) {
    $pezzi[$key] = $_POST[$key[6] . $key[7]];
}

foreach ($pezzi as $key => $value) {
    $prezzi[$key] = $database[$key] * $value;
    $totale += $prezzi[$key];
    $totaleConIva += $prezzi[$key] * $iva + $prezzi[$key];
    $prezzi[$key] += $prezzi[$key] * $iva;
}

$tabella = "<table class='table table-striped'>
<th colspan='3' class='text-center'>La tua scelta</th><tr>";
$i = 0;
foreach ($selezioni as $key => $value) {
    if ($i < 3) {
        $tabella = $tabella . "<td>";
        $tabella = $tabella . $prezzi[$key];
        $tabella = $tabella . " euro per n ";
        $tabella = $tabella . $pezzi[$key];
        $tabella = $tabella . " pezzi";
        $tabella = $tabella . "<img src='immagini/$key.jpg' style='width: 200px'>";
        $tabella = $tabella . "</td>";
        $i++;
    } else {
        $tabella = $tabella . "</tr>";
        $i = 0;
        $tabella = $tabella . "<td>";
        $tabella = $tabella . $prezzi[$key];
        $tabella = $tabella . " euro per n ";
        $tabella = $tabella . $pezzi[$key];
        $tabella = $tabella . " pezzi";
        $tabella = $tabella . "<img src='immagini/$key.jpg' style='width: 200px'>";
        $tabella = $tabella . "</td>";
        $i++;
        $tabella = $tabella . "<tr>";
    }
}

?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>La tua scelta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <?php
        echo $tabella;
        echo "<h2>Scontrino</h2>";
        echo "<p>prezzo " . $totale . " senza IVA" . "</p>";
        $ivaScontrino =  "<p>prezzo " . $totaleConIva . " con IVA - ";

        switch ($iva) {
            case 10:
                $ivaScontrino = $ivaScontrino . "agevolata";
                break;
            case 4:
                $ivaScontrino = $ivaScontrino . "ridotta";
                break;
            case 22:
                $ivaScontrino = $ivaScontrino . "iva";
                break;
        }

        $ivaScontrino = $ivaScontrino . "(" . $iva * 100 . "%)</p>";
        echo $ivaScontrino;
        ?>
    </div>
</body>

</html>