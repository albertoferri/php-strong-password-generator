<?php

// richiamo la funzione dal file esterno results.php
include './partials/functions.php';

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

        <div class="row d-flex flex-column align-items-center">
            
            <form class=" col-6 d-flex justify-content-between align-items-center gap-4 p-3 border border-5 border-primary rounded-top-4" method="GET" action="index.php">
                <div class="input d-flex gap-1">
                    <label for="length">Lunghezza della password:</label><br>
                    <input type="number" id="length" name="length" min="1"><br>
                </div>
                <button type="submit" class="btn btn-outline-warning fw-bold">GENERA</button>
            </form>

            <?php
            // ho usato un if in modo da prevenire che stampi un errore, se if = false non entra 
            if (isset($randomPassword)) {
                echo "<div class=' col-6 text-center d-flex justify-content-center flex-column gap-2 p-3 border border-5 border-primary rounded-bottom-4 border-top-0'>
                <span>Lunghezza scelta: <strong>$length</strong></span> 
                <span>Password generata: <strong>$randomPassword</strong></span>
                </div>";
            }
            ?>

        </div>
    </div>


    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>