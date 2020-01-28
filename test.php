<?php

require_once 'index.php';

$ops = array("+", "-", "*", "/");

$examples = [];

for ($i = 0; $i < $qty; $i++) {

    $a = random_int(-100, 100) ;
    $b = random_int(-100, 100) ;
    $c = null;
    $rand_op_key = array_rand($ops);
    $rand_op = $ops[$rand_op_key];

    if ($rand_op === '+') {
        $c = $a + $b;
    };
    if ($rand_op === '-') {
        $c = $a - $b;
    };
    if ($rand_op === '*') {
        $c = $a * $b;
    };
    if ($rand_op === '/') {
        $c = $a / $b;
    };

    if ($c === null) {
        echo 'Invalid operator';
        exit;
    }
    $examples[] = $a . ' ' . $rand_op . ' ' . $b . ' = ' .  $c;

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Примеры</title>
</head>
<body>
<form action="test.php">
    <p><b>Генерация случайных примеров</b></p>
    <div> <?php

        for ($x = 0; $x < count($examples); $x++) {
            echo '<p>' . $examples[$x] . '</p>';
        }
        // Альтернативное решение
        //foreach ($examples as $value) {
          //  echo '<p>' . $value . '</p>';
            //}

        ?> </div>
        <button type = "submit">
            <b>Generate</b>
        </button>
</body>
</html>