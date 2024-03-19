<?php

// in questa funzione, ho usato il metodo substr per prendere solo li primi caratteri, definiti da $length e str_shuffle mescola i caratteri
function generatePassword($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
    return substr(str_shuffle($characters), 0, $length);
}

// intval() è una funzione di PHP utilizzata per convertire un valore in un numero intero.
if (isset($_GET['length'])) {
    $length = intval($_GET['length']);
    $randomPassword = generatePassword($length);
}

?>

<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <div class="row">
            <h1 class="text-center my-5 text-uppercase">PHP Strong Password Generator</h1>
        </div>

        <div class="row">
            
            <form method="GET" action="index.php">
                <label for="length">Lunghezza della password:</label><br>
                <input type="number" id="length" name="length" min="1"><br>
                <input type="submit" value="Genera">
            </form>

            <?php
            // ho usato un if in modo da prevenire che stampi un errore, se if = false non entra 
            if (isset($randomPassword)) {
                echo "<p>Password generata: $randomPassword</p>";
            }
            ?>

        </div>
    </div>


    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>