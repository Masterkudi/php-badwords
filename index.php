<?php
// Dichiarazione delle parole da censurare come un array
$paroleDaCensurare = array("cazzo", "merda", "troia", "puttana", "fottere", "negro", "ebreo", "fotterlo");

// Verifica se il form è stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera il testo inserito dall'utente
    $testoInserito = $_POST["testo"];

    // Sostituisci le parole da censurare con degli asterischi
    foreach ($paroleDaCensurare as $parola) {
        $testoInserito = str_ireplace($parola, "****", $testoInserito);
    }

    // Stampare il testo censurato
    echo "Testo censurato: " . $testoInserito;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">

    <!-- Libraries -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Custom CSS -->

    <link rel="stylesheet" href="css/style.css">
    
    <title>Php-Badwords</title>

</head>

<body>
<div class="container text-center m-3 d-flex"> 
<div class="p-3 justify-content-center">
<form method="POST" action="">

        <label for="testo">Inserisci il testo:</label>
        <input type="text" name="testo" id="testo"><br>
        
        <input class="mt-3" type="submit" value="Censura">
        
    </form>
    </div>
</div>
</body>

</html>