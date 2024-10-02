<!-- PHP -->
<?php 
    $name = $_GET["newPhrase"];
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <!-- CDN BOOTSTRAP 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container text-center mt-5">
            <h3 class="mt-5">Frase SENZA censura</h3>
            <p class="h4"> <?php echo $name; ?> </p>
            <p class="h5">La lunghezza della tua frase è di: <?php echo strlen($name); ?> </p>
        </div>

        <div class="container text-center mt-5">
            <h3 class="mt-5">Frase CON censura</h3>
            <p class="h4"> <?php echo $name; ?> </p>
        </div>
    </main>
</body>

</html>