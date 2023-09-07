

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
    <div class="container text-center m-3 d-flex justify-content-center">
        <div class="p-3 justify-content-center">
            <form action="process.php" method="post">
                <label class="d-flex pb-3" for="testo">Inserisci il testo:</label>
                <textarea id="testo" name="testo" rows="6" cols="50"></textarea><br><br>

                <label class="d-flex pb-3" for="parolaDaCensurare">Parola da censurare:</label>
                <input class="d-flex" type="text" id="parolaDaCensurare" name="parolaDaCensurare"><br><br>

                <input class="btn btn-primary m-0 ps-4 pe-4 text-center text-white d-flex" type="submit" value="Invia">
            </form>
        </div>
    </div>
</body>

</html>