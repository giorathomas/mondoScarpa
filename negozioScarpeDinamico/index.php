<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Mondo Scarpa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>

    <form action="action.php" method="POST">
        <?php

        if (isset($_POST['colore'])) {
            $coloreSfondo = $_POST["colore"];
            echo "<table class='table table-striped' bgColor='$coloreSfondo'>";
        } else {
            echo "<table class='table table-striped'>";
        }

        ?>

        <tbody>
            <tr>
                <th colspan="2" class="text-center">Uomo</td>
            </tr>
            <tr>
                <td><img src="./immagini/scarpa10.jpg" alt="" class="img-fluid d-flex justify-content-center">
                    <p>50.00 euro</p>
                    <input type="checkbox" name="scarpa10">
                    <input type="number" name="10" value="1" min="1">
                </td>
                <td><img src="./immagini/scarpa11.jpg" alt="" class="img-fluid">
                    <p>60.00 euro</p>
                    <input type="checkbox" name="scarpa11">
                    <input type="number" name="11" value="1" min="1">
                </td>
            </tr>
            <tr>
                <td><img src="./immagini/scarpa12.jpg" alt="" class="img-fluid">
                    <p>45.00 euro</p>
                    <input type="checkbox" name="scarpa12">
                    <input type="number" name="12" value="1" min="1">
                </td>
                <td><img src="./immagini/scarpa13.jpg" alt="" class="img-fluid">
                    <p>99.99 euro</p>
                    <input type="checkbox" name="scarpa13">
                    <input type="number" name="13">
                </td>
            </tr>
            <tr>
                <td><img src="./immagini/scarpa14.jpg" alt="" class="img-fluid">
                    <p>99.99 euro</p>
                    <input type="checkbox" name="scarpa14">
                    <input type="number" name="14" value="1" min="1">
                </td>
            </tr>
            <tr>
                <th colspan="2" class="text-center">Donna</th>
            </tr>
            <tr>
                <td><img src="./immagini/scarpa20.jpg" alt="" class="img-fluid" style="width: 200px">
                    <p>120.90 euro</p>
                    <input type="checkbox" name="scarpa20">
                    <input type="number" name="20" value="1" min="1">
                </td>
                <td><img src="./immagini/scarpa21.jpg" alt="" class="img-fluid" style="width: 200px">
                    <p>38.00 euro</p>
                    <input type="checkbox" name="scarpa21">
                    <input type="number" name="21" value="1" min="1">
                </td>
            </tr>
            <tr>
                <td><img src="./immagini/scarpa22.jpg" alt="" class="img-fluid" style="width: 200px">
                    <p>40.50 euro</p>
                    <input type="checkbox" name="scarpa22">
                    <input type="number" name="22" value="1" min="1">
                </td>
                <td><img src="./immagini/scarpa23.jpg" alt="" class="img-fluid" style="width: 200px">
                    <p>120.90 euro</p>
                    <input type="checkbox" name="scarpa23">
                    <input type="number" name="23" value="1" min="1">
                </td>
            </tr>
            <tr>
                <td><img src="./immagini/scarpa24.jpg" alt="" class="img-fluid" style="width: 200px">
                    <p>85.00 euro</p>
                    <input type="checkbox" name="scarpa24">
                    <input type="number" name="24" value="1" min="1">
                </td>
                <td><img src="./immagini/scarpa25.jpg" alt="" class="img-fluid" style="width: 200px">
                    <p>120.90 euro</p>
                    <input type="checkbox" name="scarpa25">
                    <input type="number" name="25" value="1" min="1">
                </td>
            </tr>
            <tr>
                <td><img src="./immagini/scarpa26.jpg" alt="" class="img-fluid" style="width: 200px">
                    <p>60.00 euro</p>
                    <input type="checkbox" name="scarpa26">
                    <input type="number" name="26" value="1" min="1">
                </td>
                <td><img src="./immagini/scarpa27.jpg" alt="" class="img-fluid" style="width: 200px">
                    <p>40.00 euro</p>
                    <input type="checkbox" name="scarpa27">
                    <input type="number" name="27" value="1" min="1">
                </td>
            </tr>
        </tbody>
        </table>

        <div class="container-fluid">
            <h1>Mondo Scarpa Online</h1>
            <p>Quale aliquota Iva da aplicare?</p>

            <input type="radio" name="iva" value="10"> IVA agevolata <br>
            <input type="radio" name="iva" value="4"> IVA ridotta <br>
            <input type="radio" name="iva" value="22" checked> IVA <br>

            <img src="immagini/mondoscarpa.jpg" alt="" class="img-fluid">

            <h2>Why do we use it?</h2>
            <p>It is a long established fact that a reader will be <br>
                distracted by the readable content of a page when looking at its <br>
                layout.
                The point of using Lorem Ipsum is that it has a more-or-less normal <br>
                distribution of letters, <br>
                as opposed to using 'Content here, content here', making it look like <br>
                readable English. <br>
                Many desktop publishing packages and web page editors now use <br>
                Lorem Ipsum as their default model text, <br>
                and a search for 'lorem ipsum' will uncover many web sites still in <br>
                their infancy. <br>
                Various versions have evolved over the years, sometimes by <br>
                accident, <br>
                sometimes on purpose (injected humour and the like)</p>
            <input type="submit" name="invia" value="Invia"> <br>
            <a href="personalizza.php">personalizza lo sfondo</a>
        </div>
    </form>




</body>

</html>