<?php

include('DBScarpe.php');
$form=$_POST;
$prezzo=0;
$art=$form["iva"];
$sel=array();

    for($i=0; $i<sizeof($lista["uomo"]); $i++){
        if(isset($form["c1$i"])){
            $prezzo+=$form["c1$i"]*$form["n1$i"];
            array_push($sel, "1$i");
        }
    }

    for($i=0; $i<sizeof($lista["donna"]); $i++){
        if(isset($form["c2$i"])){
            $prezzo+=$form["c2$i"]*$form["n2$i"];
            array_push($sel, "2$i");
        }
    }


    echo "<table border='1px'>
                <tr> 
                <td align='center' colspan='3'><b>Le mie scelte</b></td>
                </tr>
                ";

    $q=0;

    for($i=0; $i<sizeof($sel);$i++){
        echo "<tr>";
        for($j=0; $j<3; $j++){
            if($q<sizeof($sel)) {
                $pr=$form['c'.$sel[$q]]*$form['n'.$sel[$q]];
                $qu=$form['n'.$sel[$q]];
                echo "<td>
                    <img src='img/scarpa$sel[$q].jpg' width='200' height='200'>
                    <p>$pr € per n. $qu pezzi</p>
                    </td>";
                $q++;
            }
        }
        echo "</tr>";
    }

echo "</table>";


    echo "
            <h2>Scontrino</h2>
        Prezzo senza iva: $prezzo € <br>";
    $prezzoivato=$prezzo+=$prezzo*$art/100;
    echo "Prezzo con iva al $art%: ".round($prezzoivato,2)." €";



