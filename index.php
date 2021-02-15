<?php
    $num1 = mt_rand(1, 1000);
    $num2 = mt_rand(1, 1000);

    $multiply = $num1 * $num2;
    $addition = $num1 + $num2;
    $subtraction = $num1 - $num2;
    $division = $num1 / $num2;

    function table($number){
        for($i=1; $i <= 10; $i++) { 
            echo $i . " * " . $number . " = " . $i*$number . "<br>";
        }
    }

    $array = [3, 5, 8, 12];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AO-B3-W1-L3-Rekenen</title>
</head>
<body>
    <p>
        <?php
            echo $num1 . " * " . $num2 . " = ". $multiply ."<br>";
            echo $num1 . " + " . $num2 . " = ". $addition ."<br>";
            echo $num1 . " - " . $num2 . " = ". $subtraction ."<br>";
            echo $num1 . " / " . $num2 . " = ". $division;
        ?>
    </p>

    <?php
        table(6);

        foreach($array as $value) {
            table($value);
        }
    ?>
    
</body>
</html>