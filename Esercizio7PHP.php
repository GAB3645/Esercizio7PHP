<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $x = 10;
        $y = 10;

        $max = 0;

        if ($x > $y) {
            echo "<h1> maggiore </h1>";
            $max = $x;
        } else if ($x < $y) {
            echo "<h1 >minore </h1>";
            $max = $y;
        } else {
            echo "<h1> uguale </h1>";
            $max = $x;
        }

        if ($max < 10) {
            echo "<p>$max minore di 10</p>";
        } else if ($max >= 10 && $max <= 20) {
            echo "<p>$max compreso tra 10 e 20</p>";
        } else if ($max >= 21 && $max <= 30) {
            echo "<p>$max compreso tra 21 e 30</p>";
        } else {
            echo "<p>$max maggiore di 30</p>";
        }

        

    ?>



</body>
</html>