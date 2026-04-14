<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <a href = "index.php"><button>Main</button></a>
    <!-- napisz sktypt w ktyórym pobieramy od użytkownika 2 liczbę człkowitę dodajemy je i wyświetlamy wynik-->
     <form action="p7.php" method="POST">
        <p> liczba X<input type = "number" name="x"/></p>
        <p> liczba Y<input type = "number" name="y"/></p>
        <input type = "submit" name = "dodaj" value = "Dodaj"/>
        <input type = "submit" name = "odejmi" value = "Odejmi"/>
        <input type = "submit" name = "mnozenie" value = "Mnożenie"/>
        <input type = "submit" name = "dzielenie" value = "Dzielenie"/>
        <input type = "submit" name = "potegowanie" value = "Potęgowanie"/>
        <input type = "submit" name = "nwd" value = "NWD"/>
     </form>
     <?php
        if(isset($_POST["dodaj"]))
        {
            $x = intval($_POST["x"]);
            $y = intval($_POST["y"]);
            $Wynik = $x + $y;
            echo
            "<p>"."Wynik: ".$Wynik."</p>";
        }
        
       else if(isset($_POST["odejmi"]))
        {
            $x = intval($_POST["x"]);
            $y = intval($_POST["y"]);
            $Wynik = $x - $y;
            echo
            "<p>"."Wynik: ".$Wynik."</p>";
        }
        
       else if(isset($_POST["mnozenie"]))
        {
            $x = intval($_POST["x"]);
            $y = intval($_POST["y"]);
            $Wynik = $x * $y;
            echo
            "<p>"."Wynik: ".$Wynik."</p>";
        }

        
       else if(isset($_POST["dzielenie"]))
        {
            $x = intval($_POST["x"]);
            $y = intval($_POST["y"]);
            if($y != 0)
            {
                $Wynik = $x / $y;
            }
            else
            {
                echo
                "<p> Nie można dzielić na 0!</p>";
            }
            echo
            "<p>"."Wynik: ".$Wynik."</p>";
        }

       else if(isset($_POST["potegowanie"]))
        {
            $x = intval($_POST["x"]);
            $y = intval($_POST["y"]);
            $Wynik = pow($x,$y);
            echo
            "<p>"."Wynik: ".$Wynik."</p>";
        }

        else if(isset($_POST["nwd"]))
        {
            $x = intval($_POST["x"]);
            $y = intval($_POST["y"]);
            $Wynik = nwd($x,$y);
            echo
            "<p>"."Wynik: ".$Wynik."</p>";
        }

        function nwd($x , $y)
        {
            while($x != $y)
            {
                if($x < $y)
                    {
                        $y = $y - $x;
                    }
                else if ($y < $x)
                    {
                        $x = $x - $y;
                    };
            };
            return $x;
        }
     ?>
</body>
</html>