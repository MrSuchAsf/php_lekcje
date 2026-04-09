<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    
    <a href = "index.php"><button>Main</button></a>
    <p>Strona ta przezentuje sposób przysiłania dannych z formularza na serwer 
        DAne przesłane na serwer są przechwytywane przez skrypt PHP umieszczony w tym samym pliku
        Ten Przykład wykorzystuje metod POST do przesułania dannych z formularza
        Metoda ta powoduje że przesyłane dane NIEEE są widoczne w adresie stronie
    </p>
    <form action="p5_formularz.php" method = "POST">
        <p>Imie: <input type= "text" name = "imie"/> </p>
        <p>Wiek: <input type= "number" name = "wiek"/> </p>
        <input type="submit" name="dane" value = "Wyslij">
    </form>

    <?php
        if(isset($_POST["dane"]))
            {
                $imie = $_POST["imie"];
                $wiek = $_POST["wiek"];
                echo
                "<h1> Witaj $imie<h1>".
                "<h1> Masz $wiek lat";
            };
    ?>
</body>
</html>