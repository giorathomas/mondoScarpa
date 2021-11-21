<!DOCTYPE html>
<html lang="it">

    <head>
        <meta charset="UTF-32">
        <title>Negozio di scarpe</title>
        <style>

            <?php
            if(isset($_POST["colore"])){
            $col=$_POST['colore'];
            echo "
            #tabella{
                background-color: $col;
            }
            "; } else {
                echo "
            #tabella{
                background-color: white;
            }
            ";
            }
            ?>

        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>

    <form action='action.php' method='POST'>
        <div class='row'>
            <div class='col-8'>
                <table class='table table-bordered' id='tabella'>
                    <tr>
                        <th colspan='2'>Uomo</th>
                    </tr>


    <?php
            include('DBScarpe.php');
        $scarpeUomo = $lista["uomo"];
            $el = 2;
            $i = 0;

            foreach ($scarpeUomo as $key => $value) {
                if($i%$el != 0){
                    echo "
                            <td>
                                <img src='img/scarpa$key.jpg' width='200' heigth='200'>
                                <p>$value €</p> 
                                <input type='checkbox' value='$value' name='c$key'> 
                                <input type='number' min='1' name='n$key' value='1'>
                            </td>
                    ";
                } else if($i == sizeof($scarpeUomo)-1 && sizeof($scarpeUomo)%2 != 0){
                    echo "
                        </tr><tr>
                            <td colspan='$el'>
                                <img src='img/scarpa$key.jpg' width='200' heigth='200'>
                                <p>$value €</p> 
                                <input type='checkbox' value='$value' name='c$key'> 
                                <input type='number' min='1' name='n$key' value='1'>
                            </td>
                    ";
                } else if($i%$el == 0){
                    echo "
                        </tr><tr>
                            <td>
                                <img src='img/scarpa$key.jpg' width='200' heigth='200' alt='not found'>
                                <p>$value €</p> 
                                <input type='checkbox' value='$value' name='c$key'>
                                <input type='number' min='1' name='n$key' value='1'>
                            </td>
                    ";
                }
                $i++;
            }

            echo "
                </table>
                <table class='table table-bordered' id='tabella'>
                    <tr>
                        <th colspan='2'>Donna</th>
                    </tr>
                    <tr>
            ";
            $scarpeDonna = $lista["donna"];
            $i = 0;

            foreach ($scarpeDonna as $key => $value) {
                if($i%$el != 0){
                    echo "
                            <td>
                                <img src='img/scarpa$key.jpg' width='200' heigth='200'>
                                <p>$value €</p> 
                                <input type='checkbox' value='$value' name='c$key'>
                                <input type='number' min='1' name='n$key' value='1'>
                            </td>
                    ";
                } else if($i == sizeof($scarpeDonna)-1 && sizeof($scarpeDonna)%2 != 0){
                    echo "
                        </tr><tr>
                            <td colspan='$el'>
                                <img src='img/scarpa$key.jpg' width='200' heigth='200'>
                                <p>$value €</p> 
                                <input type='checkbox' value='$value' name='c$key'>
                                <input type='number' min='1' name='n$key' value='1'>
                            </td>
                    ";
                } else if($i%$el == 0){
                    echo "
                        </tr><tr>
                            <td>
                                <img src='img/scarpa$key.jpg' width='200' heigth='200'>
                                <p>$value €</p> 
                                <input type='checkbox' value='$value' name='c$key'>
                                <input type='number' min='1' name='n$key' value='1'>
                            </td>
                    ";
                }
                $i++;
            }
            ?>
                    </table>
            </div>

            <div class="col-4">
                <br>
                <h1>Mondo scarpa OnLine</h1>
                <br>
                <p>Quale aliquota IVA da applicare?</p>



                    <input type="radio" value="10" name="iva"> Iva Agevolata <br>
                    <input type="radio" value="4" name="iva"> Iva Ridotta <br>
                    <input type="radio" value="22" name="iva" checked> Iva <br>

                    <p>
                        <br>
                        <b>Why do we use it?</b> <br>
                        It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout.
                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                        as opposed to using 'Content here, content here', making it look like readable English.
                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                        and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                        Various versions have evolved over the years, sometimes by accident,
                        sometimes on purpose (injected humour and the like<br>

                    </p>
                    <img src="img/mondoscarpa.jpg" width="400" height="auto">
                    <br> <br>
                    <input type="submit" value="invia" name="but" style="height:30px; width:300px"> <br> <br>

                    <a href="personalizza.php">Personalizza lo sfondo</a>
                </form>
                

            </div>
        </div>




    </div>



    </body>


</html>




