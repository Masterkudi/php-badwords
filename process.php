

<!DOCTYPE html>
<html>
<head>
    <title>PHP Badwords - Risultato</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ottieni il paragrafo e la parola da censurare dal modulo
        
        $testo = $_POST["testo"];
        $parolaCensurare = $_POST["parolaDaCensurare"];

        // Stampa il paragrafo e la sua lunghezza
        echo "Paragrafo originale: <br>";
        echo $testo . "<br>";
        echo "Lunghezza del testo: " . strlen($testo) . " caratteri<br><br>";

        // Sostituisci tutte le occorrenze della parola da censurare con ***
        $testoCensurato = str_replace($parolaCensurare, '****', $testo);

        // Stampa il paragrafo censurato e la sua lunghezza
        echo "testo censurato: <br>";
        echo $testoCensurato . "<br>";
        echo "Lunghezza del testo censurato: " . strlen($testoCensurato) . " caratteri<br>";
    }
    ?>
</body>
</html>
