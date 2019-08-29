<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $name = "Ludvig";
        echo "Hello $name";

        $all1 = 12; // integer
        $all2 = (int) "123"; // string
        $all3 = true; //boolean
        $all4 = (int) 220,123; // double
        $all5 = null;

        echo $all1 + $all2 + $all3 + $all4 + $all5;

        ?>
</body>
</html>