<?php
include __DIR__ . "/partials/template/function.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP PASSWORD</title>
</head>
<body class="bg-primary">
    <header>
        <div class="container mt-5 mb-5 text-center text-white">
            <div class="row">
                <div class="col">
                    <h1>Strong Password Generator</h1>
                    <h3>Genera una password sicura</h3>

                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container bg-white p-3 rounded">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="content">
                        <form action="index.php" method="GET">
                            <label for="password" class="control-label mb-2">Inserire lunghezza password desiderata:</label>
                            <input type="text" name="password" class="form-control">
                            <div class="mt-3">
                                <button class="btn btn-sn btn-primary" type="submit">Genera password</button>
    
                            </div>
                            <div class="opacity-50 rounded mt-3 p-3 bg-success text-white"><?php echo randomPassword(); ?></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>
</html>