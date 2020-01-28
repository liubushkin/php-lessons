<?php

//Получение количества генерируемых примеров
$qty = intval($_GET['qty'] ?? 0);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Контрольная по арифметике</title>
</head>
<body>

<form action="test.php" method="get">
    <fieldset>
        <label for="qty">Количество примеров = </label>
        <input type="number" min="0" max="10" id="qty" name="qty" value="<?php echo $qty ?>" required>

        <button type = "submit">
            <b>Generate</b>
        </button>
    </fieldset>

</body>
</html>



