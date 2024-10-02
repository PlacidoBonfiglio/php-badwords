<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <!-- BOOTSTRAP 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main>
        <form action="./censored.php">
            <div class="mb-3 container text-center">
                <label for="phrase" class="form-label mt-5 mb-4 h2">FORM</label>
                <input class="form-control" type="text" placeholder="Write a phrase" aria-label="default input example" id="phrase">
            </div>
        </form>
    </main>

</body>

</html>