<?php
session_start();

// richiamo la funzione dal file esterno results.php
include './partials/functions.php';

// intval() è una funzione di PHP utilizzata per convertire un valore in un numero intero.
// if (isset($_GET['length'])) {
//     $length = intval($_GET['length']);
//     $randomPassword = generatePassword($length);
// }



// BONUS 1
// salva le variabili e aprendo la session all'inizio, porta il codice in un altro file tramite header
// if (isset($_GET['length'])) {
//     $length = intval($_GET['length']);
//     $_SESSION['randomPassword'] = generatePassword($length);
//     $_SESSION['length'] = $length;
//     header('Location: results.php');
//     exit();
// }




// BONUS 2
if (isset($_GET['length'])) {
    $length = intval($_GET['length']);
    $includeNumbers = isset($_GET['numbers']);
    $includeLetters = isset($_GET['letters']);
    $includeSymbols = isset($_GET['symbols']);
    $allowRepeat = isset($_GET['repeat']);
    $_SESSION['randomPassword'] = generatePassword($length, $includeNumbers, $includeLetters, $includeSymbols, $allowRepeat);
    $_SESSION['length'] = $length;
    header('Location: results.php');
    exit();
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
            
            <form class=" col-6 d-flex justify-content-between align-items-center gap-4 p-3 border border-5 border-primary rounded-4" method="GET" action="index.php">
                <div class="input d-flex flex-column gap-2">
                    <label for="length">Lunghezza della password:</label>
                    <input type="number" id="length" name="length" min="7" placeholder="min: 7">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="numbersSwitch" name="numbers" value="1">
                        <label class="form-check-label" for="numbersSwitch">Includi numeri</label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="lettersSwitch" name="letters" value="1">
                        <label class="form-check-label" for="lettersSwitch">Includi lettere</label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="symbolsSwitch" name="symbols" value="1">
                        <label class="form-check-label" for="symbolsSwitch">Includi simboli</label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="repeatSwitch" name="repeat" value="1">
                        <label class="form-check-label" for="repeatSwitch">Permetti la ripetizione di caratteri</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-warning fw-bold">GENERA</button>
            </form>

        </div>
    </div>


    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
