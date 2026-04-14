<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <a href = "index.php"><button>Main</button></a>
    <form action="p8.php" method = "POST">
        <p>Liczba<input type="number" name = "liczba"/></p>
        <input type="submit" name = "wynik" value = "Sprawdź">
    </form>

    <?php
    if(isset($_POST["wynik"]))
    {
        $liczba = $_POST["liczba"];
    
        if(pierw($liczba) == true)
        {
            echo"<p>To jest liczba pierwsza</p>";
        }
        else
        {
            echo"<p>To nie jest liczba pierwsza</p>";
        }
    }
    function pierw($a)
    {
            if($a < 2)
            {
                return false;
            }
            for($i = 2; $i < $a; $i++)
            {
                
                if($a % $i == 0)
                {
                    return false;
                }
            }
        return true;
    } 
    ?>

   
</body>
</html>