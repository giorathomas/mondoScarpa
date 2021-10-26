<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Personalizza lo sfondo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <form action="index.php" method="POST" class="container-fluid">
        <h2>Seleziona il colore dello sfondo</h2>
        <input type="radio" name="colore" value="green">Verde <br>
        <input type="radio" name="colore" value="blue">Blu <br>
        <input type="radio" name="colore" value="yellow">Giallo <br>
        <input type="radio" name="colore" value="white">Bianco <br>
        <input type="radio" name="colore" value="pink">Rosa <br>
        <input type="radio" name="colore" value="red">Rosso <br>
        <br>
        <input type="submit" name="invia" value="Invia">
    </form>
</body>

</html>