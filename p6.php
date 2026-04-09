<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napisz skrypt w którym na stronie wyświetlą się liczby po przecinku
 w zakresie podamyn przez użytkownika  poprzez formularz-->

 <form action="p6.php" method="POST">
    <p><input type="number" name = "liczby"/></p>
    <p><input type="number" name = "liczby1"/></p>
    <input type="submit" name="dane" value = "Wyslij">
 </form>

 <?php
  if(isset($_POST["dane"]))
        {
        $liczby = $_POST["liczby"];
        $liczby1 = $_POST["liczby1"];
        for($i = $liczby; $i <= $liczby1; $i++)
            {
            echo "$i ," ; 
            };
        };
 ?>
</body>
</html>