<?php
session_start();

// if()controlla che le variabili siano impostate
// unset() serve per rimuovere le variabili dalla sessione
if (isset($_SESSION['randomPassword'], $_SESSION['length'])) {
    $randomPassword = $_SESSION['randomPassword'];
    $length = $_SESSION['length'];
    unset($_SESSION['randomPassword'], $_SESSION['length']);
} else {
    header('Location: index.php');
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

    <!-- link fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <div class="container">

        <div class="row">
            <h1 class="text-center my-5 text-uppercase">PHP Strong Password Generator</h1>
        </div>

        <!-- Button to go back to index.php -->
        <div class="row my-3 justify-content-center ">
            <div class="col-2">
                <a href="index.php" class="btn btn-outline-light">
                    <i class="fa-solid fa-arrow-left fw-bold"></i> TORNA ALLA HOME
                </a>
            </div>
        </div>
        <div class="row d-flex flex-column align-items-center">
            
            <div class=' col-6 text-center d-flex justify-content-center flex-column gap-2 p-3 border border-5 border-danger rounded-4'>
                <span>Lunghezza scelta: <strong><?php echo $length; ?></strong></span> 
                <span>Password generata: <strong><?php echo $randomPassword; ?></strong></span>
            </div>

        </div>
    </div>


    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>