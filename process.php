

<!DOCTYPE html>
<html>
<head>
    <title>PHP Badwords - Risultato</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ottieni il paragrafo e la parola da censurare dal modulo
        $paragrafo = $_POST["paragrafo"];
        $parolaCensurare = $_POST["parola_censurare"];

        // Stampa il paragrafo e la sua lunghezza
        echo "Paragrafo originale: <br>";
        echo $paragrafo . "<br>";
        echo "Lunghezza del paragrafo: " . strlen($paragrafo) . " caratteri<br><br>";

        // Sostituisci tutte le occorrenze della parola da censurare con ***
        $paragrafoCensurato = str_replace($parolaCensurare, '****', $paragrafo);

        // Stampa il paragrafo censurato e la sua lunghezza
        echo "Paragrafo censurato: <br>";
        echo $paragrafoCensurato . "<br>";
        echo "Lunghezza del paragrafo censurato: " . strlen($paragrafoCensurato) . " caratteri<br>";
    }
    ?>
</body>
</html>
