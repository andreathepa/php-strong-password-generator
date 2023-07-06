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
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="content">
                    <form action="index.php" method="GET">
                        <label for="password" class="control-label">Password generator</label>
                        <input type="text" name="password">
                        <button class="btn btn-sn btn-primary" type="submit">Genera password</button>
                        <div><?php echo randomPassword(); ?></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>